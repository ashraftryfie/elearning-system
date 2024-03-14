<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProfileService;

class ProfileController extends BaseController
{
    protected $profileService;

    public function __construct(ProfileService $profileService)
    {
        $this->profileService = $profileService;
    }

    // To Show Profile Information:
    public function showProfileInfo()
    {
        $user = $this->profileService->profileUser();
        if ($user) {
            return $this->sendResponse($user);
        } else {
            return $this->sendError("Something goes wrong!!");
        }
    }
}

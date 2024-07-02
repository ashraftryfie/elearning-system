<?php

namespace App\Services\ChattingWedget;



use App\Models\Live;
use App\Models\User;
use Carbon\Carbon;

class ChattingService
{
    /**
     Service for manage chat operations in the system.
    */

    public function getusers(){
        $users = User::get();
        foreach($users as $user){

            $user['specializations'] = $user->specializations;

        }
        return $users;
    }

}

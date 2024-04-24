<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Search extends Model
{
    protected $fillable =[
        'query',
        'filter',
    ];


    use HasFactory;
}

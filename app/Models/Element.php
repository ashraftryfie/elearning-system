<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Element extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'path',
        'country_id',

    ];

    public function country():  BelongsTo
    {
        return $this->belongsTo(Country::class);
    }
}

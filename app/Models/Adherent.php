<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Adherent extends Model
{
    protected $fillable = [
        'firstname',
        'name',
        'email',
        'phone_number'

    ];
}

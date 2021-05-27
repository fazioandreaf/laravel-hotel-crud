<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employees extends Model
{
    public $table='employees';
    protected $fillable = [
        'firstname',
        'lastname',
        'role',
        'ral',
    ];

}

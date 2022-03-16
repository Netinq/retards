<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Retard extends Model
{
    protected $fillable = [
        'name',
        'counter',
    ];

    public $timestamps = false;
}

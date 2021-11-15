<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $fillable = [
            'player_Id',
            'name',
            'email',
            'phone',
            'gender',
    ];

    protected $primaryKey = 'player_Id';

    protected $table = 'players';
}


<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = ['player_name', 'team', 'rank_player', 'position', 'age'];
}

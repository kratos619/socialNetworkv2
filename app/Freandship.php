<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Freandship extends Model
{
    protected $fillable = ['requester','user_requested'];
}

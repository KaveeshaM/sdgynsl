<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Replies extends Model
{
    protected $fillable = ['message', 'email', 'reply'];
}

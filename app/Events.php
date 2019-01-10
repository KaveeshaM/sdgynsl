<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    protected $fillable = [
        'title', 'date', 'time','venue','description','register','files','likes','going'
    ];
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function likes(){
        return $this->belongsTo('App\Like');
    }

}

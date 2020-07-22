<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    //$entry->user->name
    // Entry N -  1 User 
	// Eacge loadin
    public function user(){
    	return $this->belongsTo(User::class);
    }
}

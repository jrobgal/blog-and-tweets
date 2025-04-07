<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    //$entry->user
	//Entry n - 1 User
	//Eager loading
	public function user()
	{
		return $this->belongsTo(User::class);
	}
}

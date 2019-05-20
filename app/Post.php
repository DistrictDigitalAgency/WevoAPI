<?php

namespace wevo;

use wevo\User;
use Illuminate\Database\Eloquent\Concerns\belongsTo;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   public function user(){
   		return $this->belongsTo(User::class);
   }
}

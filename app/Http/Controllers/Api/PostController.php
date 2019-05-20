<?php

namespace wevo\Http\Controllers\Api;

use wevo\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
 public function postCreatePost (Request $request)

 	{

 		   $this->validate($request,[
 		   	'body' => 'required',

 		   ]);


 		 $post = new Post();
 		 $post->body = $request['body'] ; 
 		 $request->user()->posts()->save($post);






 	}

 }
  

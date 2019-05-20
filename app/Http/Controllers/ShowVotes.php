<?php

namespace wevo\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use wevo\Vote;

class ShowVotes extends Controller
{
     public function extractVotes()
     {
 		$vote['vote'] = DB ::table('votes')->get();

 			if(count($vote)>0)
 			{
 				return view('testest',$vote);
 			}

           else 
           {
           		return view('testest');

           }
     }
}

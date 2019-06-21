<?php

namespace wevo\Http\Controllers;

use Illuminate\Http\Request;
use wevo\Vote;

class PostVoteController extends Controller
{
     public function insertVotes(Request $request )
    {
        
        $votes = new Vote ;
                    $votes->questionid= $request->questionid ;
                    $votes->userid= $request->userid ;

                    $votes->reponse = $request->reponse ; 
                    $votes->save();

        return response()->json($votes, 200); 



        
    }
}

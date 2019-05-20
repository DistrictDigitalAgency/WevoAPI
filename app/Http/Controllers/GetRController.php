<?php

namespace wevo\Http\Controllers;

use Illuminate\Http\Request;
use wevo\Question;
use wevo\Vote;
use Illuminate\Support\Facades\DB;

class GetRController extends Controller
{
      public function getResults(Request $request)
    {
        
    $results=DB::select(
           'SELECT questions.id,questions.questions,questions.votesPour,questions.votesContre,questions.votesAbs,questions.total
            FROM questions
            WHERE (questions.status=1)
            
          
            ORDER BY questions.id DESC
            limit 10 '

            );



    return response()->json($results, 200); 

		
		   	
    }

}

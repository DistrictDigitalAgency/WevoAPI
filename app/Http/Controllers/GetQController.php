<?php

namespace wevo\Http\Controllers;

use Illuminate\Http\Request;
use wevo\Question;
use wevo\Vote;
use Illuminate\Support\Facades\DB;


class GetQController extends Controller
{
      public function getQuestions(Request $request)
    {
        
    $questions=DB::select(
           'SELECT questions.id,questions.questions
            FROM questions
            WHERE questions.id NOT IN (
                SELECT question_id
                FROM votes
                WHERE user_id=?)
            
            AND (questions.categories=?)
            ORDER BY questions.id DESC '
            , [$request->userID, $request->category]);



    return response()->json($questions, 200); 

		
		   	
    }



}

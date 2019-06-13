<?php

namespace wevo\Http\Controllers;

use Illuminate\Http\Request;
use wevo\Question;
use wevo\Vote;
use Illuminate\Support\Facades\DB;


class GetQController extends Controller
{
      public function getQuestionsByCat(Request $request)
    {
        
    $questions=DB::select(
           'SELECT questions.id,questions.questions
            FROM questions
            WHERE questions.id NOT IN (
                SELECT question_id
                FROM votes
                WHERE user_id=?)
            
            AND (questions.categories=?)
            ORDER BY questions.id ASC '
            , [$request->userID, $request->category]);



    return response()->json($questions, 200); 

		
		   	
    }
        public function getQuestionsPolitics(Request $request)
    {
        
    $questions=DB::select(
           'SELECT questions.id,questions.questions
            FROM questions
            WHERE questions.id NOT IN (
                SELECT question_id
                FROM votes
                WHERE user_id=?)
            
            AND (questions.categories="politique")
            ORDER BY questions.id ASC '
            , [$request->userID]);



    return response()->json($questions, 200); 

        
            
    }
         public function getQuestionsSport(Request $request)
    {
        
    $questions=DB::select(
           'SELECT questions.id,questions.questions
            FROM questions
            WHERE questions.id NOT IN (
                SELECT question_id
                FROM votes
                WHERE user_id=?)
            
            AND (questions.categories="sport")
            ORDER BY questions.id ASC '
            , [$request->userID]);



    return response()->json($questions, 200); 

        
            
    }
         public function getQuestionsFashion(Request $request)
    {
        
    $questions=DB::select(
            'SELECT questions.id,questions.questions
            FROM questions
            WHERE questions.id NOT IN (
                SELECT question_id
                FROM votes
                WHERE user_id=?)
            
            AND (questions.categories="fashion")
            ORDER BY questions.id ASC '
            , [$request->userID]);
        return response()->json($questions, 200); 

        }



          public function getQuestionsActu(Request $request)
    {
        
    $questions=DB::select(
           'SELECT questions.id,questions.questions
            FROM questions
            WHERE questions.id NOT IN (
                SELECT question_id
                FROM votes
                WHERE user_id=?)
            
            AND (questions.categories="actualites")
            ORDER BY questions.id ASC '
            , [$request->userID]);



    return response()->json($questions, 200); 

        
            
    }

          public function getQuestionsMedia(Request $request)
    {
        
    $questions=DB::select(
           'SELECT questions.id,questions.questions
            FROM questions
            WHERE questions.id NOT IN (
                SELECT question_id
                FROM votes
                WHERE user_id=?)
            
            AND (questions.categories="media")
            ORDER BY questions.id ASC '
            , [$request->userID]);



    return response()->json($questions, 200); 

        
            
    }
           public function getQuestionsCulture(Request $request)
    {
        
    $questions=DB::select(
           'SELECT questions.id,questions.questions
            FROM questions
            WHERE questions.id NOT IN (
                SELECT question_id
                FROM votes
                WHERE user_id=?)
            
            AND (questions.categories="culture")
            ORDER BY questions.id ASC '
            , [$request->userID]);



    return response()->json($questions, 200); 

        
            
    }


        public function getQuestions(Request $request)
    {
        
    $questions=DB::select(
           'SELECT questions.id,questions.questions
            FROM questions
            WHERE questions.id NOT IN (
                SELECT question_id
                FROM votes
                WHERE user_id=?)
            
          
            ORDER BY questions.id ASC '
            , [$request->userID]);



    return response()->json($questions, 200); 

        
            
    }



}

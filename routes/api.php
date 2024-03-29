<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('register', 'Api\Auth\RegisterController@register');
Route::post('login', 'Api\Auth\LoginController@login');
Route::post('refresh', 'Api\Auth\LoginController@refresh');

Route::middleware('auth:api')->group(function () {
 Route::post('logout', 'Api\Auth\LoginController@logout'); 
 Route::post('postCreatePost', 'Api\PostController@postCreatePost'); 
});
Route::get("/getQuestionsByCategory","GetQController@getQuestionsByCat");
Route::get("/getPoliticsQuestions","GetQController@getQuestionsPolitics");
Route::get("/getSportQuestions","GetQController@getQuestionsSport");
Route::get("/getFashionQuestions","GetQController@getQuestionsFashion");
Route::get("/getActuQuestions","GetQController@getQuestionsActu");
Route::get("/getMediaQuestions","GetQController@getQuestionsMedia");
Route::get("/getCultureQuestions","GetQController@getQuestionsCulture");

Route::get("/getQuestionsKahaw","GetQController@getQuestions");
Route::get("/getLastResults","GetRController@getResults");
Route::post("/insertVote","PostVoteController@insertVotes");

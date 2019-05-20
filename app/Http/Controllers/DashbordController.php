<?php

namespace wevo\Http\Controllers;

use Carbon\all;
use Illuminate\Http\Request;
use Khill\Lavacharts\Lavacharts;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

use wevo\Admin;
use wevo\Question;




class DashbordController extends Controller
{
  private $admins;
   public function login(Request $request){

      
       $email= $request->email ; 
       $password= $request->password ; 
       if ($admins= Admin::where('email', '=' ,$email)->first() and $admins= Admin::where('password', '=' ,$password)->first() ) 
       {
        return redirect('/home') ; 
       }
       return Redirect::to('login') ; 
        }
      
     public function home(){
    	$questions = Question::all();

    	return view ('home',['questions' => $questions]);


    }

   public function chart($id) {
           // Donut Chart


                    $lava = new Lavacharts;
                    $votes = \Lava::DataTable();
                    $questions =  Question::find($id) ;


                   $votes->addStringColumn('Reasons')
                           ->addNumberColumn('Percent')
                            ->addRow(['Votes pour', $questions->votesPour])
                           ->addRow(['Votes contre', $questions->votesContre])
                           ->addRow(['Abstention', $questions->votesAbs]);

                     $donutchart = \Lava::DonutChart('nosVotes', $votes, [
                                                     'title' => $questions->questions,
                                                    'width'=> 1000       ]);


                   return view('details');

                             }



    public function insert(Request $request){


        $this->validate($request, [
            'questions' => 'required', 
            'date' => 'required'

            ]);

    	
    			$questions = new Question ;
    				$questions->questions= $request->questions ;
    				$questions->categories = implode(" , ", $request->categories);
    				$questions->date_fin = $request->date ; 
                    //$articles->total = somme votesPour votesContre votesAbs


    				$questions->save();
    				return redirect('/')->with('info', 'Question Saved Successfully') ;
    	
    		}

    public function update($id){

    		$questions = Question::find($id);
    	return view ('update',['questions' => $questions]);



   		 }

    public function edit(Request $request, $id){
    		$questions = Question::find($id) ;
    	
    		$questions->questions= $request->questions ;
    		$questions->categories = implode(" , ", $request->categories);
    		$questions->date_fin = $request->date ;
    		$questions->save();


    	return redirect('/')->with('info', 'Question Updated Successfully') ;


    }

   public function delete($id){
   	
   			Question::where('id',$id)->delete();
   			return redirect ('/') ;
   	  }
}

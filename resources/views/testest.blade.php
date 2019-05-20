
@include('header-test')


<div class="row">
	 <div class="col-md-12">
	 	  <br />
          <h3 align="center"> Votes </h3>
	 	  <br />
	 <table class="table table-bordered">
	    <tr> 
	    	<th>User ID</th>
	        <th>Question ID</th>
	        <th>Vote</th>
	       	    </tr>
	    @foreach($vote as $value)
	    <tr>
	       <td>{{$value->user_id}}</td>
	       <td>{{$value->question_id}}</td>
	       <td>{{$value->reponse}}</td>
	    </tr>
	    @endforeach

	 </table>
    </div>
</div>    



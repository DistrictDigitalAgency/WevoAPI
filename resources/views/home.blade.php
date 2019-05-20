@include('header')

	<div class="container">
		
		<div class="row">
			@if(session('info'))
			<div class="alert alert-success">
				{{session('info')}}
			</div>
			@endif


			<table class="table table-hover">
			  <thead>
			    <tr>
			      <th scope="col">ID</th>
			      <th scope="col">Questions</th>
			      <th scope="col">Catégories</th>
			      <th scope="col">Date de fin</th>
			      <th scope="col">Pour</th>
			      <th scope="col">Contre</th>
			      <th scope="col">Abstention</th>
			      <th scope="col">Total</th>

			    </tr>
			  </thead>
			  <tbody>
			  	@if(count($questions) >0)
			  		@foreach($questions->all() as $question)

					    <tr class="table-active">
					      <td>{{$question->id}}</td>
					      <td>{{$question->questions}}</td>
					      <td>{{$question->categories}}</td>
						  <td>{{$question->date_fin}}</td>
						  <td>{{$question->votesPour}}</td>
						  <td>{{$question->votesContre}}</td>
						  <td>{{$question->votesAbs}}</td>
						  <td>{{$question->total}}</td>


					      <td>
					      	<a href='{{ url("/update/{$question->id}") }}' class="btn btn-success">Update </a>
					      	<a href='{{ url("/delete/{$question->id}")}}' class="btn btn-danger">Delete </a>
					      	<a href='{{ url("/details/{$question->id}")}}' class="btn btn-info ">Détails </a>


					      </td>

					    </tr>
					 @endforeach
				@endif
			  </tbody>
			</table>
			
					

			
		</div>



	</div>



@include('footer')

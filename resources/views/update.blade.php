@include('header')

	<div class="container" >
		<div class="row">
			<div class ="col-md-6">
				<form class="form-horizontal" method="POST" action="{{ url('/edit' , array($questions->id)) }}">
          {{csrf_field()}} 
  <fieldset>
    <legend>Legend</legend>
    @if(count($errors) > 0)
        @foreach($errors->all() as $error)
            <div class ="alert alert-danger">
                {{$error}}
            </div>
        @endforeach
    

    @endif
    
    <div class="form-group">
      <label for="exampleInputEmail1">Questions</label>
      <input type="text" name="questions" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="questions" 
      value="<?php echo $questions->questions ; ?>" >
      
    </div>
    
    
    <fieldset class="form-group">
      <legend>Gatégorie</legend>
      <div class="form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" name="categories[]" value="sport" id="sport" checked=""
           >
          Sport
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" name="categories[]" value="media" id="media" 
           >
          Media
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" value="culture" id="culture" name="categories[]" 
          >
          Culture
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" value="politique" id="politique" name="categories[]" 
          >
          Politique
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" value="fashion" id="fashion" name="categories[]" 
          >
          Fashion
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" value="actualites" id="actualites" name="categories[]" >
          Actualités
        </label>
      </div>
      <div>
        <form>
          Date Fin : <input type="Date" name="date" value="<?php echo $questions->date_fin ; ?>">

        </form>

      </div>
    </fieldset>
    
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{ url('/')}}" class="btn btn-primary">Back</a>
  </fieldset>
</form>
  
			</div>
		</div>
	</div>

@include('footer')
<!DOCTYPE html>
<html>
<head>
	<title>WeVo Dashboard</title>
	<link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ url('css/style.css')}}">
	<script type="text/javascript" src = "{{ url('js/jquery-3.3.1') }}"></script>
	<script type="text/javascript" src = "{{ url('js/bootstrap.js') }}"></script>


</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">WEVO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/')}}">Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/add')}}">Add</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
        <button type="button" class="btn btn-primary">Sign Up</button>
    </form>
  </div>
</nav>
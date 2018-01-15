@extends('layouts.index')
@section('content')
<div class="error-page text-center">
	<h2 class="headline text-info"> 404</h2>
	<div class="error-content">
		<h3><i class="fa fa-warning text-danger"></i> Oops! Page not found.</h3>
		<p> <i class="fa fa-home fa-2x text-info"></i> <a href="{{url('/')}}">return to Home</a> 
		</p>
	</div>
</div>
@endsection
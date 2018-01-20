@extends('layouts.index')
@section('title', 'SellerPier Email Form')
@section('content')
<form action="{{url('/show_email') }}" method="POST" class="form-horizontal" role="form">
	{{ csrf_field() }}
	<div class="form-group text-center">
		<legend>Enter List Of Email Address:</legend>
	</div>
	<div class="form-group">
		<div class="col-sm-10">
			<textarea name="emailAddress" id="textareaEmailAddress" class="form-control" rows="3" required="required" style="width: 80%; margin-left: 20%"></textarea>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-10 col-sm-offset-2">
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>
	</div>
</form>
@endsection
{{-- @extends('layouts.index')
@section('title', $product->title)
@section('content')
<h3 class="col-md-12"> Add New Project In PierCodes </h3>
<form accept-charset="UTF-8" class="edit_project form-horizontal col-md-6 col-md-offset-3"  enctype="multipart/form-data">
	{{ csrf_field() }}
	{{method_field("PATCH")}}
	<div class="row">
		<div class="form-group text-center col-md-8 col-md-offset-1">
			<label for="title" class="text-center">Title</label>
			<br>
			<input  name="title" type="text" id="title" class="col-md-6" required="required" value="{{ $product->title }}" >
		</div>
		<div class=" text-center col-md-3 ">
			<label for="url">Url Project Online</label>
			<input type="url" name="url" id="url" required="required" value="{{ $product->url}}">
		</div>
		<div class="form-group text-center col-md-4 ">
			<label for="rate">Rate</label>
			<select id="rate" name="rate">
				<option selected="selected" value="{{ $product->rate }}">{{ $product->rate }}</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select>
		</div>
	</div>
	<div class="row">
		<div class="form-group text-center col-md-6 col-md-offset-1">
			<label for="description">Description</label>
			<textarea name="description" id="description" class="form-control col-xs-4 col-sm-4 col-md-4 col-lg-4" rows="1" required="required">{{ $product->description }}</textarea>
		</div>
		<div class="form-group text-center col-md-6 col-md-offset-1">
			<label for="category">CategoryProducts</label>
			<select name="category_id" id="category_id" required="required">
				<option selected="selected" value="{{ $product->category->id }}">{{ $product->category->name }}
				</option>
				@foreach($categories as $category)
				@if($product->category->id !== $category->id )
				<option value="{{$category->id}}">{{$category->name}}</option>
				@endif
				@endforeach
			</select>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<img src="{{ asset('app-images/'.$product->image->avater)}}" id="avater-preview" width="200px" height="50px" alt="avater-preview" />
		</div>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<label for="avater">Avater</label>
			<input required="required" name="avater" type="file" id="avater" onchange="readUrlAvater(this);">
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<img src="{{ asset('app-images/'.$product->image->background)}}" id="background-preview" width="200px" height="50px" alt="background-preview" />
		</div>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<label for="background">Background</label>
			<input required="required" name="background" type="file" id="background" onchange="readUrlBackgournd(this);">
		</div>
	</div>
	<br>

	<div class="row">
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<img src="{{ asset('app-images/'.$product->image->logo)}}" id="logo-preview" width="200px" height="50px" alt="logo-preview" />
		</div>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<label for="logo">Logo</label>
			<input required="required" name="logo" type="file" id="logo" onchange="readUrlLogo(this);">
		</div>
	</div>
	<br>

	<div class="row">
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<img src="{{ asset('app-images/'.$product->image->mockup)}}" id="mockup-preview" width="200px" height="50px"  alt="mockup-preview" />
		</div>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<label for="mockup">Mockup</label>
			<input required="required" name="mockup" type="file" id="mockup" onchange="readUrlMockup(this);">
		</div>
	</div>
	<br>

	<div class="row">
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<img src="{{ asset('app-images/'.$product->image->branding)}}" id="branding-preview" width="200px" height="50px" alt="branding-preview" />
		</div>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<label for="branding">Branding</label>
			<input required="required" name="branding" type="file" id="branding" onchange="readUrlBranding(this);">
		</div>
	</div>
	<br>

	<div class="container-fluid">

		<div class="row alert-warning">
			@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div><br />
			@endif
		</div>
	</div>
	<input type="submit" value="Save &amp; Publish Project" class="col-md-8 btn-update">
</form>
<div class="alert  print-error-msg" style="display:none;  color: red;">
	<ul></ul>
</div>
@push('scripts')
<script type="text/javascript">
	$(document).ready(function() {
		$(".btn-update").click(function(e){
			e.preventDefault();
			$.ajax({
				url: "{{ url('/adminpanel/save/{$product->slug}' ) }}",
				type:'POST',
				data: $(".edit_project").serialize(),
				success: function(data) {
					if($.isEmptyObject(data.error)){
						$(".print-error-msg").css('display','none');
					}else{
						printErrorMsg(data.error);
					}
				}
			});
		});
		function printErrorMsg (msg) {
			$(".print-error-msg").find("ul").html('');
			$(".print-error-msg").css('display','block');
			$.each( msg, function( key, value ) {
				$(".print-error-msg").find("ul").append('<li style="list-style-type: none;">'+value+'</li>');
			});
		}
		
		});
		function readUrlAvater(input) {if (input.files && input.files[0]) {var reader = new FileReader();reader.onload = function (e) {$('#avater-preview').attr('src', e.target.result)};reader.readAsDataURL(input.files[0]);}}

		function readUrlBackgournd(input) {if (input.files && input.files[0]) {var reader = new FileReader();reader.onload = function (e) {$('#background-preview').attr('src', e.target.result)};reader.readAsDataURL(input.files[0]);}}

		function readUrlLogo(input) {if (input.files && input.files[0]) {var reader = new FileReader();	reader.onload = function (e) {$('#logo-preview').attr('src', e.target.result)};reader.readAsDataURL(input.files[0]);}}

		function readUrlMockup(input) {if (input.files && input.files[0]) {var reader = new FileReader();reader.onload = function (e) {$('#mockup-preview').attr('src', e.target.result)};reader.readAsDataURL(input.files[0]);}}

		function readUrlBranding(input) {if (input.files && input.files[0]) {var reader = new FileReader();
			reader.onload = function (e) {$('#branding-preview').attr('src', e.target.result)};reader.readAsDataURL(input.files[0]);}}

	</script>
	@endpush
	@endsection

 --}}
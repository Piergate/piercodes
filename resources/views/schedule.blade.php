@extends('layouts.index')
@section('title', 'Schedule a Call')

@section('content')

<div class="headerContentSchedule container">
	<!-- Logo and Navigation Menu Top Panel -->
	@include('navbar')
</div>
<div class="scheduleACall container">
	<!-- Contact and Schedule a Call Structure -->
	<div class="row">
		<!-- Tap Shoulder Information -->
		<div class="col-md-4">
			<div class="tapShoulderParagraph">
				<h1 data-aos="fade-right" data-aos-duration="500">Tap our Shoulder.</h1>
				<span data-aos="fade-right" data-aos-duration="900"><i class="fa fa-phone"></i>01024098886 - 02-261936922</span>
				<span data-aos="fade-right" data-aos-duration="900"><i class="fa fa-envelope"></i>info@piercodes.com</span>
				<div data-aos="fade-right" data-aos-duration="1300" class="socialIcons">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
				</div>
			</div>
			<br>
			<div class="alert  print-error-msgSC" style="display:none;  color: red;">
				<ul ></ul>
			</div>
		</div>
		<!-- Schedule A Call Main Form Structure -->
		<div class="col-md-8">
			<div class="scheduleForm">
				
				<h3 data-aos="fade-right" data-aos-duration="900">Fill out the form below or <button class="scheduleLink">schedule a call.</button></h3>
				<span class="firstUnderline">ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ</span>
				<span class="secondUnderline">ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ</span>    
				<form data-aos="fade-right" data-aos-duration="2000" name="schedule">
					{{csrf_field() }}
					<input type="text" name="scfullname" placeholder="NAME *"   required="required" />
					<input type="text" name="sccompanyname" placeholder="COMPANY *"   required="required" />
					<input type="email" name="scemail" placeholder="EMAIL *"   required="required" />
					<input type="text" name="scphonenumber" placeholder="PHONE *"   required="required" />
					<textarea name="scprojectdetalis" placeholder="PROJECT DETAILS *" required="required"  ></textarea>
					<button type="submit"  class="btn-schedule pull-right">SUBMIT</button>
				</form>
			</div>

		</div>
	</div>
</div>
<section class="popUpSchedule container">
	<div class="exitButton pull-right">
		<a href="exit"><span class="exitIcon">X</span></a>
	</div>
	<div class="row">
		<div class="scheduleHeading">
			<h1>Schedule a Call</h1>
			<span class="firstUnderline">ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ</span>
			<span class="secondUnderline">ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ</span>            
			<div class="alert  print-error-msgCA" style="display:none;  color: red;">
				<ul ></ul>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="reservationForm col-md-8 col-md-offset-2">

			<form data-aos="fade-right" data-aos-duration="2000">
				{{csrf_field() }}
				<input type="text" name="cafullname" placeholder="NAME *" required="required" />
				<input type="text" name="caphonenumber" placeholder="PHONE *" required="required" />
				<input type="text" name="caday" class="datepicker" placeholder="MEETING DAY *" required="required" />
				<input type="text" name="catime" id="timepicker1" placeholder="MEETING HOUR *" required="required" />
				<button class="btn-calls" type="submit">SEND REQUREST</button>
			</form>
		</div>
	</div>
</section>

@push('scripts')
<script type="text/javascript">
	$(document).ready(function() {
		$(".btn-schedule").click(function(e){
			e.preventDefault();
			var _token = $("input[name='_token']").val();
			var scfullname = $("input[name='scfullname']").val();
			var scemail = $("input[name='scemail']").val();
			var sccompanyname = $("input[name='sccompanyname']").val();
			var scphonenumber = $("input[name='scphonenumber']").val();
			var scprojectdetalis = $("textarea[name='scprojectdetalis']").val();
			$.ajax({
				url: "/send_schedule",
				type:'POST',
				data: {_token:_token,fullname:scfullname,companyname:sccompanyname,email:scemail,phonenumber:scphonenumber,projectdetalis:scprojectdetalis},
				success: function(data) {
					if($.isEmptyObject(data.error)){
						swal(
							'Good job!',
							'Your Message Sent',
							'success'
							)
						$(".print-error-msgSC").css('display','none');
					}else{
						printErrorMsgSC(data.error);
					}
				}
			});
		});
		$(".btn-calls").click(function(e){
			e.preventDefault();
			var _token = $("input[name='_token']").val();
			var cafullname = $("input[name='cafullname']").val();
			var caphonenumber = $("input[name='caphonenumber']").val();
			var caday = $("input[name='caday']").val();
			var catime = $("input[name='catime']").val();
			$.ajax({
				url: "/send_call",
				type:'POST',
				data: {_token:_token,fullname:cafullname,day:caday,phonenumber:caphonenumber,time:catime},
				success: function(data) {
					if($.isEmptyObject(data.error)){
						swal(
							'Good job!',
							'Your Message Sent',
							'success'
							)
						$(".print-error-msgCA").css('display','none');
					}else{
						printErrorMsgCA(data.error);
					}
				}
			});
		});
		function printErrorMsgSC (msg) {
			$(".print-error-msgSC").find("ul").html('');
			$(".print-error-msgSC").css('display','block');
			$.each( msg, function( key, value ) {
				$(".print-error-msgSC").find("ul").append('<li style="list-style-type: none;">'+value+'</li>');
			});
		}
		function printErrorMsgCA (msg) {
			$(".print-error-msgCA").find("ul").html('');
			$(".print-error-msgCA").css('display','block');
			$.each( msg, function( key, value ) {
				$(".print-error-msgCA").find("ul").append('<li style="list-style-type: none;">'+value+'</li>');
			});
		}
	});
</script>
@endpush
@endsection
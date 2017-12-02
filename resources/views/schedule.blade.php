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
		</div>
		<!-- Schedule A Call Main Form Structure -->
		<div class="col-md-8">
			<div class="scheduleForm">
				<h3 data-aos="fade-right" data-aos-duration="900">Fill out the form below or <button class="scheduleLink">schedule a call.</button></h3>
				<span class="firstUnderline">ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ</span>
				<span class="secondUnderline">ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ</span>    
				<form data-aos="fade-right" data-aos-duration="2000">
					<input type="text" name="fullname" placeholder="NAME *" />
					<input type="text" name="companyname" placeholder="COMPANY *" />
					<input type="email" name="emailaddress" placeholder="EMAIL *" />
					<input type="text" name="phonenumber" placeholder="PHONE *" />
					<textarea placeholder="PROJECT DETAILS *"></textarea>
					<button type="submit" class="pull-right">SUBMIT</button>
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
		</div>
	</div>
	<div class="row">
		<div class="reservationForm col-md-8 col-md-offset-2">
			<form>
				<input type="text" name="fullname" placeholder="NAME *" />
				<input type="text" name="phonenumber" placeholder="PHONE *" />
				<input type="text" class="datepicker" placeholder="MEETING DAY *" />
				<input type="text" id="timepicker1" name="time" placeholder="MEETING HOUR *" />
				<button type="submit">SEND REQUREST</button>
			</form>
		</div>
	</div>
</section>
@endsection
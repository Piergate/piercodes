@extends('layouts.index')
@section('title', "$product->title")

@section('content')
<header class="projectHeaderSection" style="  background: linear-gradient(to right, rgba(125, 87, 99, 0.7), rgba(115, 176, 156, 0.8)),
 url('../app-images/{{ $product->image->background }} ')  !important; ">
	<!-- Main Project Header Content Generic Div -->
	<div class="headerContent container">
		<!-- Logo and Navigation Menu Top Panel -->
		
			@include('navbar')
		<!-- Project Header Text Information -->
		<div class="row">
			<!-- Whole Project Header Text Information -->
			<div class="projectDescription">
				<div class="col-md-2"></div>
				<div class="col-md-2">
					<div data-aos="fade-right" data-aos-duration="900" class="projectLogo">

						<img src="{{ asset("app-images/{$product->image->logo}" ) }}" alt="Souq Naql Logo" />
					</div>
				</div>
				<div class="col-md-6">
					<div class="projectHint">
						<h1 data-aos="fade-right" data-aos-duration="1500">{{ $product->title }}</h1>
						<p data-aos="fade-right" data-aos-duration="2100">{{ $product->description }}.</p>
						<a href="{{ $product->url }}" target="_blank" class="headerLink"><i class="fa fa-check"></i>Project Website</a>
					</div>
				</div>
				<div class="col-md-2"></div>
			</div>
		</div>
		<!-- Down Arrows -->
		<div class="row">
			<div data-aos="fade-right" data-aos-duration="3000" class="downArrows">
				<a href="#projectMockup"><i class="fa fa-angle-double-down faa-pulse animated" aria-hidden="true"></i></a>
			</div>
		</div>
	</div>
</header>
<section class="projectMockup" id="projectMockup">
	<div class="container-fluid">
		<!-- Projects Mockup Title -->
		<div class="row">
			<div class="workProjectHeading">
				<h2 class="mainHeading">Project <span>Mockup</span> Details</h2>
				<span class="firstUnderline">ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ</span>
				<span class="secondUnderline">ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ</span>    
			</div>
		</div>
		<!-- Project Main Mockup Picture -->
		<div class="row">
			<div class="mockUpPicture">
				<img data-aos="fade-right" data-aos-duration="900" src="{{ asset("app-images/{$product->image->mockup}" ) }}" alt="{{$product->title }} Mockup" />
			</div>
		</div>

		<!-- Projects Branding Title -->
		<div class="row">
			<div class="workProjectHeading">
				<h2 class="mainHeading">Project <span>Branding</span> Details</h2>
				<span class="firstUnderline">ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ</span>
				<span class="secondUnderline">ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ</span>    
			</div>
		</div>
		<!-- Project Main Mockup Picture -->
		<div class="row">
			<div data-aos="fade-left" data-aos-duration="900" class="mockUpPicture">
				
				<img src="{{ asset("app-images/{$product->image->branding }" ) }}" alt="{{ $product->title }} Branding" />
			</div>
		</div>
	</div>
</section>
@include('getInTouchSection')
@include('footer')
@endsection
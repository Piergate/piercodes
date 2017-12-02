<div class="topPanel row">
	<!-- Logo Block -->
	<div class="logoBlock col-md-4 pull-left">
		<img class="img-responsive" src="{{ asset('images/piercodes_logo.png') }}" alt="Piercodes Logo" />
	</div>
	<!-- Navigation Menu -->
	<div class="navMenuIcon col-md-2 pull-right">
		<a href="#"><span>MENU</span><img src="{{asset('images/menu_icon.png') }}" alt="Navigation Menu" /></a>
	</div>
</div>
<!-- Main Navigation Menu Row -->
<div class="row">
	<div class="mainNavMenu col-md-12">
		<ul>
			<li><a href="{{ url('/home')}}"><i class="fa fa-home"></i>home</a></li>
			<li><a href="{{ url('/home#about') }}"><i class="fa fa-users"></i>about us</a></li>
			<li><a href="{{ url('/home#services')}}"><i class="fa fa-server"></i>services</a></li>
			<li><a href="{{ url('/home#portfolio')}}"><i class="fa fa-area-chart"></i>our work</a></li>
			<li><a href="{{ url('/home#getintouch')}}"><i class="fa fa-feed"></i>subscribe</a></li>
			<li><a href="{{ url('/home#ourclients')}}"><i class="fa fa-user"></i>Our Clients</a></li>
			<li><a href="{{ url('/home#contact')}}"><i class="fa fa-phone"></i>contact us</a></li>
		</ul>
	</div>
</div>
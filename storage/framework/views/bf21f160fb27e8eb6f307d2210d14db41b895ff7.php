<div class="topPanel row">
	<!-- Logo Block -->
	<div class="logoBlock col-md-4 pull-left">
		<a href="<?php echo e(url('/')); ?>" title=" <?php echo e(config('app.name', 'PierCodes')); ?>">
		<img class="img-responsive" src="<?php echo e(asset('images/piercodes_logo.png')); ?>" alt="Piercodes" />
		</a>
	</div>
	<!-- Navigation Menu -->
	<div class="navMenuIcon col-md-2 pull-right">
		<a href="#"><span>MENU</span><img src="<?php echo e(asset('images/menu_icon.png')); ?>" alt="Navigation Menu" /></a>
	</div>
</div>
<!-- Main Navigation Menu Row -->
<div class="row">
	<div class="mainNavMenu col-md-12">
		<ul>
			<?php if( $_SERVER['REQUEST_URI'] == '/home'): ?>
			<li><a href="#"><i class="fa fa-home"></i>home</a></li>
			<li><a href="#about"><i class="fa fa-users"></i>about us</a></li>
			<li><a href="#services"><i class="fa fa-server"></i>services</a></li>
			<li><a href="#portfolio"><i class="fa fa-area-chart"></i>our work</a></li>
			<li><a href="#getintouch"><i class="fa fa-feed"></i>subscribe</a></li>
			<li><a href="#ourclients"><i class="fa fa-user"></i>Our Clients</a></li>
			<li><a href="#contact"><i class="fa fa-phone"></i>contact us</a></li>
			<?php else: ?>
			<li><a href="<?php echo e(url('/home')); ?>"><i class="fa fa-home"></i>home</a></li>
			<li><a href="<?php echo e(url('/home#about')); ?>"><i class="fa fa-users"></i>about us</a></li>
			<li><a href="<?php echo e(url('/home#services')); ?>"><i class="fa fa-server"></i>services</a></li>
			<li><a href="<?php echo e(url('/home#portfolio')); ?>"><i class="fa fa-area-chart"></i>our work</a></li>
			<li><a href="<?php echo e(url('/home#getintouch')); ?>"><i class="fa fa-feed"></i>subscribe</a></li>
			<li><a href="<?php echo e(url('/home#ourclients')); ?>"><i class="fa fa-user"></i>Our Clients</a></li>
			<li><a href="<?php echo e(url('/home#contact')); ?>"><i class="fa fa-phone"></i>contact us</a></li>
			<?php endif; ?>
		</ul>
	</div>
</div>
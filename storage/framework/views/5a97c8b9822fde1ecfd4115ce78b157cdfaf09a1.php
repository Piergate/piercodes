<?php $__env->startSection('content'); ?>
<header class="projectHeaderSection" style="  background: linear-gradient(to right, rgba(125, 87, 99, 0.7), rgba(115, 176, 156, 0.8)), url('../storage/images/<?php echo e($product->image->background); ?> ');">
	<!-- Main Project Header Content Generic Div -->
	<div class="headerContent container">
		<!-- Logo and Navigation Menu Top Panel -->
		
			<?php echo $__env->make('navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<!-- Project Header Text Information -->
		<div class="row">
			<!-- Whole Project Header Text Information -->
			<div class="projectDescription">
				<div class="col-md-2"></div>
				<div class="col-md-2">
					<div data-aos="fade-right" data-aos-duration="900" class="projectLogo">
						<img src="<?php echo e(asset('storage/images/'.$product->image->logo)); ?>" alt="Souq Naql Logo" />
					</div>
				</div>
				<div class="col-md-6">
					<div class="projectHint">
						<h1 data-aos="fade-right" data-aos-duration="1500"><?php echo e($product->title); ?></h1>
						<p data-aos="fade-right" data-aos-duration="2100"><?php echo e($product->description); ?>.</p>
						<a href="<?php echo e($product->url); ?>" target="_blank" class="headerLink"><i class="fa fa-check"></i>Project Website</a>
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
				<img data-aos="fade-right" data-aos-duration="900" src="<?php echo e(asset('storage/images/'.$product->image->mockup)); ?>" alt="<?php echo e($product->title); ?> Mockup" />
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
				<img src="<?php echo e(asset('storage/images/'.$product->image->branding)); ?>" alt="<?php echo e($product->title); ?> Branding" />
			</div>
		</div>
	</div>
</section>
<?php echo $__env->make('getInTouchSection', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
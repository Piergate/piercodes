<?php $__env->startSection('content'); ?>
<h3 class="col-md-8 col-md-offset-4"> Add New Project In PierCodes </h3>
<form method="POST" action="<?php echo e(url('/addproject')); ?>" accept-charset="UTF-8" class="form-horizontal col-md-6 col-md-offset-3"  enctype="multipart/form-data">
	<?php echo e(csrf_field()); ?>

	<div class="row form-inline ">
		<div class="text-center col-md-6">
			<label for="title" class="text-center">Title</label>
			<br>
			<input  name="title" type="text" id="title"  required="required" >
		</div>
		<div class=" text-center col-md-3 ">
			<label for="url">Url Project Online</label>
			<input type="url" name="url" id="url" required="required" title="">
		</div>
		<div class=" text-center col-md-3 ">
			<label for="rate">Rate</label>
			<select id="rate" name="rate">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select>
		</div>
	</div>
	<div class="row">
		<div class="form-group text-center col-md-4 col-md-offset-1">
			<label for="description">Description</label>
			<textarea name="description" id="description" class="form-control col-xs-4 col-sm-4 col-md-4 col-lg-4" rows="1" required="required"></textarea>
		</div>
		<div class="form-group text-center col-md-6 col-md-offset-1">
			<label for="category">CategoryProducts</label>
			<select name="category_id" id="category_id" required="required">
				<?php $__currentLoopData = $categorys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</select>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<img src="" id="avater-preview" width="200px" height="50px" alt="avater-preview" />
		</div>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<label for="avater">Avater</label>
			<input required="required" name="avater" type="file" id="avater" onchange="readUrlAvater(this);">
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<img src="" id="background-preview" width="200px" height="50px" alt="background-preview" />
		</div>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<label for="background">Background</label>
			<input required="required" name="background" type="file" id="background" onchange="readUrlBackgournd(this);">
		</div>
	</div>
	<br>

	<div class="row">
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<img src="" id="logo-preview" width="200px" height="50px" alt="logo-preview" />
		</div>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<label for="logo">Logo</label>
			<input required="required" name="logo" type="file" id="logo" onchange="readUrlLogo(this);">
		</div>
	</div>
	<br>

	<div class="row">
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<img src="" id="mockup-preview" width="200px" height="50px"  alt="mockup-preview" />
		</div>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<label for="mockup">Mockup</label>
			<input required="required" name="mockup" type="file" id="mockup" onchange="readUrlMockup(this);">
		</div>
	</div>
	<br>

	<div class="row">
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<img src="" id="branding-preview" width="200px" height="50px" alt="branding-preview" />
		</div>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<label for="branding">Branding</label>
			<input required="required" name="branding" type="file" id="branding" onchange="readUrlBranding(this);">
		</div>
	</div>
	<br>

	<div class="container-fluid">

		<div class="row alert-warning">
			<?php if($errors->any()): ?>
			<div class="alert alert-danger">
				<ul>
					<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<li><?php echo e($error); ?></li>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</ul>
			</div><br />
			<?php endif; ?>
		</div>
	</div>
	<input type="submit" value="Save &amp; Publish Project" class="col-md-8">
</form>
<?php $__env->startPush('scripts'); ?>
<script type="text/javascript">
	function readUrlAvater(input) {if (input.files && input.files[0]) {var reader = new FileReader();reader.onload = function (e) {$('#avater-preview').attr('src', e.target.result)};reader.readAsDataURL(input.files[0]);}}

	function readUrlBackgournd(input) {if (input.files && input.files[0]) {var reader = new FileReader();reader.onload = function (e) {$('#background-preview').attr('src', e.target.result)};reader.readAsDataURL(input.files[0]);}}

	function readUrlLogo(input) {if (input.files && input.files[0]) {var reader = new FileReader();	reader.onload = function (e) {$('#logo-preview').attr('src', e.target.result)};reader.readAsDataURL(input.files[0]);}}

	function readUrlMockup(input) {if (input.files && input.files[0]) {var reader = new FileReader();reader.onload = function (e) {$('#mockup-preview').attr('src', e.target.result)};reader.readAsDataURL(input.files[0]);}}

	function readUrlBranding(input) {if (input.files && input.files[0]) {var reader = new FileReader();
		reader.onload = function (e) {$('#branding-preview').attr('src', e.target.result)};reader.readAsDataURL(input.files[0]);}}

	</script>
	<?php $__env->stopPush(); ?>
	<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('title', 'PierCodes Admin Panel'); ?>
<?php $__env->startSection('content'); ?>
<nav class="navbar navbar-default navbar-static-top" style="background-color: #c0c8d0">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="<?php echo e(url('/')); ?>" style="padding: 0;">
                <img class="img-responsive" src="<?php echo e(asset('images/piercodes_logo.gif')); ?> " alt="Piercodes Logo" style="height: 40px;" />
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                <?php if(auth()->guard()->guest()): ?>
                <li><a href="<?php echo e(route('login')); ?>">Login</a></li>
                <li><a href="<?php echo e(route('register')); ?>">Register</a></li>
                <?php else: ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                        <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <a href="<?php echo e(route('logout')); ?>"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                            <?php echo e(csrf_field()); ?>

                        </form>
                    </li>
                </ul>
            </li>
            <?php endif; ?>
        </ul>
    </div>
</div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body text-center">
                    <?php if(session('status')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('status')); ?>

                    </div>
                    <?php endif; ?>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <a href="<?php echo e(url('/add')); ?>"><i class="fa fa-pencil-square-o fa-2x"> Add New Project</i></a>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <a id="edit_project" ><i class="fa fa-pencil-square-o fa-2x"> Edit Project</i></a>
                        
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xs-push-4">
                        delete
                    </div>
                </div>
                <!-- Edit Popup Begins -->
                <div class="edit-template">
                    <!-- Edit Title Begins -->
                    <h1>Projects List</h1>
                    <span>ـــــــــــــــــــــــــــــــــــــــ</span>
                    <!-- Edit Title Ends -->

                    <!-- Edit Projects List Begins -->
                    <p>Projects List Goes Here</p>
                    <!-- Edit Projects List Ends -->

                    <!-- Edit Controllers Begin -->
                    
                    <button id="cancelEdit">Cancel</button>
                    <!-- Edit Controllers End -->
                </div>
                <!-- Edit Popup Ends -->
            </div>
        </div>
    </div>
</div>
<?php $__env->startPush('scripts'); ?>
<script>
    $(document).ready(function() {
        $('#edit_project').on('click', function() {
            $('.edit-template').fadeIn(500);
        });
        $('#cancelEdit').on('click', function() {
            $('.edit-template').fadeOut(500);
        });
    });
</script>
<?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
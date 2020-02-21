<?php $__env->startSection('main'); ?>
<!------ Include the above in your HEAD tag ---------->
<!-- Page Header -->
<header class="masthead" style="background-image: url('img/about-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1>Profile saya</h1>
        </div>
    </div>
</div>
</div>
</header>

<?php $__currentLoopData = $ar_profile; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profile): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                
<!-- Main Content --->
<fieldset>
<div class="container">
    <div class="row">
        <div class="col-md-12 mx-auto">
            <div class="card profile-card-1 card-bg">
                    <img src="<?php echo e(asset('/img/profile-bg.jpg')); ?>" alt="profile-sample1" class="background"/>
                    <img src="<?php echo e(asset('/img/avatar/'.$profile->pictures)); ?>" alt="profile-image" class="profile "/>
                    <div class="card-content">
                    <h2 class="card-text"><?php echo e($profile->name); ?><small class="card-text"><?php echo e($profile->roles); ?></small><small class="card-text"><?php echo e($profile->email); ?></small></h2>
                    <div class="icon-block"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a></div>
                    </div>
            </div>
        </div>
    </div>
</div>
    </fieldset>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lavkultum2\resources\views/users/show.blade.php ENDPATH**/ ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('/img/icon.png')); ?>" />
  <!-- Bootstrap core CSS -->
  <link href="<?php echo e(asset('css/clean-blog.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('css/bootstrap.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('css/bootstrap-grid.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet" type="text/css">

  <!-- Custom fonts for this template -->
  <link href="<?php echo e(asset('vendor/fontawesome-free/css/all.css')); ?>" rel="stylesheet" type="text/css">
  <link href='<?php echo e(asset('font/Lora:400,700,400italic,700italic')); ?>' rel='stylesheet' type='text/css'>
  <link href='<?php echo e(asset('font/OpenSans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800')); ?>' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->

  <title>Kultum Santri Tahfidz Enterpreuneur</title>

</head>


<body style="background-color: #73c9ff;">
<!-- Navigation -->
  <?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <!-- Section -->
    <?php echo $__env->yieldContent('main'); ?>
  <!-- End Section -->
  <!-- Footer -->
  <footer>
  <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo e(asset('vendor/jquery/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(asset('vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>

  <!-- Custom scripts for this template -->
  <script src="<?php echo e(asset('js/clean-blog.min.js')); ?>"></script>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\lavkultum2\resources\views/layouts/index.blade.php ENDPATH**/ ?>
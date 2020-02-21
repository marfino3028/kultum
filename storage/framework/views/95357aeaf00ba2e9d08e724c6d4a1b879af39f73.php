<?php $__env->startSection('main'); ?>

<!-- Page Header -->

<!-- Navigation -->
  <?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <header class="masthead" style="background-image: url(<?php echo e(asset('img/home.png')); ?>); background-size: cover;">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Ahlan wa Sahlan</h1>
            <span class="subheading">Selamat datang di website kuliah tujuh menit santri</span>
          </div>
        </div>
      </div>
    </div>
  </header>


  <!-- Main Content -->

  <section class="page-section mb-10" id="about">
    <div class="container jumbotron">
      <!-- About Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-dark">Kultum Terbaru</h2>
      <div class="dropdown-divider">
      </div>
      <!-- About Section Content -->
      <div class="row">
        <?php $__currentLoopData = $ar_kultum; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kultum): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-sm-6 ml-auto text-justify post-preview">
          <a href="<?php echo e(route('kultum.show', $kultum->judul)); ?>">
            <h5 class="post-title">
              <?php echo e($kultum->judul); ?>

            </h5>
            <h6 class="post-subtitle">
              <?php echo e(substr($kultum->isi, 0, 100)); ?>...
              <small>Selengkapnya</small>
            </h6>
          </a>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
      <div class="row more">
        <div class="col-md-auto offset-md-3 mx-auto">
          <a href="<?php echo e(url('/kultum')); ?>" class="btn btn-secondary">Selengkapnya</a>
        </div>
      </div>
    </div>
  </section>

  <hr>

<?php $__env->stopSection(); ?>

  
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lavkultum2\resources\views/layouts/home.blade.php ENDPATH**/ ?>
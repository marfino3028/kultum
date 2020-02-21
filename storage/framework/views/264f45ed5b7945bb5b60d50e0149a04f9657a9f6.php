<?php $__env->startSection('main'); ?>
<?php
$ar_kategori = App\Kategori::all();
$ar_santri = App\Santri::all();
?>
<!-- Page Header -->
  <header class="masthead" style="background-image: url('img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Kultum Santri</h1>
            <span class="subheading">Web yang berisi kumpulan kultum santri</span>
          </div>
        </div>
      </div>
    </div>
  </header>


  <!-- Main Content -->
  <section>
  <div class="container">
    <div class="row jumbotron">
      <div class="col-lg-8 col-md-10 mx-auto">
        <?php $__currentLoopData = $ar_kultum; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kultum): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="post-preview">
          <a href="<?php echo e(route('kultum.show', $kultum->judul)); ?>">
            <h2 class="post-title">
              <?php echo e($kultum->judul); ?>

            </h2>
            <h3 class="post-subtitle">
              <?php echo e(substr($kultum->isi, 0, 100)); ?>...
              <small>Selengkapnya</small>
            </h3>
          </a>
          <p class="post-meta">Dibuat oleh
            <a href="#"><?php echo e($kultum->santri); ?></a>
            pada <?php echo e($kultum->tanggal); ?></p>
        </div>
        <hr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <!-- Pager -->
        <div class="clearfix">
          <?php echo e($ar_kultum->links()); ?>

        </div>
      </div>
      <?php echo $__env->make('kultum.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <hr>

<?php $__env->stopSection(); ?>

  
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lavkultum2\resources\views/kultum/index.blade.php ENDPATH**/ ?>
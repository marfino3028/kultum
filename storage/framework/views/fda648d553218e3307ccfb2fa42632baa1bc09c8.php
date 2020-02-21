<?php $__env->startSection('main'); ?>
<!-- Page Header -->
<?php $__currentLoopData = $ar_kultum; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kultum): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<header class="masthead" style="background-image: url(<?php echo e(asset('img/kultum.jpg')); ?>)">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12 mx-auto">
        <div class="site-heading">

        </div>
      </div>
    </div>
  </div>
</header>
<!-- Post Content -->
<article>
  <div class="container jumbotron">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <h2 class="text-center text-dark"><?php echo e($kultum->judul); ?></h2>
        <div class="line"></div> 
        <p class="text-justify text-big text-dark" id="kultum"><?php echo nl2br(e($kultum->isi)); ?><p>
        </div>
      </div>
      <div class="line"></div>
      <center class="text-dark">
        <?php if(Auth::check()): ?>
        <form action="<?php echo e(route('kultum.destroy', $kultum->id)); ?>" method="POST">
          <a href="<?php echo e(route('kultum.edit', $kultum->id)); ?>" class="btn btn-warning"><i class='fas fa-pen' ></i> Edit</a>&nbsp;
          <?php echo csrf_field(); ?>
          <?php echo method_field('DELETE'); ?>
          <button type="submit" class="btn btn-danger" onclick="return confirm('Apa anda yakin ingin menghapus data?')"><i class="fas fa-eraser"></i> Hapus</button>
        </form>
        <?php endif; ?>
        <span class="meta">Dibuat oleh
          <a href="#"><?php echo e($kultum->santri); ?></a>
          pada <?php echo e($kultum->tanggal); ?></span>
        </center>
      </div>
    </article>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lavkultum2\resources\views/kultum/show.blade.php ENDPATH**/ ?>
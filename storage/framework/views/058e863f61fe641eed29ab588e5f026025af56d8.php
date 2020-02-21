<?php $__env->startSection('main'); ?>
<!------ Include the above in your HEAD tag ---------->
<!-- Page Header -->
<header class="masthead" style="background-image: url(<?php echo e(asset('img/about-bg.jpg')); ?>)">
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

<?php $__currentLoopData = $ar_santri; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $santri): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                
<!-- Main Content --->
<div class="container">
    <div class="card shadow mb-6">
        <div class="card-header py-3">
          <h4 class="m-0 font-weight-bold text-primary text-light text-center"><?php echo e($santri->nama); ?></h4>
      </div>
      <div class="card-body">
      <div class="text-center">
        <?php if(!empty($santri->foto)): ?>
        <img id="poto" class="img-fluid img-thumbnail" src="<?php echo e(asset('img/'.$santri->foto)); ?>">
        <?php else: ?>
        <img id="poto" class="img-fluid img-thumbnail" src="<?php echo e(asset('img/no_foto.png')); ?>">
        <?php endif; ?>
    </div>
    <br>
    <div class="alert alert-dismissable alert-primary">
      Tempat Lahir : <?php echo e($santri->tempat_lahir); ?> <br/>
      Tanggal Lahir : <?php echo e($santri->tanggal_lahir); ?> <br/>
      Asal : <?php echo e($santri->asal); ?> <br/>
      Alamat : <?php echo e($santri->alamat); ?> <br/>
      Tingkatan : <?php echo e($santri->tingkatan); ?> <br/>
      Kelas : <?php echo e($santri->kelas); ?> <br/>
  </div>
  <center>
    <a target="_blank" rel="nofollow" href="<?php echo e(url('/pegawai')); ?>" 
    class="btn btn-primary btn-lg">
Kembali</a>
</center>
</div>
</div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lavkultum2\resources\views/santri/show.blade.php ENDPATH**/ ?>
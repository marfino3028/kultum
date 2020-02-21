<?php $__env->startSection('main'); ?>
<?php
$ar_judul = ['No','Nama','Tingkatan','Kelas','Foto','Aksi'];
$no = 1;
?>
<header class="masthead" style="background-image: url(<?php echo e(asset('img/kultum.jpg')); ?>)">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12 mx-auto">
        <div class="site-heading">
          <h1> Data Santri </h1>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- Post Content -->
<section>
  <div class="container">
    <div class="row jumbotron text-dark">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered text-dark" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <?php $__currentLoopData = $ar_judul; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jdl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <th class="text-center"><?php echo e($jdl); ?></th>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tr>
            </thead>
            <tbody>
              <?php $__currentLoopData = $ar_santri; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $san): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><?php echo e($no++); ?></td>
                <td><?php echo e($san->nama); ?></td>
                <td><?php echo e($san->tingkatan); ?></td>
                <td><?php echo e($san->kelas); ?></td>
                <td class="text-center">
                  <?php if(!empty($san->foto)): ?>
                  <img src="<?php echo e(asset("img/".$san->foto)); ?>" id='poto_t'>
                  <?php else: ?>
                  <i class="fas fa-angry fa-9x"></i>
                  <?php endif; ?>
                </td>
                <td>
                  <form action="<?php echo e(route('santri.destroy', $san->id)); ?>" method="POST">
                    <a href="<?php echo e(route('santri.show', $san->id)); ?>" class="btn btn-info"><i class="fas fa-eye"></i></a>
                    <a href="<?php echo e(route('santri.edit', $san->id)); ?>" class="btn btn-warning"><i class="fas fa-pen"></i></a>
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apa anda yakin ingin menghapus data?')"><i class="fas fa-eraser"></i></button>
                  </form>
                </td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lavkultum2\resources\views/santri/index.blade.php ENDPATH**/ ?>
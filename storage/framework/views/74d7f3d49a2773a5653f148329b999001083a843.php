<div class="col-md-4">
  <div class="list-group">
    <div class="list-group-item bg-info">
      <h4 class="mb-1">Kategori</h4>
    </div>
    <div class="list-group-item">
      <?php $__currentLoopData = $ar_kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="list-group">
        <form method="get" action="<?php echo e(url('filter')); ?>">
             <input type="hidden" name="cat" value="<?php echo e($kategori->id); ?>">
             <button class="list-group-item list-group-item-action bg-dark" type="submit"><?php echo e($kategori->nama); ?></button>
        </form>
          <!-- a href="<?php echo e(url('/filter/'. $kategori->id)); ?>" class="list-group-item list-group-item-action"><?php echo e($kategori->nama); ?></a -->
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>
</div>
</div>
</div>
</section><?php /**PATH C:\xampp\htdocs\lavkultum2\resources\views/kultum/sidebar.blade.php ENDPATH**/ ?>
  <nav class="navbar navbar-expand-lg fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="<?php echo e(url('/')); ?>"><img src="<?php echo e(asset('/img/icon-home.png')); ?>" width="160px" height="50px"></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <form class="form-inline my-2 my-lg-0" method="get" action="<?php echo e(url('search')); ?>">
             <input class="form-control mr-sm-2" type="text" name="q" placeholder="Kata Kunci" aria-label="Search">
             <button class="btn btn-primary my-2 my-sm-0" type="submit">Cari</button>
           </form>
         </li>
         <li class="nav-item">
          <a class="nav-link" href="<?php echo e(url('/kultum')); ?>"><i class="fas fa-home"></i>&nbsp;Kultum</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(url('/about')); ?>"><i class="fas fa-users"></i>&nbsp;Tentang Kami</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(url('/santri')); ?>"><i class="fas fa-address-book"></i>&nbsp;Data Santri</a>
        </li>
        <div class="topbar-divider d-none d-sm-block"></div>
        <?php if(Auth::check()): ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">&nbsp;
            <?php echo e(Auth::user()->name); ?>

          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
            <div class="dropdown-item"> <img class="rounded-circle img-responsive pic" src="<?php echo e(asset('img/avatar/'.Auth::user()->pictures)); ?>" > </div>
            <a class="dropdown-item" href="<?php echo e(route('kultum.create')); ?>"><i class="fas fa-plus-circle"></i>&nbsp;&nbsp;Buat Kultum</a>
            <a class="dropdown-item" href="<?php echo e(url('/profile')); ?>"><i class="fas fa-user-circle"></i>&nbsp;&nbsp;Profile</a>
            <?php if(Auth::user()->roles == 'Administrator'): ?>
            <a class="dropdown-item" href="<?php echo e(url('/users')); ?>"><i class="fas fa-users"></i>&nbsp;Kelola User</a>
            <?php endif; ?>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            <i class="fas fa-sign-out-alt"></i>&nbsp;<?php echo e(__('Logout')); ?>

          </a>
          <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
            <?php echo csrf_field(); ?>
          </form>
        </div>
      </li>
      <?php else: ?>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-users"></i>&nbsp;Akun
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="<?php echo e(route('login')); ?>"><i class="fas fa-sign-in-alt"></i>&nbsp;<?php echo e(__('Login')); ?></a>
          <a class="dropdown-item" href="<?php echo e(route('register')); ?>"><i class="fas fa-edit fa-regular"></i>&nbsp;<?php echo e(__('Register')); ?></a>
        </div>
        <?php endif; ?>
      </li>
    </ul>
  </div>
</div>
</nav><?php /**PATH C:\xampp\htdocs\lavkultum2\resources\views/layouts/navbar.blade.php ENDPATH**/ ?>
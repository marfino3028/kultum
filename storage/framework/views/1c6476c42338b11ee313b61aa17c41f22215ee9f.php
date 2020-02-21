<?php
$year = Carbon\Carbon::now()->format('Y');
?>
    <div class="main-footer widgets-dark typo-light">
      <div class="container">
        <div class="row">

          <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="widget subscribe no-box">
              <h5 class="widget-title"><b>KELOMPOK 2</b><span></span></h5>
              <p>Anggota kelompok 2 adalah orang - orang yang teguh, gigih, dan pekerja keras. Walaupun KESUSAHAN, kami tetap semangat demi mencapai hasil yang maksimal. </p>
            </div>
          </div>

          <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="widget no-box">
              <h5 class="widget-title">Akses Cepat<span></span></h5>
                  <div class="thumb-content"><a href="<?php echo e(url('/about')); ?>" class="btn btn-secondary btn-sm">Tentang Kami</a></div> 
                  <div class="thumb-content"><a href="<?php echo e(url('/kultum')); ?>" class="btn btn-secondary btn-sm">Kultum</a></div> 
            </div>
          </div>

          <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="widget no-box">
              <h5 class="widget-title">Bergabung Bersama Kami<span></span></h5>
              <p>Anda dapat membuat akun dan menyumbangkan materi kultum anda sendiri.</p>
              <a class="btn btn-warning" href="<?php echo e(route('register')); ?>">Register Now</a>
            </div>
          </div>

          <div class="col-xs-12 col-sm-6 col-md-3">

            <div class="widget no-box">
              <h5 class="widget-title">Hubungi Kami<span></span></h5>

              <p><a href="mailto:admin@kultumsantri.id" title="glorythemes">admin@kultumsantri.id</a></p>
                <a class='btn btn-info disabled' title="youtube" target="_blank" href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                <a class='btn btn-info disabled' href="https://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook"></i></a>
                <a class='btn btn-info disabled' href="https://twitter.com" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
                <a class='btn btn-info disabled' title="instagram" target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
              </ul>
            </div>
          </div>

        </div>
      </div>
    <div class="footer-copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <p>Copyright Kelompok 2 © <?php echo e($year); ?>. All rights reserved.</p>
          </div>
        </div>
      </div>
    </div>
    </div>
<?php /**PATH C:\xampp\htdocs\lavkultum2\resources\views/layouts/footer.blade.php ENDPATH**/ ?>
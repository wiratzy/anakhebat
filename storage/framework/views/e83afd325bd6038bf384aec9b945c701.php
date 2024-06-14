


<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>
<div class="bodypanduan">
  <div class="container">
    <div class="card">
      <div class="imgBx">
        <img src="<?php echo e(asset('/img/kbm.jpg')); ?>" alt="Galeri Kegiatan Belajar Mengajar">
      </div>
      <div class="content">
        <div class="contentBx">
          <h3>Galeri Kegiatan<br><span>Belajar Mengajar</span></h3>
        </div>
        <ul class="sci">
          <li style="--i:1"><a href="#"><i class="fab fa-facebook"></i></a></li>
          <li style="--i:2"><a href="#"><i class="fab fa-twitter"></i></a></li>
          <li style="--i:3"><a href="#"><i class="fab fa-instagram"></i></a></li>
        </ul>
      </div>
    </div>

    <div class="card">
      <div class="imgBx">
        <img src="<?php echo e(asset('/img/mitra.jpg')); ?>" alt="Galeri Kegiatan Mitra AHE">
      </div>
      <div class="content">
        <div class="contentBx">
          <h3>Galeri Kegiatan<br><span>Mitra AHE</span></h3>
        </div>
        <ul class="sci">
          <li style="--i:1"><a href="#"><i class="fab fa-facebook"></i></a></li>
          <li style="--i:2"><a href="#"><i class="fab fa-twitter"></i></a></li>
          <li style="--i:3"><a href="#"><i class="fab fa-instagram"></i></a></li>
        </ul>
      </div>
    </div>

    <div class="card">
      <div class="imgBx">
        <img src="<?php echo e(asset('/img/unit.jpg')); ?>" alt="Galeri Kegiatan Unit Ahe">
      </div>
      <div class="content">
        <div class="contentBx">
          <h3>Galeri Kegiatan<br><span>Unit Ahe</span></h3>
        </div>
        <ul class="sci">
          <li style="--i:1"><a href="#"><i class="fab fa-facebook"></i></a></li>
          <li style="--i:2"><a href="#"><i class="fab fa-twitter"></i></a></li>
          <li style="--i:3"><a href="#"><i class="fab fa-instagram"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script>
var scene = document.getElementById('scene');
var parallaxInstance = new Parallax(scene);
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.css_panduan', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\anakhebat\resources\views/home/panduan.blade.php ENDPATH**/ ?>
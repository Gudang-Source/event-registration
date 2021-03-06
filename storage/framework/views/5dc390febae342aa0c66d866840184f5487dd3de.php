<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title><?php echo $__env->yieldContent('title'); ?></title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?php echo e(asset('assets/modules/bootstrap/css/bootstrap.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('assets/modules/fontawesome/css/all.min.css')); ?>">

  <!-- CSS Libraries -->
    <?php echo $__env->yieldContent('css-libraries'); ?>
  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('assets/css/components.css')); ?>">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
        <?php echo $__env->make('includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <div class="main-sidebar sidebar-style-2">
        <?php echo $__env->make('includes.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        
              <?php echo $__env->yieldContent('content'); ?>
          
      </div>
      <?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="<?php echo e(asset('assets/modules/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/modules/popper.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/modules/tooltip.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/modules/bootstrap/js/bootstrap.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/modules/nicescroll/jquery.nicescroll.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/modules/moment.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/stisla.js')); ?>"></script>
  
  <!-- JS Libraies -->
  <?php echo $__env->yieldContent('js-libraries'); ?>
  <!-- Page Specific JS File -->
  <?php echo $__env->yieldContent('page-js'); ?>
  <!-- Template JS File -->
  <script src="<?php echo e(asset('assets/js/scripts.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/custom.js')); ?>"></script>
</body>
</html><?php /**PATH C:\Server\www\himanurafestival\resources\views/layouts/app.blade.php ENDPATH**/ ?>
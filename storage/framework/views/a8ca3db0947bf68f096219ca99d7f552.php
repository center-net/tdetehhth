<!DOCTYPE html>
<!--
   This is a starter template page. Use this page to start your new project from
   scratch. This page gets rid of all links and provides the needed markup only.
   -->
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
      <link rel="icon" href="<?php echo e(asset('/uploads/admin/generalsettings/logo.jpg')); ?>">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title><?php echo $__env->yieldContent('title'); ?></title>
      <!-- Font Awesome Icons -->
      <link rel="stylesheet" href="<?php echo e(asset('assets/admin/plugins/fontawesome-free/css/all.min.css')); ?>">
      <!-- Theme style -->
      <link rel="stylesheet" href="<?php echo e(asset('assets/admin/dist/css/adminlte.min.css')); ?>">
      <!-- Google Font: Source Sans Pro -->
      <link rel="stylesheet" href="<?php echo e(asset('assets/admin/fonts/SansPro/SansPro.min.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('assets/admin/css/bootstrap_rtl-v4.2.1/bootstrap.min.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('assets/admin/css/bootstrap_rtl-v4.2.1/custom_rtl.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('assets/admin/css/mycustomstyle.css')); ?>">
      <?php echo $__env->yieldContent('css'); ?>
      <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>

   </head>
   <body class="hold-transition sidebar-mini">
      
      <div class="wrapper">
         <!-- Navbar -->
         <?php echo $__env->make('admin.includes.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <!-- /.navbar -->
         <!-- Main Sidebar Container -->
         <?php echo $__env->make('admin.includes.general', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <!--  End Main Sidebar Container -->
         <!-- Content Wrapper. Contains page content -->
         <?php echo $__env->make('admin.includes.content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <!-- /.content-wrapper -->
         <?php echo $__env->make('admin.includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <!-- Main Footer -->
      </div>
      <!-- ./wrapper -->
      <!-- REQUIRED SCRIPTS -->
      <!-- jQuery -->
      <script src="<?php echo e(asset('assets/admin/plugins/jquery/jquery.min.js')); ?>"></script>
      <!-- Bootstrap 4 -->
      <script src="<?php echo e(asset('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
      <!-- AdminLTE App -->
      <script src="<?php echo e(asset('assets/admin/dist/js/adminlte.min.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/admin/js/general.js')); ?>"></script>
      <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>

      <?php echo $__env->yieldContent('script'); ?>
   </body>
</html><?php /**PATH E:\laragon\www\tdetehhth\resources\views/layouts/general.blade.php ENDPATH**/ ?>
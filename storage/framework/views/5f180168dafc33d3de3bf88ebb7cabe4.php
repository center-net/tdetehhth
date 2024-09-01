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
         <nav class="navbar navbar-expand navbar-white navbar-light" style="background-color: #c6a6a7;">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
               <li class="nav-item d-none d-sm-inline-block">
                  <a href="<?php echo e(route('admin.index')); ?>" class="nav-link">الرئيسية</a>
               </li>
               <li class="nav-item d-none d-sm-inline-block">
                  <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('admin.auth.logout');

$__html = app('livewire')->mount($__name, $__params, 'lw-1836615691-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
               </li>
            </ul>
            <!-- SEARCH FORM -->
            <form class="form-inline ml-3">
               <div class="input-group input-group-sm">
                  <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                  <div class="input-group-append">
                     <button class="btn btn-navbar" type="submit">
                     <i class="fas fa-search"></i>
                     </button>
                  </div>
               </div>
            </form>
            <!-- Right navbar links -->
            <ul class="navbar-nav mr-auto-navbav">
               <!-- Messages Dropdown Menu -->
               <li class="nav-item dropdown">
                  <a class="nav-link" data-toggle="dropdown" href="#">
                  <i class="far fa-comments"></i>
                  <span class="badge badge-danger navbar-badge">3</span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                     <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                           <img src="<?php echo e(asset('assets/admin/dist/img/user1-128x128.jpg')); ?> " alt="User Avatar" class="img-size-50 mr-3 img-circle">
                           <div class="media-body">
                              <h3 class="dropdown-item-title">
                                 Brad Diesel
                                 <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                              </h3>
                              <p class="text-sm">Call me whenever you can...</p>
                              <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                           </div>
                        </div>
                        <!-- Message End -->
                     </a>
                     <div class="dropdown-divider"></div>
                     <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                           <img src="<?php echo e(asset('assets/admin/dist/img/user8-128x128.jpg')); ?>" alt="User Avatar" class="img-size-50 img-circle mr-3">
                           <div class="media-body">
                              <h3 class="dropdown-item-title">
                                 John Pierce
                                 <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                              </h3>
                              <p class="text-sm">I got your message bro</p>
                              <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                           </div>
                        </div>
                        <!-- Message End -->
                     </a>
                     <div class="dropdown-divider"></div>
                     <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                           <img src="<?php echo e(asset('assets/admin/dist/img/user3-128x128.jpg')); ?>" alt="User Avatar" class="img-size-50 img-circle mr-3">
                           <div class="media-body">
                              <h3 class="dropdown-item-title">
                                 Nora Silvester
                                 <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                              </h3>
                              <p class="text-sm">The subject goes here</p>
                              <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                           </div>
                        </div>
                        <!-- Message End -->
                     </a>
                     <div class="dropdown-divider"></div>
                     <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                  </div>
               </li>
               <!-- Notifications Dropdown Menu -->
               <li class="nav-item dropdown">
                  <a class="nav-link" data-toggle="dropdown" href="#">
                  <i class="far fa-bell"></i>
                  <span class="badge badge-warning navbar-badge">15</span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                     <span class="dropdown-header">15 Notifications</span>
                     <div class="dropdown-divider"></div>
                     <a href="#" class="dropdown-item">
                     <i class="fas fa-envelope mr-2"></i> 4 new messages
                     <span class="float-right text-muted text-sm">3 mins</span>
                     </a>
                     <div class="dropdown-divider"></div>
                     <a href="#" class="dropdown-item">
                     <i class="fas fa-users mr-2"></i> 8 friend requests
                     <span class="float-right text-muted text-sm">12 hours</span>
                     </a>
                     <div class="dropdown-divider"></div>
                     <a href="#" class="dropdown-item">
                     <i class="fas fa-file mr-2"></i> 3 new reports
                     <span class="float-right text-muted text-sm">2 days</span>
                     </a>
                     <div class="dropdown-divider"></div>
                     <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                  </div>
               </li>
            </ul>
          </nav>
         <!-- /.navbar -->
         <!--  End Main Sidebar Container -->
         <!-- Content Wrapper. Contains page content -->
         <div class="wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
            </div>
            <!-- /.content-header -->
            <!-- Main content -->
            <div class="content">
               <div class="container-fluid">
                  <?php echo $__env->make('admin.includes.alerts.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  <?php echo $__env->make('admin.includes.alerts.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  <?php echo $__env->yieldContent('content'); ?>
                  <!-- /.row -->
               </div>
               <!-- /.container-fluid -->
            </div>
            <!-- /.content -->
          </div>
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
</html><?php /**PATH E:\laragon\www\tdetehhth\resources\views/layouts/index.blade.php ENDPATH**/ ?>
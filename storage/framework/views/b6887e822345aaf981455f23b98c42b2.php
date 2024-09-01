<?php $__env->startSection('title'); ?>
الضبط العام
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contentheader'); ?>
الضبط
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contentheaderlink'); ?>
<a href="<?php echo e(route('admin.generalsetting')); ?>"> الضبط </a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contentheaderactive'); ?>
عرض
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
   <div class="col-12">
      <div class="card">
         <div class="card-header">
            <h3 class="card-title card_title_center">بيانات الضبط العام</h3>
         </div>
         <!-- /.card-header -->
         <div class="card-body">
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('admin.general-setting.show');

$__html = app('livewire')->mount($__name, $__params, 'lw-4031692045-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('admin.general-setting.update');

$__html = app('livewire')->mount($__name, $__params, 'lw-4031692045-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
         </div>
      </div>
   </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.general', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\tdetehhth\resources\views/admin/general-setting/index.blade.php ENDPATH**/ ?>
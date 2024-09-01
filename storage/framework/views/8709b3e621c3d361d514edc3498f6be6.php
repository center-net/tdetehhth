<?php $__env->startSection('title'); ?>
بيانات فئات الاصناف 
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contentheader'); ?>
بيانات فئات الاصناف 
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contentheaderlink'); ?>
<a href="<?php echo e(route('admin.ItemCategories')); ?>"> بيانات فئات الاصناف  </a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contentheaderactive'); ?>
عرض
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
   <div class="col-12">
         <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('admin.invoices.item-categories.data');

$__html = app('livewire')->mount($__name, $__params, 'lw-1862332399-0', $__slots ?? [], get_defined_vars());

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
[$__name, $__params] = $__split('admin.invoices.item-categories.add');

$__html = app('livewire')->mount($__name, $__params, 'lw-1862332399-1', $__slots ?? [], get_defined_vars());

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
[$__name, $__params] = $__split('admin.invoices.item-categories.delete');

$__html = app('livewire')->mount($__name, $__params, 'lw-1862332399-2', $__slots ?? [], get_defined_vars());

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
[$__name, $__params] = $__split('admin.invoices.item-categories.edit');

$__html = app('livewire')->mount($__name, $__params, 'lw-1862332399-3', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
   </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('assets/admin/js/treasuries.js')); ?>"></script>
<link rel="stylesheet" href="<?php echo e(asset('assets/admin/plugins/select2/js/select2.full.min.js')); ?>">
<script>
    $(function () {
      //Initialize Select2 Elements
      $('.select2').select2({
        theme: 'bootstrap4'
      })
    })
</script> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.general', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\tdetehhth\resources\views/admin/invoices/item-categories/index.blade.php ENDPATH**/ ?>
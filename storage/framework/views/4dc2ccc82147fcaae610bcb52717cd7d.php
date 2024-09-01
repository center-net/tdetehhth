<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('assets/admin/plugins/select2/css/select2.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')); ?>">
<?php $__env->stopSection(); ?>
<?php if (isset($component)) { $__componentOriginalf5195e7fca34cd992a211fbb69930ea9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf5195e7fca34cd992a211fbb69930ea9 = $attributes; } ?>
<?php $component = App\View\Components\ModelComponent::resolve(['model' => 'AddModel','title' => 'بيانات  فئات الاصناف','submitName' => 'حفظ'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('model-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\ModelComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="col-md-6 mb-0">
        <div class="form-group row">
            <label  class="col-sm-5 control-label">اسم الفئة</label>
            <div class="col-sm-7">
            <input type="text" class="form-control" wire:model="name"  placeholder="اسم الفئة">
            <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
            </div>
        </div>
    </div>
    <div class="col-md-8 mb-0">
        <div class="form-group">
           <div class="form-group">
              <label  class=" control-label">صورة المنتج</label>
              <input type="file" class="form-control" wire:model="image">
              <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
            </div>
        </div>
    </div>
     <div class="col-md-4 mb-0">
        <div class="form-group">
           <div class="form-group">
              <!--[if BLOCK]><![endif]--><?php if($image): ?> 
                 <img class="custom_img" src="<?php echo e($image->temporaryUrl()); ?>">
              <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            </div>
        </div>
    </div>
    <div class="col-md-6 mb-0">
        <div class="form-group row">
            <label  class="col-sm-5 control-label">حالة التفعيل</label>
            <div class="col-sm-7">
                <input type="radio" value="1" id="1" checked wire:model="active"><label  class="col-sm-5 control-label">مفعل</label>
                <input type="radio" value="0" id="0" wire:model="active"><label  class="col-sm-5 control-label">معطل</label>
                <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['active'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf5195e7fca34cd992a211fbb69930ea9)): ?>
<?php $attributes = $__attributesOriginalf5195e7fca34cd992a211fbb69930ea9; ?>
<?php unset($__attributesOriginalf5195e7fca34cd992a211fbb69930ea9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf5195e7fca34cd992a211fbb69930ea9)): ?>
<?php $component = $__componentOriginalf5195e7fca34cd992a211fbb69930ea9; ?>
<?php unset($__componentOriginalf5195e7fca34cd992a211fbb69930ea9); ?>
<?php endif; ?><?php /**PATH E:\laragon\www\tdetehhth\resources\views/admin/invoices/item-categories/add.blade.php ENDPATH**/ ?>
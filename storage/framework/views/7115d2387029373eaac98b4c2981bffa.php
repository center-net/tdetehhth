<?php if (isset($component)) { $__componentOriginalf5195e7fca34cd992a211fbb69930ea9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf5195e7fca34cd992a211fbb69930ea9 = $attributes; } ?>
<?php $component = App\View\Components\ModelComponent::resolve(['model' => 'EditModel','title' => 'تعديل الضبط العام','submitName' => 'حفظ التعديلات'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('model-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\ModelComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
   <div class="col-md-4 mb-0">
      <div class="form-group row">
         <div class="form-group">
            <label  class=" control-label">اسم الشركة</label>
            <input type="text" class="form-control" wire:model="system_name"  placeholder="ادخل اسم الشركة">
            <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['system_name'];
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
      <div class="form-group row">
         <div class="form-group">
            <label  class="control-label">عنوان الشركة</label>
            <input type="text" class="form-control" wire:model="address"  placeholder="ادخل عنوان الشركة">
            <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['address'];
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
      <div class="form-group row">
         <div class="form-group">
            <label  class=" control-label">هاتف الشركة</label>
            <input type="text" class="form-control" wire:model="phone"  placeholder="ادخل هاتف الشركة">
            <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['phone'];
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
   <div class="col-md-12 mb-0">
      <div class="form-group">
         <div class="form-group">
            <label  class=" control-label">رسالة التنبية اعلي الشاشة للشركة</label>
            <textarea class="form-control" wire:model="general_alert" cols="15" rows="5"></textarea>
            <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['general_alert'];
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
            <label  class=" control-label">صورة الخلفية</label>
            <input type="file" class="form-control" wire:model="photo">
            <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['photo'];
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
            <!--[if BLOCK]><![endif]--><?php if($photo): ?> 
               <img class="custom_img" src="<?php echo e($photo->temporaryUrl()); ?>">
            <?php else: ?>
               <img class="custom_img" src="<?php echo e(asset('/uploads/admin/generalsettings').'/'.$generalsettings->photo); ?>" alt="">
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
          </div>
      </div>
  </div>
   <div class="col-md-8 mb-0">
      <div class="form-group">
         <div class="form-group">
            <label  class=" control-label">شعار الشركة</label>
            <input type="file" class="form-control" wire:model="logo">
            <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['phone'];
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
            <!--[if BLOCK]><![endif]--><?php if($logo): ?> 
               <img class="custom_img" src="<?php echo e($logo->temporaryUrl()); ?>">
            <?php else: ?>
               <img class="custom_img" src="<?php echo e(asset('/uploads/admin/generalsettings').'/'.$generalsettings->logo); ?>" alt="">
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
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
<?php endif; ?>


<?php /**PATH E:\laragon\www\tdetehhth\resources\views/admin/general-setting/update.blade.php ENDPATH**/ ?>
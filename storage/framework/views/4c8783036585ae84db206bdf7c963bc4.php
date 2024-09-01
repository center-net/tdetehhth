<div>
    <!--[if BLOCK]><![endif]--><?php if(@isset($generalsetting) && !@empty($generalsetting)): ?>
    <table id="example2" class="table table-bordered table-hover">
       <tr>
          <td class="width30">اسم الشركة</td>
          <td > <?php echo e($generalsetting->system_name); ?></td>
       </tr>
       <tr>
          <td class="width30">عنوان  الشركة</td>
          <td > <?php echo e($generalsetting->address); ?></td>
       </tr>
       <tr>
          <td class="width30">هاتف  الشركة</td>
          <td > <?php echo e($generalsetting->phone); ?></td>
       </tr>
       <tr>
          <td class="width30">  رسالة التنبية اعلي الشاشة للشركة</td>
          <td > <?php echo e($generalsetting->general_alert); ?></td>
       </tr>
       <tr>
          <td class="width30">صورة الخلفية</td>
          <td >
             <div class="image">
                <img class="custom_img" src="<?php echo e(asset('/uploads/admin/generalsettings').'/'.$generalsetting->photo); ?>"  alt="صورة الخلفية">       
             </div>
          </td>
       </tr>
       <tr>
          <td class="width30">لوجو  الشركة</td>
          <td >
             <div class="image">
                <img class="custom_img" src="<?php echo e(asset('/uploads/admin/generalsettings').'/'.$generalsetting->logo); ?>"  alt="لوجو الشركة">       
             </div>
          </td>
       </tr>
       <tr>
          <td class="width30">  تاريخ اخر تحديث</td>
          <td > 
             <!--[if BLOCK]><![endif]--><?php if($generalsetting->updated_by>0 and $generalsetting->updated_by!=null ): ?>
             <?php
             $dt=new DateTime($generalsetting->updated_at);
             $date=$dt->format("Y-m-d");
             $time=$dt->format("h:i");
             $newDateTime=date("A",strtotime($time));
             $newDateTimeType= (($newDateTime=='AM')?'صباحا ':'مساء'); 
             ?>
             <?php echo e($date); ?>

             <?php echo e($time); ?>

             <?php echo e($newDateTimeType); ?>

             بواسطة 
             <?php echo e($generalsetting['updated_by_admin']); ?>

             <?php else: ?>
             لايوجد تحديث
             <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
             <a data-toggle="modal" data-target="#EditModel" href="#" class="btn btn-sm btn-success" >تعديل</a>
             
          </td>
       </tr>
    </table>
    <?php else: ?>
    <div class="alert alert-danger">
       عفوا لاتوجد بيانات لعرضها !!
    </div>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
</div>
<?php /**PATH E:\laragon\www\tdetehhth\resources\views/admin/general-setting/show.blade.php ENDPATH**/ ?>
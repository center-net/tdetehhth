<?php $__env->startSection('title'); ?>
الرئيسية
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row" style="background-image: url(<?php echo e(asset('/uploads/admin/generalsettings/photo.jpg')); ?>) ;background-size:cover;background-repeate:ni-repeate; min-height:600px;">
    <div class="col-lg-3 col-6">
        <a href="<?php echo e(route('admin.general')); ?>" class="small-box-footer">
        <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>150</h3>

                    <p>عام</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
            </div>
        </a>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <a href="<?php echo e(route('admin.Home')); ?>" class="small-box-footer">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>53</h3>
                    <p>برنامج المحاسبة</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
            </div>
        </a>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <a href="#" class="small-box-footer">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>53</h3>
                    <p>المتجر</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
            </div>
        </a>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
        <div class="inner">
            <h3>65</h3>

            <p>Unique Visitors</p>
        </div>
        <div class="icon">
            <i class="ion ion-pie-graph"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\tdetehhth\resources\views/admin/index.blade.php ENDPATH**/ ?>
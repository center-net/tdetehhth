<div>
    <div class="modal fade" id="<?php echo e($model); ?>" wire:ignore.self>
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header custom_thead">
                    <div class="modal-title"><?php echo e($title); ?></div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form wire:submit.prevent="submit">
                    <div class="modal-body">
                        <div class="row">
                            <?php echo e($slot); ?>

                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary"><?php echo e($submitName); ?></button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
</div>
<script>
    window.addEventListener('<?php echo e($model); ?>Toggle', event => {
       $('#<?php echo e($model); ?>').modal('toggle');
    })
 </script><?php /**PATH E:\laragon\www\tdetehhth\resources\views/components/model-component.blade.php ENDPATH**/ ?>
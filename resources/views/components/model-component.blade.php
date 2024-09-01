<div>
    <div class="modal fade" id="{{ $model }}" wire:ignore.self>
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header custom_thead">
                    <div class="modal-title">{{ $title }}</div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form wire:submit.prevent="submit">
                    <div class="modal-body">
                        <div class="row">
                            {{ $slot }}
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">{{ $submitName }}</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
</div>
<script>
    window.addEventListener('{{ $model }}Toggle', event => {
       $('#{{ $model }}').modal('toggle');
    })
 </script>
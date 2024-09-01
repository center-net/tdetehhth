@section('css')
<link rel="stylesheet" href="{{ asset('assets/admin/plugins/select2/css/select2.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
@endsection
<x-model-component model="AddModel" title="بيانات  فئات الاصناف" submitName="حفظ">
    <div class="col-md-6 mb-0">
        <div class="form-group row">
            <label  class="col-sm-5 control-label">اسم الفئة</label>
            <div class="col-sm-7">
            <input type="text" class="form-control" wire:model="name"  placeholder="اسم الفئة">
            @error('name')<span class="text-danger">{{ $message }}</span>@enderror
            </div>
        </div>
    </div>
    <div class="col-md-8 mb-0">
        <div class="form-group">
           <div class="form-group">
              <label  class=" control-label">صورة المنتج</label>
              <input type="file" class="form-control" wire:model="image">
              @error('image')<span class="text-danger">{{ $message }}</span>@enderror
            </div>
        </div>
    </div>
     <div class="col-md-4 mb-0">
        <div class="form-group">
           <div class="form-group">
              @if ($image) 
                 <img class="custom_img" src="{{ $image->temporaryUrl() }}">
              @endif
            </div>
        </div>
    </div>
    <div class="col-md-6 mb-0">
        <div class="form-group row">
            <label  class="col-sm-5 control-label">حالة التفعيل</label>
            <div class="col-sm-7">
                <input type="radio" value="1" id="1" checked wire:model="active"><label  class="col-sm-5 control-label">مفعل</label>
                <input type="radio" value="0" id="0" wire:model="active"><label  class="col-sm-5 control-label">معطل</label>
                @error('active')<span class="text-danger">{{ $message }}</span>@enderror
            </div>
        </div>
    </div>
</x-model-component>
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
    <div class="col-md-6 mb-0">
        <div class="form-group row">
            <label  class="col-sm-5 control-label">هل رئيسية</label>
            <div class="col-sm-7">
                <input type="radio" value="0" id="0" checked wire:model.lazy="is_master"><label  class="col-sm-5 control-label">رئيسية</label>
                <input type="radio" value="1" id="1" wire:model.lazy="is_master"><label  class="col-sm-5 control-label">فرعية</label>
                @error('is_master')<span class="text-danger">{{ $message }}</span>@enderror
            </div>
        </div>
    </div>
    <div class="col-md-6 mb-0">
        <div class="form-group row">
            <label  class="col-sm-5 control-label">الصنف</label>
            <div class="">
                <div >
                    <select wire:model="billing_categories_id" class="form-control select2" style="width: 100%;">
                        <option >اختر الصنف</option>
                        
                        @if ($mains)
                        @foreach ($mains as $main)
                            <option value="{{ $main->id }}">{{ $main->name }}</option>
                        @endforeach
                        @endif
                        </select>
                    @error('billing_categories_id')<span class="text-danger">{{ $message }}</span>@enderror
                </div>
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
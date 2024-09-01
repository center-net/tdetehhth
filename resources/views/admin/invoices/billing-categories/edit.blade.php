<x-model-component model="EditModel" title="تعديل الفئة {{ $name }}" submitName="حفظ التعديلات">

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
            <label  class="col-sm-5 control-label">حالة التفعيل</label>
            <div class="col-sm-7">
                <input type="radio" value="1" id="1" checked wire:model="active"><label  class="col-sm-5 control-label">مفعل</label>
                <input type="radio" value="0" id="0" wire:model="active"><label  class="col-sm-5 control-label">معطل</label>
                @error('active')<span class="text-danger">{{ $message }}</span>@enderror
            </div>
        </div>
    </div>
</x-model-component>
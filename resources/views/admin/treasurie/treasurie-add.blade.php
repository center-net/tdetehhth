<x-model-component model="AddModel" title="اضافة خزنة" submitName="حفظ">
    <div class="col-md-6 mb-0">
        <div class="form-group row">
            <label  class="col-sm-5 control-label">اسم الخزنة</label>
            <div class="col-sm-7">
            <input type="text" class="form-control" wire:model="treasurie.name"  placeholder="اسم الخزنة">
            @error('treasurie.name')<span class="text-danger">{{ $message }}</span>@enderror
            </div>
        </div>
    </div>
    <div class="col-md-6 mb-0">
        <div class="form-group row">
            <label  class="col-sm-5 control-label">هل رئيسية</label>
            <div class="col-sm-7">
                <input type="radio" value="1" id="1" checked wire:model="treasurie.is_master"><label  class="col-sm-5 control-label">رئيسية</label>
                <input type="radio" value="0" id="0" wire:model="treasurie.is_master"><label  class="col-sm-5 control-label">فرعية</label>
                @error('treasurie.is_master')<span class="text-danger">{{ $message }}</span>@enderror
            </div>
        </div>
    </div>
    <div class="col-md-6 mb-0">
        <div class="form-group row">
            <label  class="col-sm-5 control-label">اخر ايصال صرف</label>
            <div class="col-sm-7">
            <input wire:model="treasurie.last_isal_exhcange" type="text" class="form-control"  placeholder="اخر ايصال صرف">
            @error('treasurie.last_isal_exhcange')<span class="text-danger">{{ $message }}</span>@enderror
            </div>
        </div>
    </div>
    <div class="col-md-6 mb-0">
        <div class="form-group row">
            <label class="col-sm-5 control-label">اخر ايصال تحصيل</label>
            <div class="col-sm-7">
            <input wire:model="treasurie.last_isal_collect" type="text" class="form-control" placeholder="اخر ايصال تحصيل">
            @error('treasurie.last_isal_collect')<span class="text-danger">{{ $message }}</span>@enderror
            </div>
        </div>
    </div>
    <div class="col-md-6 mb-0">
        <div class="form-group row">
            <label  class="col-sm-5 control-label">حالة التفعيل</label>
            <div class="col-sm-7">
                <input type="radio" value="1" id="1" checked wire:model="treasurie.active"><label  class="col-sm-5 control-label">مفعل</label>
                <input type="radio" value="0" id="0" wire:model="treasurie.active"><label  class="col-sm-5 control-label">معطل</label>
                @error('treasurie.active')<span class="text-danger">{{ $message }}</span>@enderror
            </div>
        </div>
    </div>
</x-model-component>
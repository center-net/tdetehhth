<x-model-component model="AddModel" title="بيانات  فئات الفواتير" submitName="حفظ">
    <div class="col-md-6 mb-0">
        <div class="form-group row">
            <label  class="col-sm-5 control-label">اسم المنتج</label>
            <div class="col-sm-7">
            <input type="text" class="form-control" wire:model="name"  placeholder="اسم المنتج">
            @error('name')<span class="text-danger">{{ $message }}</span>@enderror
            </div>
        </div>
    </div>
    <div class="col-md-6 mb-0">
        <div class="form-group row">
            <label  class="col-sm-5 control-label">رقم المنتج</label>
            <div class="col-sm-7">
            <input type="text" class="form-control" wire:model="parcode"  placeholder="رقم المنتج">
            @error('parcode')<span class="text-danger">{{ $message }}</span>@enderror
            </div>
        </div>
    </div>
    <div class="col-md-6 mb-0">
        <div class="form-group row">
            <label  class="col-sm-5 control-label">الصنف</label>
            <div class="">
                <div >
                    <select wire:model="item_categories_id" class="form-control select2" style="width: 100%;">
                        <option >اختر الصنف</option>
                        
                        @if ($mains)
                        @foreach ($mains as $main)
                            <option value="{{ $main->id }}">{{ $main->name }}</option>
                        @endforeach
                        @endif
                        </select>
                    @error('is_master')<span class="text-danger">{{ $message }}</span>@enderror
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 mb-0">
        <div class="form-group row">
            <label  class="col-sm-5 control-label">سعر التاجر</label>
            <div class="col-sm-7">
            <input type="text" class="form-control" wire:model="price1"  placeholder="سعر التاجر">
            @error('price1')<span class="text-danger">{{ $message }}</span>@enderror
            </div>
        </div>
    </div>
    <div class="col-md-6 mb-0">
        <div class="form-group row">
            <label  class="col-sm-5 control-label">سعر الزبون</label>
            <div class="col-sm-7">
            <input type="text" class="form-control" wire:model="price2"  placeholder="سعر الزبون">
            @error('price2')<span class="text-danger">{{ $message }}</span>@enderror
            </div>
        </div>
    </div>
    <div class="col-md-6 mb-0">
        <div class="form-group row">
            <label  class="col-sm-5 control-label">نقاط التاجر</label>
            <div class="col-sm-7">
            <input type="text" class="form-control" wire:model="points1"  placeholder="نقاط التاجر">
            @error('points1')<span class="text-danger">{{ $message }}</span>@enderror
            </div>
        </div>
    </div>
    <div class="col-md-6 mb-0">
        <div class="form-group row">
            <label  class="col-sm-5 control-label">نقاط الزبون</label>
            <div class="col-sm-7">
            <input type="text" class="form-control" wire:model="points2"  placeholder="نقاط الزبون">
            @error('points2')<span class="text-danger">{{ $message }}</span>@enderror
            </div>
        </div>
    </div>
    <div class="col-md-6 mb-0">
        <div class="form-group row">
            <label  class="col-sm-5 control-label">سعر بالنقاط</label>
            <div class="col-sm-7">
            <input type="text" class="form-control" wire:model="points_price"  placeholder="سعر بالنقاط">
            @error('points_price')<span class="text-danger">{{ $message }}</span>@enderror
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
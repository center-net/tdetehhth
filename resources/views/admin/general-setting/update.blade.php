<x-model-component model="EditModel" title="تعديل الضبط العام" submitName="حفظ التعديلات">
   <div class="col-md-4 mb-0">
      <div class="form-group row">
         <div class="form-group">
            <label  class=" control-label">اسم الشركة</label>
            <input type="text" class="form-control" wire:model="system_name"  placeholder="ادخل اسم الشركة">
            @error('system_name')<span class="text-danger">{{ $message }}</span>@enderror
          </div>
      </div>
  </div>
   <div class="col-md-4 mb-0">
      <div class="form-group row">
         <div class="form-group">
            <label  class="control-label">عنوان الشركة</label>
            <input type="text" class="form-control" wire:model="address"  placeholder="ادخل عنوان الشركة">
            @error('address')<span class="text-danger">{{ $message }}</span>@enderror
          </div>
      </div>
  </div>
   <div class="col-md-4 mb-0">
      <div class="form-group row">
         <div class="form-group">
            <label  class=" control-label">هاتف الشركة</label>
            <input type="text" class="form-control" wire:model="phone"  placeholder="ادخل هاتف الشركة">
            @error('phone')<span class="text-danger">{{ $message }}</span>@enderror
          </div>
      </div>
  </div>
   <div class="col-md-12 mb-0">
      <div class="form-group">
         <div class="form-group">
            <label  class=" control-label">رسالة التنبية اعلي الشاشة للشركة</label>
            <textarea class="form-control" wire:model="general_alert" cols="15" rows="5"></textarea>
            @error('general_alert')<span class="text-danger">{{ $message }}</span>@enderror
          </div>
      </div>
  </div>
   <div class="col-md-8 mb-0">
      <div class="form-group">
         <div class="form-group">
            <label  class=" control-label">صورة الخلفية</label>
            <input type="file" class="form-control" wire:model="photo">
            @error('photo')<span class="text-danger">{{ $message }}</span>@enderror
          </div>
      </div>
  </div>
   <div class="col-md-4 mb-0">
      <div class="form-group">
         <div class="form-group">
            @if ($photo) 
               <img class="custom_img" src="{{ $photo->temporaryUrl() }}">
            @else
               <img class="custom_img" src="{{ asset('/uploads/admin/generalsettings').'/'.$generalsettings->photo}}" alt="">
            @endif
          </div>
      </div>
  </div>
   <div class="col-md-8 mb-0">
      <div class="form-group">
         <div class="form-group">
            <label  class=" control-label">شعار الشركة</label>
            <input type="file" class="form-control" wire:model="logo">
            @error('phone')<span class="text-danger">{{ $message }}</span>@enderror
          </div>
      </div>
  </div>
   <div class="col-md-4 mb-0">
      <div class="form-group">
         <div class="form-group">
            @if ($logo) 
               <img class="custom_img" src="{{ $logo->temporaryUrl() }}">
            @else
               <img class="custom_img" src="{{ asset('/uploads/admin/generalsettings').'/'.$generalsettings->logo}}" alt="">
            @endif
          </div>
      </div>
  </div>

  
</x-model-component>



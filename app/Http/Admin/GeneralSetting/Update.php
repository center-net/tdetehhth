<?php

namespace App\Http\Admin\GeneralSetting;

use App\Models\GeneralSetting;
use Livewire\Attributes\Validate;
use Livewire\WithFileUploads;
use Livewire\Component;

class Update extends Component
{

    use WithFileUploads;
    public $generalsettings, $system_name, $address, $phone, $general_alert, $photo, $logo ;

    public function mount()
    {
        $this->generalsettings  = GeneralSetting::find(1);
        $this->system_name      = $this->generalsettings->system_name;
        $this->address          = $this->generalsettings->address;
        $this->phone            = $this->generalsettings->phone;
        $this->general_alert    = $this->generalsettings->general_alert;
    }

    public function rules()
    {
        return[
                'system_name'   => 'required|string|unique:treasuries,name,',
                'address'       => 'required',
                'phone'         => 'required|digits:10',
                'general_alert' => 'string',
                'photo'         => 'nullable|image',
                'logo'          => 'nullable|image',
        ];
    }

    public function validationAttributes() 
    {
        return [
                    'system_name'   => 'إسم الشركة',
                    'address'       => 'عنوان الشركة',
                    'phone'         => 'هاتف الشركة',
                    'general_alert' => 'رسالة تنبية اعلي الشاشة',
                    'logo'         => 'لوجو الشركة',
                    'photo'         => 'صورة الخلفية',
        ];
    }

    public function submit()
    {
        $data = $this->validate();
        if($this->photo){
            $data['photo']='photo.'.$this->photo->extension();
            $this->photo->storeAs('admin/generalsettings', 'photo.'.$this->photo->extension(),'public');
            $this->dispatch('refreshData')->to(Show::class);
        }else{
            $data['photo']=$this->generalsettings->photo;
        }
        if($this->logo){
            $data['logo']='logo.'.$this->logo->extension();
            $this->logo->storeAs('admin/generalsettings', 'logo.'.$this->logo->extension(),'public');
            $this->dispatch('refreshData')->to(Show::class);
        }else{
            $data['logo']=$this->generalsettings->logo;    
        }
        $this->generalsettings->update($data);
        $this->dispatch('EditModelToggle');
        $this->dispatch('refreshData')->to(Show::class);
    }

    public function render()
    {
        return view('admin.general-setting.update');
    }
}

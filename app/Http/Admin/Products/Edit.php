<?php

namespace App\Http\Admin\Products;

use App\Models\ItemCategorie;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;

class Edit extends Component
{
    use WithFileUploads;
    public $ItemCategorie, $Product, $name, $image, $parcode, $item_categories_id,
            $price1, $price2, $points1, $points2, $points_price, $active, $dbimage;

        protected $listeners = ['EditModel'];
    
        public function EditModel($id)
        {
            $this->Product              = Product::find($id);
            $this->name                 = $this->Product->name;
            $this->dbimage                = $this->Product->image;
            $this->item_categories_id   = $this->Product->item_categories_id;
            $this->price1               = $this->Product->price1;
            $this->price2               = $this->Product->price2;
            $this->points1              = $this->Product->points1;
            $this->points2              = $this->Product->points2;
            $this->points_price         = $this->Product->points_price;
            $this->active               = $this->Product->active;
            $this->parcode              = $this->Product->parcode;
            $this->dispatch('EditModelToggle');
        }
    
        public function rules()
        {
            return[
                    'name'                => 'required|string|unique:billing_categories,name,' . $this->Product->id,
                    // 'image'              => 'required|image',
                    'item_categories_id'              => 'required',
                    'price1'              => 'required|regex:/^[0-9]+(\.[0-9][0-9]?)?$/',
                    'price2'              => 'required|regex:/^[0-9]+(\.[0-9][0-9]?)?$/',
                    'points1'              => 'required|numeric',
                    'points2'              => 'required|numeric',
                    'points_price'              => 'required|numeric',
                    'active'              => 'required|boolean',
                    'parcode'              => 'required|string',
            ];
        }
    
        public function validationAttributes() 
        {
            return [
                        'name'                  => 'اسم المنتج',
                        'image'                 => 'صورة المنتج',
                        'item_categories_id'    => 'اختر الصنف',
                        'price1'                => 'سعر التاجر',
                        'price2'                => 'سعر الزبون',
                        'points1'               => 'نقاط التاجر',
                        'points2'               => 'نقاط الزبون',
                        'points_price'          => 'سعر بالنقاط',
                        'parcode'               => 'رقم المنتج',
                        'active'                => 'حالة التفعيل',
            ];
        }

    public function submit()
    {

        $data = $this->validate();
        if($this->image){
            $data['image']= $this->name.'.'.$this->image->extension();
            $this->image->storeAs('admin/product', $this->name.'.'.$this->image->extension(),'public');
            $this->dispatch('refreshData')->to(Data::class);
        }else
        {
            $data['image']= $this->dbimage;
        }

        $this->Product::update($data);

        $this->reset([
            'name',
            'image',
            'item_categories_id',
            'price1',
            'price2',
            'points1',
            'points2',
            'points_price',
            'active',
            'parcode',
        ]);
        $this->dispatch('AddModelToggle');
        $this->dispatch('refreshData')->to(Data::class);
    }

    

    public function render()
    {
        return view('admin.products.edit',[
            'mains'=> ItemCategorie::where('active','1')->get(),
        ]);
    }
}

<?php

namespace App\Http\Admin\Products;

use App\Models\ItemCategorie;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;

class Add extends Component
{
    use WithFileUploads;
    public
    $ItemCategorie,
    $Product,   
    $name,
    $image,
    $parcode,
    $item_categories_id,
    $price1,
    $price2,
    $points1,
    $points2,
    $points_price,
    $active;

    #[Validate([
        'name'                => 'required|string|unique:products,name',
        'image'              => 'required|image',
        'item_categories_id'              => 'required',
        'price1'              => 'required|regex:/^[0-9]+(\.[0-9][0-9]?)?$/',
        'price2'              => 'required|regex:/^[0-9]+(\.[0-9][0-9]?)?$/',
        'points1'              => 'required|numeric',
        'points2'              => 'required|numeric',
        'points_price'              => 'required|numeric',
        'active'              => 'required|boolean',
        'parcode'              => 'required|string',
        ], attribute: [
            'active'            => 'حالة التفعيل',
    ])]

    public function mount()
    {
        $this->Product = new Product();
    }

    public function submit()
    {
        $data = $this->validate();

        if($this->image){
            $data['image']= $this->name.'.'.$this->image->extension();
            $this->image->storeAs('admin/product', $this->name.'.'.$this->image->extension(),'public');
            $this->dispatch('refreshData')->to(Data::class);
        }


        $this->Product::create($data);

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
        return view('admin.products.add',[
            'mains'=> ItemCategorie::where('active','1')->get(),
        ]);
    }
}

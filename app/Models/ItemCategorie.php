<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemCategorie extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function ItemCategoriename()
    {
        return $this->belongsTo(ItemCategorie::class);
    }
}

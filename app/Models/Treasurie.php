<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treasurie extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function treasuriesDelivery()
    {
        return $this->hasMany(TreasuriesDelivery::class);
    }
    
}

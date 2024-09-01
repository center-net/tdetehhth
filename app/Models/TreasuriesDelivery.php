<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TreasuriesDelivery extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function treasurie()
    {
        return $this->belongsTo(Treasurie::class);
    }
}

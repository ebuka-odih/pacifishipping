<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShipmentUpdate extends Model
{
    protected $guarded = [];

    public function shipment()
    {
        return $this->belongsTo(Shipment::class, 'shipment_id');
    }
}

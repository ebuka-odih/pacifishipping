<?php

namespace App\Http\Controllers;

use App\Shipment;
use App\ShipmentUpdate;
use Illuminate\Http\Request;

class ShipmentController extends Controller
{

    public function trackShipment(Request $request)
    {
        $shipment = Shipment::where('shipment_number', $request->shipment_number)->first();
        if ($shipment) {
            $history = ShipmentUpdate::where('shipment_id', $shipment->id)->get();
            return view('pages.shipment-details', compact('shipment', 'history'));
        }
        return redirect()->back()->with('declined', "Please Enter A Correct Shipment Code");

    }
    


}

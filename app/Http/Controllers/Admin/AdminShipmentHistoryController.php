<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Shipment;
use App\ShipmentUpdate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AdminShipmentHistoryController extends Controller
{
    public function history($id)
    {
        $shipment = Shipment::findOrFail($id);
        $history = ShipmentUpdate::where('shipment_id', $shipment->id)->get();
        return view('admin.shipment.history', compact('shipment', 'history'));
    }

    public function updateHistory(Request $request)
    {
        $request->validate([
           'location' => 'required',
           'status' => 'required',
           'updated_by' => 'nullable',
        ]);

        $shipment = new ShipmentUpdate();
        $shipment->location = $request->location;
        $shipment->status = $request->status;
        $shipment->updated_by = "BayShipment Admin";
        $shipment->shipment_id = $request->shipment_id;
        $shipment->save();
        Mail::to($shipment->shipment->rec_email)->send(new \App\Mail\ShipmentUpdate($shipment));
        return redirect()->back()->with('success', "Shipment Status Updated Successfully");

    }
}

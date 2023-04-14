<?php

namespace App\Http\Controllers;

use App\Notifications\NewShipment;
use App\Shipment;
use App\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function autoCreate(){
        $shipment = Shipment::orderBy('created_at', 'desc')->first();
        if($shipment){
            $last_shipmemt_num = $shipment->shipment_number ;
        }else {
            $last_shipmemt_num = 'RUSH106048023';
        }

//        $shipment_num = (int)$last_shipmemt_num + 1;
        return $last_shipmemt_num;
    }


    public function trackingNo(){
        $first_sting = 'RUSH'; //this is d default starting string
        $last_string = strtoupper(Str::random(3)); //this auto generates last 3 strings
        $id = mt_rand(100000,999999); // this auto generates 7digit codes
        $tn = $first_sting.$id.$last_string; // this adds den togeda
        $validator = Validator::make(['id'=>$tn],['id'=>'unique:shipments,shipment_number']);  // ds checks if ds code exist in db
        if($validator->fails()){
            return $this->trackingNo(); //if code exist, run d function again
        }
        return $tn; //return code
    }

}

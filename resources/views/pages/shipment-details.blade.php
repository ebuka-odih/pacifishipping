@extends('pages.layout.app')
@section('content')

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        @media (min-width: 1200px) {
            .container-fluid {
                width: 1050px;
            }
        }
        h5 {
            font-weight: bolder;
            color: white;
            padding: 5px;
        }
    </style>
</head>
<body>
<br><br>
<div style="border: 1px solid black" class="container-fluid mt-5 mb-5 ">

    <div class="visible-print text-center mb-4">
        <h4 class="text-center ">{{ $shipment->shipment_number }}</h4>
{{--        {!! QrCode::size(100)->generate($shipment->shipment_number); !!}--}}
    </div>
    <div class="row">
       <div class="col-lg-6 col-md-12 col-sm-12">
           <h5 style="background-color: black">SENDER INFORMATION</h5>
           <hr>
          <div class="table-responsive">
              <table class="table table-striped" >
                  <tr>
                      <th>Sender Name:</th>
                      <td>{{ optional($shipment)->sender_name }}</td>
                  </tr>
                  <tr>
                      <th>Sender Email:</th>
                      <td>{{ $shipment->sender_email }}</td>
                  </tr>
                  <tr>
                      <th>Sender Phone:</th>
                      <td>{{ $shipment->sender_phone }}</td>
                  </tr>
                  <tr>
                      <th>Sender Address:</th>
                      <td>{{ $shipment->sender_address }}</td>
                  </tr>
              </table>
          </div>
       </div>

       <div class="col-lg-6 col-md-12 col-sm-12">
           <h5 style="background-color: black">RECEIVER INFORMATION</h5>
           <hr>
           <div class="table-responsive">
               <table class="table table-striped" >
                   <tr>
                       <th>Receiver Name:</th>
                       <td>{{ $shipment->rec_name }}</td>
                   </tr>
                   <tr>
                       <th>Receiver Email:</th>
                       <td>{{ $shipment->rec_email }}</td>
                   </tr>
                   <tr>
                       <th>Receiver Phone:</th>
                       <td>{{ $shipment->rec_phone }}</td>
                   </tr>
                   <tr>
                       <th>Receiver Address:</th>
                       <td>{{ $shipment->rec_address }}</td>
                   </tr>
               </table>
           </div>
       </div>
    </div>

    <h5 style="background-color: black" class="text-white text-center"> SHIPMENT INFORMATION</h5>
    <div class="table-responsive">
        <table class="table table-striped" >
            <tr>
                <th>Shipment Type:</th>
                <td>{{ $shipment->type }}</td>
            </tr>
            <tr>
                <th>Courier:</th>
                <td>{{ $shipment->courier }}</td>
            </tr>
            <tr>
                <th>Shipment Mode:</th>
                <td>{{ $shipment->mode }}</td>
            </tr>
            <tr>
                <th>Quantity:</th>
                <td>{{ $shipment->quantity }}</td>
            </tr>
            <tr>
                <th>Total Freight:</th>
                <td>{{ $shipment->total_freight }}</td>
            </tr>
            <tr>
                <th>Carrier No:</th>
                <td>{{ $shipment->carrier_no }}</td>
            </tr>
            <tr>
                <th>Origin:</th>
                <td>{{ $shipment->origin }}</td>
            </tr>
            <tr>
                <th>Pickup Date:</th>
                <td>{{ $shipment->pickup_date }}</td>
            </tr>
            <tr>
                <th>Expected Delivery Date:</th>
                <td>{{ $shipment->expected_date }}</td>
            </tr>
            <tr>
                <th>Weight:</th>
                <td>{{ $shipment->weight }}</td>
            </tr>
            <tr>
                <th>Package:</th>
                <td>{{ $shipment->package }}</td>
            </tr>
            <tr>
                <th>Product:</th>
                <td>{{ $shipment->product }}</td>
            </tr>
            <tr>
                <th>Payment Mode:</th>
                <td>{{ $shipment->payment_mode }}</td>
            </tr>
            <tr>
                <th>Carrier:</th>
                <td>{{ $shipment->carrier }}</td>
            </tr>
            <tr>
                <th>Departure Time:</th>
                <td>{{ $shipment->departure_time }}</td>
            </tr>
            <tr>
                <th>Destination:</th>
                <td>{{ $shipment->destination }}</td>
            </tr>
            <tr>
                <th>Pickup Date:</th>
                <td>{{ $shipment->pickup_time }}</td>
            </tr>
            <tr>
                <th>Comment:</th>
                <td>{{ $shipment->comment }}</td>
            </tr>
        </table>
    </div>
    <h5 style="background-color: black" class="text-white text-center"> SHIPMENT HISTORY</h5>
   <div class="table-responsive">
       <table class="table">
           <thead>
           <tr>
               <th scope="col">Date</th>
               <th scope="col">Time</th>
               <th scope="col">Location</th>
               <th scope="col">Status</th>
               <th scope="col">Updated By</th>
               <th scope="col">Remark</th>
           </tr>
           </thead>
           <tbody>
           @foreach($history as $item)
               <tr>
                   <th scope="row">{{ date('Y-m-d', strtotime($item->created_at)) }}</th>
                   <td>{{ date('h:i a', strtotime($item->created_at)) }}</td>
                   <td>{{ $item->location }}</td>
                   <td><strong>{{ $item->status }}</strong></td>
                   <td>{{ $item->updated_by }}</td>
                   <td>{{ $item->remark }}</td>
               </tr>
           @endforeach
           </tbody>
       </table>
   </div>

</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

@endsection

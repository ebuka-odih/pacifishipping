@extends('admin.layout.app')
@section('content')

    <main id="main-container">

        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Shipment Detail</h1>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
            <!-- Elements -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Shipment [{{ $shipment->shipment_number }}] Detail</h3>
                </div>
                <div class="block-content">
                    <div class="row">
                        <div class="col-6">
                            <h3> Sender Info</h3>
                            <hr>
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

                        <div class="col-6">
                            <h3> Receiver Info</h3>
                            <hr>
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

                    <h3 style="background-color: black" class="text-white text-center"> Shipment Info</h3>
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

            </div>
            <!-- END Elements -->
        </div>
        <!-- END Page Content -->
    </main>

@endsection

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShipmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            //Sender info
            $table->string('shipment_number')->nullable();

            $table->string('sender_name');
            $table->string('sender_email');
            $table->string('sender_phone');
            $table->string('sender_address')->nullable();

            //Receiver info
            $table->string('rec_name');
            $table->string('rec_email');
            $table->string('rec_phone');
            $table->string('rec_address');

            //Shipment Info
            $table->string('type');
            $table->string('courier');
            $table->string('mode');
            $table->string('quantity');
            $table->string('total_freight');
            $table->string('carrier_no')->nullable();
            $table->string('origin');
            $table->date('pickup_date');
            $table->date('expected_date');
            $table->string('weight');
            $table->string('package');
            $table->string('product');
            $table->string('payment_mode')->nullable();
            $table->string('carrier')->nullable();
            $table->string('departure_time');
            $table->string('destination');
            $table->string('pickup_time');
            $table->text('comment')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shipments');
    }
}

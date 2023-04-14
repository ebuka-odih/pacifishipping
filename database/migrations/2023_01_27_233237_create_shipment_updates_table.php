<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShipmentUpdatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipment_updates', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('location');
            $table->string('status');
            $table->string('updated_by');
            $table->string('remark')->nullable();
            $table->bigInteger('shipment_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shipment_updates');
    }
}

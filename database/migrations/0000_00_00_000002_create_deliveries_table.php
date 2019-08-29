<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;

class CreateDeliveriesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create(Config::get('amethyst.delivery.data.delivery.table'), function (Blueprint $table) {
            $table->increments('id');

            $table->string('uuid')->unique();
            $table->string('session_id')->nullable();

            $table->string('code')->nullable();
            $table->string('name');
            $table->string('phone')->nullable();
            
            $table->integer('address_id')->unsigned();
            $table->foreign('address_id')->references('id')->on(Config::get('amethyst.address.data.address.table'));

            $table->integer('shipment_zone_id')->unsigned();
            $table->foreign('shipment_zone_id')->references('id')->on(Config::get('amethyst.shipment-zone.data.shipment-zone.table'));

            $table->string('target_type');
            $table->integer('target_id')->unsigned();
            
            $table->text('notes')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists(Config::get('amethyst.delivery.data.delivery.table'));
    }
}

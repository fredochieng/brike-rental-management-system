<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVariationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('variations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('property_id');
            $table->unsignedBigInteger('property_variation_id');
            $table->string('var_name');
            $table->unsignedBigInteger('variation_value_id');
            $table->unsignedBigInteger('tot_rooms');
            $table->unsignedBigInteger('vacant_rooms');
            $table->unsignedBigInteger('booked_rooms');
            $table->unsignedBigInteger('monthly_rent');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('variations');
    }
}

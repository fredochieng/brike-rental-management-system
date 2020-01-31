<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomAdjustmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_adjustments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('var_val_id');
            $table->unsignedBigInteger('adjustment_qty');
            $table->unsignedBigInteger('init_tot_rooms');
            $table->unsignedBigInteger('new_tot_rooms');
            $table->unsignedBigInteger('init_vac_rooms');
            $table->unsignedBigInteger('new_vac_rooms');
            $table->unsignedBigInteger('init_ren_rooms');
            $table->unsignedBigInteger('new_ren_rooms');
            $table->unsignedBigInteger('created_by');
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
        Schema::dropIfExists('room_adjustments');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPropertyIdToRoomVariationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('room_variations', function (Blueprint $table) {
            $table->unsignedBigInteger('property_id')->after('variation_temp_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('room_variations', function (Blueprint $table) {
            $table->dropColumn('property_id');
        });
    }
}

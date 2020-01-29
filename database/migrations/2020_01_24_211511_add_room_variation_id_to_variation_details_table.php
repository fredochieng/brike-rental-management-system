<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRoomVariationIdToVariationDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('variation_details', function (Blueprint $table) {
            $table->unsignedBigInteger('room_variation_id')->after('variation_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('variation_details', function (Blueprint $table) {
            $table->dropColumn('room_variation_id');
        });
    }
}

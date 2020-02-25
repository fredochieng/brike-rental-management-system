<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToRentPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rent_payments', function (Blueprint $table) {
            $table->unsignedBigInteger('trans_confirmed')->nullable()->after('cron_processed');
            $table->string('phone_no')->nullable()->after('msisdn');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rent_payments', function (Blueprint $table) {
            $table->dropColumn('trans_confirmed');
            $table->dropColumn('phone_no');
        });
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnToTenantMontlyPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tenant_monthly_payments', function (Blueprint $table) {
            $table->unsignedBigInteger('room_id')->after('tenant_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tenant_montly_payments', function (Blueprint $table) {
            $table->dropColumn('room_id');
        });
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnToTenantMonthlyPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tenant_monthly_payments', function (Blueprint $table) {
            $table->unsignedBigInteger('sms_reminder_sent')->default(0)->after('balance_due');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tenant_monthly_payments', function (Blueprint $table) {
            $table->dropColumn('sms_reminder_sent');
        });
    }
}

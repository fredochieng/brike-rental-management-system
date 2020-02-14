<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTenantMonthlyPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenant_monthly_payments', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('tenant_id');
            $table->unsignedBigInteger('payment_status');
            $table->string('period');
            $table->string('rent_amount');
            $table->string('amount_paid');
            $table->string('balance_due');
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
        Schema::dropIfExists('tenant_monthly_payments');
    }
}

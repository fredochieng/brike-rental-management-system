<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rent_payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('trans_type');
            $table->string('trans_id');
            $table->string('trans_amount');
            $table->string('msisdn');
            $table->string('bill_ref_no');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('payment_method');
            $table->string('trans_time');
            $table->string('bus_shortcode');
            $table->string('invoice_no')->nullable();
            $table->string('org_account_bal');
            $table->string('third_party_trans_id')->nullable();
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
        Schema::dropIfExists('rent_payments');
    }
}

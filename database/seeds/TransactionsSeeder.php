<?php

use Illuminate\Database\Seeder;

class TransactionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {

        // DB::table('rent_payments')->insert(array(
        //     array(
        //         'trans_type' => 'Pay Bill',
        //         'trans_id' => 'OBE42TOQA1',
        //         'trans_time' => '20200214123145',
        //         'trans_amount' => '1000.00',
        //         'bus_shortcode' => '643672',
        //         'bill_ref_no' => '1',
        //         'invoice_no' => '',
        //         'org_account_bal' => '598464.00',
        //         'third_party_trans_id' => '',
        //         'msisdn' => '254708823158',
        //         'first_name' => 'Fredrick',
        //         'middle_name' => '0',
        //         'last_name' => 'Owuor',
        //         'payment_method' => 'Mpesa'
        //     ),
        //     array(
        //         'trans_type' => 'Pay Bill',
        //         'trans_id' => 'OBE42TOQA2',
        //         'trans_time' => '20200214123145',
        //         'trans_amount' => '2000.00',
        //         'bus_shortcode' => '643672',
        //         'bill_ref_no' => '1',
        //         'invoice_no' => '',
        //         'org_account_bal' => '598464.00',
        //         'third_party_trans_id' => '',
        //         'msisdn' => '254708823123',
        //         'first_name' => 'Fredrick',
        //         'middle_name' => '0',
        //         'last_name' => 'Owuor',
        //         'payment_method' => 'Mpesa'
        //     ),
        //     array(
        //         'trans_type' => 'Pay Bill',
        //         'trans_id' => 'OBE42TOQA3',
        //         'trans_time' => '20200214123145',
        //         'trans_amount' => '500.00',
        //         'bus_shortcode' => '643672',
        //         'bill_ref_no' => 'Room 1',
        //         'invoice_no' => '',
        //         'org_account_bal' => '598464.00',
        //         'third_party_trans_id' => '',
        //         'msisdn' => '25470882341',
        //         'first_name' => 'Christine',
        //         'middle_name' => '0',
        //         'last_name' => 'Achieng',
        //         'payment_method' => 'Mpesa'
        //     ),
        //     array(
        //         'trans_type' => 'Pay Bill',
        //         'trans_id' => 'OBE42TOQA4',
        //         'trans_time' => '20200214123145',
        //         'trans_amount' => '200.00',
        //         'bus_shortcode' => '643672',
        //         'bill_ref_no' => 'Room 1',
        //         'invoice_no' => '',
        //         'org_account_bal' => '598464.00',
        //         'third_party_trans_id' => '',
        //         'msisdn' => '254708823158',
        //         'first_name' => 'Christine',
        //         'middle_name' => '0',
        //         'last_name' => 'Achieng',
        //         'payment_method' => 'Mpesa'
        //     )
        // ));
    }
}

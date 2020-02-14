<?php

use Illuminate\Database\Seeder;

class RentPaymentStatusSeeder extends Seeder {
    /**
    * Run the database seeds.
    *
    * @return void
    */

    public function run() {
        DB::table( 'rent_payment_status' )->insert( array(
            array(
                'rent_status' => 'Fully paid'
            ),
            array(
                'rent_status' => 'Partially paid'
            ),
            array(
                'rent_status' => 'Due'
            )
        ) );
    }
}

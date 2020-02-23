<?php

use Illuminate\Database\Seeder;

class MessageStatusTableSeeder extends Seeder {
    /**
    * Run the database seeds.
    *
    * @return void
    */

    public function run() {
        DB::table( 'message_status' )->insert( array(
            array(
                'm_status_name' => 'Pending'
            ),
            array(
                'm_status_name' => 'Sent'
            ),
            array(
                'm_status_name' => 'Undelivered'
            ),
            array(
                'm_status_name' => 'Cancelled'
            )
        ) );
    }
}

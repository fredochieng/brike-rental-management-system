<?php

use Illuminate\Database\Seeder;
use App\Models\Tenants;

class TenantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** Tenants database seeder for Desert Rangers Rentals -- single rooms & bedsitters*/
        $tenants = [
            ["t_id_no" => 32454340, "t_name" => "Catelyn Mercy", "t_phone" => "254708405341", "t_property_id" => 1],
            ["t_id_no" => 32454341, "t_name" => "Angie Tricie", "t_phone" => "254708405342", "t_property_id" => 1],
            ["t_id_no" => 32454342, "t_name" => "Gracely Vincent", "t_phone" => "254708405343", "t_property_id" => 1],
            ["t_id_no" => 32454343, "t_name" => "Cate Uptown", "t_phone" => "254708405344", "t_property_id" => 1],
            ["t_id_no" => 32454344, "t_name" => "Diana Princess", "t_phone" => "254708405345", "t_property_id" => 1],
            ["t_id_no" => 32454345, "t_name" => "Fiona Cate", "t_phone" => "254708405346", "t_property_id" => 1],
            ["t_id_no" => 32454346, "t_name" => "Sharon Gakii", "t_phone" => "254708405347", "t_property_id" => 1],
            ["t_id_no" => 32454347, "t_name" => "Jared Otieno", "t_phone" => "254708405348", "t_property_id" => 1],
            ["t_id_no" => 32454348, "t_name" => "Betty Bettia", "t_phone" => "254708405349", "t_property_id" => 1],
            ["t_id_no" => 32454349, "t_name" => "Sizley Kate", "t_phone" => "254708405340", "t_property_id" => 1],
            ["t_id_no" => 32454350, "t_name" => "Hariet Julie", "t_phone" => "254708405350", "t_property_id" => 1],


        ];

        Tenants::insert($tenants);
    }
}

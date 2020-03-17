<?php

use Illuminate\Database\Seeder;
use App\Models\Rooms;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** Single rooms database seeder for Desert Rangers Rentals */
        $single_rooms = [
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "2S", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "3", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "4", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "5S", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "6", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "7", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "8", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "9", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "10", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "11", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "12S", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "13", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "14", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "15", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "16", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "17", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "18", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "19", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "20", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "21", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "22", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "23", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "24SHOP", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "25", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "26", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "33S", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "34S", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "35S", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "36S", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "37S", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "38S", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "39S", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "40S", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "41S", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "42S", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "43", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "44", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "45", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "46", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "47", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "48", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "49", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "50", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "51", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "52S", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "53", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "54", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "73", "max_occupants" => 3]
        ];

        Rooms::insert($single_rooms);

        /** Bedsitter rooms database seeder for Desert Rangers Rentals */
        $bedsitter = [
            ["property_id" => 1, "variation_val_id" => 2, "room_no" => "26B", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 2, "room_no" => "27B", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 2, "room_no" => "28B", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 2, "room_no" => "29B", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 2, "room_no" => "30B", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 2, "room_no" => "31B", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 2, "room_no" => "32B", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 2, "room_no" => "49B", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 2, "room_no" => "55B", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 2, "room_no" => "56B", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 2, "room_no" => "157B", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 2, "room_no" => "58B", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 2, "room_no" => "59B", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 2, "room_no" => "60B", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 2, "room_no" => "61B", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 2, "room_no" => "62B", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 2, "room_no" => "63B", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 2, "room_no" => "64B", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 2, "room_no" => "65B", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 2, "room_no" => "66B", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 2, "room_no" => "67B", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 2, "room_no" => "68B", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 2, "room_no" => "69B", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 2, "room_no" => "70B", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 2, "room_no" => "71B", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 2, "room_no" => "72B", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 2, "room_no" => "74B", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 2, "room_no" => "75B", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 2, "room_no" => "76B", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 2, "room_no" => "77B", "max_occupants" => 3]
        ];

        Rooms::insert($bedsitter);
    }
}

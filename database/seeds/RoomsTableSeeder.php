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
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "1S", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "2S", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "3S", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "4S", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "5S", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "6S", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "7S", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "8S", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "9S", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "10S", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "11S", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "12S", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "13S", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "14S", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "15S", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "16S", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "17S", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "18S", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "19S", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "20S", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "21S", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "22S", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "23S", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "24SHOP", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "25S", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "26S", "max_occupants" => 3],
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
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "43S", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "44S", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "45S", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "46S", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "47S", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "48S", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "49S", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "50S", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "51S", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "52S", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "53S", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "54S", "max_occupants" => 3],
            ["property_id" => 1, "variation_val_id" => 1, "room_no" => "73S", "max_occupants" => 3]
        ];

        Rooms::insert($single_rooms);

        /** Bedsitter rooms database seeder for Desert Rangers Rentals */
        $bedsitter = [
            ["property_id" => 1, "variation_val_id" => 2, "room_no" => "25B", "max_occupants" => 3],
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
            ["property_id" => 1, "variation_val_id" => 2, "room_no" => "57B", "max_occupants" => 3],
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

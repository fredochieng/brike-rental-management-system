<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use AfricasTalking\SDK\AfricasTalking;

class AfricaTalking extends Model {

    public static function getBalance( $username, $apiKey ) {
        $AT       = new AfricasTalking( $username, $apiKey );

        // Get one of the services
        $bal = $AT->application()->fetchApplicationData();

        if ( $bal['status'] == 'success' ) {
            return array( 'status' => 1, 'balance' => explode( ' ', $bal['data']->UserData->balance ) );
        } else {
            return array( 'status' => 0, 'balance' => 0 );
        }
    }

    public static function getUsername() {
        $username = env( 'AFRICASTALKING_USERNAME', '' );

        return $username;
    }

    public static function getAPIKey() {
        $apiKey = env( 'AFRICASTALKING_API_KEY', '' );

        return $apiKey;
    }

    public static function getShortCode() {
        $shortCode = env( 'AFRICASTALKING_SHORTCODE', '' );

        return $shortCode;
    }
}

// TZ_APIKEY = 7ed73794c30a2e51758bf05c35bc9c3b1a0ab9d81eed71b5d5529ae2b4bcacc7
// TZ_Username = wgbulksms_api_tz

// AFRICASTALKING_API_KEY = f521851e80bc52b8452ce0b387568d00fbfa71c7e3401643c8f0ce63b769c7df
// AFRICASTALKING_USERNAME = sandbox

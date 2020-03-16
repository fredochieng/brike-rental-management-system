<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PasswordResetToken extends Model
{
    public static function generate_token()
    {
        $token = str_random(60);
        return $token;
    }

    public static function generate_otp()
    {
        $otp = strtoupper(str_random(6));

        return $otp;
    }
}

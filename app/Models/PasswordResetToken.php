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
}

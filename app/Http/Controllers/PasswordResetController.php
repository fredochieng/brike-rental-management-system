<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use App\Models\PasswordResetToken;

class PasswordResetController extends Controller
{
    public function reset_password(Request $request)
    {
        $email = $request->input('email');
        $user = User::where('email', $email)->first();
        if (empty($user)) {

            Toastr::success('User does not exist');
            return back();
        }
        $generate_token = PasswordResetToken::generate_token();
        dd($generate_token);
    }
}

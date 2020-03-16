<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PasswordResetToken;
use App\User;
use Carbon\Carbon;
use DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Message;
use AfricasTalking\SDK\AfricasTalking;
use App\Models\AfricaTalking;

class PasswordResetController extends Controller
{
    public function reset_password_with_OTP(Request $request)
    {
        $phone = $request->input('phone');
        $user = User::where('phone', $phone)->first();
        if (empty($user)) {

            return back()->with('error', 'User does not exist. Please provide a valid phone');
        } else {

            $generate_otp = PasswordResetToken::generate_otp();

            //Create Password Reset Token
            DB::table('otp_password_resets')->insert([
                'phone' => $phone,
                'otp' => $generate_otp,
                'created_at' => Carbon::now()
            ]);

            //Get the token just created above
            $tokenData = DB::table('otp_password_resets')
                ->where('phone', $phone)->first();

            $otp = $tokenData->otp;

            if ($this->sendResendOTPSms($phone, $generate_otp)) {

                return redirect('reset-password-form')->with('success', 'An OTP to reset your password has been sent to your phone.');
            } else {
                return back()->with('error', 'A network error has occurred');
            }
        }
    }
    private function sendResendOTPSms($phone, $generate_otp)
    {
        //Retrieve the user from the database
        $user = DB::table('users')->where('phone', $phone)->select('name', 'phone')->first();

        $username = AfricaTalking::getUsername();
        $apiKey   = AfricaTalking::getAPIKey();
        $shortCode = AfricaTalking::getShortCode();

        // Initialize the SDK
        $AT = new AfricasTalking($username, $apiKey);

        // Get the SMS service
        $sms = $AT->sms();

        try {
            // Thats it, hit send and we'll take care of the rest
            $message = 'Hello ' . $user->name . ', use this 6 digit OTP to reset your password ' . $generate_otp;
            $from = $shortCode;
            $result = $sms->send([
                'to'      => $phone,
                'message' => $message,
                'from' => $from
            ]);

            // print_r( $result );
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }

        return true;
    }

    public function show_recover_password_form()
    {
        return view('authentication.reset-password');
    }

    public function recover_password(Request $request)
    {
        $otp = $request->input('otp');
        $password = $request->input('password');
        $co_password = $request->input('co_password');

        $reset_password = DB::table('otp_password_resets')->select(
            DB::raw('otp_password_resets.*')
        )
            ->where('otp', $otp)->first();

        if (empty($reset_password)) {
            return back()->with('error', 'The OTP you entered is wrong');
        } else {
            $phone_no = $reset_password->phone;

            if ($password == $co_password) {
                $user_pass = array(
                    'password' => Hash::make($password)
                );

                $update_password = User::where('phone', $phone_no)->update($user_pass);
                return redirect('authentication/login')->with('success', "Password reset successful.");
            } else {
                return back()->with('error', 'Confirm password does not match');
            }
        }
    }

    // public function reset_password(Request $request)
    // {
    //     $email = $request->input('email');
    //     $user = User::where('email', $email)->first();
    //     if (empty($user)) {

    //         return back()->with('error', 'User does not exist. Please provide a valid email address');
    //     } else {

    //         $generate_token = PasswordResetToken::generate_token();

    //         //Create Password Reset Token
    //         DB::table('password_resets')->insert([
    //             'email' => $email,
    //             'token' => $generate_token,
    //             'created_at' => Carbon::now()
    //         ]);

    //         //Get the token just created above
    //         $tokenData = DB::table('password_resets')
    //             ->where('email', $email)->first();

    //         $token = $tokenData->token;

    //         if ($this->sendResetEmail($email, $token)) {

    //             return back()->with('success', 'A reset link has been sent to your email address.');
    //         } else {
    //             return back()->with('error', 'A network error has occurred');
    //         }
    //     }
    // }

    // private function sendResetEmail($email, $token)
    // {
    //     //Retrieve the user from the database
    //     $user = DB::table('users')->where('email', $email)->select('name', 'email')->first();

    //     //Generate, the password reset link. The token generated is embedded in the link
    //     $link = ENV('APP_URL') . '/password/reset/' . $token . '?email=' . urlencode($user->email);
    //     //dd($link);
    //     //try {
    //     //Here send the link with CURL with an external email API 

    //     //1. Send to the user
    //     $message = "You have been successfully registered as a client at Inter-Web Global Fortune";
    //     $subject = 'Password Reset';
    //     $objDemo = new \stdClass();
    //     $objDemo->message = $message;
    //     $objDemo->subject = $subject;

    //     Mail::to($user->email)->send(new ResetPassword($objDemo));
    //     return true;
    //     // } catch (\Exception $e) {
    //     //     return false;
    //     // }
    // }
}

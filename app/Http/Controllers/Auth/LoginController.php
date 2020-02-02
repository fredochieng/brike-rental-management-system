<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
//use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller {
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    // use AuthenticatesUsers;

    public function login( Request $request ) {
        //dd( 'Fred' );

        // validate the info, create rules for the inputs
        $rules = array(
            'email'    => 'required|email', // make sure the email is an actual email
            'password' => 'required|min:6' // password can only be alphanumeric and has to be greater than 3 characters
        );

        // run the validation rules on the inputs from the form
        $validator = Validator::make( Input::all(), $rules );

        // if the validator fails, redirect back to the form
        if ( $validator->fails() ) {
            //dd( 'Validation failed' );
            return Redirect::to( 'authentication/login' )
            ->withErrors( $validator ) // send back all errors to the login form
            ->withInput( Input::except( 'password' ) );
            // send back the input ( not the password ) so that we can repopulate the form
        } else {
            //dd( 'Correcr' );
            // create our user data for the authentication
            $userdata = array(
                'email'     => Input::get( 'email' ),
                'password'  => Input::get( 'password' )
            );

            // attempt to do the login
            if ( Auth::attempt( $userdata ) ) {

                // validation successful!
                // redirect them to the secure section or whatever
                // return Redirect::to( 'secure' );
                // for now we'll just echo success (even though echoing in a controller is bad)
        return redirect('dashboard/analytical');

    } else {        

        // validation not successful, send back to form 
        return Redirect::to('authentication/login');

    }
    }
}

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
   // protected $redirectTo = 'dashboard/analytical';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout' );
            }
        }

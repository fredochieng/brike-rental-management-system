<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller {
    public function doLogin( Request $request ) {
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
            dd( 'Validation failed' );
            return Redirect::to( 'authentication/login' )
            ->withErrors( $validator ) // send back all errors to the login form
            ->withInput( Input::except( 'password' ) );
            // send back the input ( not the password ) so that we can repopulate the form
        } else {
            dd( 'Correcr' );
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
        echo 'SUCCESS!';

    } else {        

        // validation not successful, send back to form 
        return Redirect::to('login');

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

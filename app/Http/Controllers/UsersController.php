<?php

namespace App\Http\Controllers;

use App\Models\Rooms;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Kamaln7\Toastr\Facades\Toastr;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
    	$data['users'] = User::all();
    	//dd($data['users']);
        return  view('user-management.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = ucwords($request->input('name'));
        $email = $request->input('email');
        $username = $request->input('username');
        $password = $request->input('passowrd');

        $user = new User();
        $user->name = $name;
        $user->email = $email;
        $user->username = $username;
	    $user->password = Hash::make($password);

	    $user->save();

	    Toastr::success( 'User added successfully' );
	    return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $user_id)
    {
	    $now = Carbon::now( 'Africa/Nairobi' )->toDateTimeString();

	    /** Get user data from edit user form **/
	    $name = ucwords( $request->input( 'name' ) );
	    $email = $request->input( 'email' );
	    $username = $request->input( 'username' ) ;

	    $user_date = array(
		    'name' => $name,
		    'email' => $email,
		    'username' => $username
	    );
	    $update_user = User::where( 'id', $user_id )->update( $user_date );

	    /** Log the action in the logs file */
	    Log::info( 'User of ID ' . $user_id .  ' updated'.
		    ' at ' . $now );
	    Toastr::success( 'User updated successfully' );

	    return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

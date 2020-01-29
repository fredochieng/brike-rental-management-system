<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class AppController extends BaseController
{
    function inbox(){
    	return view('app.inbox');
    }

    function chat(){
    	return view('app.chat');
    }

    function calendar(){
        return view('app.calendar');
    }

    function contactList(){
    	return view('app.contact-list');
    }
    
    function contactCard(){
    	return view('app.contact-card');
    }

    function taskboard(){
    	return view('app.taskboard');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class WidgetsController extends BaseController
{
    function statistics(){
    	return view('widgets.statistics');
    }

    function data(){
    	return view('widgets.data');
    }

    function chart(){
        return view('widgets.chart');
    }

    function weather(){
    	return view('widgets.weather');
    }
    
    function social(){
    	return view('widgets.social');
    }

    function blog(){
        return view('widgets.blog');
    }

    function ecommerce(){
    	return view('widgets.ecommerce');
    }
}

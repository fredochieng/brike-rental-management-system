<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class DashboardController extends BaseController
{
    function analytical(){
    	return view('dashboard.analytical');
    }

    function demographic(){
    	return view('dashboard.demographic');
    }

    function hospital(){
    	return view('dashboard.hospital');
    }

    function university(){
    	return view('dashboard.university');
    }
    
    function realEstate(){
    	return view('dashboard.real-estate');
    }

    function project(){
    	return view('dashboard.project');
    }

    function bitcoin(){
    	return view('dashboard.bitcoin');
    }

    function ecommerce(){
    	return view('dashboard.ecommerce');
    }
    
    function iot(){
    	return view('dashboard.iot');
    }
}

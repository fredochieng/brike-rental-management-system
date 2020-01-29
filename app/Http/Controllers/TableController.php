<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class TableController extends BaseController
{
    function basic(){
    	return view('table.basic');
    }

    function normal(){
    	return view('table.normal');
    }

    function jqueryDatatable(){
        return view('table.jquery-datatable');
    }

    function editable(){
    	return view('table.editable');
    }
    
    function color(){
    	return view('table.color');
    }

    function filter(){
        return view('table.filter');
    }

    function dragger(){
    	return view('table.dragger');
    }
}

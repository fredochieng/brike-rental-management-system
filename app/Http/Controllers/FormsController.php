<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class FormsController extends BaseController
{
    function validation(){
    	return view('forms.validation');
    }

    function advanceElements(){
    	return view('forms.advance-elements');
    }

    function basicElements(){
        return view('forms.basic-elements');
    }

    function wizard(){
    	return view('forms.wizard');
    }
    
    function dragdrop(){
    	return view('forms.dragdrop');
    }

    function cropping(){
        return view('forms.cropping');
    }

    function summernote(){
        return view('forms.summernote');
    }

    function editors(){
        return view('forms.editors');
    }

    function markdown(){
    	return view('forms.markdown');
    }
}

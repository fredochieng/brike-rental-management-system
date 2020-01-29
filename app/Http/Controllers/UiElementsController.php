<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class UiElementsController extends BaseController
{
    function typography(){
    	return view('ui-elements.typography');
    }

    function tabs(){
    	return view('ui-elements.tabs');
    }

    function buttons(){
        return view('ui-elements.buttons');
    }

    function bootstrap(){
    	return view('ui-elements.bootstrap');
    }
    
    function icons(){
    	return view('ui-elements.icons');
    }

    function notifications(){
    	return view('ui-elements.notifications');
    }

    function colors(){
        return view('ui-elements.colors');
    }

    function dialogs(){
        return view('ui-elements.dialogs');
    }

    function listGroup(){
        return view('ui-elements.list-group');
    }

    function mediaObject(){
        return view('ui-elements.media-object');
    }

    function modals(){
        return view('ui-elements.modals');
    }

    function nestable(){
        return view('ui-elements.nestable');
    }

    function progressBars(){
        return view('ui-elements.progress-bars');
    }

    function rangeSliders(){
        return view('ui-elements.range-sliders');
    }

    function treeview(){
        return view('ui-elements.treeview');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class PagesController extends BaseController
{
    function blankPage(){
    	return view('pages.blank-page');
    }

    function profile1(){
    	return view('pages.profile1');
    }

    function profile2(){
        return view('pages.profile2');
    }

    function imageGallery1(){
    	return view('pages.image-gallery1');
    }
    
    function imageGallery2(){
    	return view('pages.image-gallery2');
    }

    function timeline(){
    	return view('pages.timeline');
    }

    function horizontalTimeline(){
        return view('pages.horizontal-timeline');
    }

    function pricing(){
        return view('pages.pricing');
    }

    function invoices1(){
        return view('pages.invoices1');
    }

    function invoices2(){
        return view('pages.invoices2');
    }

    function searchResults(){
        return view('pages.search-results');
    }

    function helperClasses(){
        return view('pages.helper-classes');
    }

    function teamsBoard(){
        return view('pages.teams-board');
    }

    function projectList(){
        return view('pages.project-list');
    }

    function maintenance(){
        return view('pages.maintenance');
    }

    function testimonials(){
        return view('pages.testimonials');
    }

    function faq(){
        return view('pages.faq');
    }
}

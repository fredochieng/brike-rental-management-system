<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class BlogController extends BaseController
{
    function dashboard(){
    	return view('blog.dashboard');
    }

    function newPost(){
    	return view('blog.new-post');
    }

    function list(){
        return view('blog.list');
    }

    function detail(){
    	return view('blog.detail');
    }
}

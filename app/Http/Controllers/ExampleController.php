<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    function get()
    {
        return view('controller.get_page');
    }

    function post()
    {
        return view('controller.post_page');
    }
}

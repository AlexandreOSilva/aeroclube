<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
   function index() {
        return view('index');
    }
    function contacts() {
        return view('contacts');
    }
    function admin() {
        return view('admin');
    }
    function faq() {
        return view('faq');
    }

}

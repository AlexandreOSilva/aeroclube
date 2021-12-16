<?php

namespace App\Http\Controllers;

use App\Models\Aviao;
use Illuminate\Http\Request;

class PageController extends Controller
{
    function index()
    {
        return view('index');
    }
    function contacts()
    {
        return view('contacts');
    }
    function admin()
    {
        return view('admin');
    }
    function frota()
    {
        $avioes=Aviao::all();
        return view('frota',compact('avioes'));
    }
}

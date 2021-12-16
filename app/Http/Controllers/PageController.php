<?php

namespace App\Http\Controllers;

use App\Models\Aviao;
use Illuminate\Http\Request;
use App\Models\Servico;

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
    function servico()
    {
        $servicos=Servico::all();
        return view('batismos',compact('servicos'));
    }
}

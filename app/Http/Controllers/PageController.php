<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Aviao;
use App\Models\Missao;
use App\Models\Servico;
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
    function servico()
    {
        $servicos=Servico::all();
        return view('batismos',compact('servicos'));
    }
    function missao()
    {
        $missao=Missao::all();
        return view('missao', compact('missao'));
    }
    function faq()
    {
        $faqs=Faq::all();
        return view('faq', compact('faq'));
    }

}

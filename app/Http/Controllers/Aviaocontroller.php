<?php

namespace App\Http\Controllers;

use App\Models\Aviao;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class Aviaocontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $avioes = Aviao::all();
        return view('avioes.list', compact('avioes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $aviao = new Aviao;
        return view('avioes.add', compact( "aviao"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AviaoRequest $request)
    {
        $fields = $request->validated();
        $aviao = new Aviao;
        $aviao->fill($fields);

        if ($request->hasFile('imagem')) {
            $img_path = $request->file('imagem')->store('public/img_avioes');
            $aviao->imagem = basename($img_path);
        }
        $aviao->save();
        return redirect()->route('avioes.index')->with('success', 'Aviao successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aviao  $aviao
     * @return \Illuminate\Http\Response
     */
    public function show(Aviao $aviao)
    {
        return view('avioes.show', compact('aviao'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aviao  $aviao
     * @return \Illuminate\Http\Response
     */
    public function edit(Aviao $aviao)
    {
        return view('avioes.edit', compact('aviao'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aviao  $aviao
     * @return \Illuminate\Http\Response
     */
    public function update(AviaoRequest $request, Aviao $aviao)
    {
        $fields = $request->validated();
        $aviao->fill($fields);
        if ($request->hasFile('imagem')) {
            if (!empty($aviao->imagem)) {
                Storage::disk('public')->delete('imgs_avioes/' . $aviao->imagem);
            }
            $img_path = $request->file('imagem')->store('public/img_avioes');
            $aviao->imagem = basename($img_path);
        }

        $aviao->save();
        return redirect()->route('avioes.index')->with('success', 'Aviao successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aviao  $aviao
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aviao $aviao)
    {
        if (!empty($aviao->imagem)) {
            Storage::disk('public')->delete('img_avioes/' . $aviao->imagem);
        }
        $aviao->delete();
        return redirect()->route('avioes.index')->with('success', 'Aviao successfully deleted');
    }

}

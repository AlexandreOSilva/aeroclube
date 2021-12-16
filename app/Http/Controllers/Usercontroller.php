<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\UserRequest;
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
        $users = User::all();
        return view('users.list', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $user = new User;
        return view('users.add', compact( "user"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $fields = $request->validated();
        $user = new User;
        $user->fill($fields);

        if ($request->hasFile('imagem')) {
            $img_path = $request->file('imagem')->store('public/img_avioes');
            $user->imagem = basename($img_path);
        }
        $user->save();
        return redirect()->route('users.index')->with('success', 'Aviao successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aviao  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aviao  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aviao  $user
     * @return \Illuminate\Http\Response
     */
    public function update(AviaoRequest $request, Aviao $user)
    {
        $fields = $request->validated();
        $user->fill($fields);
        if ($request->hasFile('imagem')) {
            if (!empty($user->imagem)) {
                Storage::disk('public')->delete('img_avioes/' . $user->imagem);
            }
            $img_path = $request->file('imagem')->store('public/img_avioes');
            $user->imagem = basename($img_path);
        }

        $user->save();
        return redirect()->route('users.index')->with('success', 'Aviao successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aviao  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aviao $user)
    {
        if (!empty($user->imagem)) {
            Storage::disk('public')->delete('img_avioes/' . $user->imagem);
        }
        $user->delete();
        return redirect()->route('users.index')->with('success', 'Aviao successfully deleted');
    }

}

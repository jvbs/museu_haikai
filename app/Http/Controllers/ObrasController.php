<?php

namespace App\Http\Controllers;

use App\Obra;
use App\User;
use Illuminate\Http\Request;

class ObrasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('admin.obras.create');
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'nome' => 'required|unique:obras|between:3,45',
            'conteudo' => 'required|unique:obras'
        ]);

        auth()->user()->obras()->create($data);

        return redirect(route('admin.obras.show'));
    }


    public function show()
    {
        $obras = Obra::all()->where('user_id', auth()->user()->id);

        return view('admin.obras.show', compact('obras'));
    }


    public function edit(Obra $obra)
    {
        //
    }


    public function update(Request $request, Obra $obra)
    {
        //
    }


    public function destroy(Obra $obra)
    {
        //
    }
}

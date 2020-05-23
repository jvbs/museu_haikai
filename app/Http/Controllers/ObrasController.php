<?php

namespace App\Http\Controllers;

use App\Obra;
use Illuminate\Http\Request;

class ObrasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'nome' => 'required|unique:obras|between:3,45',
            'conteudo' => 'required|unique:obras'
        ]);

        auth()->user()->obras()->create($data);

        redirect(route('home'));
    }


    public function show(Obra $obra)
    {
        //
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

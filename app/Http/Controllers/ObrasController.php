<?php

namespace App\Http\Controllers;

use App\Obra;
use App\User;
use App\Colors;
use Illuminate\Http\Request;

class ObrasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('admin.obras.create')->with('cores', Colors::all());
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'nome' => 'required|unique:obras|between:3,45',
            'conteudo' => 'required|unique:obras',
            'timer' => 'required|integer|between:5,60',
            'color_id' => 'required|integer'
        ], [], [
            'color_id' => '"Cor"'
        ]);

        auth()->user()->obras()->create($data);

        return redirect(route('admin.obras.show'));
    }


    public function show()
    {
        $obras = Obra::all()->where('user_id', auth()->user()->id);

        return view('admin.obras.show', compact('obras'));
    }


    public function edit(Obra $obras)
    {
        $data = [
            'obra' => $obras,
            'cores' => Colors::all()
        ];

        return view('admin.obras.edit')->with('data', $data);
    }


    public function update(Request $request, Obra $obras)
    {
        $request->validate([
            'nome' => 'required|between:3,45',
            'conteudo' => 'required',
            'color_id' => 'required|integer'
        ], [], [
            'color_id' => '"Cor"'
        ]);

        $request = collect($request->all())->filter(function($value) {
            return null !== $value;
        })->toArray();


        $obras->update($request);

        return redirect(route('admin.obras.show'));
    }


    public function destroy(Obra $obras)
    {
        if($obras->delete()){
            return redirect(route('admin.obras.show'));
        }
    }
}

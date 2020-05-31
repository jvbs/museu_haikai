<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class PerfilController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function edit(User $user)
    {
        if($user->id == auth()->user()->id){
            return view('admin.perfil.edit', compact('user'));
        } else {
            abort(404);
        }
    }


    public function update(Request $request, User $user)
    {
        $data = $request->validate([
            'name' => 'required|between:3,45',
            'email' => 'required|email',
            'site' => 'url',
            'aboutme' => ''
        ]);

        $user->update($data);

        return view('admin.home');
    }


    public function destroy(User $user)
    {
        //
    }
}

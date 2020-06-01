<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Obra;
use App\User;
use App\Colors;

class IndexController extends Controller
{
    public function index(){
        $obras = Obra::with('user')->orderBy('created_at', 'desc')->get();
        $cores = Colors::all();

        return view('welcome', [
            'obras' => $obras,
            'cores' => $cores,
        ]);
    }

    public function artist(User $user){
        return view('artist')->with('user', $user);
    }
}

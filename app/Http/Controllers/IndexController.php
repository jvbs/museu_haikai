<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Obra;
use App\Colors;

class IndexController extends Controller
{
    public function index(){
        $obras = Obra::with('user')->get();
        $cores = Colors::all();

        return view('welcome', [
            'obras' => $obras,
            'cores' => $cores,
        ]);
    }
}

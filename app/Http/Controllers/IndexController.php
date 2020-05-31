<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Obra;

class IndexController extends Controller
{
    public function index(){
        $obras = Obra::all();

        return view('welcome')->with('obras', $obras);
    }
}

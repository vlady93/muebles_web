<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
     public function blogs() {
        $categorias =DB::table('categorias')->select('id','imagencategoria','titulo')->get();
        

        return view('welcome', compact('categorias'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        // return 'Page d\'accueil';
        // return route('products.show', ['id' => 42]);
        return view('accueil');
    }

    public function about()
    {
        return 'À propos de nous';
    }
}

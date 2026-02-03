<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    
    public $boutique = ["nom" => "Boutique Laravel", "nombre_produits" => 42, "etat" => "Ouvert"];

    public function home()
    {
        // return 'Page d\'accueil';
        // return redirect()->route('products.show', ['id' => 42]);
        return view('accueil', ['boutique' => $this->boutique]);
    }

    public function about()
    {
        return 'À propos de nous';
    }
}

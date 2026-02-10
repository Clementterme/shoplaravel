<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($id)
    {
        $products = Product::find($id);

        return view('products/show', compact('products'));
    }

    public function index()
    {

//        $products = [
//            [
//                "id" => 1,
//                "nom" => "Clavier mécanique",
//                "prix" => 79.99
//            ],
//            [
//                "id" => 2,
//                "nom" => "Souris gaming",
//                "prix" => 49.90
//            ],
//            [
//                "id" => 3,
//                "nom" => "Écran 24 pouces",
//                "prix" => 189.00
//            ],
//            [
//                "id" => 4,
//                "nom" => "Casque audio",
//                "prix" => 99.50
//            ],
//            [
//                "id" => 5,
//                "nom" => "Webcam HD",
//                "prix" => 59.99
//            ]
//        ];

        $products = Product::all();

        return view('products/index', compact('products'));
    }
}

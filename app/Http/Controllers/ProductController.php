<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//        $products = Product::all();
        $products = Product::with('category')->get();

        return view('products/index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'slug' => 'required|string|max:255|unique:products,slug',
                'description' => 'required|string',
                'category_id' => 'required|in:1,2,3,4,5',
                'price' => 'required|numeric|min:0',
                'stock' => 'required|integer|min:0',
                'active' => 'boolean',
            ]);

            $validated['active'] = $request->has('active');

            Product::create($validated);

            return redirect()
                ->route('products.index')
                ->with('success', 'Produit créé avec succès !');
        } catch (\Throwable $e) {

            return redirect()
                ->route('products.index')
                ->with('error', 'Une erreur est survenue.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $products = Product::find($id);

        return view('products/show', compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories = Category::all();
        $product = Product::find($id);
        return view('products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $product = Product::findOrFail($id);

            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'slug' => 'required|string|max:255|unique:products,slug,' . $id,
                'description' => 'required|string',
                'category_id' => 'required|in:1,2,3,4,5',
                'price' => 'required|numeric|min:0',
                'stock' => 'required|integer|min:0',
                'active' => 'boolean',
            ]);

            $validated['active'] = $request->has('active');

            $product->update($validated);


            return redirect()
                ->route('products.index')
                ->with('success', 'Produit créé avec succès !');
        } catch (\Throwable $e) {

            return redirect()
                ->route('products.index')
                ->with('error', 'Une erreur est survenue.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {

        $product = Product::find($id);

        $product->delete();

            return redirect()
                ->route('products.index')
                ->with('success', 'Produit "' . $product->name . '" supprimé avec succès !');
        } catch (\Throwable $e) {

            return redirect()
            ->route('products.index')
            ->with('error', 'Une erreur est survenue.');
        }
    }
}

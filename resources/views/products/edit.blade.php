@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-bold mb-4">Modifier</h1>

    <form action="{{ route('products.update', $product->id) }}" method="POST" class="max-w-lg">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="name" class="block font-medium mb-1">Nom</label>
            <input type="text" name="name" id="name"
                   value="{{ old('name', $product->name) }}"
                   class="w-full border rounded px-3 py-2"
                   required>
        </div>

        <div class="mb-4">
            <label for="slug" class="block font-medium mb-1">Slug</label>
            <input type="text" name="slug" id="slug"
                   value="{{ old('slug', $product->slug) }}"
                   class="w-full border rounded px-3 py-2"
                   placeholder="ex: iphone-15-pro"
                   required>
        </div>

        <div class="mb-4">
            <label for="description" class="block font-medium mb-1">Description</label>
            <textarea name="description" id="description"
                      class="w-full border rounded px-3 py-2"
                      rows="4"
                      required>{{ old('description', $product->description) }}</textarea>
        </div>

        <div class="mb-4">
            <label for="price" class="block font-medium mb-1">Prix (€)</label>
            <input type="number" step="0.01" min="0"
                   name="price" id="price"
                   value="{{ old('price', $product->price) }}"
                   class="w-full border rounded px-3 py-2"
                   required>
        </div>

        <div class="mb-4">
            <label for="stock" class="block font-medium mb-1">Stock</label>
            <input type="number" min="0"
                   name="stock" id="stock"
                   value="{{ old('stock', $product->stock) }}"
                   class="w-full border rounded px-3 py-2"
                   required>
        </div>

        <div class="mb-4">
            <label for="category_id" class="block font-medium mb-1">Catégorie</label>
            <select name="category_id" id="category_id"
                    class="w-full border rounded px-3 py-2"
                    required>
                <option value="">-- Choisir une catégorie --</option>
                <option value="1" {{ old('category_id', $product->category_id) == 1 ? 'selected' : '' }}>Électronique</option>
                <option value="2" {{ old('category_id', $product->category_id) == 2 ? 'selected' : '' }}>Vêtements</option>
                <option value="3" {{ old('category_id', $product->category_id) == 3 ? 'selected' : '' }}>Maison</option>
                <option value="4" {{ old('category_id', $product->category_id) == 4 ? 'selected' : '' }}>Accessoires</option>
                <option value="5" {{ old('category_id', $product->category_id) == 5 ? 'selected' : '' }}>Électroménager</option>
            </select>
        </div>

        <div class="mb-6 flex items-center">
            <input type="checkbox"
                   name="active"
                   id="active"
                   value="1"
                   class="mr-2"
                {{ old('active', $product->active) ? 'checked' : '' }}>
            <label for="active" class="font-medium">Produit actif</label>
        </div>

        <!-- Autres champs... -->

        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
            Mettre à jour
        </button>
    </form>

@endsection

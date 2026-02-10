@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-6">Nouveau produit</h1>

    <form action="{{ route('products.store') }}" method="POST" class="max-w-lg">
        @csrf

        <div class="mb-4">
            <label for="name" class="block font-medium mb-1">Nom</label>
            <input type="text" name="name" id="name"
                   value="{{ old('name') }}"
                   class="w-full border rounded px-3 py-2"
                   required>
        </div>

        <div class="mb-4">
            <label for="description" class="block font-medium mb-1">Description</label>
            <textarea name="description" id="description"
                      class="w-full border rounded px-3 py-2"
                      rows="4"
                      required>{{ old('description') }}</textarea>
        </div>

        <div class="mb-4">
            <label for="price" class="block font-medium mb-1">Prix (€)</label>
            <input type="number" step="0.01" min="0"
                   name="price" id="price"
                   value="{{ old('price') }}"
                   class="w-full border rounded px-3 py-2"
                   required>
        </div>

        <div class="mb-4">
            <label for="stock" class="block font-medium mb-1">Stock</label>
            <input type="number" min="0"
                   name="stock" id="stock"
                   value="{{ old('stock') }}"
                   class="w-full border rounded px-3 py-2"
                   required>
        </div>

        <div class="mb-6 flex items-center">
            <input type="checkbox"
                   name="active"
                   id="active"
                   value="1"
                   class="mr-2"
                {{ old('active', true) ? 'checked' : '' }}>
            <label for="active" class="font-medium">Produit actif</label>
        </div>

        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
            Créer le produit
        </button>
    </form>

@endsection

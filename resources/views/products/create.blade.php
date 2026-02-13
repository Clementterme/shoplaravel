@extends('layouts.app')

@section('content')

    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
            <strong>Oups !</strong> Il y a des erreurs dans le formulaire :
            <ul class="mt-2 list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <h1 class="text-3xl font-bold mb-4">Nouveau produit</h1>

    <form action="{{ route('products.store') }}" method="POST" class="max-w-lg">
        @csrf

        <div class="mb-4">
            <label for="name" class="block font-medium mb-1">Nom</label>
            <input type="text" name="name" id="name"
                   value="{{ old('name') }}"
                   class="w-full border rounded px-3 py-2 @error('name') border-red-500 @enderror"
                   >
        </div>

        @error('name')
        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror

        <div class="mb-4">
            <label for="slug" class="block font-medium mb-1">Slug</label>
            <input type="text" name="slug" id="slug"
                   value="{{ old('slug') }}"
                   class="w-full border rounded px-3 py-2 @error('slug') border-red-500 @enderror"
                   placeholder="ex: iphone-15-pro"
                   >
        </div>

        @error('slug')
        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror

        <div class="mb-4">
            <label for="description" class="block font-medium mb-1">Description</label>
            <textarea name="description" id="description"
                      class="w-full border rounded px-3 py-2"
                      rows="4"
                      >{{ old('description') }}</textarea>
        </div>

        <div class="mb-4">
            <label for="price" class="block font-medium mb-1">Prix (€)</label>
            <input type="number" step="0.01" min="0"
                   name="price" id="price"
                   value="{{ old('price') }}"
                   class="w-full border rounded px-3 py-2 @error('price') border-red-500 @enderror"
                   >
        </div>

        @error('price')
        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror

        <div class="mb-4">
            <label for="stock" class="block font-medium mb-1">Stock</label>
            <input type="number" min="0"
                   name="stock" id="stock"
                   value="{{ old('stock') }}"
                   class="w-full border rounded px-3 py-2 @error('stock') border-red-500 @enderror"
                   >
        </div>

        @error('stock')
        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror

        <div class="mb-4">
            <label for="category_id" class="block font-medium mb-1">Catégorie</label>
            <select name="category_id" id="category_id"
                    class="w-full border rounded px-3 py-2 @error('category_id') border-red-500 @enderror"
                    >
                <option value="">-- Choisir une catégorie --</option>
{{--                <option value="1" {{ old('category_id') == 1 ? 'selected' : '' }}>Électronique</option>--}}
{{--                <option value="2" {{ old('category_id') == 2 ? 'selected' : '' }}>Vêtements</option>--}}
{{--                <option value="3" {{ old('category_id') == 3 ? 'selected' : '' }}>Maison</option>--}}
{{--                <option value="4" {{ old('category_id') == 4 ? 'selected' : '' }}>Accessoires</option>--}}
{{--                <option value="5" {{ old('category_id') == 5 ? 'selected' : '' }}>Électroménager</option>--}}

                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        @error('category_id')
        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror

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

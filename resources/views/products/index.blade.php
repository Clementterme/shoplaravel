@extends('../layouts/app')

@section('content')

@if(session('success'))
    <div class="bg-green-100 text-green-800 p-4 rounded mb-4">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="bg-red-100 text-red-800 p-4 rounded mb-4">
        {{ session('error') }}
    </div>
@endif

<h1 class="text-3xl font-bold mb-4">Liste des produits</h1>

<ul>

@forelse ($products as $product)
    <li><h2 class="text-lg">{{ $product->name }} - {{ $product->price }} €<p>Stock restant : {{ $product->stock }}</p><p>Catégorie : {{ $product->category->name }}</p></h2><br><a href="/products/{{ $product->id }}" class="bg-gray-400 hover:bg-gray-500 text-white w-full border rounded px-3 py-2">Détails du produit</a>
        <a href="/products/{{ $product->id }}/edit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">Modifier</a>
        <form action="{{ route('products.destroy', $product->id) }}"
              method="POST"
              class="inline"
              onsubmit="return confirm('Voulez-vous vraiment supprimer ce produit ?');">
            @csrf
            @method('DELETE')

            <button type="submit"
                    class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded">
                Supprimer
            </button>
        </form>
    </li>
        <br>
@empty
    <li>Produit non trouvé</li>
@endforelse

</ul>

@endsection

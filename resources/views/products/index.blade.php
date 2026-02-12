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
    <li>{{ $product->name }} - {{ $product->price }} €<br><a href="/products/{{ $product->id }}">Détails du produit</a>
        <a href="/products/{{ $product->id }}/edit">Modifier</a></li><br>
@empty
    <li>Produit non trouvé</li>
@endforelse

</ul>

@endsection

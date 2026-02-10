@extends('../layouts/app')

@section('content')

<h1 class="text-3xl font-bold mb-4">Liste des produits</h1>

<ul>

@forelse ($products as $product)
    <li>{{ $product->name }} - {{ $product->price }} €<br><a href="/products/{{ $product->id }}">Détails du produit</a></li><br>
@empty
    <li>Produit non trouvé</li>
@endforelse


</ul>

@endsection

@extends('../layouts/app')

@section('content')

<ul>

@forelse ($products as $product)
    <li>{{ $product['nom'] }} - {{ $product['prix'] }} €</li>
@empty
    <li>Produit non trouvé</li>
@endforelse


</ul>

@endsection
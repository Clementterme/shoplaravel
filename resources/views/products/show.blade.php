@extends('../layouts/app')

@section('content')

    <h1 class="text-3xl font-bold mb-4">{{ $products->name }}</h1>

    <p>Description du produit : {{ $products->description }}</p>

    <p>Prix : {{ $products->price }}</p>

    <p>Stock restant : {{ $products->stock }}</p>

@endsection

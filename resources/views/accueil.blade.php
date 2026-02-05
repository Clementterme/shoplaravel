@extends('layouts.app')

@section('content')

<h1 class="text-3xl font-bold mb-4">{{ $boutique['nom'] }}</h1>

<p>Cette boutique est vraiment bien, elle a un catalogue complet avec pleins de produits différents, bonne visite !</p>

<p>Nombre de produits : {{ $boutique['nombre_produits'] }}</p>

@if ($boutique['etat'] === "Ouvert")

<p> La boutique est ouverte !</p>

@else

<p>Malheureusement la boutique est fermée, revenez pendant les horaires d'ouverture !</p>

@endif

@endsection
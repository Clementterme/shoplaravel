@extends('../layouts/app')

@section('content')

@foreach ($categories as $category)
    <h2 class="text-3xl font-bold">{{ $category->name }}</h2>
    <p class="text-lg italic mb-4">{{ $category->description }}</p>

    @if ($category->products->count())
        <ul>
            @foreach ($category->products as $product)
                <li>{{ $product->name }}</li>
            @endforeach
        </ul><br>
    @else
        <p>Aucun produit</p>
    @endif
@endforeach

@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center">
            <h2 class="py-3 text-center">{{ $restaurant->name }}</h2>
            <div class="">

                <div class="imgBoxShow rounded">
                    @if (str_starts_with($restaurant->img, 'http'))
                        <img class="cardImg rounded" src={{ $restaurant->img }} alt="">
                    @else
                        <img class="cardImg rounded" src={{ asset('storage/' . $restaurant->img) }} alt="">
                    @endif
                </div>

                <h4>address: {{ $restaurant->address }}</h4>
                <h4>description: {{ $restaurant->description }}</h4>

                <h4>city: {{ $restaurant->city }}</h4>
                <h4>telephone: {{ $restaurant->telephone }}</h4>
                <h4>website: {{ $restaurant->website }}</h4>

                <h4>Categorie:</h4>
                @foreach ($restaurant->category as $category)
                    <h5>{{ $category->name }}</h5>
                @endforeach



            </div>
            <div class="py-3 text-center">
                <a href="{{ route('admin.dashboard') }}" class="btn btn-primary">Torna alla Homepage</a>
                <a href="{{ route('admin.restaurants.edit', $restaurant->id) }}" class="btn btn-warning">Modifica</a>
            </div>
        </div>
    </div>
@endsection

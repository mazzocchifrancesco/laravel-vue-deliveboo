<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fontawesome 6 cdn -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css' integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==' crossorigin='anonymous' referrerpolicy='no-referrer' />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
</head>

<body>
    <div id="app">


        {{-- ------------- INIZIO NAVBAR  ---------------- --}}


        <nav class="navbar navbar-expand-lg">
            <div class="container">

                <router-link :to="{ name: 'home' }">
                    <div class="navbar-brand text-light">
                        <img class="logoDeliveboo" src="/img/logoDeliveboo.png" alt="logoDeliveboo" />
                    </div>
                </router-link>

                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="page-navigation text-white {{ Route::currentRouteName() == 'admin.dashboard' ? 'bg-danger' : '' }}" href="{{ route('admin.dashboard') }}">
                            <i class="fa-solid fa-tachometer-alt fa-lg fa-fw"></i> Dashboard
                        </a>
                    </li>
                    {{-- il tuo ristorante --}}
                    {{-- utilizzo il codice magico per ottenere l'id del ristorante e importo il modello --}}
                    @php
                    use App\Models\Restaurant;
                    $currentUser = Auth::id();
                    // prendo l'id del ristorante collegato all'utente
                    $restaurant = Restaurant::select('id')->where('user_id', $currentUser)->first();
                    @endphp
                    {{-- controllo se esiste un ristorante associato all'utente e se esiste creo il link --}}
                    @if (isset($restaurant->id))
                    <li class="nav-item">
                        <a class="page-navigation text-white {{ Route::currentRouteName() == 'admin.restaurants.show' ? 'text-red' : '' }}" href="{{ route('admin.restaurants.show', $restaurant->id) }}">
                            <i class="fa-solid fa-tachometer-alt fa-lg fa-fw"></i> Il tuo ristorante
                        </a>
                    </li>

                    {{-- products --}}
                    <li class="nav-item">
                        <a class="page-navigation text-white {{ Route::currentRouteName() == 'admin.products.index' ? 'bg-secondary' : '' }}" href="{{ route('admin.products.index') }}">
                            <i class="fa-solid fa-tachometer-alt fa-lg fa-fw"></i> Prodotti
                        </a>
                    </li>

                    {{-- add products --}}
                    <li class="nav-item">
                        <a class="page-navigation text-white {{ Route::currentRouteName() == 'admin.products.create' ? 'bg-secondary' : '' }}" href="{{ route('admin.products.create') }}">
                            <i class="fa-solid fa-tachometer-alt fa-lg fa-fw"></i> Crea Prodotti
                        </a>
                    </li>

                    {{-- order --}}
                    <li class="nav-item">
                        <a class="page-navigation text-white {{ Route::currentRouteName() == 'admin.orders.index' ? 'bg-secondary' : '' }}" href="{{ route('admin.orders.index') }}">
                            <i class="fa-solid fa-tachometer-alt fa-lg fa-fw"></i> Ordini
                        </a>
                    </li>
                    @else
                    {{-- add restaurants --}}
                    <li class="nav-item">
                        <a class="page-navigation text-white {{ Route::currentRouteName() == 'admin.restaurants.create' ? 'bg-secondary' : '' }}" href="{{ route('admin.restaurants.create') }}">
                            <i class="fa-solid fa-tachometer-alt fa-lg fa-fw"></i> Crea Ristorante
                        </a>
                    </li>
                    @endif

                    <!--                             {{-- restaurants --}}
                                 <li class="nav-item">
                                <a class="page-navigation text-white {{ Route::currentRouteName() == 'admin.restaurants.index' ? 'bg-secondary' : '' }}"
                                    href="{{ route('admin.restaurants.index') }}">
                                    <i class="fa-solid fa-tachometer-alt fa-lg fa-fw"></i> Ristoranti
                                </a>
                            </li> -->

                    <li class="nav-item">
                        <a class="page-navigation text-white" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fa-solid fa-sign-out-alt fa-lg fa-fw"></i> {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>


            </div>
        </nav>


        {{-- ------------- FINE NAVBAR  ---------------- --}}

        <div class="container-fluid vh-100">
            <div class="row h-100">

                <main class="">
                    @yield('content')
                </main>
            </div>
        </div>

    </div>
</body>
<style>
    .logoDeliveboo {
        width: 8rem;
    }

    .page-navigation {
        color: white;
        text-decoration: none;
        margin: 0 2rem;
    }

    .page-navigation:hover {
        text-decoration: underline;
        color: yellow;
    }

    font-awesome-icon {
        color: yellow;
    }

    font-awesome-icon:hover {
        color: white;
    }
</style>
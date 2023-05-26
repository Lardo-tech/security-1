@extends('my-layout')

@section('content')
    <main class="main">
        <article>
            <div class="text">
                <span style="--i:1">L</span>
                <span style="--i:2">o</span>
                <span style="--i:3">g</span>
                <span style="--i:4">i</span>
                <span style="--i:5">n</span>
            </div>
            <div class="card-container5">
                <div class="card2">
                    <h2>Welkom op mijn dashboad pagina.</h2>
                    <p>Login om deze pagina te mogen bekijken</p>

                    @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                    <a href="{{ url('/dashboard') }}"><button class="login-button">Dashboard</button></a>
                    @else
                    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"><button class="login-button">Log in</button></a>
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"><button class="login-button">Register</button></a>
                    @endif
                    @endauth
                </div>
            @endif
                </div>
            </div>
            <img src="./images/security.jpg" alt="home foto 1" class="medium">
        </article>
    </main>
@endsection


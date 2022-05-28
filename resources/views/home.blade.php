@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center>{{ __('Rejestracja przebiegła pomyślnie!') }}</center></div>
                <div class="card-header"><center>{{ __('Możesz przejść do panelu lub wylogować się') }}</center></div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                                @auth
                                    <center>
                                        <a class="nav-link" href="{{ url('/user/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Panel zarządzania</a>
                                        <a class="nav-link" href="{{ route('logout') }}" class="text-sm text-gray-700 dark:text-gray-500 underline" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">Wyloguj się</a>
                                    </center>
                                @endauth
                            </ul>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

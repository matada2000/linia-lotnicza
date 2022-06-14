<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .cover-container {
         max-width: 42em;
        }

        .d-flex2 {
            text-shadow: 0 .05rem .1rem rgba(0, 0, 0, .5);
            box-shadow: inset 0 0 5rem rgba(0, 0, 0, .5);
        }
    </style>

@extends('dashboards.users.layouts.user-dash-layout')
@section('title','Dashboard')
@section('content')

<div class="d-flex d-flex2 h-100 text-center text-white bg-dark">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <main class="px-3" style="margin-top: 25%;">
        <h1>Witaj {{ Auth()->user()->name }}, oto twój panel zarządzania.</h1>
        <p class="lead">Przemieszczaj sie po panelach, aby zakupić bilet a następnie go wydrukować. Pamiętaj, wyloguj się na koniec dla bezpieczeństwa.</p>
        <p class="lead" style="margin-top: 10%; border-radius: 50%; background-color: lightGray;">
            <img src="images/samolot.png" style="width: 75%; height: 55%;">
        </p>
        </main>
    </div>
</div>

@endsection

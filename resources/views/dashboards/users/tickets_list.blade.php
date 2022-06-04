@extends('dashboards.users.layouts.user-dash-layout')
@section('title','Tickets')
@section('content')

<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      .input2 {
        width: 50%;
        height: 50px;
        font-size: 18px;
        background-color: ;
        border-radius: 25px;
        border: none;
        background-color: MediumSeaGreen;
        color: white;
    }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .card2 {
          text-align: center;
          width: 85%;
          display: block;
          margin: 0;
          padding: 0;
          height: 20%;
          margin-top: 2%;
          border: solid 1px LightGray;
        }
    </style>


<center>
  <div class="card2">
    <div class="card-body">
      <table>
        <thead>
            <th width="30%">Odlot:</th>
              <td scope="col">
              @foreach($aircrafts as $aircraft)
                @if($aircraft->id == $flight->aircraft_id)
                  {{$aircraft->model}}
                @endif
              @endforeach
              </td>
              <th width="30%">Przylot:</th>
            </thead>
            <thead>
            <td><p class="card-text"><h5><span class="te">
              @foreach($airports as $airport)
                @if($airport->id == $flight->airport_departure_id)
                  {{$airport->name}}
                @endif
              @endforeach
              </span></h5></p></td>  
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&rsaquo;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td><p class="card-text"><h5><span class="te">
            @foreach($airports as $airport)
              @if($airport->id == $flight->airport_arrival_id)
                {{$airport->name}}
              @endif
            @endforeach
            </span></h5></p></td>
          </thead>
          <thead>
            <td><i>{{ $flight->departure_time }}</i></td>  
            <td></td>
            <td><i>{{ $flight->arrival_time }}</i></td>
        </thead>
      </table>
    </div>
  </div>
</center>
<div class="container py-3">
  <header>
    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
      <a href="/user/ticket"><button type="button" class="w-50 btn btn-lg btn-outline-primary">Anuluj</button></a>
      <br><br>
      <h1 class="display-4 fw-normal">Wybierz Klase</h1>
    </div>
  </header>

  <main>
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Ekonomiczna</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title"><h1>$29<small class="text-muted fw-light">/mo</small></h1></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>pozostała liczba miejsc: </li>
              
            </ul>
            <!--<button type="button" class="w-100 btn btn-lg btn-outline-primary">Zakup</button> -->
            <form action="/user/tickets_list/{{$flight->id}}/tickets/tickets_buy_economic"><input class="input2" type="submit" value="Zakup"></form>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Biznes</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title"><h1>$29<small class="text-muted fw-light">/mo</small></h1></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>pozostała liczba miejsc: </li>
            </ul>
            <form action="/user/tickets_list/{{$flight->id}}/tickets/tickets_buy_bisness"><input class="input2" type="submit" value="Zakup"></form>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Pierwsza</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title"><h1>$29<small class="text-muted fw-light">/mo</small></h1></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>pozostała liczba miejsc: </li>
            </ul>
            <form action="/user/tickets_list/{{$flight->id}}/tickets/tickets_buy_first"><input class="input2" type="submit" value="Zakup"></form>
          </div>
        </div>
      </div>
    </div>


    <h2 class="display-6 text-center mb-4">Porównanie Klas</h2>

    <div class="table-responsive">
      <table class="table text-center">
        <thead>
          <tr>
            <th style="width: 34%;"></th>
            <th style="width: 22%;">Ekonomiczna</th>
            <th style="width: 22%;">Biznes</th>
            <th style="width: 22%;">Pierwsza</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row" class="text-start">Katering</th>
            <td><i class="fas fa-check"></i></td>
            <td><i class="fas fa-check"></i></svg></td>
            <td><i class="fas fa-check"></i></svg></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Internet</th>
            <td><i class="fas fa-check"></i></td>
            <td><i class="fas fa-check"></i></td>
            <td><i class="fas fa-check"></i></td>
          </tr>
        </tbody>

        <tbody>
          <tr>
            <th scope="row" class="text-start">Większa waga bagażu</th>
            <td></td>
            <td><i class="fas fa-check"></i></td>
            <td><i class="fas fa-check"></i></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Rozkładane fotele</th>
            <td></td>
            <td><i class="fas fa-check"></i></td>
            <td><i class="fas fa-check"></i></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Prywatne siedzenia</th>
            <td></td>
            <td></td>
            <td><i class="fas fa-check"></i></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Telewizja</th>
            <td></td>
            <td></td>
            <td><i class="fas fa-check"></i></td>
          </tr>
        </tbody>
      </table>
    </div>
  </main>

  
</div>
  


@endsection
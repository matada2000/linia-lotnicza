@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','manage_airports_edit')
@section('content')

<style>
  td, th {
  
}
  button {
    font-size: 18px;
    margin-bottom: 5px;
    border-radius: 25px;
    border: none; 
    width: 13%;
    margin-left: 5px;
  }
</style>

<br>
<h1 style="font-family: Courier, 'Lucida Console', monospace"><center>Edycja Lotu</center></h1>
<br>

<form method="POST" action="/admin/schedule_flights/{{$flight->id}}">

  @method('PUT')

  @csrf

  <table class="table">
    <tbody>
      <tr>
        <th scope="col"><label for="aircraft_id">Samolot:</label></th>
        <td>
            @foreach($aircrafts as $aircraft)
              @if($aircraft->id == $flight->aircraft_id)
                <input style="width: 50%; background-color: lightgray;" id="aircraft_id" name="aircraft_id" class="form-control @error('aircraft_id') is-invalid @enderror" value="{{ $aircraft->model }}" disabled>
              @endif
            @endforeach 
        </td>
      </tr>
    </tbody>
    <tbody>
      <tr>
        <th scope="col"><label for="airport_departure_id">Odlot:</label></th>
        <td>
          <select style="width: 50%;" id="airport_departure_id" name="airport_departure_id" class="form-control @error('airport_departure_id') is-invalid @enderror" required autocomplete="airport_departure_id" onfocus='this.size=5;' onblur='this.size=1;' onchange='this.size=1; this.blur();'>
            @foreach($airports as $airport)
              <option value="{{ $airport->id }}" @if($airport->id == $flight->airport_departure_id) selected @endif >{{ $airport->name }}</option>
            @endforeach
          </select>
        </td>
      </tr>
    </tbody>
    <tbody>
      <tr>
        <th scope="col"><label for="departure_time">Odlot - czas:</label></th>
        <td><input style="width: 50%;" type="datetime-local" id='departure_time' value="{{$date1}}" name="departure_time" step="1" class="form-control @error('departure_time') is-invalid @enderror" required autocomplete="departure_time" autofocus></td>
      </tr>
    </tbody>
    <tbody>
      <tr>
      <th scope="col"><label for="airport_arivval_id">Przylot:</label></th>
        <td>
          <select style="width: 50%;" id="airport_arrival_id" name="airport_arrival_id" class="form-control @error('airport_arrival_id') is-invalid @enderror" required autocomplete="airport_arrival_id" onfocus='this.size=5;' onblur='this.size=1;' onchange='this.size=1; this.blur();'>
              @foreach($airports as $airport)
                <option value="{{ $airport->id }}" @if($airport->id == $flight->airport_arrival_id) selected @endif >{{ $airport->name }}</option>
              @endforeach
          </select>
        </td>
      </tr>
    </tbody>
    <tbody>
      <tr>
        <th scope="col"><label for="arrival_time">Przylot - czas:</label></th>
        <td><input style="width: 50%;" type="datetime-local" id='arrival_time' value="{{$date2}}" name="arrival_time" step="1"  class="form-control @error('arrival_time') is-invalid @enderror" required autocomplete="arrival_time" autofocus></td>
      </tr>
    </tbody>
    <tr>
        <th scope="col"><label for="price">Cena:</label></th>
        <td><input style="width: 50%;" type="number" id='price' name="price" step="1" value="{{$flight->price}}" class="form-control @error('price') is-invalid @enderror" required autocomplete="price" autofocus></td>
      </tr>
    </tbody>
      <tr>
        <th scope="col"><label for="available_seat_economic">Liczba miejsc dla klasy ekonomicznej:</label></th>
        <td>
          @foreach($aircrafts as $aircraft)
            @if($aircraft->id == $flight->aircraft_id)
              <input style="width: 50%; background-color: lightgray;" type="number" id='available_seat_economic' value="{{$aircraft->number_of_seats_economic}}" name="available_seat_economic" step="1" class="form-control @error('available_seat_economic') is-invalid @enderror"  autofocus disabled>
            @endif
          @endforeach
        </td>
      </tr>
    </tbody>
    </tbody>
      <tr>
        <th scope="col"><label for="available_seat_bisness">Liczba miejsc dla klasy biznesowej:</label></th>
        <td>
        @foreach($aircrafts as $aircraft)
          @if($aircraft->id == $flight->aircraft_id)
            <input style="width: 50%; background-color: lightgray;" type="number" id='available_seat_bisness' name="available_seat_bisness" value="{{$aircraft->number_of_seats_bisness}}" step="1"  class="form-control @error('available_seat_bisness') is-invalid @enderror"  autofocus disabled>
          @endif
        @endforeach
        </td>
      </tr>
    </tbody>
    </tbody>
      <tr>
        <th scope="col"><label for="available_seat_first">Liczba miejsc dla klasy pierwszej:</label></th>
        <td>
          @foreach($aircrafts as $aircraft)
            @if($aircraft->id == $flight->aircraft_id)
              <input style="width: 50%; background-color: lightgray;" type="number" id='available_seat_first' name="available_seat_first" value="{{$aircraft->number_of_seats_first}}" step="1"  class="form-control @error('available_seat_first') is-invalid @enderror"  autofocus disabled>
            @endif
          @endforeach
        </td>
      </tr>
    </tbody>
    <tbody>
      <tr>
        <th width="15%"><label for="manage">Zarządzaj:</label></th>
        <td>

        @foreach($aircrafts as $aircraft)
              @if($aircraft->id == $flight->aircraft_id)
                <input style="width: 50%; background-color: lightgray;" id="aircraft_id" name="aircraft_id" class="form-control @error('aircraft_id') is-invalid @enderror" value="{{ $aircraft->id }}" hidden>
              @endif
        @endforeach

        @foreach($aircrafts as $aircraft)
            @if($aircraft->id == $flight->aircraft_id)
              <input style="width: 50%; background-color: lightgray;" type="number" id='available_seat_economic' value="{{$aircraft->number_of_seats_economic}}" name="available_seat_economic" step="1" class="form-control @error('available_seat_economic') is-invalid @enderror" required autocomplete="available_seat_economic"  autofocus hidden>
            @endif
        @endforeach

        @foreach($aircrafts as $aircraft)
          @if($aircraft->id == $flight->aircraft_id)
            <input style="width: 50%; background-color: lightgray;" type="number" id='available_seat_bisness' name="available_seat_bisness" value="{{$aircraft->number_of_seats_bisness}}" step="1"  class="form-control @error('available_seat_bisness') is-invalid @enderror" required autocomplete="available_seat_bisness" autofocus hidden>
          @endif
        @endforeach

        @foreach($aircrafts as $aircraft)
            @if($aircraft->id == $flight->aircraft_id)
              <input style="width: 50%; background-color: lightgray;" type="number" id='available_seat_first' name="available_seat_first" value="{{$aircraft->number_of_seats_first}}" step="1"  class="form-control @error('available_seat_first') is-invalid @enderror" required autocomplete="available_seat_first" autofocus hidden>
            @endif
        @endforeach

          <button style="background-color:MediumSeaGreen; color: white; float: left;">Zmień</button>
          <button style="background-color:DodgerBlue; float: left;"><a style="color: white;" href="/admin/schedule_flights">Anuluj</a></button>
          </form>
          <form method="POST" action="/admin/schedule_flights/{{$flight->id}}"> @csrf  @method('DELETE') <button style="background-color:Tomato; color: white;">Usuń</button></form>
        
        </td>
      </tr>
    </tbody>
  </table>

<!--
<table class="table">
    <thead>
    
      <tr>
        <th scope="col"><label for="aircraft_id">Samolot:</label></th>
        <th scope="col"><label for="airport_departure_id">Odlot:</label></th>
        <th scope="col"><label for="departure_time">Odlot - czas:</label></th>
        <th scope="col"><label for="airport_arivval_id">Przylot:</label></th>
        <th scope="col"><label for="arrival_time">Przylot - czas:</label></th>
        <th width="15%"><label for="manage">Zarządzaj:</label></th>
      </tr>
    </thead>
    <tbody>
        <tr>
          <td>
            <select id="aircraft_id" name="aircraft_id" class="form-control @error('aircraft_id') is-invalid @enderror" required autocomplete="aircraft_id" onfocus='this.size=5;' onblur='this.size=1;' onchange='this.size=1; this.blur();'>
              @foreach($aircrafts as $aircraft)
                <option value="{{ $aircraft->id }}" @if($aircraft->id == $flight->aircraft_id) selected @endif >{{ $aircraft->model }}</option>
              @endforeach
            </select> 
          </td>
          <td>
            <select id="airport_departure_id" name="airport_departure_id" class="form-control @error('airport_departure_id') is-invalid @enderror" required autocomplete="airport_departure_id" onfocus='this.size=5;' onblur='this.size=1;' onchange='this.size=1; this.blur();'>
              @foreach($airports as $airport)
                <option value="{{ $airport->id }}" @if($airport->id == $flight->airport_departure_id) selected @endif >{{ $airport->name }}</option>
              @endforeach
            </select>
          </td>
          <td><input type="datetime-local" id='departure_time' name="departure_time" step="1" value="{{$date1}}" class="form-control datepicker @error('departure_time') is-invalid @enderror" required autocomplete="departure_time" autofocus></td>
          <td>
            <select id="airport_arrival_id" name="airport_arrival_id" class="form-control @error('airport_arrival_id') is-invalid @enderror" required autocomplete="airport_arrival_id" onfocus='this.size=5;' onblur='this.size=1;' onchange='this.size=1; this.blur();'>
              @foreach($airports as $airport)
                <option value="{{ $airport->id }}" @if($airport->id == $flight->airport_arrival_id) selected @endif >{{ $airport->name }}</option>
              @endforeach
            </select>
          </td>
          <td><input type="datetime-local" id='arrival_time' name="arrival_time" step="1"  value="{{$date2}}" class="form-control @error('arrival_time') is-invalid @enderror" required autocomplete="arrival_time" autofocus></td>
          <td>

          <button style="background-color:MediumSeaGreen; color: white;">Zmień</button><br>
          <button style="background-color:DodgerBlue;"><a style="color: white;" href="/admin/schedule_flights">Anuluj</a></button>
          </form>
          <form method="POST" action="/admin/schedule_flights/{{$flight->id}}"> @csrf  @method('DELETE') <button style="background-color:Tomato; color: white;">Usuń</button></form>
          </td>

         </tr>
      </tbody>
</table>
-->


                    

@endsection
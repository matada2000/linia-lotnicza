@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','manage_airports_edit')
@section('content')

<style>
  td, th {
  text-align: center;
}
  button {
    width: 50%;
    font-size: 18px;
    margin-bottom: 5px;
    border-radius: 25px;
    border: none;
  }
</style>

<br>
<h1 style="font-family: Courier, 'Lucida Console', monospace"><center>Edycja Lotu</center></h1>
<br>

<form method="POST" action="/admin/schedule_flights/{{$flight->id}}">

<script type="text/javascript">
         $(function () {
             $('#datetimepicker1').datetimepicker();
         });
      </script>

  @method('PUT')

  @csrf

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



                    

@endsection
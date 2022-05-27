@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','manage_airports_create')
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
<h1 style="font-family: Courier, 'Lucida Console', monospace"><center>Dodanie Lotu do Harmonogramu</center></h1>
<br>

<form method="POST" action="/admin/schedule_flights">


  @csrf

  <table class="table">
    <thead>
      <tr>
        <th scope="col"><label for="aircraft_id">Samolot:</label></th>
        <th scope="col"><label for="airport_departure_id">Odlot:</label></th>
        <th scope="col"><label for="airport_arrival_id">Przylot:</label></th>
        <th width="15%"><label for="manage">Zarządzaj:</label></th>
      </tr>
    </thead>
    <tbody>
        <tr>
          <td><input id="aircraft_id" name="aircraft_id" class="form-control @error('aircraft_id') is-invalid @enderror" required autocomplete="aircraft_id" autofocus></td>
          <td><input id="airport_departure_id" name="airport_departure_id" class="form-control @error('airport_departure_id') is-invalid @enderror" required autocomplete="airport_departure_id" autofocus></td>
          <td><input id="airport_arrival_id" name="airport_arrival_id" class="form-control @error('airport_arrival_id') is-invalid @enderror" required autocomplete="airport_arrival_id" autofocus></td>
          <td>

            <button style="background-color:MediumSeaGreen; color: white;">Dodaj</button>
            <button style="background-color:DodgerBlue;"><a style="color: white;" href="/admin/schedule_flights">Anuluj</a></button>

          </td>
        </tr>
      </tbody>
  </table>

</form>

                    

@endsection
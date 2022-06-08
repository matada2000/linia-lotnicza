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
<h1 style="font-family: Courier, 'Lucida Console', monospace"><center>Dodanie Samolotu</center></h1>
<br>

<form method="POST" action="/admin/manage_aircrafts">


  @csrf

  <table class="table">
    <thead>
      <tr>
        <th scope="col"><label for="model">Model:</label></th>
        <th scope="col"><label for="number_of_seats_economic">Liczba siedzeń - klasa ekonomiczna:</label></th>
        <th scope="col"><label for="number_of_seats_bisness">Liczba siedzeń - klasa biznes:</label></th>
        <th scope="col"><label for="number_of_seats_first">Liczba siedzeń - klasa pierwsza:</label></th>
        <th width="20%"><label for="manage">Zarządzaj:</label></th>
      </tr>
    </thead>
    <tbody>
        <tr>
          <td><input id="model" name="model" class="form-control @error('model') is-invalid @enderror" required autocomplete="model" autofocus></td>
          <td><input id="number_of_seats_economic" name="number_of_seats_economic" class="form-control @error('number_of_seats_economic') is-invalid @enderror" required autocomplete="number_of_seats_economic" autofocus></td>
          <td><input id="number_of_seats_bisness" name="number_of_seats_bisness" class="form-control @error('number_of_seats_bisness') is-invalid @enderror" required autocomplete="number_of_seats_bisness" autofocus></td>
          <td><input id="number_of_seats_first" name="number_of_seats_first" class="form-control @error('number_of_seats_first') is-invalid @enderror" required autocomplete="number_of_seats_first" autofocus></td>
          
          <td>

            <button style="background-color:MediumSeaGreen; color: white;">Dodaj</button>
            <button style="background-color:DodgerBlue;"><a style="color: white;" href="/admin/manage_aircrafts">Anuluj</a></button>

          </td>
        </tr>
      </tbody>
  </table>

</form>

                    

@endsection
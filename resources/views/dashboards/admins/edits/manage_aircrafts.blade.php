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
<h1 style="font-family: Courier, 'Lucida Console', monospace"><center>Edycja Lotniska</center></h1>
<br>

<form method="POST" action="/admin/manage_aircrafts/{{$aircraft->id}}">

  @method('PUT')

  @csrf

<table class="table">
    <thead>
    
      <tr>
        <th><label for="model">Model:</label></th>
        <th><label for="number_of_seats">Liczba siedzeń:</label></th>
        <th width="15%"><label for="manage">Zarządzaj:</label></th>
      </tr>
    </thead>
    <tbody>
        <tr>
          <td><input id="model" name="model" value="{{$aircraft->model}}" class="form-control @error('model') is-invalid @enderror" required autocomplete="model" autofocus></td>
          <td><input id="number_of_seats" name="number_of_seats" value="{{$aircraft->number_of_seats}}" class="form-control @error('number_of_seats') is-invalid @enderror" required autocomplete="number_of_seats" autofocus></td>
          

          <td>
          <button style="background-color:MediumSeaGreen; color: white;">Zmień</button><br>
          <button style="background-color:DodgerBlue;"><a style="color: white;" href="/admin/manage_aircrafts">Anuluj</a></button>
          </form>
          <form method="POST" action="/admin/manage_aircrafts/{{$aircraft->id}}"> @csrf  @method('DELETE') <button style="background-color:Tomato; color: white;">Usuń</button></form>
          </td>

         </tr>
      </tbody>
</table>



                    

@endsection
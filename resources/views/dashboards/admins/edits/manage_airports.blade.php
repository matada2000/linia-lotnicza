@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','manage_airports_edit')
@section('content')

<style>
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

<form method="POST" action="/admin/manage_airports/{{$airport->id}}">

  @method('PUT')

  @csrf

<table class="table">
    <thead>
    
      <tr>
        <th><label for="name">Nazwa:</label></th>
        <th><label for="country">Kraj:</label></th>
        <th><label for="city">Miasto:</label></th>
        <th width="15%"><label for="manage">Zarządzaj:</label></th>
      </tr>
    </thead>
    <tbody>
        <tr>
          <td><input id="name" name="name" value="{{$airport->name}}" class="form-control @error('name') is-invalid @enderror" required autocomplete="name" autofocus></td>
          <td><input id="country" name="country" value="{{$airport->country}}" class="form-control @error('country') is-invalid @enderror" required autocomplete="country" autofocus></td>
          <td><input id="city" name="city" value="{{$airport->city}}" class="form-control @error('city') is-invalid @enderror" required autocomplete="city" autofocus></td>

          <td>
          <button style="background-color:MediumSeaGreen; color: white;">Zmień</button><br>
          <button style="background-color:DodgerBlue;"><a style="color: white;" href="/admin/manage_airports">Anuluj</a></button>
          </form>
          <form method="POST" action="/admin/manage_airports/{{$airport->id}}"> @csrf  @method('DELETE') <button style="background-color:Tomato; color: white;">Usuń</button></form>
          </td>

         </tr>
      </tbody>
</table>



                    

@endsection
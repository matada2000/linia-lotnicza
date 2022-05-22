@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','manage_airports')
@section('content')

<style>
  .input1 {
    width: 15%;
    font-size: 18px;
    background-color: MediumSeaGreen;
    color: white;
    border-radius: 25px;
    border: none;
  }

  .input2 {
    width: 35%;
    font-size: 18px;
    background-color: ;
    border-radius: 25px;
    border: none;
    background-color: LightGray;
  }
</style>

<h2><center>Zarządzanie Lotniskami</center></h1>

<form action="/admin/manage_airports/create"><center><input class="input1" type="submit" value="Dodaj"></center></form>

<br>
<br>

<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">country</th>
        <th scope="col">city</th>
        <th scope="col">Stworzone</th>
        <th scope="col">Zaktualizowane</th>
        <th width="20%">Zarządzaj</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($airports as $airport)
        <tr>
          <th scope="row">{{ $airport->id }}</th>
          <td>{{ $airport->name }}</td>
          <td>{{ $airport->country }}</td>
          <td>{{ $airport->city }}</td>
          <td>{{ $airport->created_at }}</td>
          <td>{{ $airport->updated_at }}</td>
          <td><form action="/admin/manage_airports/{{$airport->id}}/edit"><input class="input2" type="submit" value="Edycja"></form></td>
        </tr>
      @endforeach
      </tbody>
  </table>

                    

@endsection
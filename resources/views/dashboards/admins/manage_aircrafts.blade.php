@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Manage aircrafts')
@section('content')

<style>
    td, th {
  text-align: center;
}
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

  .w-5{
    display: none;
  }
</style>

<h1 style="font-family: Courier, 'Lucida Console', monospace"><center>Zarządzanie Samolotami</center></h1>

<form action="/admin/manage_aircrafts/create"><center><input class="input1" type="submit" value="Dodaj"></center></form>

<br>
<br>

<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Model</th>
        <!--<th scope="col">Liczba siedzeń</th>-->
        <th scope="col">Liczba siedzeń - klasa biznes</th>
        <th scope="col">Liczba siedzeń - klasa ekonomiczna</th>
        <th scope="col">Liczba siedzeń - klasa pierwsza</th>
        <th scope="col">Stworzone</th>
        <th scope="col">Zaktualizowane</th>
        <th width="20%">Zarządzaj</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($aircrafts as $aircraft)
        <tr>
          <th scope="row">{{ $aircraft->id }}</th>
          <td>{{ $aircraft->model }}</td>
          <td>{{ $aircraft->number_of_seats_economic }}</td>
          <td>{{ $aircraft->number_of_seats_bisness }}</td>
          <td>{{ $aircraft->number_of_seats_first }}</td>
          <td>{{ $aircraft->created_at }}</td>
          <td>{{ $aircraft->updated_at }}</td>
          <td><form action="/admin/manage_aircrafts/{{$aircraft->id}}/edit"><input class="input2" type="submit" value="Edycja"></form></td>
        </tr>
      @endforeach
      </tbody>
  </table>

  <span>
    {{$aircrafts->links()}}
  </span>

@endsection
@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Harmonogram lotów')
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
</style>

<h1 style="font-family: Courier, 'Lucida Console', monospace"><center>Zarządzanie Harmonogramem Lotów</center></h1>

<form action="/admin/schedule_flights/create"><center><input class="input1" type="submit" value="Dodaj"></center></form>

<br>
<br>

<?php
 //SELECT s.model, l.name, d.name FROM flights AS f JOIN aircraft AS s ON f.aircraft_id = s.id JOIN airports AS l ON f.airport_departure_id = l.id JOIN airports AS d ON f.airport_arrival_id = d.id;
?>

<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Samolot</th>
        <th scope="col">Odlot</th>
        <th scope="col">Przylot</th>
        <th scope="col">Stworzone</th>
        <th scope="col">Zaktualizowane</th>
        <th width="20%">Zarządzaj</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($flights as $flight)
        <tr>
          <th scope="row">{{ $flight->id }}</th>
          <td>{{ $flight->model}}</td>
          <td>{{ $flight->o }}</td>
          <td>{{ $flight->p }}</td>
          <td>{{ $flight->created_at }}</td>
          <td>{{ $flight->updated_at }}</td>
          <td><form action="/admin/schedule_flights/{{$flight->id}}/edit"><input class="input2" type="submit" value="Edycja"></form></td>
        </tr>
      @endforeach
      </tbody>
  </table>

@endsection
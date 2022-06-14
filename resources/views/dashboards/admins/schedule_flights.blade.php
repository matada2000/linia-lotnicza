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
    width: 50%;
    font-size: 18px;
    background-color: ;
    border-radius: 25px;
    border: none;
    background-color: LightGray;
  }

  .input3 {
    width: 75%;
    font-size: 18px;
    background-color: ;
    border: none;
    background-color: LightBlue;
  }

  .dropdown {
  position: relative;
  display: inline-block;
  margin-top: 10px;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
}

.dropdown:hover .dropdown-content {
  display: block;
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
        <th scope="col">Data Odlotu</th>
        <th scope="col">Przylot</th>
        <th scope="col">Data Przylotu</th>
        <th scope="col">Stworzone</th>
        <th scope="col">Zaktualizowane</th>
        <th width="15%">Zarządzaj</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($flights as $flight)
        <tr>
          <th scope="row">{{ $flight->id }}</th>
          <td>{{ $flight->model}}</td>
          <td>{{ $flight->o }}</td>
          <td>{{ $flight->departure_time }}</td>
          <td>{{ $flight->p }}</td>
          <td>{{ $flight->arrival_time }}</td>
          <td>{{ $flight->created_at }}</td>
          <td>{{ $flight->updated_at }}</td>
          <td><form action="/admin/schedule_flights/{{$flight->id}}/edit"><input class="input2" type="submit" value="Edycja"></form>
          <div class="dropdown">
            <span class='input3'>Lista pracowników</span>
            <div class="dropdown-content">
              @foreach($pracas as $praca)
                @if($praca->flight_id == $flight->id)
                  <p style="border-bottom: 1px solid lightGray;">{{ $praca->surname }}  {{ $praca->name }} <br><i> {{ $praca->description }} </i></p>
                @endif
              @endforeach
            </div>
          </div>
          </td>
        </tr>
      @endforeach
      </tbody>
  </table>

@endsection
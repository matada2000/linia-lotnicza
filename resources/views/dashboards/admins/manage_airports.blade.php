@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','manage_airports')
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

<h1 style="font-family: Courier, 'Lucida Console', monospace"><center>Zarządzanie Lotniskami</center></h1>

<form action="/admin/manage_airports/create"><center><input class="input1" type="submit" value="Dodaj"></center></form>

<br>
<br>

<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nazwa</th>
        <th scope="col">Kraj</th>
        <th scope="col">Miasto</th>
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

      
  <span>
    {{$airports->links()}}
  </span>

@endsection
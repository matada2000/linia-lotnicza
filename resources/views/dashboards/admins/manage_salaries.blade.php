@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Manage salaries')
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

<h1 style="font-family: Courier, 'Lucida Console', monospace"><center>Zarządzanie wypłatami</center></h1>

<form action="/admin/manage_salaries/create"><center><input class="input1" type="submit" value="Dodaj"></center></form>

<br>
<br>

<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Kwota</th>
        <th scope="col">Okres od</th>
        <th scope="col">Okres do</th>
        <th scope="col">Stworzone</th>
        <th scope="col">Zaktualizowane</th>
        <th scope="col">Id pracownika</th>
        <th width="20%">Zarządzaj</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($salaries as $salary)
        <tr>
          <th scope="row">{{ $salary->id }}</th>
          <td>{{ $salary->ammount }}</td>
          <td>{{ $salary->period_from }}</td>
          <td>{{ $salary->period_to }}</td>
          <td>{{ $salary->created_at }}</td>
          <td>{{ $salary->updated_at }}</td>
          <td>{{ $salary->user_id }}</td>
          <td><form action="/admin/manage_salaries/{{$salary->id}}/edit"><input class="input2" type="submit" value="Edycja"></form></td>
        </tr>
      @endforeach
      </tbody>
  </table>

@endsection
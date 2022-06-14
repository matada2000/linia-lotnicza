@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Manage_employees')
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
    width: 25%;
    font-size: 18px;
    border-radius: 25px;
    border: none;
    background-color: LightGray;
  }

  .w-5{
    display: none;
  }
</style>

<h1 style="font-family: Courier, 'Lucida Console', monospace"><center>Zarządzanie Pracownikami</center></h1>

<form action="/admin/manage_employees/create"><center><input class="input1" type="submit" value="Dodaj"></center></form>

<br>
<br>

<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Imie</th>
        <th scope="col">Nazwisko</th>
        <th scope="col">e-mail</th>
        <th scope="col">Opis</th>
        <th scope="col">Stworzone</th>
        <th scope="col">Zaktualizowane</th>
        <th width="25%">Zarządzaj</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($employees as $employee)
        <tr>
          <th scope="row">{{ $employee->id }}</th>
          <td>{{ $employee->name }}</td>
          <td>{{ $employee->surname }}</td>
          <td>{{ $employee->email }}</td>
          <td>{{ $employee->description }}</td>  
          <td>{{ $employee->created_at }}</td>
          <td>{{ $employee->updated_at }}</td>
          <td><form action="/admin/manage_employees/{{$employee->id}}/edit"><input class="input2" type="submit" value="Edycja"></form></td>
        </tr>
      @endforeach
      </tbody>
  </table>

  <span>
    {{$employees->links()}}
  </span>

@endsection
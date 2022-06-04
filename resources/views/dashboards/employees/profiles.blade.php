@extends('dashboards.employees.layouts.employee-dash-layout')
@section('title','Profile')
@section('content')

<style>
  table {
    font-size: 20px;
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
    width: 15%;
    font-size: 18px;
    background-color: ;
    border-radius: 25px;
    border: none;
    background-color: LightGray;
  }
</style>

<br>
<h1 style="font-family: Courier, 'Lucida Console', monospace"><center>Profil</center></h1>
<br>

<div class="image">
  <center><img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"></center>
</div>
<br>

<table class="table">
  @foreach ($users as $user)
    @if($user->id == Auth::user()->id)
    <col width="50%">
    <col width="50%">
      <tr>
        <th style="text-align: right;" scope="col"><label for="name">Imie:</label></th>
        <td scope="col">{{ $user->name }}</td>
      </tr>
    
        <tr>
          <th style="text-align: right;" scope="col"><label for="name">Nazwisko:</label></th>
          <td scope="col">{{ $user->surname }}</td>
        </tr>
    
        <tr>
          <th style="text-align: right;" scope="col"><label for="name">E-mail:</label></th>
          <td scope="col">{{ $user->email }}</td>
        </tr>
   
        <tr>
          <th style="text-align: right;" scope="col"><label for="name">Stworzone:</label></th>
          <td scope="col">{{ $user->created_at }}</td>
        </tr>
    
        <tr>
          <th style="text-align: right;" scope="col"><label for="name">Zaktualizowane:</label></th>
          <td scope="col">{{ $user->updated_at }}</td>
        </tr>
     
    @endif
  @endforeach
  </table>

<center><form action="/employee/profiles/{{Auth::user()->id}}/edit"><input class="input2" type="submit" value="Edycja"></form></center>

@endsection
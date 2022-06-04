@extends('dashboards.employees.layouts.employee-dash-layout')
@section('title','Profile_edit')
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
<h1 style="font-family: Courier, 'Lucida Console', monospace"><center>Edycja danych</center></h1>
<br>

<form method="POST" action="/employee/profiles/{{$profile->id}}">

  @method('PUT')

  @csrf

<table class="table">
    <thead>
    
      <tr>
        <th scope="col"><label for="name">Imie:</label></th>
        <th scope="col"><label for="surname">Nazwisko:</label></th>
        <th scope="col"><label for="email">E-mail:</label></th>
        <th scope="col"><label for="password">Hasło:</label></th>
        <th scope="col"><label for="password-confirm">Powtórz Hasło:</label></th>
        <th width="25%"><label for="manage">Zarządzaj:</label></th>
      </tr>
    </thead>
    <tbody>
        <tr>
          <td><input id="name" name="name" value="{{$profile->name}}" class="form-control @error('name') is-invalid @enderror" required autocomplete="name" autofocus></td>
          <td><input id="surname" name="surname" value="{{$profile->surname}}" class="form-control @error('surname') is-invalid @enderror" required autocomplete="surname" autofocus></td>
          <td><input id="email" name="email" value="{{$profile->email}}" class="form-control @error('email') is-invalid @enderror" required autocomplete="email"></td>
          <td><input id="password" name="password" type="password" value="{{$profile->password}}" class="form-control @error('password') is-invalid @enderror" required autocomplete="new-password"></td>
          <td><input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"></td>
          <td>
            <input type="hidden" id="role" name="role" value="3">
          <button style="background-color:MediumSeaGreen; color: white;">Zmień</button><br>
          <button style="background-color:DodgerBlue;"><a style="color: white;" href="/employee/profiles">Anuluj</a></button>
          </form>
          </td>

         </tr>
      </tbody>
</table>



                    

@endsection
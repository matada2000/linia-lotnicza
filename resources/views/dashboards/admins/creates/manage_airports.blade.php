@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','manage_airports_create')
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

<form method="POST" action="/admin/manage_airports">


  @csrf

  <table class="table">
    <thead>
      <tr>
        <th scope="col"><label for="name">Nazwa:</label></th>
        <th scope="col"><label for="country">Kraj:</label></th>
        <th scope="col"><label for="city">Miasto:</label></th>
        <th width="15%"><label for="city">Zarządzaj:</label></th>
      </tr>
    </thead>
    <tbody>
        <tr>
          <td><input id="name" name="name"></td>
          <td><input id="country" name="country"></td>
          <td><input id="city" name="city"></td>
          <td>

            <button style="background-color:MediumSeaGreen; color: white;">Dodaj</button>
            <button style="background-color:DodgerBlue;"><a style="color: white;" href="/admin/manage_airports">Anuluj</a></button>

          </td>
        </tr>
      </tbody>
  </table>

</form>

                    

@endsection
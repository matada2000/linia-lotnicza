@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','manage_salaries_create')
@section('content')

<style>
  td, th {
  }

  button {
    font-size: 18px;
    margin-bottom: 5px;
    border-radius: 25px;
    border: none; 
    width: 25%;
  }
  
</style>

<br>
<h1 style="font-family: Courier, 'Lucida Console', monospace"><center>Dodanie Wypłaty</center></h1>
<br>

<form method="POST" action="/admin/manage_salaries">


  @csrf

  <table class="table">
    <thead>
      <tr>
        <th scope="col"><label for="ammount">Kwota:</label></th>
        <th scope="col"><label for="period_from">Okres od:</label></th>
        <th scope="col"><label for="period_to">Okres do:</label></th>
        <th scope="col"><label for="user_id">Pracownik:</label></th>
        <th width="20%"><label for="manage">Zarządzaj:</label></th>
      </tr>
    </thead>
    <tbody>
        <tr>
          <td><input id="ammount" name="ammount" class="form-control @error('ammount') is-invalid @enderror" required autocomplete="ammount" autofocus></td>
          <td><input id="period_from" type="date" name="period_from" class="form-control @error('period_from') is-invalid @enderror" required autocomplete="period_from" autofocus></td>
          <td><input id="period_to" type="date" name="period_to" class="form-control @error('period_to') is-invalid @enderror" required autocomplete="period_to" autofocus></td>
          <td><select style="width: 100%;" id="user_id" name="user_id" class="form-control @error('user_id') is-invalid @enderror" required autocomplete="user_id" onfocus='this.size=5;' onblur='this.size=1;' onchange='this.size=1; this.blur();'>
            @foreach($users as $user)
            @if($user->role == '3')
              <option value="{{ $user->id }}">{{ $user->id }}</option>
            @endif
            @endforeach
          </select></td>

          <td>

            <button style="background-color:MediumSeaGreen; color: white;">Dodaj</button>
            <button style="background-color:DodgerBlue;"><a style="color: white;" href="/admin/manage_salaries">Anuluj</a></button>

          </td>
        </tr>
      </tbody>
  </table>

</form>

                    

@endsection
@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','manage_airports_create')
@section('content')

<style>
  td, th {
  
}
  button {
    font-size: 18px;
    margin-bottom: 5px;
    border-radius: 25px;
    border: none; 
    width: 15%;
  }

</style>

<br>
<h1 style="font-family: Courier, 'Lucida Console', monospace"><center>Dodanie Lotu do Harmonogramu</center></h1>
<br>

<form method="POST" action="/admin/schedule_works">

  @csrf

  <table class="table">
    <tbody>
      <tr>
        <th scope="col"><label for="user_id">Pracownik:</label></th>
        <td>
          <select style="width: 50%;" id="user_id" name="user_id" class="form-control @error('user_id') is-invalid @enderror" required autocomplete="user_id" onfocus='this.size=5;' onblur='this.size=1;' onchange='this.size=1; this.blur();'>
            @foreach($employees as $employee)
                <option value="{{ $employee->id }}">{{ $employee->description }} - {{ $employee->surname }} {{ $employee->name }}</option>
            @endforeach
          </select> 
        </td>
      </tr>
    </tbody>
    <tbody>
      <tr>
        <th scope="col"><label for="flight_id">Lot:</label></th>
        <td>
          <select style="width: 50%;" id="flight_id" name="flight_id" class="form-control @error('flight_id') is-invalid @enderror" required autocomplete="flight_id" onfocus='this.size=5;' onblur='this.size=1;' onchange='this.size=1; this.blur();'>
            @foreach($flights as $flight)
                <option value="{{ $flight->id }}">{{ $flight->id }}</option>
            @endforeach
          </select> 
        </td>
      </tr>
    </tbody>
    <tbody>
      <tr>
        <th width="15%"><label for="manage">Zarządzaj:</label></th>
        <td>

        <button style="background-color:MediumSeaGreen; color: white;">Dodaj</button>&nbsp;&nbsp;
        <button style="background-color:DodgerBlue;"><a style="color: white;" href="/admin/schedule_works">Anuluj</a></button>
        
        </td>
      </tr>
    </tbody>
  </table>

</form>
                    

@endsection
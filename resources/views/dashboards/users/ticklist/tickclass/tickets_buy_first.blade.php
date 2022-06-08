@extends('dashboards.users.layouts.user-dash-layout')
@section('title','Tickets')
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

<form method="POST" action="/user/tickets">


  @csrf

  <table class="table">
    <tbody>
      <tr>
        <th scope="col"><label for="class">Klasa:</label></th>
        <td>
            <input style="width: 50%; background-color: lightgray;" id="class" name="class" class="form-control @error('class') is-invalid @enderror" value="Pierwszy" disabled>
        </td>
      </tr>
    </tbody>
    <tbody>
      <tr>
        <th scope="col"><label for="seat_number">Miejsce Siedzenia:</label></th>
        <td>
            <input type="number" style="width: 50%;" id="seat_number" name="seat_number" class="form-control @error('seat_number') is-invalid @enderror" required autocomplete="seat_number" autofocus>
        </td>
      </tr>
    </tbody>
    <tbody>
      <tr>
        <th width="15%"><label for="manage">Zarządzaj:</label></th>
        <td>
            <input style="width: 50%; background-color: lightgray;" id="class" name="class" class="form-control @error('class') is-invalid @enderror" value="first" hidden>
            <input style="width: 50%; background-color: lightgray;" id="user_id" name="user_id" class="form-control @error('user_id') is-invalid @enderror" value="{{Auth()->user()->id}}" hidden>
            <input style="width: 50%; background-color: lightgray;" id="flight_id" name="flight_id" class="form-control @error('flight_id') is-invalid @enderror" value="{{$flight->id}}" hidden>

        <button style="background-color:MediumSeaGreen; color: white;">Zatwierdz transakcje</button>&nbsp;&nbsp;
        <button style="background-color:DodgerBlue;"><a style="color: white;" href="/user/tickets">Anuluj</a></button>
        
        </td>
      </tr>
    </tbody>
  </table>

</form>

@endsection
@extends('dashboards.users.layouts.user-dash-layout')
@section('title','Reservations')
@section('content')

<table class="table table-striped">
  <thead>
    <th>ID</th>
    <th>Klasa</th>
    <th>Reklamacja</th>
    <th>Miejsce siedzenia</th>
    <th>User_id</th>
    <th>Flight_id</th>
    <th>Zarządzaj</th>
  </thead>
  <tbody>
    @foreach($tickets as $ticket)
    <tr>
      <td>{{$ticket->id}}</td>
      <td>{{$ticket->class}}</td>
      <td>{{$ticket->complaint}}</td>
      <td>{{$ticket->seat_number}}</td>
      <td>{{$ticket->user_id}}</td>
      <td>{{$ticket->flight_id}}</td>
      <td><form action="/user/reservations/{{$ticket->id}}/pdf"><input class="input2" type="submit" value="PDF"></form></td>
    </tr>
    @endforeach

  </tbody>
</table>

@endsection
@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Dodaj pracownika')
@section('content')

<style>
  td, th {
  
}
  button {
    font-size: 18px;
    margin-bottom: 5px;
    border-radius: 25px;
    border: none; 
    width: 13%;
    margin-left: 5px;
  }
</style>

<br>
<h1 style="font-family: Courier, 'Lucida Console', monospace"><center>Dodaj pracownika do lotu</center></h1>
<br>

<form method="POST" action="/admin/schedule_flights/{{$flight->id}}">

  @method('PUT')

  @csrf

  <table class="table">
    <tbody>
      <tr>
        <th scope="col"><label for="aircraft_id">Dodaj pracownika</label></th>
        <td>
          <select style="width: 50%;" id="user_id" name="user_id" class="form-control @error('user_id') is-invalid @enderror" required autocomplete="user_id" onfocus='this.size=5;' onblur='this.size=1;' onchange='this.size=1; this.blur();'>
            @foreach($users as $user)
            @if($user->role == '3')
              <option value="{{ $user->id }}">{{ $user->name }} {{ $user->surname }} {{ $user->description }}</option>
            @endif
            @endforeach
          </select> 
        </td>
        <td>
          <button>Dodaj do lotu</button>
          
        </td>
      </tr>
    </tbody>
  </table>




                    

@endsection
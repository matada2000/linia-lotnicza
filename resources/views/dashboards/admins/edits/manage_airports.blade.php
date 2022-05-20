@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','manage_airports_edit')
@section('content')

<form method="POST" action="/admin/manage_airports/{{$airport->id}}">

  @method('PUT')

  @csrf

  <div>
    <label for="name">NAME:</label>
    <input id="name" name="name" value="{{$airport->name}}">
  </div>
  <div>
    <label for="country">COUNTRY:</label>
    <input id="country" name="country" value="{{$airport->country}}">
</div>
<div>
    <label for="city">CITY:</label>
    <input id="city" name="city" value="{{$airport->city}}">
</div>  

<button>Zmień</button>

</form>

                    

@endsection
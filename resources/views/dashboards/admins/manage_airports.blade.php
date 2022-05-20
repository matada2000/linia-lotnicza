@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','manage_airports')
@section('content')


<br>
<br>

<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">country</th>
        <th scope="col">city</th>
        <th scope="col">Edycja</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($airports as $airport)
        <tr>
          <th scope="row">{{ $airport->id }}</th>
          <td>{{ $airport->name }}</td>
          <td>{{ $airport->country }}</td>
          <td>{{ $airport->city }}</td>
          <td><form action="/admin/manage_airports/{{$airport->id}}/edit"><input type="submit" value="Edycja"></form></td>
        </tr>
      @endforeach
      </tbody>
  </table>

                    

@endsection
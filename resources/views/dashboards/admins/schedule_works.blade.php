@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Harmonogram prac')
@section('content')

<style>
    td, th {
  text-align: center;
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
    width: 40%;
    font-size: 18px;
    background-color: ;
    border-radius: 25px;
    border: none;
    background-color: LightGray;
  }

  .w-5{
    display: none;
  }

  i {
      font-size: 13px;
  }
</style>

<h1 style="font-family: Courier, 'Lucida Console', monospace"><center>Zarządzanie Harmonogramem Pracy</center></h1>

<form action="/admin/schedule_works/create"><center><input class="input1" type="submit" value="Dodaj"></center></form>

<br>
<br>

<table class="table">
    <thead>
      <tr>
        <th scope="col">Imie</th>
        <th scope="col">Nazwisko</th>
        <th scope="col">Stanowisko</th>
        <th width="35%">Lot</th>
        <th width="15%">Zarządzaj</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($pracas as $praca)
        <tr>
          <td style="border-bottom: 1px solid lightGray; vertical-align: middle;">{{ $praca->name }}</td>
          <td style="border-bottom: 1px solid lightGray; vertical-align: middle;">{{ $praca->surname }}</td>
          <td style="border-right: 1px solid lightGray; border-bottom: 1px solid lightGray; vertical-align: middle;">{{ $praca->description }}</td>
          <td style="border-right: 1px solid lightGray; border-bottom: 1px solid lightGray;">
            @foreach($airports as $airport)
                @if($airport->id == $praca->airport_departure_id)
                    {{ $airport->name  }}
                @endif
            @endforeach<br>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i>({{ $praca->departure_time }})</i><br> 
            | <br>
            <i>
            @foreach($aircrafts as $aircraft)
                @if($aircraft->id == $praca->airport_arrival_id)
                    {{ $aircraft->model  }}
                @endif
            @endforeach
            </i><br>
            \/ <br>
            @foreach($airports as $airport)
                @if($airport->id == $praca->airport_arrival_id)
                    {{ $airport->name  }}
                @endif
            @endforeach<br>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i>({{ $praca->arrival_time }})</i>
            </td>
          <td style="border-bottom: 1px solid lightGray; vertical-align: middle;"><form action="/admin/schedule_works/{{$praca->id}}/edit"><input class="input2" type="submit" value="Edycja"></form></td>
        </tr>
      @endforeach
      </tbody>
  </table>

  <span>
    {{$pracas->links()}}
  </span>
  

@endsection
@extends('dashboards.employees.layouts.employee-dash-layout')
@section('title','Schedule Works')
@section('content')
<?php
  use Carbon\Carbon;
?>

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
    width: 35%;
    font-size: 18px;
    background-color: ;
    border-radius: 25px;
    border: none;
    background-color: LightGray;
  }

  .w-5{
    display: none;
  }
</style>

<h1 style="font-family: Courier, 'Lucida Console', monospace"><center>Twoj Harmonogram</center></h1>

<br>
<br>

<table class="table">
    <thead>
      <tr>
        <th scope="col">Czas od</th>
        <th scope="col">Czas do</th>
        <th scope="col">liczba godzin</th>
        <th scope="col">Skąd</th>
        <th scope="col">Dokąd</th>
        <th scope="col">Samolot</th>
      </tr>
    </thead>
      @foreach ($pracas as $praca)
      @if($zmienna != $praca->data)
      <tbody>
        <tr>
          <td colspan='5' style="text-align: left; color: blue;">Data pracy: {{ $praca->data }}</td>
        </tr>
      </tbody>
      @endif
      <tbody>
            <tr>
            <td>{{ $praca->od_time }}</td>
            <td>{{ $praca->do_time }}</td>
            <td>
              
                @php ($formatted_dt1=Carbon::parse($praca->od_time))
                @php ($formatted_dt2=Carbon::parse($praca->do_time))
                @php ($date_diff=$formatted_dt1->diffInSeconds($formatted_dt2))
      
              {{ gmdate('H:i', $date_diff) }}
            </td>
            <td>
            @foreach($airports as $airport)
                @if($airport->id == $praca->airport_departure_id)
                    {{ $airport->name  }}
                @endif
            @endforeach
            </td>
            <td>
            @foreach($airports as $airport)
                @if($airport->id == $praca->airport_arrival_id)
                    {{ $airport->name  }}
                @endif
            @endforeach
            </td> 
            <td>
            @foreach($aircrafts as $aircraft)
                @if($aircraft->id == $praca->airport_arrival_id)
                    {{ $aircraft->model  }}
                @endif
            @endforeach
            </td> 
            </tr>
      <?php
        $zmienna = $praca->data
      ?>
      </tbody>
      @endforeach
  </table>

 

@endsection
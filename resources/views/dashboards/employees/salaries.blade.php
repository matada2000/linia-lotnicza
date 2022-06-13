@extends('dashboards.employees.layouts.employee-dash-layout')
@section('title','Salaries')
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

<h1 style="font-family: Courier, 'Lucida Console', monospace"><center>Twoje Wypłaty</center></h1>

<br>
<br>

<table class="table">
    <thead>
      <tr>
        <th scope="col">Kwota</th>
        <th scope="col">Okres od</th>
        <th scope="col">Okres do</th>
        <th scope="col">Stworzone</th>
        <th scope="col">Zaktualizowane</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($salaries as $salary)
        @if(Auth()->user()->id == $salary->user_id)
            <tr>
            <td>{{ $salary->ammount }}</td>
            <td>{{ $salary->period_from }}</td>
            <td>{{ $salary->period_to }}</td>
            <td>{{ $salary->created_at }}</td>
            <td>{{ $salary->updated_at }}</td> 
            </tr>
        @endif
      @endforeach
      </tbody>
  </table>

 

@endsection
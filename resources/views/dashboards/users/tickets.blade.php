@extends('dashboards.users.layouts.user-dash-layout')
@section('title','Tickets')
@section('content')

<style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .card {
          text-align: center;
          width: 90%;
          display: block;
          margin: 0;
          padding: 0;
          height: 20%;
          margin-top: 2%;
          border: solid 1px LightGray;
      }

      .input2 {
        width: 15%;
        font-size: 18px;
        background-color: ;
        border-radius: 25px;
        border: none;
        background-color: MediumSeaGreen;
        color: white;
    }
        .te {
            border-radius: 25px;
            border: none;
            background-color: lightblue;
            padding: 2%;
        }

        table {
            width: 100%;
        }
</style>


    <center>
    @foreach ($flights as $flight)
      <div class="card">
        <div class="card-body">
          <table>
            <thead>
                <th width="25%">Odlot:</th>
                <td scope="col">{{$flight->model}}</td>
                <th width="25%">Przylot:</th>
            </thead>
            <thead>
                <td><p class="card-text"><h5><span class="te">{{ $flight->o }}</span></h5></p></td>  
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&rsaquo;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td><p class="card-text"><h5><span class="te">{{ $flight->p }}</span></h5></p></td>
            </thead>
            <thead>
                <td><i>{{ $flight->departure_time }}</i></td>  
                <td></td>
                <td><i>{{ $flight->arrival_time }}</i></td>
            </thead>
          </table>
          <form action="/user/tickets_list/{{$flight->id}}/tickets"><input class="input2" type="submit" value="Zobacz bilety"></form>
        </div>
      </div>
    @endforeach
    </center>


@endsection
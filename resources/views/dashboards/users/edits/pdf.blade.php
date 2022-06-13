<html lang="pl-pl" xml:lang="pl">
  <head>
    <meta charset="utf-8">
    <title></title>

    <style>

      body {
        font-size: 20px;
      }

    </style>

</head>
  <body>
  <hr>
  <table class="table" style="width: 100%;">
    <tbody>
      <tr>
        <th scope="col" style="text-align: right;"><label for="class">Klasa:</label></th>
        <td>
            @if($ticket->class == 'economic')
              Ekonomiczna
            @elseif($ticket->class == 'bisness')
              Biznesowa
            @elseif($ticket->class == 'first')
              Pierwsza
            @endif
        </td>
        <th scope="col" style="text-align: right;"><label for="seat_number">Miejsce Siedzenia:</label></th>
        <td>
            {{$ticket->seat_number}}
        </td>
      </tr>
    </tbody>
  </table>
  <br><br>
  <hr style="width: 100%; height: 50px; background-color: black;">
  <br>
    <table class="table" style="width: 100%;">
    @foreach ($flights as $flight)
    @if($flight->id == $ticket->flight_id)
      <tbody>
        <tr>
          <th scope="col">Samolot:<label for="class"></label></th>
          <td>{{$flight->model}}</td>
       </tr>
      </tbody>
      <tbody>
        <tr>
          <td colspan="2">
            <hr style="width: 75%; color: lightgray;">
          </td>
        </tr>
      </tbody>

      <tbody>
        <tr>
          <th scope="col">Odlot:<label for="class"></label></th>
          <td>{{$flight->o}}</td>
       </tr>
      </tbody>
      <tbody>
        <tr>
          <td colspan="2">
            <hr style="width: 75%; color: lightgray;">
          </td>
        </tr>
      </tbody>

      <tbody>
        <tr>
          <th scope="col">Data i godzina odlotu:<label for="class"></label></th>
          <td>{{$flight->departure_time}}</td>
       </tr>
      </tbody>
      <tbody>
        <tr>
          <td colspan="2">
            <hr style="width: 75%; color: lightgray;">
          </td>
        </tr>
      </tbody>

      <tbody>
        <tr>
          <th scope="col">Przylot:<label for="class"></label></th>
          <td>{{$flight->p}}</td>
       </tr>
      </tbody>
      <tbody>
        <tr>
          <td colspan="2">
            <hr style="width: 75%; color: lightgray;">
          </td>
        </tr>
      </tbody>

      <tbody>
        <tr>
          <th scope="col">Planowana data i godzina przylotu:<label for="class"></label></th>
          <td>{{$flight->arrival_time}}</td>
       </tr>
      </tbody>
      <tbody>
        <tr>
          <td colspan="2">
            <hr style="width: 75%; color: lightgray;">
          </td>
        </tr>
      </tbody>
    @endif
    @endforeach
    </table>
  </body>
</html>
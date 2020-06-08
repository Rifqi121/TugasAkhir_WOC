<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Education</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
        <style media="screen">
          th{
            background-color: rgba(0, 136, 169, 1);
          }
          .badan{
            font-size: 13pt;
          }
        </style>
    </head>
    <body>
        <header>
            <a href="{{url('/homepage/create')}}" class="login">Login</a>
            <nav>
                <ul class="nav__links">
                    <li><a href="{{ url('/homepage') }}">Homepage</a></li>
                    <li><a href="{{ url('/cara') }}">Prevention & Care</a></li>
                    <li> <a href="{{ url('/data') }}">Statistik</a> </li>
                    <li><a href="#">Rumah Sakit Rujukan</a></li>
                </ul>
            </nav>
            <p class="menu cta">Menu</p>
        </header>
        <div id="mobile__menu" class="overlay">
            <a class="close">&times;</a>
            <div class="overlay__content">
                <a href="{{ url('/homepage') }}">Homepage</a>
                <a href="{{ url('/cara') }}">Prevention & Care</a>
                <a href="{{ url('/data') }}">Statistik</a>
                <a href="#">Rumah Sakit Rujukan</a>
            </div>
        </div>

        <div class="badan" id="badan">
          <p>Daftar Rumah Sakit rujukan</p>
          <table border="0" style="width:100%;">
            <tr>
              <th id="no">No</th>
              <th>Nama Rumah Sakit</th>
              <th>Provinsi</th>
              <th>Telepon</th>
              <th>Alamat</th>
            </tr>
            @foreach ($education as $row)
            <tr align="center">
              <td>{{ isset($i) ? ++$i : $i = 1 }}</td>
              <td>{{ $row->rumahsakit }}</td>
              <td>{{ $row->provinsi }}</td>
              <td>{{ $row->telepon }}</td>
              <td>{{ $row->alamat }}</td>
            </tr>
            @endforeach
          </table>
        </div>
        <script type="text/javascript" src="mobile.js"></script>
    </body>
</html>

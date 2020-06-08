<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Statistik</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap" rel="stylesheet">
        <style media="screen">

        * {
          box-sizing: border-box;
          margin: 0;
          padding: 0;
        }

        body{
          background: #46474c;
          font-family: BalsamiqSans, cursive;
          font-size: 12pt;
          color: white;
          font-weight: lighter;
        }

        h1{
          font-weight: lighter;
        }

        .satu{
          border-radius: 5px;
          font-size: 12px;
          margin: 20px;
          height: 100%;
          padding: 10px;
        }

        .dua{
          list-style: none;
          display: flex;
          margin-bottom: 20px;
          font-size: 14px;
          position: translate(-10%)
        }

        .tiga{
          margin-top: 20px;
          padding: 10px;
        }

        table{
          border: 1px solid;
          background-color: white;
          color: black;
          width: 100%;
          height: 30px;
          font-size: 14px;
          font-family: BalsamiqSans, cursive;
          border-radius: 8px;
        }

        #no{
          width: 50px;
        }

        .data{
          background-color: white;
          color: black;
          height: 70px;
          width: auto;
          padding: 10px;
          padding-top: 25px;
          font-size: 17px;
          font-family: sans-serif;
          border-radius: 8px;
          box-shadow: 2px 2px 2px #000;
          margin-right: 30px;
          margin-top: 10px;
        }

        header {
          display: flex;
          justify-content: space-between;
          align-items: center;
          padding:10px ;
          background-color: #24252a;
        }

        .logo {
          cursor: pointer;
          order: 3;
          margin-left: auto;
        }

        nav {
          order: 1;
        }

        .login{
          margin-left: 20px;
          order: 3;
          margin-left: 20px;
          padding: 5px 19px;
          background-color: rgba(0, 136, 169, 1);
          border: none;
          border-radius: 50px;
          cursor: pointer;
          transition: all 0.3s ease 0s;
        }

        .nav__links a,
        .login,
        .cta,
        .overlay__content a {
          font-family: "Montserrat", sans-serif;
          font-weight: 500;
          color: #edf0f1;
          text-decoration: none;
          font-size: 13px;
        }

        .nav__links {
          list-style: none;
          display: flex;
          font-size: 14px;
          position: translate(-10%)
        }

        .nav__links li {
          padding: 0px 20px;
        }

        .nav__links li:nth-child(1) {
          padding: 0 20px 0 0;
        }

        .nav__links li a {
          transition: all 0.3s ease 0s;
        }

        .nav__links li a:hover {
          color: #0088a9;
        }

        .cta {
          order: 2;
          margin-left: 20px;
          padding: 5px 19px;
          background-color: rgba(0, 136, 169, 1);
          border: none;
          border-radius: 50px;
          cursor: pointer;
          transition: all 0.3s ease 0s;
        }

        .cta:hover {
          background-color: rgba(0, 136, 169, 0.8);
        }
        .login:hover {
          background-color: rgba(0, 136, 169, 0.8);
        }

        /* Mobile Nav */

        .menu {
          display: none;
        }

        .overlay {
          height: 100%;
          width: 0;
          position: fixed;
          z-index: 1;
          left: 0;
          top: 0;
          background-color: #24252a;
          overflow-x: hidden;
          transition: all 0.5s ease 0s;
        }

        .overlay--active {
          width: 100%;
        }

        .overlay__content {
          display: flex;
          height: 100%;
          flex-direction: column;
          align-items: center;
          justify-content: center;
          font-size: 10px;
        }

        .overlay a {
          padding: 15px;
          font-size: 25px;
          display: block;
          transition: all 0.3s ease 0s;
        }

        .overlay a:hover,
        .overlay a:focus {
          color: #0088a9;
        }
        .overlay .close {
          position: absolute;
          top: 20px;
          right: 45px;
          font-size: 60px;
          color: #edf0f1;
        }

        @media screen and (max-height: 450px) {
          .overlay a {
            font-size: 14px;
          }
          .overlay .close {
            font-size: 40px;
            top: 15px;
            right: 35px;
          }
        }

        @media only screen and (max-width: 800px) {
          .nav__links,
          .cta {
            display: none;
          }
          .menu {
            display: initial;
          }
        }
        th{
          background-color: rgba(0, 136, 169, 1);
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
                    <li> <a href="#">Statistik</a> </li>
                    <li><a href="{{ url('/education') }}">Rumah Sakit Rujukan</a></li>
                </ul>
            </nav>
            <p class="menu cta">Menu</p>
        </header>
        <div id="mobile__menu" class="overlay">
            <a class="close">&times;</a>
            <div class="overlay__content">
                <a href="{{ url('/homepage') }}">Homepage</a>
                <a href="{{ url('/cara') }}">Prevention & Care</a>
                <a href="#">Statistik</a>
                <a href="{{ url('/education') }}">Rumah Sakit Rujukan</a>
            </div>
        </div>

        <div class="satu" id="badan">
          <h1>Data Covid-19 Indonesia</h1>
          <div class="dua">

            <div  class="data">
              @foreach ($covid as $row)
              <h3>Positif </h3>
              <h4>{{ $row->positif }}</h4>
            </div>

            <div id="negatif" class="data">
              <h3>Sembuh </h3>
              <h4>{{ $row->sembuh }}</h4>
            </div>

            <div id="men" class="data">
              <h3>Meninggal </h3>
              <h4>{{ $row->meninggal }}</h4>
            </div>
            @endforeach
          </div>

          <h1>Data Covid Seluruh Dunia</h1>

          <div class="tiga">
            <table cellspacing="0" border="1">
              <tr>
                <th id="no">No</th>
                <th>Negara</th>
                <th>Kasus</th>
                <th>Meninggal</th>
              </tr>
              @foreach ($statistik as $row)
              <tr align="center">
                <td>{{ isset($i) ? ++$i : $i = 1 }}</td>
                <td>{{ $row->negara }}</td>
                <td>{{ $row->kasus }}</td>
                <td>{{ $row->meninggal }}</td>
              </tr>
              @endforeach
            </table>
          </div>
          <a href="{{ url('/edit') }}"><button> Edit Data </button></a>
        </div>
        <script type="text/javascript" src="mobile.js"></script>
    </body>
</html>

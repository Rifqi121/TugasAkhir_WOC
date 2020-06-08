<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">

    *{
      margin: 0;
      padding: 0;
    }
    .lg{
      height: 100%;
      width: 100%;
      background-image: url({{ url("/background.jpg") }});
      background-position: center;
      background-size: cover;
      position: absolute;
    }
    .form-box{
      width: 380px;
      height: 480px;
      position: relative;
      margin: 6% auto;
      background: rgba(255,255,255, 0.9);
      padding: 5px;
      box-shadow: 2px 2px 2px #444;
      border-radius: 20px;
      overflow: hidden;
    }
    .button-box{
      width: 220px;
      margin: 35px;
      margin-left: 80px;
      position: relative;
      box-shadow: 0 0 20px 9px rgba(0, 136, 169, 0.2);
      border-radius: 30px;
    }
    .toggle-btn{
      padding: 10px 32px;
      cursor: pointer;
      background: transparent;
      border: 0;
      outline: none;
      position: relative;
    }
    #btn{
      top: 0;
      left: 0;
      position: absolute;
      width: 110px;
      height: 100%;
      background-color: rgba(0, 136, 169, 1);
      border-radius: 30px;
      transition: .5s;
    }
    .input-group{
      top: 180px;
      position: absolute;
      width: 280px;
      transition: .5s;
    }
    .input-field{
      width: 100%;
      padding: 10px;
      margin: 5px 0;
      border-left: 0;
      border-top: 0;
      border-right: 0;
      border-bottom:2px solid rgba(0, 136, 169, 1);
      outline: none;
      background: transparent;
      margin-top: 20px;
    }
    .submit-btn{
      width: 85%;
      padding: 10px 30px;
      cursor: pointer;
      display: block;
      margin: auto;
      margin-top: 50px;
      border-radius: 30px;
      border: none;
      background-color: rgba(0, 136, 169, 1);
    }
    #login{
      left: 50px;
    }
    #register{
      left: 450px
    }


    </style>

  </head>
  <body>
    <div class="lg">
      <div class="form-box">
              @if(session('success'))
        <div class="">
          {{ session('success') }}
        </div>
        @endif

        @if(session('error'))
        <div class="">
          {{ session('error') }}
        </div>
        @endif
        <div class="button-box">
          <div class="" id="btn">


          </div>
          <button type="button" class="toggle-btn" onclick="login()">Login</button>
          <button type="button" class="toggle-btn" onclick="register()">Register</button>
        </div>


        <form id="login" class="input-group" action="{{ url('/login')}}" method="post">
          @csrf
          <input type="text" class="input-field" placeholder="Enter E-mail" name="email" required>
          <input type="password" class="input-field" placeholder="Enter Password" name="password" required>
          <input type="submit" class="submit-btn" name="" value="Login">
        </form>

        <form id="register" class="input-group" action="{{ url('/register') }}" method="post">
          @csrf
          <input type="text" class="input-field" placeholder="Name" name="name" required>
          <input type="email" class="input-field" placeholder="Email" name="email" required>
          <input type="password" class="input-field" placeholder="Enter Password" name="password" required>
          <input type="submit" class="submit-btn" name="" value="Register">
        </form>

      </div>
    </div>

    <script type="text/javascript">


    var x = document.getElementById("login");
    var y = document.getElementById("register");
    var z = document.getElementById("btn");

    function register() {
      x.style.left = "-400px";
      y.style.left = "50px";
      z.style.left = "110px";
    }

    function login() {
      x.style.left = "50px";
      y.style.left = "450px";
      z.style.left = "0";
    }

    </script>

  </body>
</html>

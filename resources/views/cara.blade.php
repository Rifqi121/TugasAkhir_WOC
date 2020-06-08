<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Prevention & Care</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
            <a class="logo" href="/"><img src="..." alt="logo"></a>
            <a href="{{url('/homepage/create')}}" class="login">Login</a>
            <nav>
                <ul class="nav__links">
                    <li><a href="{{ url('/homepage') }}">Homepage</a></li>
                    <li><a href="#">Prevention & Care</a></li>
                    <li> <a href="{{ url('/data') }}">Statistik</a> </li>
                    <li><a href="{{ url('/education') }}">Rumah Sakit Rujukan</a></li>
                </ul>
            </nav>
            <p class="menu cta">Menu</p>
        </header>
        <div id="mobile__menu" class="overlay">
            <a class="close">&times;</a>
            <div class="overlay__content">
                <a href="{{ url('/homepage') }}">Homepage</a>
                <a href="#">Prevention & Care</a>
                <a href="{{ url('/data') }}">Statistik</a>
                <a href="{{ url('/education') }}">Education</a>
            </div>
        </div>

        <div class="badan" id="badan">
          <p>Agar tidak terkena covid 19 ikuti langkah-lagkah berikut: <br>
             1.Sering mencuci tangan <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sering-seringlah mencuci tangan dengan sabun dan air yang mengalir selama 20 detik.  Apabila sabun dan air tidak tersedia, gunakan pembersih tangan atau hand sanitizer yang mengandung setidaknya 60 persen alkohol. Dianjurkan untuk menghindari menyentuh mata, hidung, dan mulut Anda dengan tangan yang belum dicuci.
                <br><br>
             2.Hindari kontak dekat <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hindarilah kontak secara dekat dengan orang lain yang sedang sakit. Beri jarak antara diri Anda dan orang lain jika virus corona telah menyebar di komunitas Anda. Ini sangat penting bagi orang-orang yang berisiko lebih tinggi untuk sakit parah.
                <br><br>
             3.Gunakan masker jika sakit Jika sakit, <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Anda harus mengenakan masker ketika berada di sekitar orang lain dan sebelum Anda memasuki kantor penyedia layanan kesehatan. Jika Anda tidak dapat memakai masker (misalnya, karena menyebabkan kesulitan bernapas), maka Anda harus melakukan yang terbaik untuk menutupi saat batuk dan bersin Anda. Selain itu, jika Anda sedang dirawat, orang yang merawat Anda harus memakai masker jika mereka memasuki ruangan Anda.
                <br><br>
             4.Hindari menyentuh mata, hidung dan mulut, hindari menyentuh mata, hidung dan mulut jika belum mencuci tangan, karena jika Tangan menyentuh banyak permukaan dan dapat mengandung. Setelah terkontaminasi, tangan dapat memindahkan virus ke mata, hidung, atau mulut Anda. Dari sana, virus bisa masuk ke tubuh Anda dan bisa membuat Anda sakit.
                <br><br>
             5.Tetap tinggal di rumah <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dengan tidak keluar rumah alias tetap berada di dalam rumah, akan meminimalisir Anda untuk terjangkit virus corona. Hal ini juga yang terus digalakkan oleh pemerintah agar penyebaran virus corona tidak meluas.</p>
        </div>
        <script type="text/javascript" src="mobile.js"></script>
    </body>
</html>

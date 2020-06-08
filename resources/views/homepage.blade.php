<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Homepage</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles.css">
        <style media="screen">
      form,  .login{
          margin-left: 20px;
          order: 3;
          margin-left: 20px;
          padding: 5px 17px;
          padding-left: 5px;
          background-color: rgba(0, 136, 169, 1);
          border: none;
          border-radius: 50px;
          cursor: pointer;
          transition: all 0.3s ease 0s;
        }
        img{
          width: 350px;
          height: 250px;
          float: left;
          margin-right: 10px;
        }
        </style>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
            <form action="{{ url('/logout') }}" method="post">
                @csrf
                <button type="submit" class="login">Logout</button>
            </form>
            <nav>
                <ul class="nav__links">
                    <li><a href="#">Homepage</a></li>
                    <li><a href="{{ url('/cara') }}">Prevention & Care</a></li>
                    <li> <a href="{{ url('/data') }}">Statistik</a> </li>
                    <li><a href="{{ url('/education') }}">Rumah Sakit Rujukan</a></li>
                </ul>
            </nav>
            <p class="menu cta">Menu</p>
        </header>
        <div id="mobile__menu" class="overlay">
            <a class="close">&times;</a>
            <div class="overlay__content">
                <a href="#">Homepage</a>
                <a href="{{ url('/cara') }}">Prevention & Care</a>
                <a href="{{ url('/data') }}">Statistik</a>
                <a href="{{ url('/education') }}">Rumah Sakit Rujukan</a>
            </div>
        </div>

        <div class="badan" id="badan">
          <img src="{{ url("/image1.jpg") }}" alt=""> &nbsp; &nbsp; &nbsp;Koronavirus atau coronavirus (istilah populernya: virus korona, virus corona, atau virus Corona) adalah sekumpulan virus dari subfamili Orthocoronavirinae dalam keluarga Coronaviridae dan ordo Nidovirales. Kelompok virus ini yang dapat menyebabkan penyakit pada burung dan mamalia (termasuk manusia). Pada manusia, koronavirus menyebabkan infeksi saluran pernapasan yang umumnya ringan, seperti pilek, meskipun beberapa bentuk penyakit seperti SARS, MERS, dan COVID-19 sifatnya lebih mematikan. Manifestasi klinis yang muncul cukup beragam pada spesies lain: pada ayam, koronavirus menyebabkan penyakit saluran pernapasan atas, sedangkan pada sapi dan babi menyebabkan diare. Belum ada vaksin atau obat antivirus untuk mencegah atau mengobati infeksi koronavirus pada manusia.
          </br>
          </br>
          &nbsp; &nbsp; &nbsp;Koronavirus merupakan virus beramplop dengan genom RNA utas tunggal plus dan nukleokapsid berbentuk heliks simetris. Jumlah genom koronavirus berkisar antara 27–34 kilo pasangan basa, terbesar di antara virus RNA yang diketahui. Nama koronavirus berasal dari bahasa Latin corona yang artinya mahkota, yang mengacu pada tampilan partikel virus (virion), mereka memiliki pinggiran yang mengingatkan pada mahkota atau korona matahari.
          </br>
          </br>
          &nbsp; &nbsp; &nbsp;Virus Corona, virus yang menyerang sistem pernapasan. Penyakit karena infeksi virus ini disebut COVID-19. Virus Corona bisa menyebabkan gangguan ringan pada sistem pernapasan, infeksi paru-paru yang berat, hingga kematian Severe acute respiratory syndrome coronavirus (SARS-CoV-2) yang lebih dikenal dengan nama virus Corona adalah jenis baru dari coronavirus yang menular ke manusia. Walaupun lebih banyak menyerang lansia, virus ini sebenarnya bisa menyerang siapa saja, mulai dari bayi, anak-anak, hingga orang dewasa, termasuk ibu hamil dan ibu menyusui.Infeksi virus Corona disebut COVID-19 (Corona Virus Disease 2019) dan pertama kali ditemukan di kota Wuhan, China pada akhir Desember 2019. Virus ini menular dengan sangat cepat dan telah menyebar ke hampir semua negara, termasuk Indonesia, hanya dalam waktu beberapa bulan. Hal tersebut membuat beberapa negara menerapkan kebijakan untuk memberlakukan lockdown dalam rangka mencegah penyebaran virus Corona. Di Indonesia sendiri, diberlakukan kebijakan Pembatasan Sosial Berskala Besar (PSBB) untuk menekan penyebaran virus ini. Coronavirus adalah kumpulan virus yang bisa menginfeksi sistem pernapasan. Pada banyak kasus, virus ini hanya menyebabkan infeksi pernapasan ringan, seperti flu. Namun, virus ini juga bisa menyebabkan infeksi pernapasan berat, seperti infeksi paru-paru (pneumonia).
          </br>
          </br>
          &nbsp; &nbsp; &nbsp;Koronavirus ditemukan pada 1960-an. Virus yang paling awal ditemukan adalah virus bronkitis infeksius pada ayam dan dua virus dari rongga hidung manusia dengan flu biasa yang kemudian diberi nama human coronavirus 229E dan human coronavirus OC43. Sejak saat itu, anggota koronavirus yang lain mulai diidentifikasi, termasuk SARS-CoV pada 2003, HCoV NL63 pada 2004, HKU1 pada 2005, MERS-CoV (sebelumnya dikenal sebagai 2012-nCoV) pada 2012, dan SARS-CoV-2 (sebelumnya dikenal sebagai 2019-nCoV) pada 2019; sebagian besar dari virus-virus ini terkait dengan infeksi saluran pernapasan yang serius.
          </br>
          </br>
          &nbsp; &nbsp; &nbsp;Nama koronavirus berasal dari bahasa Latin corona dan bahasa Yunani κορώνη (korṓnē, "lingkaran, untaian"), yang berarti mahkota atau lingkaran cahaya. Namanya mengacu pada penampilan karakteristik virion (bentuk infektif virus) dalam mikroskop elektron, yang memproyeksikan pinggiran permukaan virus yang besar dan bulat yang menghasilkan gambar yang mengingatkan pada mahkota atau korona matahari. Morfologi ini diciptakan oleh peplomer tonjolan protein permukaan virus, yang menentukan tropisme inang.
          </br>
          Protein yang menyusun struktur koronavirus yaitu protein tonjolan (spike), amplop, membran, dan nukleokapsid. Khusus pada virus SARS, letak pengikatan reseptor pada protein S memediasi perlekatan virus ke reseptor sel inangnya yaitu, enzim pengubah angiotensin (ACE2).Beberapa koronavirus (khususnya anggota Betacoronavirus garis keturunan A) juga memiliki tonjolan protein pendek yang disebut hemaglutinin esterase (HE).
          </br>
          </br>
          Penularan koronavirus dari manusia ke manusia diperkirakan terjadi melalui kontak langsung dalam jarak dekat via tetesan kecil atau percikan (droplet) dari saluran pernapasan yang dihasilkan penderita saat bersin dan batuk.
          </br>
          Nama ilmiah untuk koronavirus adalah Orthocoronavirinae atau Coronavirinae. Subfamili ini terdiri atas 4 genus, 23 subgenus, dan 38 spesies:
          </br>
          </br>
         A. Alphacoronavirus:</br>
        -Colacovirus: Bat coronavirus CDPHE15 inang dari  kelelawar
         </br>
        -Decacovirus: Bat coronavirus HKU10   inang dari  kelelawar
         </br>
        -Rhinolophus: ferrumequinum alphacoronavirus HuB-2013  inang dari kelelawar</br>
        </br>
        -Duvinacovirus: Human coronavirus 229E inang dari manusia</br>
        </br>
        -Luchacovirus: Lucheng Rn rat coronavirus inang dari rodensia</br>
        </br>
        -Minacovirus:</br>
        1. Ferret coronavirus inang dari ferret</br>
        2. Mink coronavirus 1 inang dari mink</br>
        </br>
        -Minunacovirus:</br>  1. Miniopterus bat coronavirus 1 inang dari  kelelawar</br>
                         2. Miniopterus bat coronavirus HKU8 inang dari  kelelawar</br>
        </br>
        -Myotacovirus: Myotis ricketti alphacoronavirus Sax-2011 inang dari  kelelawar</br>
       </br>
       </br>
        -Nyctacovirus: Nyctalus velutinus alphacoronavirus SC-2013 inang dari kelelawar</br>
       </br>
       </br>
        -Pedacovirus:  Porcine epidemic diarrhea virus inang dari babi</br>
       </br>
       </br>
        -Scotophilus:  bat coronavirus 512 inang dari kelelawar</br>
       </br>
        -Rhinacovirus:  Rhinolophus bat coronavirus HKU2  inang dari  kelelawar</br>
       </br>
       </br>
        -Setracovirus:</br> 1. Human coronavirus NL63 inang dari manusia</br>
                       2. NL63-related bat coronavirus strain BtKYNL63-9b inang dari kelelawar</br>
       </br>
       </br>
        -Tegacovirus: Alphacoronavirus 1 inang dari anjing, kucing, babi</br>
        </br>
        </br>
        B. Betacoronavirus:</br>
        -Embecovirus:</br>    1. Betacoronavirus 1 inang dari inang dari manusia, sapi, kuda, babi</br>
                         2. China Rattus coronavirus HKU24 inang dari rodensia</br>
                         3. Human coronavirus HKU1 inang dari manusia</br>
                         4. Murine coronavirus inang dari rodensia</br>
         </br>
        -Hibecovirus:    Bat Hp-betacoronavirus Zhejiang2013  inang dari kelelawar</br>
         </br>
        -Merbecovirus:</br>   1. Hedgehog coronavirus 1 inang dari landak susu</br>
                         2. cMiddle East respiratory syndrome-related coronavirus inang dari manusia, unta</br>
                         3. Pipistrellus bat coronavirus HKU5 inang dari  kelelawar</br>
                         4. Tylonycteris bat coronavirus HKU4  ingang dari kelelawar </br>
         </br>
        -Nobecovirus:</br>    1. Rousettus bat coronavirus GCCDC1  inang dari  kelelawar</br>
                         2. Rousettus bat coronavirus HKU9 inang dari kelelawar</br>
        </br>
        -Sarbecovirus:   Severe acute respiratory syndrome-related coronavirus inang dari manusia, kelelawar, viverridae</br>
      </br>
      </br>
        C. Gammacoronavirus:</br> 1.Cegacovirus Beluga whale coronavirus SW1 inang dari paus</br>
                             2.Igacovirus  Avian coronavirus inang dari burung</br>
        </br>
        </br>
        D. Deltacoronavirus:</br> Andecovirus Wigeon coronavirus HKU20    burung</br>

                            </br>Buldecovirus: 1. Bulbul coronavirus HKU11 inang dari burung</br>
                                          2. coronavirus HKU15 inang dari  babi</br>
                                          3. Munia coronavirus HKU13 inang dari burung</br>
                                          4. White-eye coronavirus HKU16 inang dari burung</br>

                            </br>
                            Herdecovirus  Night heron coronavirus HKU19 inang dari burung</br>
                          </br>
                            Moordecovirus Common moorhen coronavirus HKU21 inang dari burung</br>

        </br>
        </br>
        Koronavirus diyakini menyebabkan 15–30% dari semua pilek pada orang dewasa dan anak-anak.[15] Koronavirus menyebabkan pilek dengan gejala utama seperti demam dan sakit tenggorokan akibat pembengkakan adenoid, terutama pada musim dingin dan awal musim semi. Koronavirus dapat menyebabkan pneumonia, baik pneumonia virus langsung atau pneumonia bakterial sekunder, dan dapat menyebabkan bronkitis, baik bronkitis virus langsung atau bronkitis bakterial sekunder. Koronavirus manusia yang ditemukan pada tahun 2003, SARS-CoV, yang menyebabkan sindrom pernafasan akut berat (SARS), memiliki patogenesis yang unik karena menyebabkan infeksi saluran pernapasan bagian atas dan bawah. Belum ada vaksin atau obat antivirus untuk mencegah atau mengobati infeksi koronavirus manusia.</br>
        </br>
        Tujuh galur koronavirus manusia yang saat ini diketahui:</br>
        </br>
        1. Human coronavirus 229E (HCoV-229E)</br>
        2. Human coronavirus OC43 (HCoV-OC43)</br>
        3. Koronavirus sindrom pernapasan akut berat (SARS-CoV)</br>
        4. Human coronavirus NL63 (HCoV-NL63, New Haven coronavirus)</br>
        5. Human coronavirus HKU1</br>
        6. Koronavirus terkait sindrom pernafasan Timur Tengah (MERS-CoV), yang sebelumnya dikenal sebagai novel coronavirus 2012 dan HCoV-EMC</br>
        7. Koronavirus sindrom pernapasan akut berat 2 (SARS-CoV-2), sebelumnya dikenal sebagai 2019-nCoV atau "novel coronavirus 2019"</br>
</br>
        Koronavirus HCoV-229E, -NL63, -OC43, dan -HKU1 terus beredar dalam populasi manusia dan menyebabkan infeksi pernapasan pada orang dewasa dan anak-anak di seluruh dunia.</br>
        </br>
        </br>
        Beberapa wabah koronavirus dengan mortalitas yang relatif tinggi adalah sebagai berikut:</br>

        1. Wabah SARS 2003  SARS-CoV  dengan kematian 774 Orang</br>
        2. Wabah MERS 2012  MERS-CoV  dengan kematian Lebih dari 400  Orang</br>
        3. Wabah MERS 2015 di Korea Selatan MERS-CoV dengan kematian 36  Orang</br>
        4. Wabah MERS 2018  MERS-CoV dengan kematian 41  Orang</br>
        5. Pandemi koronavirus 2019–2020    SARS-CoV-2 dengan kematian 1.573 Orang</br>
       </p>
          </div>
        <script type="text/javascript" src="mobile.js"></script>
    </body>
</html>

<?php
  $type   = isset($_REQUEST['type']) ? $_REQUEST['type'] : "";
  $waUrl  = "https://api.whatsapp.com";
  
  if($type != ""){
    $paramsUsername = $_REQUEST['username'];
    $paramsPhone    = $_REQUEST['phone'];
    $paramsPackage  = $_REQUEST['package'];
    $paramsPeriode  = $_REQUEST['periode'];
    
    $strText = "Halo Anti Gabut Store! %0ASaya Ingin Berlangganan paket streaming... %0A%0A";
    if($paramsUsername != ""){
      $strText .= "Nama : ".strtoupper($paramsUsername)." %0A";
    }
    if($paramsPhone != ""){
      //$paramsPhone = checkPhone($paramsPhone);
      $strText .= "No. Telp : ".$paramsPhone." %0A";
    }
    if($paramsPackage != ""){
      $strText .= "Paket Langganan : ".strtoupper($paramsPackage)." %0A";
    }
    if($paramsPeriode != ""){
      $strText .= "Periode : ".strtoupper($paramsPeriode)." %0A%0A";
    }
    $strText .= "Terima Kasih.";
    
    if($type == 'subscribe'){
      //$paramsPhone = checkPhone($paramsPhone);
      $paramsPhoneSend = "6285854859500";
      header("location:".$waUrl."/send?phone=".$paramsPhoneSend."&text=".$strText, false);
      exit();
    }
  }
  
  function checkPhone($nohp) {
     // kadang ada penulisan no hp 0811 239 345
     $nohp = str_replace(" ","",$nohp);
     // kadang ada penulisan no hp (0274) 778787
     $nohp = str_replace("(","",$nohp);
     // kadang ada penulisan no hp (0274) 778787
     $nohp = str_replace(")","",$nohp);
     // kadang ada penulisan no hp 0811.239.345
     $nohp = str_replace(".","",$nohp);
 
     // cek apakah no hp mengandung karakter + dan 0-9
     if(!preg_match('/[^+0-9]/',trim($nohp))){
         // cek apakah no hp karakter 1-3 adalah +62
         if(substr(trim($nohp), 0, 3)=='+62'){
             $hp = trim($nohp);
         }
         // cek apakah no hp karakter 1 adalah 0
         elseif(substr(trim($nohp), 0, 1)=='0'){
             $hp = '+62'.substr(trim($nohp), 1);
         }
     }
     
     return $hp;
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anti Gabut Store - Pilihan tepat untuk berlangganan Netflix</title>
    <meta name="description" content="Pilihan tepat untuk berlangganan Netflix, Spotify, Viu dll">
    <meta name="keywords" content="netflix, spotify, viu, streaming online, anti gabut">
    <link rel="shortcut icon" href="images/favicon.svg" type="image/x-icon">

    <!-- CSS -->
    <link type="text/css" rel="stylesheet" href="css/form.css" />
    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <link type="text/css" rel="stylesheet" href="css/slick.css" />

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family =Raleway:wght@400;800&display=swap" rel="stylesheet">
</head>
<body>

  <main>    

    <!-- Cover-->
    <section class="cover">
      <!-- Header Nav-->
      <nav>
        <div class="container">
          <div class="header">
            <div class="header__logo">
              <img src="images/antigabut.svg" alt="">
            </div>
            <!--Hamburger Menu-->
            <div class="menu__mobile">
              <div id="hamburger">
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
          </div>
        </div>
      </nav>    

      <!-- Navigation -->
      <div class="navigation">
        <ul>
          <li><a href="#layanan">Layanan</a></li>
          <li><a href="#testimoni">Testimoni</a></li>
          <li><a href="#faq">FAQ</a></li>
        </ul>
      </div>

      <div class="container">
        <div class="cover__head">
          <h1 class="title title__main">
            Pilihan tepat untuk berlangganan 
            <span class="brand">
              <div class="brand__item brand__item-1"> Netflix </div>
              <div class="brand__item brand__item-2"> Spotify </div>
              <div class="brand__item brand__item-3"> Viu </div>
            </span>
          </h1>
          <p class="text">
            Layanan terbaik untuk membantu kamu berlangganan bersama dengan lebih praktis, mudah, dan murah.
          </p>
        </div>
        <div class="cover__cta">
          <a href="#ordernow" class="btn btn-primary">Pesan Sekarang</a>        
          <div class="guarantee">
            <div class="guarantee__item">
              <img src="images/icon-check.svg" alt=""> Garansi 1 Bulan
            </div>
            <div class="guarantee__item">
              <img src="images/icon-check.svg" alt=""> Anti on Hold
            </div>
            <div class="guarantee__item">
              <img src="images/icon-check.svg" alt=""> Legal
            </div>
          </div>
        </div>
        <div class="cover__images">
          <div class="display">
            <img src="images/display-1.png" alt="">
            <img src="images/display-2.png" alt="">
            <img src="images/display-3.png" alt="">
          </div>          
        </div>
      </div>
    </section>

    <!-- Subscription -->
    <section class="subscription" id="layanan">
      <div class="container">
        <div class="subscription__head">
          <h1 class="title title__sub">
            Paket langganan
          </h1>
          <p class="text">
            Tersedia berbagai paket berlangganan yang dijamin 100% legal dan bergaransi dengan harga terbaik
          </p>
        </div>
        <div class="subscription__content">
          <div class="wrapper carousel-slider">
            <div class="card card__item">
              <div class="card__head">
                <img src="images/brand-1.png" alt="">
              </div>
              <div class="card__text">
                <p>Nikmati semua tayangan film terbaik  dengan kualitas Ultra HD 4K di ponsel, laptop hingga TV kamu</p>
              </div>
              <div class="card__price">
                <div class="old">
                  Rp186.000/bulan
                </div>
                <div class="new">
                  Rp45.000/bulan
                </div>
              </div>
            </div>
            <div class="card card__item">
              <div class="card__head">
                <img src="images/brand-2.png" alt="">
              </div>
              <div class="card__text">
                <p>Dengarkan musik favorit kamu tanpa gangguan iklan dan nikmati fitur play-offline serta skip tak terbatas</p>
              </div>
              <div class="card__price">
                <div class="old">
                  Rp140.000/bulan
                </div>
                <div class="new">
                  Rp19.000/bulan
                </div>
              </div>
            </div>
            <div class="card card__item">
              <div class="card__head">
                <img src="images/brand-3.png" alt="">
              </div>
              <div class="card__text">
                <p>Nikmati semua tayangan film terbaik  dengan kualitas Ultra HD 4K di ponsel, laptop hingga TV kamu</p>
              </div>
              <div class="card__price">
                <div class="old">
                  Rp100.000/bulan
                </div>
                <div class="new">
                  Rp55.000/bulan
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="subscription__cta">
          <a href="#ordernow" class="btn btn-primary">Pesan Sekarang</a>        
          <div class="guarantee">
            <div class="guarantee__item">
              <img src="images/icon-check.svg" alt=""> Garansi 1 Bulan
            </div>
            <div class="guarantee__item">
              <img src="images/icon-check.svg" alt=""> Anti on Hold
            </div>
            <div class="guarantee__item">
              <img src="images/icon-check.svg" alt=""> Legal
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Client -->
    <section class="client" id="testimoni">
      <div class="container">
        <div class="client__head">
          <h1 class="title title__sub">
            Dipercaya oleh 10.000+ pelanggan
          </h1>
          <p class="text">
            Kepuasan dan kepercayaan pelanggan adalah nilai yang selalu kami jaga dengan selalu meningkatkan kualitas layanan terbaik
          </p>
        </div>
        <div class="client__content">
          <div class="wrapper carousel-slider">
            <div class="card card__item testimoni">
              <div class="card__text">
                <p>???Biasanya kalo langganan Netflix suka ribet karena harus pake kartu kredit, tapi kalo order via antigabutstore jadi lebih mudah dan murah. Proses pengerjaan cepet banget nggak sampai 24 Jam udah dikirim akunnya.???</p>
              </div>
              <div class="card__data">
                <div class="name">Dewi</div>
                <!-- <div class="profesi">Ibu Rumah Tangga</div> -->
              </div>
            </div>
            <div class="card card__item testimoni">
              <div class="card__text">
                <p>???Kalo langganan Netflix buat Smart TV suka males karena harganya mahal, tapi kalo pake Antigabutstore jadi lebih murah karena bisa patungan dengan customer yang lain.???</p>
              </div>
              <div class="card__data">
                <div class="name">Devi Nofianti</div>
                <!-- <div class="profesi">DJ Lokal</div> -->
              </div>
            </div>
            <div class="card card__item testimoni">
              <div class="card__text">
                <p>"Suka ribet kalo nyari temen langganan buat spotify, tapi semenjak ada antigabutstore sekarang gaperlu ribet lagi kalo  mau nyari temen patungan beli spotify.???</p>
              </div>
              <div class="card__data">
                <div class="name">Rahadian</div>
                <!-- <div class="profesi">Sosialita</div> -->
              </div>
            </div>
            <div class="card card__item testimoni">
              <div class="card__text">
                <p>"Prosesnya cepet admin nya responsif udah setahun langganan disini dan puas banget sama pelayanannya.</p>
              </div>
              <div class="card__data">
                <div class="name">Yeni Lendra</div>
                <!-- <div class="profesi">Sosialita</div> -->
              </div>
            </div>
            <div class="card card__item testimoni">
              <div class="card__text">
                <p>"Kalo disini prosesnya dijamin legal bukan akun free trial yang dijual jadi akunnya pasti aman dan nggak bakal balik jadi Free lagi. Sukses ya buat antigabutstore???</p>
              </div>
              <div class="card__data">
                <div class="name">Taufc</div>
                <!-- <div class="profesi">Sosialita</div> -->
              </div>
            </div>
            <div class="card card__item testimoni">
              <div class="card__text">
                <p>Suka ribet kalo nyari temen langganan buat spotify, tapi semenjak ada antigabutstore sekarang gaperlu ribet lagi kalo  mau nyari temen patungan beli spotify.???</p>
              </div>
              <div class="card__data">
                <div class="name">Rahadian</div>
                <!-- <div class="profesi">Sosialita</div> -->
              </div>
            </div>
          </div>
        </div>
        <div class="client__cta">
          <a href="#ordernow" class="btn btn-primary">Pesan Sekarang</a>        
          <div class="guarantee">
            <div class="guarantee__item">
              <img src="images/icon-check.svg" alt=""> Garansi 1 Bulan
            </div>
            <div class="guarantee__item">
              <img src="images/icon-check.svg" alt=""> Anti on Hold
            </div>
            <div class="guarantee__item">
              <img src="images/icon-check.svg" alt=""> Legal
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- FAQ -->
    <section class="faq" id="faq">
      <div class="container">
        <div class="faq__head">
          <h1 class="title title__sub">
            Paling Sering Ditanyakan
          </h1>
        </div>
        <div class="faq__content">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <div class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Berapa Lama Proses Berlangganan di Antigabutstore ?
                </button>
              </div>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Proses Hanya Berlangsung 1-2 Jam tergantung antrian. Maksimal 1x24 Jam
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <div class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Mengapa Harganya Bisa Lebih Murah ?
                </button>
              </div>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Kami menggunakan sistem sharing dalam pembelian paket berlangganan. Jadi kamu sama seperti patungan dengan customer lain. Sehingga harga yang ditawarkan bisa lebih murah.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <div class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Apa Saja Metode Pembayaran Yang Diberikan ?
                </button>
              </div>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Pembayaran via transfer dan gopay, OVO, Link Aja
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <div class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  Apakah Akun Yang diberikan aman ?
                </button>
              </div>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Akun dijamin aman karena kami membayar langsung kepada penyedia layanan dengan cara yang Legal dan Full Bergaransi
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <div class="accordion-header" id="headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                  Email dan Password Darimana ?
                </button>
              </div>
              <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Email dan password berasal dari kami jadi kamu tinggal pakai dan tidak perlu ribet dengan kartu kredit
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <div class="accordion-header" id="headingSix">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                  Bagaimana Cara Pemesanan di Antigabutstore ?
                </button>
              </div>
              <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Kamu tinggal klik tombol pesan sekarang dan melakukan pembayaran, setelah itu akun akan dikirim ke kamu.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Biodata -->
    <section class="biodata" id="ordernow">
      <div class="container">
        <h1 class="title title__sub">
          Tertarik berlangganan?
        </h1>
        <p class="text text--white">
          Yuk! isi formulir untuk melakukan pemesanan dengan mudah dan cepat.
        </p>

        <!-- Form -->
        <div class="form" id="formSubscribe">
          <form action="index.php" method='POST'>
            <input type='hidden' name='type' value='subscribe'></input>
            <div class="form__group">
              <label for="">Nama*</label>
              <input type="text" id="username" name="username" placeholder="Masukkan nama kamu" required>
            </div>
            <div class="form__group">
              <label for="">No handphone*</label>
              <input type="text" id="phone" name="phone" placeholder="Masukkan no handphone kamu" required>
            </div>
            <div class="form__group">
              <label for="">Paket Langganan*</label>
              <select class="form-select" id="package" name="package" required>
                <option value="neflix">NETFLIX</option>
                <option value="spotify">SPOTIFY</option>
                <option value="viu">VIU</option>
              </select>
            </div>
            <div class="form__group">
              <label for="">Tentukan masa berlangganan*</label>
              <select class="form-select" id="periode" name="periode" required>
                <option value="1 Bulan">1 Bulan</option>
                <option value="2 Bulan">2 Bulan</option>
                <option value="3 Bulan">3 Bulan</option>
                <option value="4 Bulan">4 Bulan</option>
                <option value="5 Bulan">5 Bulan</option>
                <option value="6 Bulan">6 Bulan</option>
                <option value="7 Bulan">7 Bulan</option>
                <option value="8 Bulan">8 Bulan</option>
                <option value="9 Bulan">9 Bulan</option>
                <option value="10 Bulan">10 Bulan</option>
                <option value="11 Bulan">11 Bulan</option>
                <option value="12 Bulan">12 Bulan</option>
              </select>
            </div>
            <div class="form__group">
              <input type='submit' value='Pesan Lewat Whatsapp' class="btn btn-primary form-select">
            </div>
          </form>
        </div>

        <div class="copyright">
          AntiGabut Store ?? 2021 All right reserved.  <br>
          Powered by <a href="" target="_blank" rel="noopener noreferrer"> simpl. Design Studio </a>
        </div>
      </div>
    </section>

  </main>

  <!-- Plugin Js -->
  <script src="js/jquery.min.js"  type="text/javascript"></script>
  <script src="js/main.js"  type="text/javascript"></script>
  <script src="js/slick.min.js"  type="text/javascript"></script>
  <script src="js/bootstrap.min.js"  type="text/javascript"></script>

</body>
</html>

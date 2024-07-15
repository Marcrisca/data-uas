<!DOCTYPE html>
<html lang="en">

<head>
  <!--====== Required meta tags ======-->
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!--====== Title ======-->
  <title>Parkir STT-NF</title>

  <!--====== Favicon Icon ======-->
  <link rel="shortcut icon" href="{{ asset('assets/images/favicon.svg') }}" type="image/svg" />

  <!--====== Bootstrap css ======-->
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />

  <!--====== Line Icons css ======-->
  <link rel="stylesheet" href="{{ asset('assets/css/lineicons.css') }}" />

  <!--====== Tiny Slider css ======-->
  <link rel="stylesheet" href="{{ asset('assets/css/tiny-slider.css') }}" />

  <!--====== gLightBox css ======-->
  <link rel="stylesheet" href="{{ asset('assets/css/glightbox.min.css') }}" />

  <link rel="stylesheet" href="{{ asset('style.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>

  <!--====== NAVBAR NINE PART START ======-->

  <section class="navbar-area navbar-nine">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="index.html">
              <img src="assets/images/white-logo.png" alt="Logo" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNine"
              aria-controls="navbarNine" aria-expanded="false" aria-label="Toggle navigation">
              <span class="toggler-icon"></span>
              <span class="toggler-icon"></span>
              <span class="toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse sub-menu-bar" id="navbarNine">
              <ul class="navbar-nav me-auto">
                <li class="nav-item">
                  <a class="page-scroll active" href="#hero-area">Beranda</a>
                </li>
                <li class="nav-item">
                  <a class="page-scroll" href="#informasi">Informasi</a>
                </li>
                <li class="nav-item">
                  <a class="page-scroll" href="#services">Layanan</a>
                </li>
                <li class="nav-item">
                  <a class="page-scroll" href="#testimoni">Testimoni</a>
                </li>
                <li class="nav-item">
                  <a class="page-scroll" href="#map">Map</a>
                </li>
                <li class="nav-item">
                  <a class="page-scroll" href="#daftar">Daftar</a>
                </li>
              </ul>
            </div>

            <div class="navbar-btn d-none d-lg-inline-block">
              <a class="menu-bar" href="#side-menu-left"><i class="lni lni-menu"></i></a>
            </div>
          </nav>
          <!-- navbar -->
        </div>
      </div>
      <!-- row -->
    </div>
    <!-- container -->
  </section>

  <!--====== NAVBAR NINE PART ENDS ======-->

  <!--====== SIDEBAR PART START ======-->

  <div class="sidebar-left">
    <div class="sidebar-close">
      <a class="close" href="#close"><i class="lni lni-close"></i></a>
    </div>
    <div class="sidebar-content">
      <div class="sidebar-logo">
        <a href="index.html"><img src="assets/images/logo.png" alt="Logo" /></a>
      </div>
      <!-- logo -->
      <div class="sidebar-menu">
        <h5 class="menu-title">Jalan Pintas</h5>
        <ul>
          <li><a href="#informasi">Informasi</a></li>
          <li><a href="#services">Layanan Kami</a></li>
          <li><a href="#testimoni">Testimoni</a></li>
          <li><a href="#map">Map/Lokasi Kampus A dan B</a></li>
          <li><a href="#daftar">Daftar</a></li>
        </ul>
      </div>
      <!-- menu -->
      <div class="sidebar-social align-items-center justify-content-center">
        <h5 class="social-title">Ikuti Kami di</h5>
        <ul>
          <li>
            <a href="https://web.facebook.com/STTTerpaduNF/?locale=id_ID&_rdc=1&_rdr"><i class="lni lni-facebook-filled"></i></a>
          </li>
          <li>
            <a href="https://www.instagram.com/sttnf_official/"><i class="lni lni-instagram-original"></i></a>
          </li>
          <li>
            <a href="https://www.linkedin.com/school/sttnf/?originalSubdomain=id"><i class="lni lni-linkedin-original"></i></a>
          </li>
          <li>
            <a href="https://www.youtube.com/@STTNF"><i class="lni lni-youtube"></i></a>
          </li>
        </ul>
      </div>
      <!-- sidebar social -->
    </div>
    <!-- content -->
  </div>
  <div class="overlay-left"></div>

  <!--====== SIDEBAR PART ENDS ======-->

  <!-- Start header Area -->
  <section id="hero-area" class="header-area header-eight">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 col-md-12 col-12">
          <div class="header-content">
            <h1>Temukan Tempat Parkir Nyaman dan Aman dengan NF Parking</h1>
            <p>
              Lebih Dari Sekadar Tempat Parkir, NF Parking Memberikan Pengalaman Nyaman dan Aman.
            </p>
            <div class="button">
              @if (Route::has('login'))
              <a href="{{ route('login') }}" class="btn primary-btn">Masuk</a>
              <a href="https://youtu.be/HbYEcUVhRmM"
                class="glightbox video-button">
                <span class="btn icon-btn rounded-full">
                  <i class="lni lni-play"></i>
                </span>
                <span class="text">NF PARKING - INTRO</span>
              </a>
              @endif
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-12">
          <div class="header-image">
            <img src="https://www.scholarsofficial.com/wp-content/uploads/2021/03/stt-nf.jpg" alt="#" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End header Area -->

  <!--====== ABOUT FIVE PART START ======-->
  <section id="informasi" class="tarif-area tarif-eight"></section>
  <section class="about-area about-five">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 col-12">
          <div class="about-image-five">
            <svg class="shape" width="106" height="134" viewBox="0 0 106 134" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <circle cx="1.66654" cy="1.66679" r="1.66667" fill="#DADADA" />
              <circle cx="1.66654" cy="16.3335" r="1.66667" fill="#DADADA" />
              <circle cx="1.66654" cy="31.0001" r="1.66667" fill="#DADADA" />
              <circle cx="1.66654" cy="45.6668" r="1.66667" fill="#DADADA" />
              <circle cx="1.66654" cy="60.3335" r="1.66667" fill="#DADADA" />
              <circle cx="1.66654" cy="88.6668" r="1.66667" fill="#DADADA" />
              <circle cx="1.66654" cy="117.667" r="1.66667" fill="#DADADA" />
              <circle cx="1.66654" cy="74.6668" r="1.66667" fill="#DADADA" />
              <circle cx="1.66654" cy="103" r="1.66667" fill="#DADADA" />
              <circle cx="1.66654" cy="132" r="1.66667" fill="#DADADA" />
              <circle cx="16.3333" cy="1.66679" r="1.66667" fill="#DADADA" />
              <circle cx="16.3333" cy="16.3335" r="1.66667" fill="#DADADA" />
              <circle cx="16.3333" cy="31.0001" r="1.66667" fill="#DADADA" />
              <circle cx="16.3333" cy="45.6668" r="1.66667" fill="#DADADA" />
              <circle cx="16.333" cy="60.3335" r="1.66667" fill="#DADADA" />
              <circle cx="16.333" cy="88.6668" r="1.66667" fill="#DADADA" />
              <circle cx="16.333" cy="117.667" r="1.66667" fill="#DADADA" />
              <circle cx="16.333" cy="74.6668" r="1.66667" fill="#DADADA" />
              <circle cx="16.333" cy="103" r="1.66667" fill="#DADADA" />
              <circle cx="16.333" cy="132" r="1.66667" fill="#DADADA" />
              <circle cx="30.9998" cy="1.66679" r="1.66667" fill="#DADADA" />
              <circle cx="74.6665" cy="1.66679" r="1.66667" fill="#DADADA" />
              <circle cx="30.9998" cy="16.3335" r="1.66667" fill="#DADADA" />
              <circle cx="74.6665" cy="16.3335" r="1.66667" fill="#DADADA" />
              <circle cx="30.9998" cy="31.0001" r="1.66667" fill="#DADADA" />
              <circle cx="74.6665" cy="31.0001" r="1.66667" fill="#DADADA" />
              <circle cx="30.9998" cy="45.6668" r="1.66667" fill="#DADADA" />
              <circle cx="74.6665" cy="45.6668" r="1.66667" fill="#DADADA" />
              <circle cx="31" cy="60.3335" r="1.66667" fill="#DADADA" />
              <circle cx="74.6668" cy="60.3335" r="1.66667" fill="#DADADA" />
              <circle cx="31" cy="88.6668" r="1.66667" fill="#DADADA" />
              <circle cx="74.6668" cy="88.6668" r="1.66667" fill="#DADADA" />
              <circle cx="31" cy="117.667" r="1.66667" fill="#DADADA" />
              <circle cx="74.6668" cy="117.667" r="1.66667" fill="#DADADA" />
              <circle cx="31" cy="74.6668" r="1.66667" fill="#DADADA" />
              <circle cx="74.6668" cy="74.6668" r="1.66667" fill="#DADADA" />
              <circle cx="31" cy="103" r="1.66667" fill="#DADADA" />
              <circle cx="74.6668" cy="103" r="1.66667" fill="#DADADA" />
              <circle cx="31" cy="132" r="1.66667" fill="#DADADA" />
              <circle cx="74.6668" cy="132" r="1.66667" fill="#DADADA" />
              <circle cx="45.6665" cy="1.66679" r="1.66667" fill="#DADADA" />
              <circle cx="89.3333" cy="1.66679" r="1.66667" fill="#DADADA" />
              <circle cx="45.6665" cy="16.3335" r="1.66667" fill="#DADADA" />
              <circle cx="89.3333" cy="16.3335" r="1.66667" fill="#DADADA" />
              <circle cx="45.6665" cy="31.0001" r="1.66667" fill="#DADADA" />
              <circle cx="89.3333" cy="31.0001" r="1.66667" fill="#DADADA" />
              <circle cx="45.6665" cy="45.6668" r="1.66667" fill="#DADADA" />
              <circle cx="89.3333" cy="45.6668" r="1.66667" fill="#DADADA" />
              <circle cx="45.6665" cy="60.3335" r="1.66667" fill="#DADADA" />
              <circle cx="89.3333" cy="60.3335" r="1.66667" fill="#DADADA" />
              <circle cx="45.6665" cy="88.6668" r="1.66667" fill="#DADADA" />
              <circle cx="89.3333" cy="88.6668" r="1.66667" fill="#DADADA" />
              <circle cx="45.6665" cy="117.667" r="1.66667" fill="#DADADA" />
              <circle cx="89.3333" cy="117.667" r="1.66667" fill="#DADADA" />
              <circle cx="45.6665" cy="74.6668" r="1.66667" fill="#DADADA" />
              <circle cx="89.3333" cy="74.6668" r="1.66667" fill="#DADADA" />
              <circle cx="45.6665" cy="103" r="1.66667" fill="#DADADA" />
              <circle cx="89.3333" cy="103" r="1.66667" fill="#DADADA" />
              <circle cx="45.6665" cy="132" r="1.66667" fill="#DADADA" />
              <circle cx="89.3333" cy="132" r="1.66667" fill="#DADADA" />
              <circle cx="60.3333" cy="1.66679" r="1.66667" fill="#DADADA" />
              <circle cx="104" cy="1.66679" r="1.66667" fill="#DADADA" />
              <circle cx="60.3333" cy="16.3335" r="1.66667" fill="#DADADA" />
              <circle cx="104" cy="16.3335" r="1.66667" fill="#DADADA" />
              <circle cx="60.3333" cy="31.0001" r="1.66667" fill="#DADADA" />
              <circle cx="104" cy="31.0001" r="1.66667" fill="#DADADA" />
              <circle cx="60.3333" cy="45.6668" r="1.66667" fill="#DADADA" />
              <circle cx="104" cy="45.6668" r="1.66667" fill="#DADADA" />
              <circle cx="60.333" cy="60.3335" r="1.66667" fill="#DADADA" />
              <circle cx="104" cy="60.3335" r="1.66667" fill="#DADADA" />
              <circle cx="60.333" cy="88.6668" r="1.66667" fill="#DADADA" />
              <circle cx="104" cy="88.6668" r="1.66667" fill="#DADADA" />
              <circle cx="60.333" cy="117.667" r="1.66667" fill="#DADADA" />
              <circle cx="104" cy="117.667" r="1.66667" fill="#DADADA" />
              <circle cx="60.333" cy="74.6668" r="1.66667" fill="#DADADA" />
              <circle cx="104" cy="74.6668" r="1.66667" fill="#DADADA" />
              <circle cx="60.333" cy="103" r="1.66667" fill="#DADADA" />
              <circle cx="104" cy="103" r="1.66667" fill="#DADADA" />
              <circle cx="60.333" cy="132" r="1.66667" fill="#DADADA" />
              <circle cx="104" cy="132" r="1.66667" fill="#DADADA" />
            </svg>
            <img src="https://lh6.googleusercontent.com/ejdRJU3fsjTPvsrHqNJzqo5JLNnOAO_or38oCX4_S1GGWukNl2ekddUHBqCQQJCP_FhwO3hUhTQO6niFRkfdDKaITjRLDxsowVylDA-LIMqBgxHgxwgdMks1zDDP6r_ezJ7C0qcOkBYrPd8SYoqNNXM" alt="about" style="border-radius:10px"/>
          </div>
        </div>
        <div class="col-lg-6 col-12">
          <div class="about-five-content">
            <h6 class="small-title text-lg">Papan Informasi </h6>
            <h2 class="main-title fw-bold">Solusi Parkir Mahasiswa/Dosen STT</h2>
            <div class="about-five-tab">
              <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <button class="nav-link active" id="nav-who-tab" data-bs-toggle="tab" data-bs-target="#nav-who"
                    type="button" role="tab" aria-controls="nav-who" aria-selected="true">Tarif Parkir</button>
                  <button class="nav-link" id="nav-vision-tab" data-bs-toggle="tab" data-bs-target="#nav-vision"
                    type="button" role="tab" aria-controls="nav-vision" aria-selected="false">Perhatian</button>
                  <button class="nav-link" id="nav-history-tab" data-bs-toggle="tab" data-bs-target="#nav-history"
                    type="button" role="tab" aria-controls="nav-history" aria-selected="false">Area Parkir</button>
                </div>
              </nav>
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-who" role="tabpanel" aria-labelledby="nav-who-tab">
                  <b>Motor Rp. 5.000/hari</b></br>
                  <b>Mobil Rp. 8.000/hari</b></br>
                  <b>Perhatian:</b><br>
                    - Biaya parkir sudah termasuk biaya penutipan helm dan barang<br>
                    - Harap menunjukkan karcis parkir saat meninggalkan area parkir<br>
                    - Bila karcis hilang akan dikenakan denda Rp. 20.000,-<br>
                    - Jangan meninggalkan barang berharga dikendaraan anda</p>
                </div>
                <div class="tab-pane fade" id="nav-vision" role="tabpanel" aria-labelledby="nav-vision-tab">
                  <b>Informasi</b><br>
                  - Wajib mendaftarkan kendaraan sebelum parkir<br>
                  - Mendaftarkan card member jika diperlukan <br>
                  - Tarif berlaku untuk 24 jam <br>
                  - Menunjukkan kartu identitas dan STNK jika karcis hilang <br>
                  - Menitipkan maximal 2 buah helm dan 1 kendaraan roda 2<br>
                  - Kendaraan roda empat menyesuaikan
                </div>
                <div class="tab-pane fade" id="nav-history" role="tabpanel" aria-labelledby="nav-history-tab">
                  <strong>GEDUNG KAMPUS A</strong> <br>
                    - Parkir Gedung A Depan Blok 1<br>
                    - Parkir Gedung A Depan Blok 2 <br>
                    - Parkir Gedung A Samping<br>
                    <strong>GEDUNG KAMPUS B</strong> <br>
                    - Parkir Gedung B1 Depan<br>
                    - Parkir Gedung B1 Samping <br>
                    - Parkir Gedung B2 Depan<br>
                    - Parkir Gedung B2 Samping <br>
                    - Parkir Gedung B3 Depan<br>
                    - Parkir Gedung B3 Samping <br>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- container -->
  </section>

  <!--====== ABOUT FIVE PART ENDS ======-->

  <!-- ===== service-area start ===== -->
  <section id="services" class="services-area services-eight">
    <!--======  Start Section Title Five ======-->
    <div class="section-title-five">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="content">
              <h6>Layanan Kami</h6>
              <h2 class="fw-bold">Layanan Terbaik Kami</h2>
              <p>
                Layanan aman dan terpercaya, tinggalkan kendaraanmu dengan tenang
              </p>
            </div>
          </div>
        </div>
        <!-- row -->
      </div>
      <!-- container -->
    </div>
    <!--======  End Section Title Five ======-->
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="single-services">
            <div class="service-icon">
              <i class="lni lni-home" ></i>
            </div>
            <div class="service-content">
              <h4>Area Parkir Luas dan Teratur</h4>
              <div style="text-align: justify;">
                <p>
                  NF Parking memiliki area parkir yang luas dan terstruktur dengan baik, sehingga Anda dapat dengan mudah menemukan tempat parkir yang sesuai dengan kebutuhan Anda. Area parkir ini juga dilengkapi dengan CCTV dan petugas keamanan yang berpatroli.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="single-services">
            <div class="service-icon">
              <i class="lni lni-map"></i>
            </div>
            <div class="service-content">
              <h4 class="text-center">Akses Mudah dan Strategis</h4>
              <div style="text-align: justify;">
                <p>
                  NF Parking terletak di lokasi yang strategis dan mudah diakses, baik dengan kendaraan pribadi maupun transportasi umum. Hal ini memungkinkan Anda untuk menghemat waktu dan tenaga saat bepergian.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="single-services">
            <div class="service-icon">
              <i class="lni lni-money-protection"></i>
            </div>
            <div class="service-content">
              <h4 class="text-center">Keamanan Terjamin</h4>
              <div style="text-align: justify;">
                <p>
                  NF Parking dilengkapi dengan berbagai sistem keamanan canggih, seperti CCTV, pagar pembatas, dan petugas keamanan yang berjaga 24 jam. Hal ini untuk memastikan keamanan kendaraan Anda selama diparkir.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="single-services">
            <div class="service-icon">
              <i class="lni lni-layers"></i>
            </div>
            <div class="service-content">
              <h4> Fasilitas Pendukung Lengkap</h4>
              <div style="text-align: justify;">
                <p>
                  NF Parking menyediakan berbagai fasilitas pendukung yang lengkap, seperti toilet bersih, ruang tunggu yang nyaman, dan musala. Hal ini untuk memastikan kenyamanan Anda selama berada di NF Parking.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="single-services">
            <div class="service-icon">
              <i class="lni lni-smile"></i>
            </div>
            <div class="service-content">
              <h4 class="text-center">Layanan Ramah dan Profesional</h4>
              <div style="text-align: justify;">
                <p>
                  Petugas NF Parking selalu siap sedia untuk membantu Anda dengan ramah dan profesional. Mereka akan membantu Anda menemukan tempat parkir, memberikan informasi, dan menjawab pertanyaan Anda dengan sopan dan jelas.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="single-services">
            <div class="service-icon">
              <i class="lni lni-dollar"></i>
            </div>
            <div class="service-content">
              <h4 class="text-center">Harga Terjangkau</h4>
              <div style="text-align: justify;">
                <p>
                  NF Parking menawarkan harga yang terjangkau untuk kendaraan anda. Anda juga dapat menikmati berbagai promo menarik yang ditawarkan secara berkala oleh NF Parking sebagai pengguna NF Parking.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  <!-- ===== service-area end ===== -->
  <section id="testimoni" class="daftar-area daftar-eight"></section>
  <section id="call-action" class="call-action">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-6 col-xl-7 col-lg-8 col-md-5">
          <div class="inner-content">
            <h2>Testimoni NF Parking</h2>
            <p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="single-services">
            <div class="service-icon">
              <i class="lni lni-user"></i>
            </div>
            <div class="service-content">
              <h4 style="color: white;" class="text-center">Risca Marcella - Mahasiswa</h4>
              <div style="text-align: justify;">
                <p style="color: white;">
                  "Saya seorang mahasiswa yang sering pulang sore setelah kegiatan di kampus A maupun kampus B. NF Parking memberikan rasa aman karena dilengkapi dengan CCTV dan petugas keamanan yang berjaga 24 jam. Selain itu, harga parkirnya sangat terjangkau bagi kantong mahasiswa, dan ada banyak promo menarik yang sering ditawarkan. Saya sangat merekomendasikan NF Parking untuk teman-teman mahasiswa lainnya untuk menggunakan dan mendaftarkan kendaraanya pada NF Parking."
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="single-services">
            <div class="service-icon">
              <i class="lni lni-user"></i>
            </div>
            <div class="service-content">
              <h4 style="color: white;" class="text-center">Putri Rahma - Staff</h4>
              <div style="text-align: justify;">
                <p style="color: white;">
                  "NF Parking telah menjadi solusi sempurna bagi saya sebagai staf kampus. Lokasinya yang strategis dan mudah diakses membuat perjalanan saya ke kampus jadi lebih efisien. Saya bisa menghemat banyak waktu dan energi. Selain itu, fasilitas pendukung seperti toilet bersih dan ruang tunggu yang nyaman sangat membantu ketika saya harus menunggu lama. Terima kasih, NF Parking!"
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="single-services">
            <div class="service-icon">
              <i class="lni lni-user"></i>
            </div>
            <div class="service-content">
              <h4 style="color: white;" class="text-center">Farhan Abdillah - Dosen</h4>
              <div style="text-align: justify; ">
                <p style="color: white;">
                  "Sebagai seorang dosen di kampus, memiliki tempat parkir yang luas dan teratur adalah sebuah keharusan. NF Parking telah memenuhi kebutuhan tersebut dengan sangat baik. Saya dapat dengan mudah menemukan tempat parkir yang sesuai setiap hari, dan kehadiran CCTV serta petugas keamanan yang berpatroli membuat saya merasa tenang. Ini sangat membantu saya untuk fokus pada pekerjaan saya tanpa harus khawatir tentang kendaraan saya."
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- row -->
    </div>
  </section>
  <!-- ===== testimoni-area start ===== -->

  <!-- ===== service-area end ===== -->

  <!-- Start Cta Area -->
  <!-- End Cta Area -->
  <!-- ========================= map-section end ========================= -->
  <section id="map" class="map-area map-eight">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15861.11824167206!2d106.82823839767508!3d-6.357849098113277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ed6178a2b32f%3A0x20d7938791acfd4a!2sSTT%20Terpadu%20Nurul%20Fikri%20(Kampus%20A%20-%20Sekretariat)!5e0!3m2!1sid!2sid!4v1720605409116!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </section>
  <!-- End Cta Area -->
  <!-- ========================= map-section end ========================= -->
  <section id="map" class="map-area map-eight">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.3175618531795!2d106.83004330985096!3d-6.352919162123865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec6b07b68ea5%3A0x17da46bdf9308386!2sSTT%20Terpadu%20Nurul%20Fikri%20-%20Kampus%20B!5e0!3m2!1sid!2sid!4v1719329300674!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </section>
  <!-- ========================= map-section end ========================= -->
  <section id="daftar" class="daftar-area daftar-eight"></section>
  <section id="call-action" class="call-action">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-9">
          <div class="inner-content">
            <h2>Kenyamanan Anda <br />adalah Prioritas Kami</h2>
            <p>
              Daftarkan kendaraan anda dengan melengkapi formulir
              <br>jika terjadi kendala hubungi 021-0011-0022
            </p>
            <div class="light-rounded-buttons">
            @if (Route::has('register'))
              <a href="{{ route('register') }}"
              class="btn primary-btn-outline">Daftar Kendaraan</a>
            @endif
          </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Start Footer Area -->
  <footer class="footer-area footer-eleven">
    <!-- Start Footer Top -->
    <div class="footer-top">
      <div class="container">
        <div class="inner-content">
          <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
              <!-- Single Widget -->
              <div class="footer-widget f-about">
                <div class="logo">
                  <a href="index.html">
                    <img src="assets/images/logo.png" alt="#" class="img-fluid" />
                  </a>
                </div>
                <p>
                  Temukan layanan parkir terbaik dan yang ternyaman dengan NF Parking
                </p>
                <p class="copyright-text">
                  <span>© 2024 Kelompok 6 SI2304</span>Project UAS
                  <a href="javascript:void(0)" rel="nofollow"> PARKIR KAMPUS </a>
                </p>
              </div>
              <!-- End Single Widget -->
            </div>
            <div class="col-lg-2 col-md-6 col-12">
              <!-- Single Widget -->
              <div class="footer-widget f-link">
                <h5>Layanan</h5>
                <ul>
                  <li><a href="javascript:void(0)">Penitipan Helm</a></li>
                  <li><a href="javascript:void(0)">Penitipan Barang Lain</a></li>
                  <li><a href="javascript:void(0)">Musholla</a></li>
                  <li><a href="javascript:void(0)">Rest Area</a></li>
                </ul>
              </div>
              <!-- End Single Widget -->
            </div>
            <div class="col-lg-2 col-md-6 col-12">
              <!-- Single Widget -->
              <div class="footer-widget f-link">
                <h5>Parkir Khusus</h5>
                <ul>
                  <li><a href="javascript:void(0)">Dosen</a></li>
                  <li><a href="javascript:void(0)">Mahasiswa</a></li>
                  <li><a href="javascript:void(0)">Karyawan</a></li>
                  <li><a href="javascript:void(0)">Staff</a></li>
                </ul>
              </div>
              <!-- End Single Widget -->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
              <!-- Single Widget -->
              <div class="footer-widget newsletter">
                <h5>Berlangganan</h5>
                <p>Berlangganan untuk mendapatkan informasi promo</p>
                <form action="#" method="get" target="_blank" class="newsletter-form">
                  <input name="EMAIL" placeholder="Masukkan Email" required="required" type="email" />
                  <div class="button">
                    <button class="sub-btn">
                      <i class="lni lni-envelope"></i>
                    </button>
                  </div>
                </form>
              </div>
              <!-- End Single Widget -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ End Footer Top -->
  </footer>
  <!--/ End Footer Area -->

  <a href="#" class="scroll-top btn-hover">
    <i class="lni lni-chevron-up"></i>
  </a>

  <!--====== js ======-->
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/glightbox.min.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/tiny-slider.js"></script>

  <script>

    //===== close navbar-collapse when a  clicked
    let navbarTogglerNine = document.querySelector(
      ".navbar-nine .navbar-toggler"
    );
    navbarTogglerNine.addEventListener("click", function () {
      navbarTogglerNine.classList.toggle("active");
    });

    // ==== left sidebar toggle
    let sidebarLeft = document.querySelector(".sidebar-left");
    let overlayLeft = document.querySelector(".overlay-left");
    let sidebarClose = document.querySelector(".sidebar-close .close");

    overlayLeft.addEventListener("click", function () {
      sidebarLeft.classList.toggle("open");
      overlayLeft.classList.toggle("open");
    });
    sidebarClose.addEventListener("click", function () {
      sidebarLeft.classList.remove("open");
      overlayLeft.classList.remove("open");
    });

    // ===== navbar nine sideMenu
    let sideMenuLeftNine = document.querySelector(".navbar-nine .menu-bar");

    sideMenuLeftNine.addEventListener("click", function () {
      sidebarLeft.classList.add("open");
      overlayLeft.classList.add("open");
    });

    //========= glightbox
    GLightbox({
      'href': 'https://youtu.be/HbYEcUVhRmM',
      'type': 'video',
      'source': 'youtube', //vimeo, youtube or local
      'width': 900,
      'autoplayVideos': true,
    });

  </script>
</body>

</html>

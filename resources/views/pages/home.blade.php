<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="BeHero - Free Company Profile Template Bootstrap 4">
  <meta name="author" content="Indri Junanda">
  <link href="{{ asset('frontend/favicon.png') }}" rel="icon">
  <title>RuangInformatika | Home</title>
 
  <!-- Bootstrap core CSS -->
  <link href="{{ asset('frontend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{ asset('frontend/css/behero.min.css') }}" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('frontend/vendor/font-awesome/css/all.min.css') }}">

  <!-- Font Google -->
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700;900&display=swap" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="{{ asset('frontend/img/logo_mi.png') }}" alt="Logo Brand" width="110" height="110" class="img-fluid"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
      aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto mt-2">
        <li class="nav-item">
          <a href="#page-top" class="nav-link js-scroll-trigger">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#projects">News</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="{{ route('register') }}">
            <span>Register</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="{{ route('login') }}">
            <span class="btn btn-primary btn-sm">Login</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="{{ route('discussion.index') }}">
            <span class="btn btn-secondary btn-join">Forum</span>
          </a>
        </li>

      </ul>
    </div>
  </div>
</nav>

<header>
  <div class="container mt-8">
    <div class="row">
      <div class="col-lg-6 pt-5">
        <h1 class="text-primary mb-3">Selamat Datang <br> di Ruang Informatika!</h1>
        <h5 class="mb-4"> Situs web ini dibuat khusus untuk mahasiswa <b>Manajemen Informatika</b> <a href="https://instagram.com/official.poltek.piksi/">&copy;<b>officialpoltekpiksi</b></a>.</h5>
        <a href="https://piksiinputserang.ac.id" class="btn btn-primary btn-join">Gabung Bersama Kami !</a>
      </div>
      <div class="col-lg-6 mt-3">
        <img src="{{ asset('frontend/img/jumbotron.jpg') }}" alt="Startup" class="img-fluid rounded shadow rounded-circle">
      </div>
    </div>
  </div>
</header>

<section id="service">
  <div class="container">
    <div class="card-service">
      <div class="row">
        <div class="col-lg-4 text-center list-service">
          <img src="{{ asset('frontend/icon/cisco.png') }}" alt="Cisco" class="img-fluid img-service">
          <p class="text-service">Cisco</p>
        </div>
        <div class="col-lg-4 text-center list-service">
          <img src="{{ asset('frontend/icon/MTCNA.png') }}" alt="Mikrotik" class="img-fluid img-service">
          <p class="text-service">Mikrotik</p>
        </div>
        <div class="col-lg-4 text-center list-service">
          <img src="{{ asset('frontend/icon/seamolec.png') }}" alt="Game Apps" class="img-fluid img-service">
          <p class="text-service">Seamolec</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="about" class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <img src="{{ asset('frontend/img/rizky.jpg') }}" alt="About Us" class="img-fluid rounded shadow rounded-circle">
      </div>
      <div class="col-lg-6 pt-5">
        <h3 class="text-primary">About Us</h3>
        <h6 class="mt-4">Saya rizky firmansyah, mahasiswa <b>Informatika</b> kampus Politeknik Piksi Input Serang. </h6>
        <h6>Saya seorang <b>Web Developer</b>. Hobi saya <strong>Ngopi (Ngoding Hepi).</strong></h6>
        <h6>Menanti error agar segera datang, sebab dengannya skill bisa terlatih dan berkembang. Ngoding itu mudah & menyenangkan, bila segera dikerjakan tanpa banyak alasan.</h6>
        <a href="{{ route('portfolio') }}" class="btn btn-primary btn-join mt-2"> My Profile</a>
      </div>
    </div>
  </div>
</section>

<section id="projects" class="py-5">
  <div class="container">
    <h3 class="text-center">Popular News</h3>      
    <div class="row list-project">
      <div class="col-lg-6">
        <img src="{{ asset('frontend/img/mtcre.jpg') }}" alt="Project 1" class="img-fluid rounded shadow">
      </div>
      <div class="col-lg-6">
        <h4 class="project-title"> KEPALA PUSKOM PIS MENGIKUTI SERTIFIKASI MIKROTIK MTCNA</h4>
        <p>Berkunjung ke markas ID Networker yang bertempatkan di Jl.Anggrek Rosliana Raya No.12A Kemanggisan Palmerah Jakarta Barat, Kepala Puskom Politeknik Piksi Input Serang mengikuti pelatihan Selama 3 hari dan lulus sertifikasi Mikrotik MTCNA dengan nilai memuaskan. <br><br>

        ID-Networkers</p>
        <a href="https://piksiinputserang.ac.id/kepala-puskom-pis-mengikuti-sertifikasi-mikrotik-mtcna/" class="btn btn-primary">Read More</a>
      </div>
    </div>

    <div class="row list-project">
      <div class="col-lg-6">
        <h4 class="project-title"> PELATIHAN & SERTIFIKASI PROGRAM VSGA</h4>
        <p>Mahasiswa Politeknik Piksi Input Serang Program Studi Manajemen Informatika sedang mengikuti Pelatihan dan Sertifikasi Program Vocational School Graduate Academy (VSGA) Digital Talent Scholarship 2019 tahap II di Politeknik Negeri Jakarta.

        Program Vocational School Graduate Academy (VSGA) merupakan program pelatihan bidang TIK yang berfokus dalam peningkatan kompetensi bagi 5.225 orang lulusan SMK yang belum bekerja.</p>
        <a href="https://piksiinputserang.ac.id/pelatihan-dan-sertifikasi-program-vsga/" class="btn btn-primary mb-5">Read More</a>
      </div>
      <div class="col-lg-6">
        <img src="{{ asset('frontend/img/vsga.jpg') }}" alt="Project 2"
        class="img-fluid rounded shadow">
      </div>
    </div>
    <div class="row list-project">
      <div class="col-lg-6">
        <img src="{{ asset('frontend/img/bpptik.jpg') }}" alt="Project 3" class="img-fluid rounded shadow">
      </div>
      <div class="col-lg-6">
        <h4 class="project-title"> MAHASISWA PIKSI LOLOS SELEKSI PELATIHAN & SERTIFIKASI – BPPTIK Gelombang 10</h4>
        <p>Pelatihan dan sertifikasi kompetensi Berbasis Standar Kompetensi Kerja Nasional (SKKNI) di bidang TIK gelombang ke 10 tahun 2019 .
        Mahasiswa Politeknik Piksi Input Serang yang sedang mengikuti pelatihan dan sertifikasi berbasis SKKNI di bidang Teknologi Informasi dan Komunikasi (TIK) pada gelombang 10.</p>
        <a href="https://piksiinputserang.ac.id/mahasiswa-piksi-lolos-seleksi-pelatihan-sertifikasi-bpptik-gelombang-10/" class="btn btn-primary">Read More</a>
      </div>
    </div>
  </div>
</section>

<section id="contact" class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 mb-3">
        <img src="{{ asset('frontend/img/logo_mi.png') }}" alt="BeHero Brand Logo" class="img-fluid" height="110" width="110">
        <div class="contact-desc">
          <p class="mb-0">Kab. Serang, Banten.</p>
          <p class="mb-0">Indonesia</p>
          <p class="mb-0">+628 312 214 1454</p>
          <p class="mb-0">rizkyfirmansyah3344@gmail.com</p>
        </div>
      </div>
      <div class="col-lg-4 mb-3">
        <h3 class="contact-title">Subscribe</h3>
        <div class="form-group">
          <input type="text" class="form-control form-subscribe" placeholder="Email Address">
          <button type="submit" class="btn btn-primary mt-3 float-right"><i class="fas fa-paper-plane"></i> Send</button>
        </div>
      </div>
      <div class="col-lg-4 mb-3">
        <h3 class="contact-title">Find Us</h3>
        <div class="d-flex flex-row">
         <a target="_blank" href="https://instagram.com/rizkyfirman_15" class="link-socmed"><i class="fab fa-instagram"></i></a>
         <a target="_blank" href="https://www.facebook.com/mobaarafat12321" class="link-socmed"><i class="fab fa-facebook"></i></a>
         <a target="_blank" href="https://te.me/rizkyfirman15" class="link-socmed"><i class="fab fa-telegram"></i></a>
         <a target="_blank" href="https://github.com/rizkyfirman15" class="link-socmed"><i class="fab fa-github"></i></a>  
       </div>
     </div>
   </div>
 </div>
</section>

<!-- Footer -->
<footer class="py-5 bg-white">
  <div class="container">
    <p class="m-0 text-center">&copy; <script>
      document.write(new Date().getFullYear());
    </script> - developed by
    <a href="https://github.com/rizkyfirman15" target="_blank"><b>rizkyfirman15</b></a></p>
  </div>    
</footer>

<!-- Bootstrap core JavaScript -->
<script src="{{ asset('frontend/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Plugin JavaScript -->
<script src="{{ asset('frontend/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom JavaScript for this theme -->
<script src="{{ asset('frontend/js/behero.min.js') }}"></script>

</body>

</html>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Rizky Firmansyah |  About Us</title>

  <link rel="icon" href="favicon.ico" type="image/png" />

  <link rel="icon" href="favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="{{ asset('frontend/portfolio/folio/css/main.bundle.css') }}">
  <script src="https://kit.fontawesome.com/4e5a72c756.js"></script>
  {{-- <link rel="stylesheet" href="{{ asset('frontend/portfolio/css/themes/white-grey.css') }}"> --}}
</head>
<body>
  <nav class="hero mb-5" role="navigation" aria-label="main navigation">
  </nav>

  <section class="hero">
    <div class="hero-body">
      <div class="container">
        <div class="level">
          <div class="level-item has-text-centered">
            <figure class="image is-128x128">
              <img class="is-rounded" src="{{ asset('frontend/portfolio/folio/img/rizky.jpg') }}">
            </figure>
          </div>
        </div>
        <div class="columns has-text-centered">
          <div class="column">
            <h1 class="title is-1">
              Rizky Firmansyah
            </h1>
            <h2 class="subtitle">
              Web Developer | College Student | Informatics Management
            </h2>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <h1 class="title">About Me</h1>
      <hr />
      <p>Saya rizky firmansyah, mahasiswa <b>Informatika</b> kampus Politeknik Piksi Input Serang.
        Profesi saya adalah seorang <b>Web Developer</b>, tapi background saya adalah lulusan Otomotif. Saya mulai terjun ke dunia IT setelah lulus SMK dan melanjutkan studi perguruan tinggi di salah satu kampus vokasi terbaik di provinsi Banten yaitu <strong>Politeknik Piksi Input Serang</strong>. Disini saya mulai untuk memfokuskan diri saya untuk mendalami ilmu IT yang mana alasan saya berpindah profesi karena perkembangan teknologi di era sekarang ini semakin maju dan peluang kerja dibidang IT sangat banyak, maka dari itu saya merasa suatu hal yang tepat bagi saya untuk mendalami ilmu IT.</p>
    </div>
  </section>
  <section class="section">
    <div class="container">
      <h1 class="title">Experience / Training</h1>
      <hr />
      <div class="card">
        <div class="card-content">
          <div class="media">
            <div class="media-left">
              <figure class="image is-48x48">
                <img src="{{ asset('frontend/portfolio/folio/img/mitsuba3.jpg') }}" alt="Placeholder image">
              </figure>
            </div>
            <div class="media-content">
              <p class="title is-4">Pelatihan Kerja Lapangan (PKL)</p>
              <p class="subtitle is-6">PT. Mitsuba 3 | <time datetime="2017">Oktober 2017</time> - <time
                  datetime="2017">Desember 2017</time> </p>
            </div>
          </div>
          <div class="content">
            <p>Posisi Magang:</p>
            <ul>
              <li>Enginering Chemical (EC)</li>
            </ul>
            <div class="tags">
              <span class="tag">repair</span>
              <span class="tag">machine</span>
              <span class="tag">electricity</span>
            </div>
          </div>
        </div>
      </div>
      <div class="card card-gap">
        <div class="card-content">
          <div class="media">
            <div class="media-left">
              <figure class="image is-48x48">
                <img src="{{ asset('frontend/portfolio/folio/img/kominfo.png') }}" alt="Placeholder image">
              </figure>
            </div>
            <div class="media-content">
              <p class="title is-4">VSGA - Digital Talent Scholarship</p>
              <p class="subtitle is-6">Politeknik Negeri Jakarta | <time datetime="2019">Oktober 2019</time> - <time
                  datetime="2019">November 2019</time></p>
            </div>
          </div>
          <div class="content">
            <p>Tema Pelatihan:</p>
            <ul>
              <li>Junior Web Developer</li>
            </ul>
            <div class="tags">
              <span class="tag">html</span>
              <span class="tag">css</span>
              <span class="tag">javascript</span>
              <span class="tag">php</span>
              <span class="tag">mysql</span>
              <span class="tag">bootstrap</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <h1 class="title">Projects</h1>
      <hr />
      <div class="tile is-ancestor">
        <div class="tile is-vertical is-12">
          <div class="tile">
            <div class="tile is-parent">
              <article class="tile is-child notification">
                <p class="title">Inventory</p>
                <figure class="image is-3by2">
                  <img class="modal-trigger" data-target="project-1-modal" src="{{ asset('frontend/portfolio/folio/img/project.png') }}">
                </figure>
              </article>
            </div>
            <div class="tile is-parent">
              <article class="tile is-child notification">
                <p class="title">Sistem Kelas</p>
                <figure class="image is-4by3">
                  <img class="modal-trigger" data-target="project-2-modal" src="{{ asset('frontend/portfolio/folio/img/project1.png') }}">
                </figure>
              </article>
            </div>
            <div class="tile is-parent">
              <article class="tile is-child notification">
                <p class="title">Website</p>
                <figure class="image is-4by3">
                  <img class="modal-trigger" data-target="project-3-modal" src="{{ asset('frontend/portfolio/folio/img/project2.png') }}">
                </figure>
              </article>
            </div>
          </div>
        </div>
      </div>
  </section>

  <section class="section">
    <div class="container">
      <h1 class="title">Education</h1>
      <hr />
      <div class="card">
        <div class="card-content">
          <div class="content">
            <p class="title is-4">Smk Negeri 1 Tanara</p>
            <p class="subtitle is-6">Teknik Kendaraan Ringan | <time datetime="2017">2017</time> - <time
                datetime="2018">2018</time></p>
          </div>
          <div class="content">
           Keahlian yang dimiliki:
            <ul>
              <li>Tune Up</li>
              <li>Overhoul</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="card card-gap">
        <div class="card-content">
          <div class="content">
            <p class="title is-4">Politeknik Piksi Input Serang</p>
            <p class="subtitle is-6">Manajemen Informatika | <time datetime="2018">2018</time> - <time
                datetime="2020">2020</time></p>
          </div>
          <div class="content">
            Keahlian yang dimiliki:
            <ul>
              <li>HTML</li>
              <li>CSS</li>
              <li>Javascript</li>
              <li>PHP</li>
              <li>Laravel</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <h1 class="title">Contact</h1>
      <hr />
      <nav class="level">
        <div class="level-item has-text-centered">
          <div>
            <a href="https://github.com/rizkyfirman15" class="icon is-large">
              <i class="fab fa-2x fa-github"></i>
            </a>
            <p class="heading"><a href="https://github.com/rizkyfirman15">Github</a></p>
          </div>
        </div>
        <div class="level-item has-text-centered">
          <div>
            <a href="mailto:rizkyfirmansyah3344@gmail.com" class="icon is-large">
              <i class="fas fa-2x fa-envelope"></i>
            </a>
            <p class="heading"><a href="mailto:rizkyfirmansyah3344@gmail.com">Email</a></p>
          </div>
        </div>
        <div class="level-item has-text-centered">
          <div>
            <a href="https://www.facebook.com/mobaarafat12321" class="icon is-large">
              <i class="fab fa-2x fa-facebook"></i>
            </a>
            <p class="heading"><a href="https://www.facebook.com/mobaarafat12321">Facebook</a></p>
          </div>
        </div>
      </nav>
    </div>
  </section>

  <!-- Modals -->
  <div id="project-1-modal" class="modal">
    <div class="modal-background"></div>
    <div class="modal-card">
      <header class="modal-card-head">
        <p class="modal-card-title">Simple Inventory Native</p>
        <button class="delete" aria-label="close"></button>
      </header>
      <section class="modal-card-body">

        <div class="carousel">
          <figure class="image is-4by3 carousel-cell">
            <img src="{{ asset('frontend/portfolio/folio/img/carousel/1.png') }}">
          </figure>
        </div>

        <div class="content">

          <p>Aplikasi Inventory Native dengan fitur-fitur yang masih sederhana, dibangun tanpa menggunakan framework.</p>

          <div class="tags">
            <span class="tag">PHP</span>
            <span class="tag">MYSQL</span>
            <span class="tag">Bootstrap</span>
            <span class="tag">SB Admin2</span>
          </div>

        </div>

      </section>
      <footer class="modal-card-foot">
        <a href="#" class="button is-success">Demo</a>
      </footer>
    </div>
  </div>

  <div id="project-2-modal" class="modal">
    <div class="modal-background"></div>
    <div class="modal-card">
      <header class="modal-card-head">
        <p class="modal-card-title">Sistem Kelas</p>
        <button class="delete" aria-label="close"></button>
      </header>
      <section class="modal-card-body">

        <div class="carousel">
          <figure class="image is-4by3 carousel-cell">
            <img src="{{ asset('frontend/portfolio/folio/img/carousel/2.png') }}">
          </figure>
        </div>

        <div class="content">

          <p>Aplikasi Sistem Kelas dibangun dengan framework laravel, masih sedang dalam proses pengembangan.</p>

          <div class="tags">
            <span class="tag">PHP</span>
            <span class="tag">MYSQL</span>
            <span class="tag">Laravel</span>
            <span class="tag">Ruang Admin</span>
          </div>

        </div>

      </section>
      <footer class="modal-card-foot">
        <a href="#" class="button is-success">Demo</a>
      </footer>
    </div>
  </div>

  <div id="project-3-modal" class="modal">
    <div class="modal-background"></div>
    <div class="modal-card">
      <header class="modal-card-head">
        <p class="modal-card-title">Website Informatika</p>
        <button class="delete" aria-label="close"></button>
      </header>
      <section class="modal-card-body">
        <div class="carousel">
          <figure class="image is-4by3 carousel-cell">
            <img src="{{ asset('frontend/portfolio/folio/img/carousel/3.png') }}">
          </figure>
        </div>

        <div class="content">
          <p>Website Informatika dibangun dengan bahasa pemrograman PHP dan framework bootstrap.</p>
          <div class="tags">
            <span class="tag">PHP</span>
            <span class="tag">MYSQL</span>
            <span class="tag">Bootstrap</span>
          </div>
        </div>

      </section>
      <footer class="modal-card-foot">
         <a href="#" class="button is-success">Demo</a>
      </footer>
    </div>
  </div>

  <footer class="footer">
    <div class="content has-text-centered">
      <p>
        <a href="https://github.com/rizkyfirman15" target="_blank" class="icon has-text-primary">
          <i class="fab fa-github"></i> <strong>rizkyfirman15</strong></a>
      </p>
    </div>
  </footer>

  <script src="{{ asset('frontend/portfolio/folio/js/bundle.js') }}"></script>
</body>

</html>

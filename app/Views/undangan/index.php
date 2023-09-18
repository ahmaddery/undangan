<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dhika & Nofa Wedding</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Sacramento&family=Work+Sans:wght@100;300;400;600;700&display=swap"
    rel="stylesheet">

  <!-- simplyCountdown -->
  <link rel="stylesheet" href="countdown/simplyCountdown.theme.default.css" />
  <script src="countdown/simplyCountdown.min.js"></script>

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <link rel="stylesheet" href="<?= site_url('css/dino.css'); ?>">
</head>

<style>

:root {
  --pink: #f14e95;
  --bg: #0a0a0a;
  --shadow: 0 2px 2px rgb(0 0 0 / 0.5);
}

body {
  font-size: 1.2rem;
  font-family: 'Work Sans', sans-serif;
  min-height: 4000px;
}

.hero::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-image: url(img/bg-prewed.jpg);
  background-size: cover;
  background-position: center;
  z-index: -1;
  filter: grayscale();
}

.hero {
  position: relative;
  min-height: 100vh;
}

.hero h1,
.hero h4,
.hero p {
  text-shadow: var(--shadow);
}

.hero h1 {
  font-family: 'Sacramento', cursive;
  font-size: 6rem;
}

.hero h4 {
  font-size: 1.6rem;
}

.hero p {
  font-size: 1.4rem;
}

.hero a {
  color: var(--pink);
  background-color: white;
  box-shadow: var(--shadow);
}

.hero a:hover {
  background-color: var(--pink);
  color: white;
}

.mynavbar {
  background-color: rgba(255, 255, 255, 0.3) !important;
  backdrop-filter: blur(4px);
}

.mynavbar .offcanvas {
  height: 100vh;
}

.mynavbar .navbar-brand,
.mynavbar .offcanvas-title {
  font-family: 'Sacramento', cursive;
  font-size: 3.2rem;
  font-weight: bold;
}

.mynavbar .nav-link {
  text-transform: uppercase;
}

.home {
  background-image: url(img/bg.png);
  background-size: cover;
  min-height: 100vh;
  margin-top: -6rem;
  padding-top: 15rem;
  padding-bottom: 5rem;
}

.home h2,
.info h2,
.story h2,
.gallery h2,
.rsvp h2,
.gifts h2 {
  color: var(--pink);
  font-family: 'Sacramento';
  font-size: 5rem;
  font-weight: bold;
}

.home h3 {
  color: #444;
  font-size: 1.5rem;
  margin-bottom: 1rem;
}

.home p {
  font-size: 1.1rem;
  color: #666;
}

.home .couple {
  margin-top: 100px;
}

.home .couple h3 {
  font-family: 'Sacramento';
  font-size: 2.4rem;
  color: var(--pink);
}

.home .couple img {
  width: 100%;
}

.home .heart {
  width: 50px;
  height: 50px;
  background-color: white;
  display: flex;
  border-radius: 50%;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
  position: absolute;
  left: 50%;
  transform: translateX(-50%) translateY(65px);
}

.home .heart i {
  margin: auto;
  color: var(--pink);
}

.info {
  background-color: var(--bg);
  color: white;
  padding-top: 10rem;
  padding-bottom: 8rem;
}

.info .alamat {
  font-size: 1.1rem;
}

.info .description {
  font-size: 1rem;
  font-weight: 300;
}

.info .card {
  background-color: rgba(255, 255, 255, 0.2) !important;
  color: white !important;
  border: 1px solid #999;
}

.info .card-header {
  border-bottom: 1px solid #999;
  text-transform: uppercase;
  letter-spacing: 0.1rem;
}

.info .card-body {
  font-size: 1rem;
}

.info .card-footer {
  border-top: 1px solid #999;
  font-size: 0.9rem;
  font-weight: 300;
}

.story,
.gallery,
.rsvp,
.gifts {
  padding-top: 10rem;
  padding-bottom: 8rem;
}

.story span,
.gallery span,
.gifts span {
  text-transform: uppercase;
  color: #666;
  font-size: 0.9rem;
  letter-spacing: 1px;
  display: block;
  margin-bottom: 1rem;
}

.story p,
.gallery p,
.rsvp p,
.gifts p {
  font-size: 1rem;
  font-weight: 300;
}

.timeline {
  list-style: none;
  padding: 1.4rem 0;
  margin-top: 1rem;
  position: relative;
}

.timeline::before {
  content: '';
  top: 0;
  bottom: 0;
  position: absolute;
  width: 1px;
  background-color: #ccc;
  left: 50%;
}

.timeline li {
  margin-bottom: 1.5rem;
  position: relative;
}

.timeline li::before,
.timeline li::after {
  content: '';
  display: table;
}

.timeline li::after {
  clear: both;
}

.timeline li .timeline-image {
  width: 160px;
  height: 160px;
  background-color: #ccc;
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
  border-radius: 50%;
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}

.timeline li .timeline-panel {
  width: 40%;
  float: left;
  border: 1px solid #ccc;
  padding: 2rem;
  position: relative;
  border-radius: 8px;
  background-color: #fff;
}

.timeline li .timeline-panel::before {
  content: '';
  display: inline-block;
  position: absolute;
  border-top: 15px solid transparent;
  border-left: 15px solid #ccc;
  border-right: 0 solid #ccc;
  border-bottom: 15px solid transparent;
  top: 80px;
  right: -15px;
}

.timeline li .timeline-panel::after {
  content: '';
  position: absolute;
  display: inline-block;
  border-top: 14px solid transparent;
  border-left: 14px solid #fff;
  border-right: 0 solid #fff;
  border-bottom: 14px solid transparent;
  top: 81px;
  right: -13px;
}

.timeline li.timeline-inverted .timeline-panel {
  float: right;
}

.timeline li.timeline-inverted .timeline-panel::before {
  border-left-width: 0;
  border-right-width: 15px;
  left: -15px;
  right: auto;
}

.timeline li.timeline-inverted .timeline-panel::after {
  border-left-width: 0;
  border-right-width: 14px;
  left: -13px;
  right: auto;
}

.gallery {
  background-color: #f5f5f5;
}

.rsvp {
  background-color: var(--bg);
}

.rsvp h2 {
  font-size: 4.5rem;
}

.rsvp p {
  color: white;
}

.rsvp form label {
  color: white;
}

.rsvp button {
  background-color: var(--pink);
  color: white;
  border: 1px solid var(--pink);
}

.rsvp button:hover {
  background-color: white;
  color: var(--pink);
  border: 1px solid white;
}


.audio-icon-wrapper {
  width: 4rem;
  height: 4rem;
  font-size: 4rem;
  position: fixed;
  bottom: 2.5rem;
  right: 2rem;
  cursor: pointer;
  color: white;
  opacity: 0.5;
  mix-blend-mode: difference;
  animation: rotating 4s linear infinite;
  transform-origin: center;
  display: flex;
  justify-content: center;
  align-items: center;
  line-height: 0;
}

@keyframes rotating {
  from {
    transform: rotate(0);
  }
  to {
    transform: rotate(360deg);
  }
}

/* Media Query */
/* Extra large */
@media (max-width: 1200px) {
  .home .heart {
    transform: translateX(-50%) translateY(45px);
  }
}

/* laptop */
@media (max-width: 992px) {
  html {
    font-size: 75%;
  }

  .simply-countdown > .simply-section {
    padding: 70px;
  }

  .home .heart {
    display: none;
  }

  .timeline::before {
    left: 60px;
  }

  .timeline li .timeline-image {
    left: 15px;
    margin-left: 45px;
    top: 16px;
  }

  .timeline li .timeline-panel {
    width: calc((100% - 200px));
    float: right;
  }

  .timeline li .timeline-panel::before {
    border-left-width: 0;
    border-right-width: 15px;
    left: -15px;
    right: auto;
  }

  .timeline li .timeline-panel::after {
    border-left-width: 0;
    border-right-width: 14px;
    left: -13px;
    right: auto;
  }
}

/* tablet */
@media (max-width: 768px) {
  html {
    font-size: 65%;
  }

  .simply-countdown > .simply-section {
    padding: 60px;
    margin: 5px;
  }

  .mynavbar .nav-link {
    font-size: 2rem;
    text-align: center;
  }

  .sticky-top {
    overflow: hidden;
  }

  .timeline li .timeline-image {
    width: 140px;
    height: 140px;
  }
}

/* mobile phone */
@media (max-width: 576px) {
  html {
    font-size: 60%;
  }

  .simply-countdown > .simply-section {
    padding: 45px;
    margin: 3px;
  }

  .timeline li .timeline-image {
    width: 80px;
    height: 80px;
  }

  .timeline li .timeline-panel {
    width: 65%;
    transform: translateX(-20px);
  }

  .timeline li .timeline-panel::before {
    top: 30px;
  }

  .timeline li .timeline-panel::after {
    top: 31px;
  }
}

</style>

<body>

  <section id="hero" class="hero w-100 h-100 p-3 mx-auto text-center d-flex justify-content-center align-items-center text-white" style="background-image: url('<?= base_url('img/bg-prewed.jpg') ?>'); background-size: cover; background-repeat: no-repeat;">

    <main>
      <?php foreach ($acara as $acara): ?>
      <h4>Kepada <span>Bapak/Ibu/Saudara/i, </span></h4>
      <h1><?= $acara['nama_mempelai'] ?></h1>
      <p>Akan melangsungkan resepsi pernikahan dalam:</p>
      <div class="event-time" data-event-time="<?= esc($acara['tanggal_jam']) ?>">
                                Loading...</div>
      <a href="#home" class="btn btn-lg mt-4" onClick="enableScroll()">Lihat Undangan</a>
      <?php endforeach; ?>
    </main>

  </section>

  <nav class="navbar navbar-expand-md bg-transparent sticky-top mynavbar">
    <div class="container">
      <a class="navbar-brand" href="#">Dino</a>
      <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
        aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Dino</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <div class="navbar-nav ms-auto">
            <a class="nav-link" href="#home">Home</a>
            <a class="nav-link" href="#info">Info</a>
            <a class="nav-link" href="#story">Story</a>
            <a class="nav-link" href="#gallery">Gallery</a>
            <a class="nav-link" href="#rsvp">RSVP</a>
            <a class="nav-link" href="#gifts">Gifts</a>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <section id="home" class="home">
    <?php foreach ($events as $event): ?>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 text-center">
          <h2>Acara Pernikahan</h2>
          <h3> <?= $event['lokasi'] ?></h3>
          <h4 style="font-size: 17px;">pada tanggal</h4>

          <h3> <?= $event['tanggal'] ?></h3>
          <p>Oleh karena itu, dengan segala hormat, kami bermaksud untuk mengundang Bapak/Ibu, Saudara/i, untuk hadir
            pada acara pernikahan kami. </p>
            <?php endforeach; ?>
        </div>
      </div>

      <div class="row couple">
        <div class="col-lg-6">
          <div class="row">
            <div class="col-8 text-end">
              <?php foreach ($mempelaiPria as $pria): ?>
              <h3><?= $pria['nama'] ?></h3>
              <p><?= $pria['deskripsi'] ?></p>
              <p><?= $pria['orangtua'] ?></p>
            </div>
            <div class="col-4">
              <img src="<?= base_url('upload/' . $pria['foto']) ?>" alt="<?= $pria['nama'] ?>" class="img-responsive rounded-circle">
              <?php endforeach; ?>
            </div>
          </div>
        </div>

        <span class="heart"><i class="bi bi-heart-fill"></i></span>

        <div class="col-lg-6">
          <?php foreach ($mempelaiWanita as $wanita): ?>
          <div class="row">
            <div class="col-4">
              <img src="<?= base_url('upload/' . $wanita['foto']) ?>" alt="<?= $wanita['nama'] ?>" class="img-responsive rounded-circle">
            </div>
            <div class="col-8">
              <h3><?= $wanita['nama'] ?></h3>
              <p><?= $wanita['deskripsi'] ?></p>
              <p><?= $wanita['orangtua'] ?></p>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section id="info" class="info">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 col-10 text-center">
       
          <?php foreach ($events as $event): ?>
            <h2>Informasi Acara</h2>
          <p class="alamat"><?= $event['lokasi'] ?></p>
            <?php endforeach; ?>
          <a href="" target="_blank" class="btn btn-light btn-sm my-3">Klik untuk
            membuka peta (coming soon) </a>
          <p class="description">Diharapkan untuk tidak salah alamat dan tanggal. Manakala tiba di tujuan namun tidak
            ada tanda-tanda sedang dilangsungkan pernikahan, boleh jadi Anda salah jadwal, atau salah tempat.</p>
        </div>
      </div>

      <div class="row justify-content-center mt-4">
        <div class="col-md-5 col-10">
          <div class="card text-center text-bg-light mb-5">
            <div class="card-header">Akad Nikah</div>
            <div class="card-body">
              <div class="row justify-content-center">
                <div class="col-md-6">
                  <i class="bi bi-clock d-block"></i>
                  <?php foreach ($akadNikah as $akad): ?>
                  <span><?= $akad['pukul'] ?></span>    
                </div>
                <div class="col-md-6">
                  <i class="bi bi-calendar3 d-block"></i>
                  <span><?= $akad['tanggal'] ?></span>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>
            <div class="card-footer">
              Saat acara akad diharapkan untuk kondusif menjaga kekhidmatan dan kekhusyuan seluruh prosesi.
            </div>
          </div>
        </div>
        <div class="col-md-5 col-10">
          <div class="card text-center text-bg-light">
            <?php foreach ($resep as $resep): ?>
            <div class="card-header">Resepsi</div>
            <div class="card-body">
              <div class="row justify-content-center">
                <div class="col-md-6">
                  <i class="bi bi-clock d-block"></i>
                  <span><?= $resep['pukul'] ?></span>
                </div>
                <div class="col-md-6">
                  <i class="bi bi-calendar3 d-block"></i>
                  <span><?= $resep['tanggal'] ?></span>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>
            <div class="card-footer">
              Saat acara akad diharapkan untuk kondusif menjaga kekhidmatan dan kekhusyuan seluruh prosesi.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="story" class="story">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 col-10 text-center">
        <h1>Fitur ini akan secepatnya hadir </h1>
          <span>Bagaimana Cinta Kami Bersemi</span>
          <h2>Cerita Kami</h2>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro, similique non soluta nulla asperiores
            voluptatem.</p>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <ul class="timeline">
            <li>
              <div class="timeline-image" style="background-image: url(img/sman23.jpg);"></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h3>Pertama Bertemu</h3>
                  <span>1 Juni 2000</span>
                </div>
                <div class="timeline-body">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, modi autem? Commodi autem quo quia?
                  </p>
                </div>
              </div>

            </li>
            <li class="timeline-inverted">
              <div class="timeline-image" style="background-image: url(https://picsum.photos/300/300);"></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h3>Mulai Serius</h3>
                  <span>1 Januari 2005</span>
                </div>
                <div class="timeline-body">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto enim eaque obcaecati odit
                    itaque explicabo quisquam quos at.
                  </p>
                </div>
              </div>

            </li>
            <li>
              <div class="timeline-image" style="background-image: url(https://picsum.photos/301/301);"></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h3>Tunangan</h3>
                  <span>7 November 2009</span>
                </div>
                <div class="timeline-body">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, deleniti distinctio. Esse quas sit
                  explicabo corporis magni qui expedita a.
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section id="gallery" class="gallery">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 col-10 text-center">
          <span>Memori Kisah Kami</span>
          <h2>Galeri Foto</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, itaque?</p>
        </div>
      </div>

      <div class="container mt-5">
        <div class="row row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 justify-content-center">
            <?php foreach ($galeriFoto as $foto): ?>
                <div class="col mt-3">
                    <a href="<?= base_url('upload/' . $foto['foto']) ?>" data-toggle="lightbox" data-caption="Deskripsi Foto" data-gallery="mygallery">
                        <img src="<?= base_url('upload/' . $foto['foto']) ?>" alt="Deskripsi Foto" class="img-fluid w-100 rounded">
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    </div>
  </section>

  <section id="rsvp" class="rsvp">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 col-10 text-center">
        <h1>Fitur ini akan secepatnya hadir </h1>
          <h2>Konfirmasi Kehadiran</h2>
          <p>Isi form di bawah ini untuk melakukan konfirmasi kehadiran.</p>
        </div>
      </div>

      <form class="row row-cols-md-auto g-3 align-items-center justify-content-center" method="POST"
        action="https://docs.google.com/spreadsheets/d/1BtZf0C8ZfIzRuAs56cG5A9nCZeJblfGF-cqb-2ae8pM/edit?usp=drivesdk"
        id="my-form">
        <div class="col-12">
          <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
          </div>
        </div>
        <div class="col-12">
          <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah" min="1" max="5" length="1" value="1">
          </div>
        </div>
        <div class="col-12">
          <div class="mb-3">
            <label for="status" class="form-label">Konfirmasi</label>
            <select name="status" id="status" class="form-select">
              <option selected>Pilih salah satu</option>
              <option value="Hadir">Hadir</option>
              <option value="Tidak Hadir">Tidak Hadir</option>
            </select>
          </div>
        </div>
        <div class="col-12" style="margin-top: 35px;">
          <button class="btn btn-primary">Kirim</button>
        </div>
      </form>

      <div class="row justify-content-center mt-5">
        <div class="col-md-6">
          <div id="disqus_thread"></div>
          <script>
            /**
            *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
            *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */

            var disqus_config = function () {
              this.page.url = 'https://undangan.ahmadderi.my.id/';  // Replace PAGE_URL with your page's canonical URL variable
              this.page.identifier = 'https://undangan.ahmadderi.my.id/'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
            };

            (function () { // DON'T EDIT BELOW THIS LINE
              var d = document, s = d.createElement('script');
              s.src = 'https://dino-wedding-1.disqus.com/embed.js';
              s.setAttribute('data-timestamp', +new Date());
              (d.head || d.body).appendChild(s);
            })();
          </script>
          <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by
              Disqus.</a></noscript>
        </div>
      </div>

    </div>
  </section>
  <?php include('footer.php'); ?>
  <div id="audio-container">
    <audio id="song" autoplay loop>
      <source src="audio/save-and-sound.mp3" type="audio/mp3">
    </audio>

    <div class="audio-icon-wrapper" style="display: none;">
      <i class="bi bi-disc"></i>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.3/dist/index.bundle.min.js"></script>

  <script>
    function updateCurrentTime() {
        const currentTimeElement = document.getElementById('current-time');
        const now = new Date();
        currentTimeElement.textContent = now.toLocaleTimeString('id-ID');
    }

    function updateEventTimes() {
        const eventTimeElements = document.querySelectorAll('.event-time');
        eventTimeElements.forEach(function(element) {
            const eventTime = new Date(element.dataset.eventTime);
            const currentTime = new Date();
            const intervalInSeconds = Math.floor((eventTime - currentTime) / 1000);
            const days = Math.floor(intervalInSeconds / (60 * 60 * 24));
            const hours = Math.floor((intervalInSeconds % (60 * 60 * 24)) / (60 * 60));
            const minutes = Math.floor((intervalInSeconds % (60 * 60)) / 60);
            const seconds = intervalInSeconds % 60;

            const timeString = days > 0 ? `${days} hari ${hours} jam ${minutes} menit ${seconds} detik lagi` :
                                          hours > 0 ? `${hours} jam ${minutes} menit ${seconds} detik lagi` :
                                          minutes > 0 ? `${minutes} menit ${seconds} detik lagi` :
                                          `${seconds} detik lagi`;
            element.textContent = timeString;
        });
    }

    // Update time every second
    setInterval(updateCurrentTime, 1000);
    setInterval(updateEventTimes, 1000);
</script>

  <script>
    const stickyTop = document.querySelector('.sticky-top');
    const offcanvas = document.querySelector('.offcanvas');

    offcanvas.addEventListener('show.bs.offcanvas', function () {
      stickyTop.style.overflow = 'visible';
    });

    offcanvas.addEventListener('hidden.bs.offcanvas', function () {
      stickyTop.style.overflow = 'hidden';
    });

  </script>

  <script>
    const rootElement = document.querySelector(":root");
    const audioIconWrapper = document.querySelector('.audio-icon-wrapper');
    const audioIcon = document.querySelector('.audio-icon-wrapper i');
    const song = document.querySelector('#song');
    let isPlaying = false;

    function disableScroll() {
      scrollTop = window.pageYOffset || document.documentElement.scrollTop;
      scrollLeft = window.pageXOffset || document.documentElement.scrollLeft;

      window.onscroll = function () {
        window.scrollTo(scrollTop, scrollLeft);
      }

      rootElement.style.scrollBehavior = 'auto';
    }

    function enableScroll() {
      window.onscroll = function () { }
      rootElement.style.scrollBehavior = 'smooth';
      // localStorage.setItem('opened', 'true');
      playAudio();
    }

    function playAudio() {
      song.volume = 0.1;
      audioIconWrapper.style.display = 'flex';
      song.play();
      isPlaying = true;
    }

    audioIconWrapper.onclick = function () {
      if (isPlaying) {
        song.pause();
        audioIcon.classList.remove('bi-disc');
        audioIcon.classList.add('bi-pause-circle');
      } else {
        song.play();
        audioIcon.classList.add('bi-disc');
        audioIcon.classList.remove('bi-pause-circle');
      }

      isPlaying = !isPlaying;
    }

    // if (!localStorage.getItem('opened')) {
    //   disableScroll();
    // }
    disableScroll();
  </script>
  <script>
    window.addEventListener("load", function () {
      const form = document.getElementById('my-form');
      form.addEventListener("submit", function (e) {
        e.preventDefault();
        const data = new FormData(form);
        const action = e.target.action;
        fetch(action, {
          method: 'POST',
          body: data,
        })
          .then(() => {
            alert("Konfirmasi kehadiran berhasil terkirim!");
          })
      });
    });

  </script>
  <script>
    const urlParams = new URLSearchParams(window.location.search);
    const nama = urlParams.get('n') || '';
    const pronoun = urlParams.get('p') || 'Bapak/Ibu/Saudara/i';
    const namaContainer = document.querySelector('.hero h4 span');
    namaContainer.innerText = `${pronoun} ${nama},`.replace(/ ,$/, ',');

    document.querySelector('#nama').value = nama;
  </script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>WeddingBliss</title>
    <!-- CSS -->
    <link rel="stylesheet" href="<?= base_url('css/navbar.css') ?>" />
<!-- Unicons CSS -->
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
<script src="<?= base_url('js/navbar.js') ?>" defer></script>

  </head>
  </style>
  <body>
    <nav class="nav">
      <i class="uil uil-bars navOpenBtn"></i>
      <a href="#" class="logo">WeddingBliss</a>

      <ul class="nav-links">
        <i class="uil uil-times navCloseBtn"></i>
        <li><a href="<?= site_url('guide/index') ?>">Cara penggunaan</a></li>
        <li><a href="<?= site_url('acara') ?>">Acara</a></li>
        <li><a href="<?= site_url('events') ?>">events</a></li>
        <li><a href="<?= site_url('mempelai_pria') ?>">mempelai pria</a></li>
        <li><a href="<?= site_url('mempelai_wanita') ?>">mempelai wanita</a></li>
        <li><a href="<?= site_url('akad_nikah') ?>">akad nikah</a></li>
        <li><a href="<?= site_url('resepsi') ?>">resepsi</a></li>
        <li><a href="<?= site_url('galeri_foto') ?>">galeri foto</a></li>
      </ul>

      <i class="uil uil-search search-icon" id="searchIcon"></i>
      <div class="search-box">
        <i class="uil uil-search search-icon"></i>
        <input type="text" placeholder="Search here..." />
      </div>
    </nav>
  </body>
</html>

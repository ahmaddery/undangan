<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>WeddingBliss</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

 <!-- Libraries Stylesheet -->
<link href="<?= base_url('lib/animate/animate.min.css') ?>" rel="stylesheet">
<link href="<?= base_url('lib/owlcarousel/assets/owl.carousel.min.css') ?>" rel="stylesheet">
<link href="<?= base_url('lib/lightbox/css/lightbox.min.css') ?>" rel="stylesheet">

<!-- Customized Bootstrap Stylesheet -->
<link href="<?= base_url('css/bootstrap.min.css') ?>" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="<?= base_url('css/style.css') ?>" rel="stylesheet">

</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="m-0"><i class="fas fa-fw fa-glass-cheers"></i>Wedding<span class="fs-5">Bliss</span></h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="<?= base_url('index') ?>" class="nav-item nav-link active">Home</a>
                        <a href="<?= base_url('about') ?>" class="nav-item nav-link">About</a>
                        <a href="<?= base_url('service') ?>v" class="nav-item nav-link">Service</a>
                        <a href="<?= base_url('contact') ?>" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </nav>

            <div class="container-xxl py-5 bg-primary hero-header mb-5">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated zoomIn">Template Undangan Online yang Menawan</h1>
                            <p class="text-white pb-3 animated zoomIn">Platform undangan pernikahan online dengan desain elegan dan personalisasi mudah. Pasangan bisa isi info pernikahan, sesuaikan tampilan, dan bagikan tautan secara online. Undangan responsif dan interaktif untuk pengalaman tamu yang menarik.</p>
                            <a href="<?= base_url('register_form') ?>" class="btn btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Daftar Sekarang</a>
                            <a href="<?= base_url('login_form') ?>" class="btn btn-outline-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Login</a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <img class="img-fluid" src="<?= base_url('img/hero.png') ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Full Screen Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content" style="background: rgba(29, 29, 39, 0.7);">
                    <div class="modal-header border-0">
                        <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center justify-content-center">
                        <div class="input-group" style="max-width: 600px;">
                            <input type="text" class="form-control bg-transparent border-light p-3" placeholder="Type search keyword">
                            <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Full Screen Search End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="section-title position-relative mb-4 pb-2">
                            <h6 class="position-relative text-primary ps-4">Tentang Kami</h6>
                            <h2 class="mt-2"> Menyatukan Impian Melalui Undangan Pernikahan</h2>
                        </div>
                        <p class="mb-4">Kami adalah tim yang bersemangat dalam menciptakan momen berharga melalui undangan pernikahan. Dengan sentuhan desain yang unik dan inovatif, kami mengabdikan diri untuk menghadirkan undangan yang tidak hanya mengundang, tetapi juga memukau. Kami percaya bahwa setiap pernikahan memiliki cerita sendiri, dan kami berkomitmen untuk membantu pasangan merayakan momen bersejarah mereka dengan gaya yang personal dan elegan. 
                            Dengan berbagai opsi kreatif dan tampilan yang responsif, kami siap membagikan kebahagiaan Anda kepada dunia.</p>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Mudah Digunakan</h6>
                                <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Tim Profesional</h6>
                            </div>
                            <div class="col-sm-6">
                                <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Dukungan 24/7</h6>
                                <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>100% Gratis</h6>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mt-4">
                            <a class="btn btn-primary rounded-pill px-4 me-3" href="<?= base_url('about') ?>">Baca Selengkapnya</a>
                            <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="<?= base_url('img/about.png') ?>">   
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->



        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="position-relative d-inline text-primary ps-4">pelayanan kami</h6>
                    <h2 class="mt-2">Solusi Apa Yang Kami Berikan</h2>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fas fa-palette fa-3x"></i>
                            </div>
                            <h5 class="mb-3">Beragam Desain yang Menarik</h5>
                            <p>Menawarkan berbagai pilihan desain yang menarik dan sesuai dengan tema pernikahan. 
                                Ini memungkinkan pasangan untuk memilih tampilan yang paling cocok dengan gaya dan suasana pernikahan mereka.</p>
                            <a class="btn px-3 mt-auto mx-auto" href="">Baca Selengkapnya</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fas fa-fw fa-sliders-h fa-3x"></i>
                            </div>
                            <h5 class="mb-3">Personalisasi Mudah</h5>
                            <p>Memberikan kemudahan untuk mengkustomisasi undangan. Pasangan dapat mengubah warna, gaya tipografi, dan mengunggah foto pribadi,
                                 memastikan undangan mencerminkan kepribadian mereka.</p>
                            <a class="btn px-3 mt-auto mx-auto" href="">Baca Selangkapnya</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fas fa-fw fa-desktop fa-3x"></i>
                            </div>
                            <h5 class="mb-3">Responsif untuk Semua Perangkat</h5>
                            <p>Template ini dirancang agar tampilan yang sempurna di perangkat apapun, termasuk komputer, tablet, dan ponsel pintar. 
                                Tamu dapat dengan nyaman mengakses undangan dari mana saja.</p>
                            <a class="btn px-3 mt-auto mx-auto" href="">Baca Selengkapnya</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fas fa-fw fa-cogs fa-3x"></i>
                            </div>
                            <h5 class="mb-3">Fitur Interaktif</h5>
                            <p>Beberapa template dapat menawarkan fitur interaktif seperti formulir RSVP online, galeri foto, atau peta lokasi acara. 
                                Ini meningkatkan keterlibatan tamu sebelum pernikahan.</p>
                            <a class="btn px-3 mt-auto mx-auto" href="">Baca Selangkapnya</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fas fa-fw fa-paper-plane fa-3x"></i>
                            </div>
                            <h5 class="mb-3">Bagikan dengan Mudah</h5>
                            <p>Setelah undangan selesai dibuat, pasangan dapat membagikan tautan undangan melalui email, pesan teks, atau media sosial kepada para tamu. 
                                Ini menghemat waktu dan usaha dalam distribusi undangan.</p>
                            <a class="btn px-3 mt-auto mx-auto" href="">Baca Selengkapnya</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fas fa-fw fa-headset fa-3x"></i>
                            </div>
                            <h5 class="mb-3">Dukungan Teknis</h5>
                            <p>Template undangan umumnya disertai dukungan teknis. Jika pasangan mengalami kesulitan atau pertanyaan, 
                                mereka dapat mengandalkan dukungan ini untuk mendapatkan bantuan.</p>
                            <a class="btn px-3 mt-auto mx-auto" href="">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


       


        <!-- Testimonial Start -->
        <div class="container-xxl bg-primary testimonial py-5 my-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item bg-transparent border rounded text-white p-4">
                        <i class="fa fa-quote-left fa-2x mb-3"></i>
                        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-1.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h6 class="text-white mb-1">Client Name</h6>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded text-white p-4">
                        <i class="fa fa-quote-left fa-2x mb-3"></i>
                        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-2.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h6 class="text-white mb-1">Client Name</h6>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded text-white p-4">
                        <i class="fa fa-quote-left fa-2x mb-3"></i>
                        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-3.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h6 class="text-white mb-1">Client Name</h6>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded text-white p-4">
                        <i class="fa fa-quote-left fa-2x mb-3"></i>
                        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-4.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h6 class="text-white mb-1">Client Name</h6>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

        <!-- Footer Start -->
        <div class="container-fluid bg-primary text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Contact</h5>
                        <p><i class="fa fa-map-marker-alt me-3"></i>Yogyakarta, IND</p>
                        <p><i class="fa fa-phone-alt me-3"></i>-</p>
                        <p><i class="fa fa-envelope me-3"></i>admin@ahmadderi.my.id</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Popular Link</h5>
                        <a class="btn btn-link" href="">About Us</a>
                        <a class="btn btn-link" href="">Contact Us</a>
                        <a class="btn btn-link" href="">Privacy Policy</a>
                        <a class="btn btn-link" href="">Terms & Condition</a>
                        <a class="btn btn-link" href="">Career</a>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Project Gallery</h5>
                        <div class="row g-2">
                            <div class="col-4">
                                <img class="img-fluid" src="img/1.jpg" alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="img/2.jpg" alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="img/3.jpg" alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="img/1.jpg" alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="img/2.jpg" alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="img/3.jpg" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container px-lg-5">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">ahmadderi.my.id</a>, All Right Reserved. 
							
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							Designed By <a class="border-bottom" href="">Ahmaddery</a>
                            <br>Distributed By: <a class="border-bottom" href="" target="_blank">Teams</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
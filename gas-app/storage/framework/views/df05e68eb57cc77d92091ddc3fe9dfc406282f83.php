<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Stylish Portfolio - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Simple line icons-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo e(asset('dist/css/styles.css')); ?>" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <a class="menu-toggle rounded" href="#"><i class="fas fa-bars"></i></a>
        <nav id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand"><a href="#page-top">Gas Indonesia</a></li>
                <li class="sidebar-nav-item"><a href="#page-top">Home</a></li>
                <li class="sidebar-nav-item"><a href="#about">About</a></li>
                <li class="sidebar-nav-item"><a href="#services">Services</a></li>
                <li class="sidebar-nav-item"><a href="#portfolio">Portfolio</a></li>
                <li class="sidebar-nav-item"><a href="#contact">Contact</a></li>
            </ul>
        </nav>
        <!-- Header-->
        <header class="masthead d-flex align-items-center">
            <div class="container px-4 px-lg-5 text-center">
                <h1 class="mb-1">GAS</h1>
                <h3 class="mb-5"><em>Belanja maupun berjualan kini lebih mudah bersama GAS</em></h3>
                <a class="btn btn-primary btn-xl" href="#about">Find Out More</a>
            </div>
        </header>
        <!-- About-->
        <section class="content-section bg-light" id="about">
            <div class="container px-4 px-lg-5 text-center">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-10">
                        <h2>Tentang aplikasi Gas</h2>
                        <p class="lead mb-5">
                         Aplikasi untuk memudahkan pelaku usaha menjangkau calon pembeli yang lebih luas. Dibangun oleh tim yang 
                         mengedepankan budaya kerja yang menjunjung tinggi  kebebasan dalam berkreasi,
                          saling toleransi dalam keragaman, keterbukaan berpendapat sehingga tercipta lingkungan kerja yang menyenangkan, fleksibel tetapi tujuan tetap tercapai.

                        </p>
                       
                    </div>
                </div>
            </div>
        </section>
        <!-- Services-->
        <section class="content-section bg-primary text-white text-center" id="services">
            <div class="container px-4 px-lg-5">
                <div class="content-section-heading">
                    <h3 class="text-secondary mb-0">Service ++</h3>
                    <h2 class="mb-5">Kami memiliki beberapa keunggulan</h2>
                </div>
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                        <span class="service-icon rounded-circle mx-auto mb-3"><i class="icon-screen-smartphone"></i></span>
                        <h4><strong>Modern</strong></h4>
                        <p class="text-faded mb-0">Pengelolaan produk secara modern dan mudah</p>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                        <span class="service-icon rounded-circle mx-auto mb-3"><i class="fas fa-print"></i></i></span>
                        <h4><strong>Mudah</strong></h4>
                        <p class="text-faded mb-0">Mesin kasir bisa di akses saat offline</p>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
                        <span class="service-icon rounded-circle mx-auto mb-3"><i class="fas fa-taxi"></i></span>
                        <h4><strong>Untung ++</strong></h4>
                        <p class="text-faded mb-0">
                            Daftarkan kurirmu dan ongkos kirim akan menjadi  
                            <i class="fas fa-heart"></i>
                            Milik tokomu !
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <span class="service-icon rounded-circle mx-auto mb-3"><i class="fas fa-globe"></i></span>
                        <h4><strong>Terkenal</strong></h4>
                        <p class="text-faded mb-0">Menjangkau customer lebih luas</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Callout-->
        <section class="callout">
            <div class="container px-4 px-lg-5 text-center">
                <h2 class="mx-auto mb-5">
                    Welcome to
                    <em>your</em>
                    next website!
                </h2>
                <a class="btn btn-primary btn-xl" href="https://startbootstrap.com/theme/stylish-portfolio/">Download Now!</a>
            </div>
        </section>
        <!-- Portfolio-->
        <section class="content-section" id="portfolio">
            <div class="container px-4 px-lg-5">
                <div class="content-section-heading text-center">
                    <h3 class="text-secondary mb-0">Anda ingin berbelanja ?</h3>
                    <h2 class="mb-5">Silahkan kunjungi mitra kami</h2>
                </div>
                <div class="row gx-0">
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="<?php echo e(url('/makanan')); ?>">
                            <div class="caption">
                                <div class="caption-content">
                                    <div class="h2">Toko makanan </div>
                                    <p class="mb-0">Belanja makanan sehat yu</p>
                                </div>
                            </div>
                            <img class="img-fluid" src="<?php echo e(asset('dist/assets/img/portfolio-1.jpg')); ?>" alt="views\product\startbootstrap-shop-homepage-gh-pages\index" />
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="<?php echo e(url('/bangunan')); ?>">
                            <div class="caption">
                                <div class="caption-content">
                                    <div class="h2">Toko bangunan</div>
                                    <p class="mb-0">Belanja bahan bangunan berkualitas yu</p>
                                </div>
                            </div>
                            <img class="img-fluid" src="<?php echo e(asset('dist/assets/img/portfolio-2.jpg')); ?>" alt="..." />
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="<?php echo e(url('/fashion')); ?>">
                            <div class="caption">
                                <div class="caption-content">
                                    <div class="h2">Toko Fashion</div>
                                    <p class="mb-0">Saatnya membeli pakaian baru </p>
                                </div>
                            </div>
                            <img class="img-fluid" src="<?php echo e(asset('dist/assets/img/portfolio-3.jpg')); ?>" alt="..." />
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="<?php echo e(url('/otomotif')); ?>">
                            <div class="caption">
                                <div class="caption-content">
                                    <div class="h2">Toko Otomotif</div>
                                    <p class="mb-0">butuh alat alat otomotif ?</p>
                                </div>
                            </div>
                            <img class="img-fluid" src="<?php echo e(asset('dist/assets/img/portfolio-4.jpg')); ?>" alt="..." />
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Call to Action-->
        <section class="content-section bg-primary text-white">
            <div class="container px-4 px-lg-5 text-center">
                <h2 class="mb-4">The buttons below are impossible to resist...</h2>
                <a class="btn btn-xl btn-light me-4" href="#!">Click Me!</a>
                <a class="btn btn-xl btn-dark" href="#!">Look at Me!</a>
            </div>
        </section>
        <!-- Map-->
        <div class="map" id="contact">
            <iframe src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>
            <br />
            <small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a></small>
        </div>
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container px-4 px-lg-5">
                <ul class="list-inline mb-5">
                    <li class="list-inline-item">
                        <a class="social-link rounded-circle text-white mr-3" href="#!"><i class="icon-social-facebook"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="social-link rounded-circle text-white mr-3" href="#!"><i class="icon-social-twitter"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="social-link rounded-circle text-white" href="#!"><i class="icon-social-github"></i></a>
                    </li>
                </ul>
                <p class="text-muted small mb-0">Copyright &copy; GAS 2023</p>
            </div>
        </footer>
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?php echo e(asset('dist/js/scripts.js')); ?>"></script>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\Gas\gas-app\resources\views/home\page\index.blade.php ENDPATH**/ ?>
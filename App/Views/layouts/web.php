<!DOCTYPE html>
<html lang="es">

<head>
    <title>Kid Game</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">

    <?= HTML::style('template/css/open-iconic-bootstrap.min.css') ?>
    <?= HTML::style('template/css/animate.css') ?>
    <?= HTML::style('template/css/owl.carousel.min.css') ?>
    <?= HTML::style('template/css/owl.theme.default.min.css') ?>
    <?= HTML::style('template/css/magnific-popup.css') ?>
    <?= HTML::style('template/css/aos.css') ?>
    <?= HTML::style('template/css/ionicons.min.css') ?>
    <?= HTML::style('template/css/flaticon.css') ?>

    <?= HTML::style('template/css/icomoon.css') ?>
    <?= HTML::style('template/css/style.css') ?>

</head>

<body>
    <div class="py-2 bg-primary">
        <div class="container">
            <div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
                <div class="col-lg-12 d-block">
                    <div class="row d-flex">
                        <div class="col-md-5 pr-4 d-flex topper align-items-center">
                        </div>
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon bg-secondary mr-2 d-flex justify-content-center align-items-center"><span
                                    class="icon-paper-plane"></span></div>
                            <span class="text">soporte.kidgame@gmail.com</span>
                        </div>
                        <div class="col-md pr-4 d-flex topper align-items-center">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
        <div class="container d-flex align-items-center">
            <a class="navbar-brand" href="index.html">Kiddos</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span>
                <!-- Menu -->
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="index.html" class="nav-link pl-0">Inicio</a></li>
                    <li class="nav-item"><a href="about.html" class="nav-link">Ahorcado</a></li>
                    <li class="nav-item"><a href="teacher.html" class="nav-link">Memoria</a></li>
                    <li class="nav-item"><a href="courses.html" class="nav-link">Sopa Letra</a></li>
                    <li class="nav-item"><a href="pricing.html" class="nav-link">Competencias</a></li>
                    <!-- <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li> -->
                    <li class="nav-item"><a href="contact.html" class="nav-link"><span class="icon-user"></span>
                            Ingresar</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <?php include $content ?>

   	<footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-md-6 col-lg-3">
                    <div class="ftco-footer-widget mb-5">
                        <h2 class="ftco-heading-2">Consultas</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><a href="#"><span class="icon icon-envelope"></span><span
                                            class="text">soporte.kidgame@gmail.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="ftco-footer-widget mb-5 ml-md-4">
                        <h2 class="ftco-heading-2">Links</h2>
                        <ul class="list-unstyled">
                            <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Inicio</a></li>
                            <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Ahorcado</a></li>
                            <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Memoria</a></li>
                            <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Sopa Letra</a></li>
                            <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Competencia</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="ftco-footer-widget mb-5">
                        <h2 class="ftco-heading-2">Suscribete!</h2>
                        <form action="#" class="subscribe-form">
                            <div class="form-group">
                                <input type="text" class="form-control mb-2 text-center"
                                    placeholder="Ingrese Correo">
                                <input type="submit" value="Suscribir" class="form-control submit px-3">
                            </div>
                        </form>
                    </div>
                    <div class="ftco-footer-widget mb-5">
                        <h2 class="ftco-heading-2 mb-0">Nuestras Redes</h2>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                        </script> All rights reserved | kidgame
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
        </svg></div>

    <?= HTML::script('template/js/jquery.min.js') ?>
    <?= HTML::script('template/js/jquery-migrate-3.0.1.min.js') ?>
    <?= HTML::script('template/js/popper.min.js') ?>
    <?= HTML::script('template/js/bootstrap.min.js') ?>
    <?= HTML::script('template/js/jquery.easing.1.3.js') ?>
    <?= HTML::script('template/js/jquery.stellar.min.js') ?>
    <?= HTML::script('template/js/owl.carousel.min.js') ?>
    <?= HTML::script('template/js/jquery.waypoints.min.js') ?>
    <?= HTML::script('template/js/jquery.magnific-popup.min.js') ?>
    <?= HTML::script('template/js/jquery.animateNumber.min.js') ?>
    <?= HTML::script('template/js/scrollax.min.js') ?>
    <?= HTML::script('template/js/aos.js') ?>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
    </script>
    <?= HTML::script('template/js/google-map.js') ?>
    <?= HTML::script('template/js/main.js') ?>


</body>

</html>
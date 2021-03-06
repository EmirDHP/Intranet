<!--Itranet-->

<?php
// session_start();
//Check if the user is logged in, if not then redirect him to login page
//  if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
//      header("location: account/login.php");
//      die;
//  }

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Lo acabo de poner jajaj en caso de que no jale quitar esta parte xk namas estorba-->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2.0/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2.0/dist/flickity.pkgd.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="./assets/images/BBB.jpg">

    <title>BBB Industries de México | Home</title>

    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,500;1,700&display=swap" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">

    <!-- Font awesome icons from homero resendiz account -->
    <script src="https://kit.fontawesome.com/8219103dfb.js" crossorigin="anonymous"></script>
</head>

<body>
    <!--header-->
    <header id="site-header" class="fixed-top">
        <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark stroke">
                <h1>
                    <a class="navbar-brand" href="./">
                        <img src="./assets/images/logo.png" alt="BBB Industries de México" title="BBB Industries de México" style="height:35px;" />
                        BBB <span class="logo">Industries de México</span></a>
                </h1>


                <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                    </span>
                </button>

                <?php
                session_start();
                if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
                ?>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                        <ul class="navbar-nav mx-lg-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="./">Home <span class="sr-only">(current)</span></a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="http://192.168.1.68/bbb_dlib_rem/grid_tb_documents_main/" target="_blank">Documents</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="http://192.168.1.68/bbb_ISO9001/no_conf/grid_iso_no_conformidad_1/" target="_blank">Tracking</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="https://app.powerbi.com/reportEmbed?reportId=cee90a2f-6e21-4f20-bafc-29b271d66431&autoAuth=true&ctid=3de5c242-8e20-4059-a628-b1d64db0e33d&config=eyJjbHVzdGVyVXJsIjoiaHR0cHM6Ly93YWJpLXVzLW5vcnRoLWNlbnRyYWwtcmVkaXJlY3QuYW5hbHlzaXMud2luZG93cy5uZXQvIn0%3D" target="_blank">KPI</a>
                            </li>

                            <!-- <li class="nav-item">
                                <a class="nav-link" href="team.html">Our Team</a>
                            </li> -->

                            <li class="nav-item">
                                <a class="nav-link" href="calendar.php">Schedule</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#" role="" button id="dropdownMenuLink" data-toggle="dropdown">Useful Links</a>

                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="http://192.168.1.68/bbb_dlib_rem/ap_Login/" target="_blank">Document Library Login</a>
                                    <a class="dropdown-item" href="certifications/certificaciones.php">Certifications</a>
                                    <a class="dropdown-item" href="recognition/index.php">Recognitions</a>
                                    <a class="dropdown-item" href="directorios/index.php">Directory</a>
                                    <!-- <a class="dropdown-item" href="plantillas.html">Calendar Julian</a> -->
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="account/login.php">login</a>
                            </li>

                        </ul>
                    </div>

                <?php
                } else {
                ?>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                        <ul class="navbar-nav mx-lg-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="./">Home <span class="sr-only">(current)</span></a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="http://192.168.1.68/bbb_dlib_rem/grid_tb_documents_main/" target="_blank">Documents</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="http://192.168.1.68/bbb_ISO9001/no_conf/grid_iso_no_conformidad/" target="_blank">Tracking</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="https://app.powerbi.com/reportEmbed?reportId=cee90a2f-6e21-4f20-bafc-29b271d66431&autoAuth=true&ctid=3de5c242-8e20-4059-a628-b1d64db0e33d&config=eyJjbHVzdGVyVXJsIjoiaHR0cHM6Ly93YWJpLXVzLW5vcnRoLWNlbnRyYWwtcmVkaXJlY3QuYW5hbHlzaXMud2luZG93cy5uZXQvIn0%3D" target="_blank">KPI</a>
                            </li>

                            <!-- <li class="nav-item">
                                <a class="nav-link" href="team.html">Our Team</a>
                            </li> -->

                            <li class="nav-item">
                                <a class="nav-link" href="calendar.php">Schedule</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#" role="" button id="dropdownMenuLink" data-toggle="dropdown">Useful Links</a>

                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="http://192.168.1.68/bbb_dlib_rem/ap_Login/" target="_blank">Document Library Login</a>
                                    <a class="dropdown-item" href="certifications/home.php">Certifications</a>
                                    <a class="dropdown-item" href="recognition/home.php">Recognitions</a>
                                    <a class="dropdown-item" href="directorios/index.php">Directory</a>
                                    <!-- <a class="dropdown-item" href="plantillas.html">Calendar Julian</a> -->
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#" role="" button id="dropdownMenuLink" data-toggle="dropdown">Settings</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="recognition/upload.php">New recognition</a>
                                    <a class="dropdown-item" href="certifications/index.php">New certificate</a>
                                    <!-- <a class="dropdown-item" href="img_carrusel/upload.php">New image</a> -->
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="account/logout.php">Logout</a>>
                            </li>
                        </ul>
                    </div>
                <?php
                }
                ?>
            </nav>
        </div>
    </header>
    <!--/header-->
    <!-- main-slider -->

    <section class="w3l-main-slider" id="home">
        <div class="companies20-content">
            <div class="owl-one owl-carousel owl-theme">
                <div class="item">
                    <li>
                        <div class="slider-info banner-view bg bg2">
                            <div class="banner-info">
                                <div class="container">
                                    <div class="banner-info-bg">
                                        <h5><span>Quality Management System</span> </h5>
                                        <h5>ISO 9001:2015</h5>
                                        <a class="btn btn-style btn-primary mt-sm-5 mt-4 mr-2" href="#iso"> Learn
                                            More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
                <div class="item">
                    <li>
                        <div class="slider-info banner-view banner-top1 bg bg2">
                            <div class="banner-info">
                                <div class="container">
                                    <div class="banner-info-bg">
                                        <h5><span>Quality Management System</span> </h5>
                                        <h5>ISO 9001:2015</h5>
                                        <a class="btn btn-style btn-primary mt-sm-5 mt-4 mr-2" href="#iso"> Learn
                                            More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
                <div class="item">
                    <li>
                        <div class="slider-info banner-view banner-top2 bg bg2">
                            <div class="banner-info">
                                <div class="container">
                                    <div class="banner-info-bg">
                                        <h5><span>Quality Management System</span> </h5>
                                        <h5>ISO 9001:2015</h5>
                                        <a class="btn btn-style btn-primary mt-sm-5 mt-4 mr-2" href="#iso"> Learn
                                            More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
                <div class="item">
                    <li>
                        <div class="slider-info banner-view banner-top3 bg bg2">
                            <div class="banner-info">
                                <div class="container">
                                    <div class="banner-info-bg">
                                        <h5><span>Quality Management System</span> </h5>
                                        <h5>ISO 9001:2015</h5>
                                        <a class="btn btn-style btn-primary mt-sm-5 mt-4 mr-2" href="#iso"> Learn
                                            More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
                <div class="item">
                    <li>
                        <div class="slider-info banner-view banner-top4 bg bg2">
                            <div class="banner-info">
                                <div class="container">
                                    <div class="banner-info-bg">
                                        <h5><span>Quality Management System</span> </h5>
                                        <h5>ISO 9001:2015</h5>
                                        <a class="btn btn-style btn-primary mt-sm-5 mt-4 mr-2" href="#iso"> Learn
                                            More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
            </div>
        </div>
    </section>
    <!-- //about breadcrumb -->
    <br>
    <div class="container">
        <span class="title-small">Countdown</span>
        <h3 class="title-big">Countdown to the extern audit ISO 9001:2015</h3>
        <br>
        <br>
        <div id="countdown" class="row justify-content-center align-items-center">
            <style>
                @import url("https://fonts.googleapis.com/css?family=Lato");

                html,
                body {
                    height: 100%;
                    margin: 0;
                    font-family: Lato, sans-serif;
                }

                .wrapper {
                    text-align: center;
                }

                .time {
                    font-size: 6em;
                }

                .label {
                    font-size: 2em;
                    display: block;
                    color: #3b3663;
                }
            </style>
        </div>
    </div>

    <section class="w3l-about1" id="about">
        <div id="content-with-photo4-block" class="py-5">
            <div class="container py-lg-5 py-md-4">
                <div class="cwp4-two row">
                    <div class="cwp4-text col-lg-6">
                        <span class="title-small">BBB Industries de México</span>
                        <h3 class="title-big">BBB Industries de México maintains a quality system (QMS)
                            certified in the ISO 9001: 2015 Standard.</h3>
                    </div>
                    <div class="cwp4-image col-lg-6 pl-lg-5 mt-lg-0 mt-sm-5 mt-4">
                        <img src="assets/images/BBB.jpg" class="radius-image img-fluid" alt="" />
                    </div>
                </div>
                <div class="fea-gd-vv row mt-5 pt-lg-4">
                    <div class="float-lt feature-gd col-lg-4 col-sm-6">
                        <div class="icon-info">
                            <h5>Mission</h5>
                            <p class="mt-3">We will deliver dominant product and service offerings by aggressively
                                building the strongest team and developing best-in-class processes, allowing our
                                customers to prosper and the company to achieve its vision. </p>
                        </div>
                    </div>
                    <div class="float-mid feature-gd col-lg-4 col-sm-6 mt-sm-0 mt-4">
                        <div class="icon-info">
                            <h5>Values</h5>
                            <p class="mt-3">
                                <strong>Entrepreneurship</strong>
                                <br>We quickly and creatively solve problems.<br>
                                <strong>Teamwork</strong>
                                <br>We work collaboratively to achieve our goals.<br>
                                <strong>Customer-Centered</strong>
                                <br>The customer is at the center of everything we do.
                            </p>
                        </div>
                    </div>
                    <div class="float-rt feature-gd col-lg-4 col-sm-6 mt-lg-0 mt-sm-5 mt-4">

                        <div class="icon-info">
                            <h5>Vision</h5>
                            <p class="mt-3">To be the leading remanufacturer and preferred supplier of auto
                                parts by providing superior products and services to our customers when and
                                where they are needed </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Image -->
    <?php

    $error = false;
    $config = include 'config.php';

    try {
        $dsn = 'mysql:host=' . $config['db']['host'] . ';dbname=' . $config['db']['name'];
        $conexion = new PDO($dsn, $config['db']['user'], $config['db']['pass'], $config['db']['options']);

        $consultaSQL = "SELECT * FROM tbl_images;";

        $sentencia = $conexion->prepare($consultaSQL);
        $sentencia->execute();

        $reconocimientos = $sentencia->fetchAll();
    } catch (PDOException $error) {
        $error = $error->getMessage();
    }
    ?>
    <!-- Carousel card -->
    <style>
        /* Make the image fully responsive */
        .carousel-inner img {
            width: 100%;
            height: 100%;
        }
    </style>

    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h3 class="title-big">Gallery
                        <a href="img_carrusel/upload.php" class="btn btn-lg btn-primary rounded-pill">+ Add image</a>
                    </h3>
                    <br>
                </div>
                <div class="col-12">

                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner">

                            <div class="carousel-item active">

                                <div class="row">
                                    <?php
                                    if ($reconocimientos && $sentencia->rowCount() > 0) {
                                        foreach ($reconocimientos as $fila) {
                                    ?>
                                            <div class="col-md-4 mb-3">

                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="assets/uploads/images/<?php echo ($fila["image"]); ?>" style="width: 2100px; height: 220px;">
                                                    <div class="card-body">
                                                        <p class="card-text"><?php echo ($fila["text"]); ?></p>
                                                    </div>
                                                </div>

                                            </div>
                                    <?php
                                        }
                                    }
                                    ?>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>
                <div class="col-12 text-center">
                    <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev" style="width: 67px;">
                        <i class="fa fa-arrow-left" aria-hidden="true"></i>
                    </a>
                    <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next" style="width: 67px;">
                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ISO section -->
    <section class="w3l-about1" id="iso">
        <div id="content-with-photo4-block" class="py-5">
            <div class="container py-lg-5 py-md-4">
                <div class="cwp4-two row">
                    <div class="cwp4-image col-lg-6 pl-lg-5 mt-lg-0 mt-sm-5 mt-4">
                        <img src="assets/images/iso9001.jpg" class="radius-image img-fluid" alt="" />
                    </div>
                    <div class="cwp4-text col-lg-6">
                        <span class="title-small">ISO 9001</span>
                        <h3 class="title-big">What is ISO 9001? </h3>
                        <br>
                        <p class="mt-4">The ISO 9000 family of quality management systems is a set of standards that helps organizations ensure they meet customer and other stakeholder needs within statutory and regulatory requirements related to a product or service </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Map Section -->
    <section class="w3l-homeblock2" id="work">
        <div class="midd-w3 py-5">
            <div class="container pb-lg-5 pb-md-3">
                <div class="row">
                    <div class="col-lg-6 left-wthree-img text-righ">
                        <div class="position-relative">
                            <img src="./assets/images/map-grafic.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-6 mt-lg-0 mt-sm-5 mt-4 align-self">
                        <span class="title-small">Process maps</span>
                        <h3 class="title-big">What are the MOP's, COP's y SOP's?</h3>

                        <h5 class="mt-3">MOP </h5>
                        <p class="mt-4">Management Oriented Processes</p>

                        <h5 class="mt-3">COP </h5>
                        <p class="mt-4">Customer Oriented Processes</p>

                        <h5 class="mt-3">SOP </h5>
                        <p class="mt-4">Support Oriented Processes</p>
                        <a href="./processmap.html" class="btn btn-style btn-primary mt-sm-5 mt-4">See more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- //about breadcrumb -->
    <section class="w3l-about1" id="about">
        <div id="content-with-photo4-block" class="py-5">
            <div class="container py-lg-5 py-md-4">
                <div class="cwp4-two row">
                    <div class="cwp4-image col-lg-6 pl-lg-5 mt-lg-0 mt-sm-5 mt-4">
                        <img src="assets/images/calendarscript.png" class="radius-image img-fluid" alt="" />
                    </div>
                    <div class="cwp4-text col-lg-6">
                        <span class="title-small">Calendar</span>
                        <h3 class="title-big">Calendar Events</h3>
                        <p class="mt-4">Here you can find the soon events </p>
                        <a class="btn btn-style btn-primary mt-sm-5 mt-4" href="calendar.php">See more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="w3l-faq-block py-5" id="faq">
        <div class="container py-lg-5">
            <div class="">
                <div class="">
                    <section class="w3l-faq" id="faq">
                        <h3 class="title-big">Learn more from about <span> BBB Industries de México</span></h3>
                        <p class="mt-3">BBB Industries de México, S de R.L.</p>
                        <div class="">
                            <ul>
                                <li>
                                    <input type="checkbox" checked>
                                    <i></i>
                                    <h2>Who are we?</h2>
                                    <p>BBB Industries, LLC is an industry leader in the remanufacturing of alternators and starters to the automotive, medium and heavy-duty truck, industrial, agriculture, small engine and other markets. </p>
                                </li>
                                <li>
                                    <input type="checkbox" checked>
                                    <i></i>
                                    <h2>What do we do?</h2>
                                    <p>The Company’s undercar division remanufactures power steering products for the automotive OEM's and aftermarkets. In addition, the Company remanufactures brake calipers for automotive, light duty and medium duty applications. Headquartered in Daphne, Alabama, BBB Industries is committed to producing products with the right fit, at the right price. BBB Industries supplies superior-quality products through a network of thousands of dealers, distributors and retail stores.</p>
                                </li>
                                <li>
                                    <input type="checkbox" checked>
                                    <i></i>
                                    <h2>Quality policy</h2>
                                    <p>At BBB Industries we remanufacture starters and alternators for all types of vehicles, our vision is to be recognized as leaders of innovative products, and services in the market, offering exceptional value to our customers, employees, and shareholders, while supporting the communities in which that we operate, our commitment to continuous improvement is focused on meeting the applicable requirements and quality objectives.</p>
                                </li>
                                <li>
                                    <input type="checkbox" checked>
                                    <i></i>
                                    <h2>Quality objectives</h2>
                                    <p>
                                        • Maintain 90% customer satisfaction.<br>
                                        • Maintain 98% first time product acceptance (APV) in total production.<br>
                                        • Satisfaction of the goal employee 4.<br>
                                        • Maintain guarantees at 15.2% per annum.<br>
                                        • Maintain 95% fill rate.<br>
                                        • On Time Delivery goal 95%.</p>
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>

            </div>
        </div>

    </div>

    <!-- footer -->
    <section class="w3l-footer">
    <div class="w3l-footer-16-main py-5">
            <div class="container pt-lg-4">
                <h3>Contact </h3>
                <div class="row">
                    <div class="col-lg-5 col-md-12 column column4 mt-lg-0 mt-5">
                        <h4>Keep in contact with us.</h4>
                        <h4 href="mailto:controldocumentos@bbbmex.com">controldocumentos@bbbmex.com</h4><br>
                    </div>
                    <div class="col-lg-5 col-md-12 column column4 mt-lg-0 mt-5">
                        <h4>899 958 0039</h4>
                        <h4>899 958 0040</h4>
                    </div>
                </div>
                <div class="d-flex below-section justify-content-between align-items-center pt-4 mt-5">
                    <div class="columns text-lg-left text-center">
                        <p>&copy;
                            <script>
                                document.write(new Date().getFullYear())
                            </script> BBB Industries de México. All
                            rights reserved. Developed by <a href="http://emirhernandez.epizy.com/" target="_blank" style="color:#fe5a0e;">Emir Hernandez</a> and <a href="https://homeroresendiz.dev/" target="_blank" style="color:#fe5a0e;">Homero Resendiz</a> from <strong>Business Information System Department</strong>.
                        </p>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- move top -->
        <button onclick="topFunction()" id="movetop" title="Go to top">
            <span class="fa fa-angle-up"></span>
        </button>
        <script>
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("movetop").style.display = "block";
                } else {
                    document.getElementById("movetop").style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>
        <!-- //move top -->
        <script>
            $(function() {
                $('.navbar-toggler').click(function() {
                    $('body').toggleClass('noscroll');
                })
            });
        </script>
    </section>
    <!-- //footer -->
    <!-- Template JavaScript -->
    <!-- <script src="assets/js/jquery-3.3.1.min.js"></script> -->

    <script src="assets/js/jquery-1.9.1.min.js"></script>

    <script src="assets/js/theme-change.js"></script>
    <!-- responsive tabs -->
    <script src="assets/js/easyResponsiveTabs.js"></script>

    <!--Plug-in Initialisation-->
    <script type="text/javascript">
        $(document).ready(function() {
            //Horizontal Tab
            $('#parentHorizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion
                width: 'auto', //auto or any width like 600px
                fit: true, // 100% fit in a container
                tabidentify: 'hor_1', // The tab groups identifier
                activate: function(event) { // Callback function if tab is switched
                    var $tab = $(this);
                    var $info = $('#nested-tabInfo');
                    var $name = $('span', $info);
                    $name.text($tab.text());
                    $info.show();
                }
            });
        });
    </script>

    <script src="assets/js/owl.carousel.js"></script>
    <!-- script for banner slider-->
    <script>
        $(document).ready(function() {
            $('.owl-one').owlCarousel({
                loop: true,
                margin: 0,
                nav: false,
                responsiveClass: true,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplaySpeed: 1000,
                autoplayHoverPause: false,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    480: {
                        items: 1,
                        nav: false
                    },
                    667: {
                        items: 1,
                        nav: true
                    },
                    1000: {
                        items: 1,
                        nav: true
                    }
                }
            })
        })
    </script>
    <!-- //script -->
    <script>
        $(document).ready(function() {
            $('.owl-three').owlCarousel({
                margin: 20,
                nav: false,
                dots: false,
                responsiveClass: true,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplaySpeed: 1000,
                autoplayHoverPause: false,
                responsive: {
                    0: {
                        items: 2
                    },
                    480: {
                        items: 2
                    },
                    767: {
                        items: 3
                    },
                    992: {
                        items: 4
                    },
                    1280: {
                        items: 5
                    }
                }
            })
        })
    </script>

    <!-- script for testimonials -->
    <script>
        $(document).ready(function() {
            $('.owl-testimonial').owlCarousel({
                loop: true,
                margin: 0,
                nav: true,
                responsiveClass: true,
                autoplay: false,
                autoplayTimeout: 5000,
                autoplaySpeed: 1000,
                autoplayHoverPause: false,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    480: {
                        items: 1,
                        nav: false
                    },
                    667: {
                        items: 1,
                        nav: true
                    },
                    1000: {
                        items: 1,
                        nav: true
                    }
                }
            })
        })
    </script>
    <!-- //script for testimonials -->

    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

            $('.popup-with-move-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-slide-bottom'
            });
        });
    </script>

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function() {
            $('.navbar-toggler').click(function() {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- disable body scroll which navbar is in active -->

    <!--/MENU-JS-->
    <script>
        $(window).on("scroll", function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function() {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function() {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function() {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!--//MENU-JS-->

    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/counter.js"></script>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/605ccfa2067c2605c0bc46e0/1f1l8m4nm';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Scriptc-->

    <!-- countdown -->
    <script src="assets/js/countdown.jquery.js"></script>

    <script>
        $(function() {
            $('#countdown').countdown({
                timezone: -5,
                year: 2021, // YYYY Format
                month: 5, // 1-12
                day: 26, // 1-31
                hour: 0, // 24 hour format 0-23
                minute: 0, // 0-59
                second: 0, // 0-59
                onFinish: function() {
                    alert("Today is the audit!");
                }
            });
        });
    </script>
    <!-- End countdown -->

</body>

</html>

<!-- -->
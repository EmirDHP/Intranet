<!-- Intranet -->
<?php

$error = false;
$config = include '../config.php';

try {
    $dsn = 'mysql:host=' . $config['db']['host'] . ';dbname=' . $config['db']['name'];
    $conexion = new PDO($dsn, $config['db']['user'], $config['db']['pass'], $config['db']['options']);

    $consultaSQL = "SELECT DISTINCT locacion FROM directorios";

    $sentencia = $conexion->prepare($consultaSQL);
    $sentencia->execute();

    $directorios = $sentencia->fetchAll();
} catch (PDOException $error) {
    $error = $error->getMessage();
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="../assets/images/BBB.jpg">

    <title>BBB Industries de México | Directory</title>

    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,500;1,700&display=swap" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="../assets/css/style-starter.css">

    <!-- Font awesome icons from homero resendiz account -->
    <script src="https://kit.fontawesome.com/8219103dfb.js" crossorigin="anonymous"></script>
</head>

<body>
    <!--header-->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark stroke">
                <h1>
                    <a class="navbar-brand" href="../">
                        <img src="../assets/images/logo.png" alt="BBB Industries de México" title="BBB Industries de México" style="height:35px;" />
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
                                <a class="nav-link" href="../">Home <span class="sr-only">(current)</span></a>
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
                                <a class="nav-link" href="../calendar.php">Schedule</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#" role="" button id="dropdownMenuLink" data-toggle="dropdown">Useful Links</a>

                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="http://192.168.1.68/bbb_dlib_rem/ap_Login/" target="_blank">Document Library Login</a>
                                    <a class="dropdown-item" href="../certifications/certificaciones.php">Certifications</a>
                                    <a class="dropdown-item" href="../recognition/index.php">Recognitions</a>
                                    <a class="dropdown-item" href="../directorios/index.php">Directory</a>
                                    <!-- <a class="dropdown-item" href="plantillas.html">Calendar Julian</a> -->
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="../account/login.php">login</a>
                            </li>

                        </ul>
                    </div>
                <?php
                } else {
                ?>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                        <ul class="navbar-nav mx-lg-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="../">Home <span class="sr-only">(current)</span></a>
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
                                <a class="nav-link" href="../calendar.php">Schedule</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#" role="" button id="dropdownMenuLink" data-toggle="dropdown">Useful Links</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="http://192.168.1.68/bbb_dlib_rem/ap_Login/" target="_blank">Document Library Login</a>
                                    <a class="dropdown-item" href="../certifications/home.php">Certifications</a>
                                    <a class="dropdown-item" href="../recognition/home.php">Recognitions</a>
                                    <a class="dropdown-item" href="../directorios/index.php">Directory</a>
                                    <!-- <a class="dropdown-item" href="plantillas.html">Calendar Julian</a> -->
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#" role="" button id="dropdownMenuLink" data-toggle="dropdown">Settings</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="../recognition/upload.php">New recognition</a>
                                    <a class="dropdown-item" href="../certifications/index.php">New certificate</a>
                                    <!-- <a class="dropdown-item" href="../img_carrusel/upload.php">New images</a> -->
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="../account/logout.php">Logout</a>
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
    <!-- services breadcrumb -->
    <section class="w3l-about-breadcrumb">
        <div class="breadcrumb-bg breadcrumb-bg-services py-5">
            <div class="container pt-lg-5 pt-md-3 p-lg-4 pb-md-3">
                <h2 class="title">Directory</h2>
                <ul class="breadcrumbs-custom-path mt-2 text-center">
                    <li><a href="../">Home</a></li>
                    <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Directory
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- //about breadcrumb -->
    <section class="w3l-about1" id="about">
        <div class="container d-flex justify-content-center">
            <div class="row">


                <?php
                if ($directorios && $sentencia->rowCount() > 0) {
                    foreach ($directorios as $fila) {
                ?>
                        <!-- Area -->
                        <div class="col-md-4">
                            <div class="card p-3 py-4 mt-5 mb-5">
                                <div class="text-center">
                                    <a href="<?php echo ($fila["locacion"]); ?>.php" target="nombre_ventana" onclick="window.open('<?php echo ($fila["locacion"]); ?>.php','nombre_ventana','height=600,width=450,toolbar=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no'); return false;">
                                        <img src="../assets/images/tel.png" width="100" height="100" class="rounded-circle">
                                        <h4 class="mt-2">
                                            <?php
                                            if ($fila["locacion"] == 'AlmacenDC') {
                                                echo 'Centro de Distribución DC';
                                            } else {
                                                echo ($fila["locacion"]);
                                            }
                                            ?></h4>
                                    </a>
                                </div>
                            </div>
                        </div>

                <?php
                    }
                }
                ?>


            </div>
        </div>
    </section>


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

    <script src="../assets/js/jquery-1.9.1.min.js"></script>

    <script src="../assets/js/theme-change.js"></script>
    <!-- responsive tabs -->
    <script src="../assets/js/easyResponsiveTabs.js"></script>

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

    <script src="../assets/js/owl.carousel.js"></script>
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

    <script src="../assets/js/jquery.magnific-popup.min.js"></script>
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

    <script src="../assets/js/bootstrap.min.js"></script>

</body>

</html>
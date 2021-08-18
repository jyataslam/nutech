<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: ../../dot-login.html');
	exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<title>DoT Training</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
<link rel="manifest" href="../favicon/site.webmanifest">

<!-- social meta tags -->
<meta name="description" content="Radiopharmacy Services">
<meta name="image" content="http://www.nutechrx.com/assets/images/og-image-nutech.png">
<!-- Schema.org for Google -->
<meta itemprop="name" content="NuTech, Inc.">
<meta itemprop="description" content="Radiopharmacy Services">
<meta itemprop="image" content="http://www.nutechrx.com/assets/images/og-image-nutech.png">
<!-- Twitter -->
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="NuTech, Inc.">
<meta name="twitter:description" content="Radiopharmacy Services">
<meta name="twitter:image:src" content="http://www.nutechrx.com/assets/images/og-image-nutech.png">
<!-- Open Graph general (Facebook, Pinterest & Google+) -->
<meta property="og:title" content="NuTech, Inc.">
<meta property="og:description" content="Radiopharmacy Services">
<meta property="og:image" content="http://www.nutechrx.com/assets/images/og-image-nutech.png">
<meta property="og:url" content="https://www.nutechrx.com/dot-login.html">
<meta property="og:site_name" content="NuTech, Inc.">
<meta property="og:type" content="website">
<!-- End of Social Tags -->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3pro.css">
<script src="https://kit.fontawesome.com/96a8611a1e.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link href="https://fonts.googleapis.com/css?family=Roboto|Quicksand:400,500,600|Fjalla+One&display=swap"
    rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" href="../css/company.css" type="text/css">

<link rel="stylesheet" type="text/css" href="../css/pedcalc.css">
<link rel="stylesheet" href="../css/ce.css" type="text/css">
<link rel="stylesheet" href="../css/dot.css" type="text/css">


<script src="https://kit.fontawesome.com/96a8611a1e.js"></script>

<!-- #BeginEditable "description" -->
<meta name="description" content="DoT Training Videos" />
<!-- #EndEditable -->
<!-- #BeginEditable "keywords" -->
<meta name="keywords"
    content="CNMT, CE, DoT Training Videos, nuclear, nuclear pharmacy, pharmacy, radiopharmacy, radiopharmaceutical, health physics, tyler, college station, wichita falls, Danny Allen, NuTech, nuclear medicine" />
<!-- #EndEditable -->
<meta http-equiv="imagetoolbar" content="false" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="Content-Language" content="en-us" />


</head>

<BODY>
    <div class="w3-top other-navbar">
        <div class="w3-bar myNavbar" id="myNavbar">
            <a id="nav-btn" class="w3-bar-item w3-button w3-hover-black w3-hide-large w3-right"
                href="javascript:void(0);" title="Toggle Navigation Menu">
                <!-- <i class="fa fa-bars"></i> -->
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </a>

            <a class="logo-image" href="../../index.html">
                <img src="../svg/LOGOblutrans.svg" class="img-fluid nutech-navbar-logo"></a>
            <a href="../../resources.html" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-right">
                Resources</a>
            <a href="../../services.html" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-right">
                Our Services</a>
            <a href="../../products.html" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-right">
                Our Products</a>
            <a href="../../team.html" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-right">
                Our Team</a>
            <a href="../../media.html" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-right">
                Media</a>
            <a href="../../company.html" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-right">
                Our Company</a>
            <a href="../../testimonials.html"
                class="w3-bar-item w3-button w3-bar-item w3-button w3-hide-small w3-hide-medium w3-right">Testimonials</a>
            <a href="../../index.html"
                class="w3-bar-item w3-button w3-bar-item w3-button w3-hide-small w3-hide-medium w3-right">Home</a>
        </div>

        <!-- Create Side Nav when open -->
        <div id="nav-menu" class="nav-menu">
            <div class="container">
                <div class="row">
                    <ul class="nav-menu-list">
                        <li class="nav-menu-list-item">
                            <img class="sidenav-logo" src="../svg/LOGOblutrans2.svg" alt="NuTech Logo">
                        </li>
                        <li class="nav-menu-list-item">
                            <a href=".../../index.html" class="w3-bar-item w3-button">Home</a>
                        </li>
                        <hr class="sidenav-hr">
                        <li class="nav-menu-list-item">
                            <a href="../../testimonials.html" class="w3-bar-item w3-button">Testimonials</a>
                        </li>
                        <hr class="sidenav-hr">
                        <li class="nav-menu-list-item">
                            <a href="../../company.html" class="w3-bar-item w3-button">Company</a>
                        </li>
                        <hr class="sidenav-hr">
                        <li class="nav-menu-list-item">
                            <a href="../../media.html" class="w3-bar-item w3-button">Media</a>
                        </li>
                        <hr class="sidenav-hr">
                        <li class="nav-menu-list-item">
                            <a href="../../team.html" class="w3-bar-item w3-button">Team</a>
                        </li>
                        <hr class="sidenav-hr">
                        <li class="nav-menu-list-item">
                            <a href="../../products.html" class="w3-bar-item w3-button">Products</a>
                        </li>
                        <hr class="sidenav-hr">
                        <li class="nav-menu-list-item">
                            <a href="../../services.html" class="w3-bar-item w3-button">Services</a>
                        </li>
                        <hr class="sidenav-hr">
                        <li class="nav-menu-list-item">
                            <a href="../../resources.html" class="w3-bar-item w3-button">Resources</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

    <!-- Calculators -->
    <div class="background">
        <div id="landing-top" class="landing-top"></div>
        <section id="radcalc" class="radcalc">
            <div class="container">
                <div class="row">
                    <h1 class="col-sm-12 company-header1 calc-header">DoT Training</h1>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 dot-container">
                        <h1 class="dot-header">DoT Training Material</h1>
                    </div>
                    <div class="col-md-12 dot-info-container">
                        <h2 class="dot-section-header">Documents</h2>
                        <ul>
                            <li>
                                <a href="../documents/air-transport-test.pdf">Function Specific Training For
                                    HAZMAT Employees Responsible For The Shipment Of HAZMAT By Air</a>
                            </li>
                            <li>
                                <a href="../documents/customer-test.pdf">D.O.T. HAZMAT Employee Training Test</a>
                            </li>
                            <li>
                                <a href="../documents/regular-program.ppt">U.S. Department of Transportation
                                    "HAZMAT Employee" Training for Nuclear Medicine Technologists PowerPoint
                                    Presentation</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-12 dot-info-container">
                        <h2 class="dot-section-header">Videos</h2>
                        <video controls controlsList="nodownload">
                            <source src="../videos/safety-video-dot.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
    </div>
    </section>

    <!-- Jason's Footer -->
    <footer id="footer" class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-content-container col-sm-12">
                    <img class="footer-nutech-logo" src="../svg/LOGOblutrans.svg" alt="NuTech Logo">
                    <div class="footer-nutech-location-container">
                        <div class="footer-location-inner">
                            <p class="footer-location-header">Tyler, TX</p>
                            <a class="footer-location-number" href="tel:+19035928115">903.592.8115</a>
                        </div>
                        <div class="footer-location-inner">
                            <p class="footer-location-header">College Station, TX</p>
                            <a class="footer-location-number" href="tel:+19792680513">979.268.0513</a>
                        </div>
                        <div class="footer-location-inner">
                            <p class="footer-location-header">Wichita Falls, TX</p>
                            <a class="footer-location-number" href="tel:+19407611110">940.761.1110</a>
                        </div>

                    </div>
                    <p class="footer-copyright">NuTech, Inc. &copy; All Rights Reserved. Powered by <a
                            class="footer-span" href="https://www.huntingtondigitaloc.com" target="_blank">Huntington
                            Digital.</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <script type="text/javascript" src="../js/index.js"></script>

</body>


</html>

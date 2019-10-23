<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: ../../login.html');
	exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<title>Pediatric Dose Calculations</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
<link rel="manifest" href="../favicon/site.webmanifest">

<!-- social meta tags -->
<meta name="description" content="Radiopharmacy Services">
<meta name="image" content="http://nutech.huntingtondigitaloc.com/assets/images/og-image-nutech.png">
<!-- Schema.org for Google -->
<meta itemprop="name" content="NuTech, Inc.">
<meta itemprop="description" content="Radiopharmacy Services">
<meta itemprop="image" content="http://nutech.huntingtondigitaloc.com/assets/images/og-image-nutech.png">
<!-- Twitter -->
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="NuTech, Inc.">
<meta name="twitter:description" content="Radiopharmacy Services">
<meta name="twitter:image:src" content="http://nutech.huntingtondigitaloc.com/assets/images/og-image-nutech.png">
<!-- Open Graph general (Facebook, Pinterest & Google+) -->
<meta property="og:title" content="NuTech, Inc.">
<meta property="og:description" content="Radiopharmacy Services">
<meta property="og:image" content="http://nutech.huntingtondigitaloc.com/assets/images/og-image-nutech.png">
<meta property="og:url" content="https://www.nutechrx.com">
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


<script src="https://kit.fontawesome.com/96a8611a1e.js"></script>

<!-- #BeginEditable "description" -->
<meta name="description" content="Continuing Education" />
<!-- #EndEditable -->
<!-- #BeginEditable "keywords" -->
<meta name="keywords"
	content="CNMT, CE, continuing education, nuclear, nuclear pharmacy, pharmacy, radiopharmacy, radiopharmaceutical, health physics, tyler, college station, wichita falls, Danny Allen, NuTech, nuclear medicine" />
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
					<h1 class="col-sm-12 company-header1 calc-header">Continuing Education</h1>
				</div>
			</div>
			<div class="bgimg-1 w3-display-container w3-padding-64">
				<div class="w3-row-padding w3-center w3-margin-top-calc w3-margin-bottom">
					<div class="w3-half">
						<div class="w3-card-resources w3-container w3-mobile ceDiv">
							<h3>NuTech Sponsored Continuing Education
							</h3>
							<p>
								Thank you for your support of NuTech.  Click the button below to access CE courses.
							</p>
						<div class="ceLinkContainer">
							<form name="snmmi" action="http://www.snmmi.org/Education/UPPI.aspx" method="post" target="_snmmi" >
								<div style="text-align: center">
								<br />
								<input type="hidden" name="promocode" value="UPPI64"><br />
								<input type="image" src="../images/snmmi.png" title="Go to SNMMI Courses" value="Go to SNMMI Courses">
								<!-- <input type="image" src="../images/learningcenter.jpg" value="Go to SNM Courses" alt="Go to Learning Center" name="SNM" width="159" height="81"> -->
								</div>
								</form>
						</div>
						</div>
				</div>

					<div class="w3-half">
						<div class="container">
							<div class="row">
								<div class="links-text-container col-sm-12"">
                            <nav class=" accordion-wrapper">
									<h1 class="links-title">Quick Links</h1>
									<ul class="ul-reset">
										<li>
											<a>Calculators</a>
											<ul class="ul-reset">
												<li><a href="../../radcalc.html" target="_blank">Radioactivity</a></li>
												<li><a href="../../pedcalc.html" target="_blank">Pediatric Dosage</a></li>
												<li><a href="../../maacalc.html" target="_blank">MAA Dose Particle</a></li>
											</ul>
										</li>
										<li>
											<a>Patient Information</a>
											<ul class="ul-reset">
												<li><a href="../../assets/documents/Myocardial_Perfusion.pdf"
														target="_blank">Myocardial
														Perfusion</a></li>
												<li><a href="../../assets/documents/Radioiodine_Therapy.pdf"
														target="_blank">Radioiodine
														Therapy</a>
												</li>
												<li><a href="../../assets/documents/Terapia_de_Radioiodine.pdf"
														target="_blank">Terapia
														de
														Radioiodine</a>
												</li>
												<li><a href="../../compounded.html" target="_blank">Compounded Q&A</a></li>
												<li><a href="http://www.snmmi.org/AboutSNMMI/Content.aspx?ItemNumber=5648"
														target="_blank">What
														is
														Nuclear
														Medicine?</a></li>
											</ul>
										</li>
										<li>
											<a>Health Physics Worksheets</a>
											<ul class="ul-reset">
												<li><a href="./assets/documents/Dose_Calibrator_Linearity_Test_Worksheet.pdf"
														target="_blank">Dose
														Calibrator Decay Linearity</a></li>
												<li><a href="./assets/documents/Dose_Calibrator_Accuracy_Test_Worksheet.pdf"
														target="_blank">Dose
														Calibrator Accuracy</a></li>
												<li><a href="./assets/documents/Dose_Calibrator_Geometry_Test_Worksheet.pdf"
														target="_blank">Dose
														Calibrator Geometry</a></li>
												<li><a href="./assets/documents/Request for Calibration or Service.pdf"
														target="_blank">Survey
														Meter
														Calibration</a></li>
												<li><a href="./assets/documents/Request for Calibration or Service.pdf"
														target="_blank">Service
														Request
														Form</a></li>
											</ul>
										</li>
										<li>
											<a>Sealed Source Return Worksheets</a>
											<ul class="ul-reset">
												<li><a href="./assets/documents/Flood_Source_Receipt_and_Return_Check_.pdf"
														target="_blank">Sealed
														Source Receipt and Return Checklist</a></li>
												<li><a href="./assets/documents/Documentation_of_Transport_of_Source_as_a_Limi.pdf"
														target="_blank">Documentation
														of Transport of Source as a Limited Quantity</a></li>
											</ul>
										</li>
										<li>
											<a>Shipper's Reports</a>
											<ul class="ul-reset">
												<li><a href="./assets/documents/Shipper_s_Report.pdf"
														target="_blank">Shipping
														to
														<i>NuTech</i> Tyler</a></li>
												<li><a href="./assets/documents/CSShipperReport.pdf"
														target="_blank">Shipping to
														<i>NuTech</i> College Station</a></li>
												<li><a href="./assets/documents/WFShipperReport.pdf"
														target="_blank">Shipping to
														<i>NuTech</i> Wichita Falls</a></li>
											</ul>
										</li>
										<li>
											<a>Labels</a>
											<ul class="ul-reset">
												<li><a href="./assets/documents/Shipping Label.pdf"
														target="_blank">Shipping
														to
														<i>NuTech</i>
														Tyler</a></li>
												<li><a href="./assets/documents/Limited Quantity Label.pdf"
														target="_blank">Shipping
														Limited
														Quantity</a>
												</li>
											</ul>
										</li>
									</ul>
									</nav>
								</div>
							</div>
						</div>
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
							class="footer-span" href="https://www.huntingtondigitaloc.com" target="_blank">Huntington Digital.</a>
				</div>
			</div>
		</div>
	</footer>

	<script src="https://code.jquery.com/jquery-3.4.1.min.js"
		integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

	<script type="text/javascript" src="../js/index.js"></script>

</body>


</html>

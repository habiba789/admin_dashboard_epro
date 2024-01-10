<?php
require_once "config.php";
$sql = "SELECT * FROM lawyers";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="zxx">

<!-- attorneys.php  22 Nov 2019 12:06:14 GMT -->

<head>
    <meta charset="UTF-8">
    <title>Suprimo</title>

    <!-- Mobile Specific Metas-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap-->
    <link rel="stylesheet" href="stylesheet/bootstrap.css">

    <!-- Template Style-->
    <link rel="stylesheet" href="stylesheet/style.css">
    <link rel="stylesheet" href="stylesheet/all.css">
    <link rel="stylesheet" href="stylesheet/animate.css">
    <link rel="stylesheet" href="stylesheet/shortcodes.css">
    <link rel="stylesheet" href="stylesheet/responsive.css">
    <link rel="stylesheet" href="stylesheet/flexslider.css">
    <link rel="stylesheet" href="rev-slider/css/layers.css">
    <link rel="stylesheet" href="rev-slider/css/navigation.css">
    <link rel="stylesheet" href="rev-slider/css/settings.css">

    <link href="icon/favicon.ico" rel="shortcut icon">
</head>

<body>
    <div id="loading-overlay">
        <div class="loader"></div>
    </div>
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <ul class="flat-information d-lg-flex align-items-center">
                        <li class="email"><a href="#" title="Email">hello@finelaw.com</a></li>
                        <li class="address"><a href="#" title="Address">20 Bardeshi, Amin Bazar, Dhaka</a></li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="flat-contact-us d-lg-flex align-items-center">
                        <a href="#" class="phone">123.456.7890</a>
                        <a href="#" class="cosulting hvr-vertical">FREE COSULTING
                            <div class="border-animate">
                                <div class="top"></div>
                                <div class="right"></div>
                                <div class="bottomb"></div>
                                <div class="left"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- top-bar -->
    <header id="header" class="header bg-color">
        <div class="container">
            <div class="flex-header">
                <div id="logo" class="logo">
                    <a href="index-2.php" title="Logo"><img src="images/logo/01.png" data-width="211" data-height="34"
                            alt="images" data-retina="images/logo/01@2x.png"></a>
                </div>
                <div class="content-menu">
                    <div class="nav-wrap">
                        <div class="btn-menu"><span></span></div>
                        <nav id="mainnav" class="mainnav">
                            <ul class="menu">
                                <li>
                                    <a href="index-2.php">Home</a>
                                    <ul class="sub-menu">
                                        <li><a href="index-2.php">Home 1</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">About</a>
                                    <ul class="sub-menu">
                                        <li><a href="about.php">About</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Practice Area</a>
                                    <ul class="sub-menu">
                                        <li><a href="practice-area.php">Practice area</a></li>
                                        <li><a href="practice-single.php">Practice single</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="active">Attorneys</a>
                                    <ul class="sub-menu">
                                        <li><a href="attorneys.php" class="active">Attorneys</a></li>
                                        <li><a href="attorneys-single.php">Attorneys single</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Cases</a>
                                    <ul class="sub-menu">
                                        <li><a href="case-results.php">Case results</a></li>
                                        <li><a href="case-details.php">Case details</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">News</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog.php">Blog</a></li>
                                        <li><a href="blog-single.php">Blog single</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Contact</a>
                                    <ul class="sub-menu">
                                        <li><a href="contact.php">Contact</a></li>
                                        <li><a href="faq.php">FAQ</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="flat-show-search">
                        <div class="show-search">
                            <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                        </div>
                        <div class="top-search">
                            <div>
                                <form action="#" id="searchform-all" method="get">
                                    <input type="text" id="s" class="ss" placeholder="Search...">
                                    <button class="search-submit">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header><!-- header -->
    <div class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="content">
                        <h2 class="title-banner">attorneys</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing<br> elit sed do eius mod tempor incididunt
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="breadcrumb">
                        <li><a href="#" class="active">Home</a></li>
                        <li><a href="#">Attorneys</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div><!-- page-title -->
    <div class="attorneys attorneys-style1">
        <div class="container">
            <div class="title-section text-center">
                <h3 class="flat-title">Our Attorney</h3>
                <p class="sub-title">Dolore magna aliqu onoet enim ad minim veniam</p>
            </div>
            <div class="row searchBtns">
                <div class="col-lg-3 col-sm-12">
                    <button class="fl-btn hvr-vertical" id="searchByService">
                        Search By Service
                    </button>
                </div>
                <div class="col-lg-3 col-sm-12">
                    <button class="fl-btn hvr-vertical" id="searchByLocation">
                        Search By Location
                    </button>
                </div>
            </div>
            <div class="row searchRow">
                <div class="col-lg-12" id="serviceSearchDiv" style="display: none;">
                    <form class="searchInput" id="searchForm">
                        <select class="searchOpt" id="serviceSearchOption">
                            <option disabled selected value="">Select a Services</option>
                            <option value="Legal Consultation and Advice">Legal Consultation and Advice</option>
                            <option value="Contracts and Agreements">Contracts and Agreements</option>
                            <option value="Litigation and Dispute Resolution">Litigation and Dispute Resolution</option>
                            <option value="Real Estate">Real Estate</option>
                            <option value="Family Matters">Family Matters</option>
                            <option value="Estate Planning">Estate Planning</option>
                            <option value="Business and Corporate Affairs">Business and Corporate Affairs</option>
                            <option value="Employment Issues">Employment Issues</option>
                            <option value="Intellectual Property (IP)">Intellectual Property (IP)</option>
                            <option value="Immigration Assistance">Immigration Assistance</option>
                            <option value="Criminal Defense">Criminal Defense</option>
                            <option value="Affidavit">Affidavit</option>
                            <option value="Divorce Law">Divorce Law</option>
                        </select>
                    </form>
                </div>

                <div class="col-lg-12" id="locationSearchDiv" style="display: none;">
                    <form class="searchInput " id="searchForm">
                        <select class="" id="locationSearchOption">
                            <option disabled selected value="">Select a location</option>
                            <optgroup label="Major Cities">
                                <option value="Karachi">Karachi</option>
                                <option value="Lahore">Lahore</option>
                                <option value="Islamabad">Islamabad</option>
                                <option value="Rawalpindi">Rawalpindi</option>
                                <option value="Faisalabad">Faisalabad</option>
                                <option value="Peshawar">Peshawar</option>
                                <option value="Quetta">Quetta</option>
                            </optgroup>
                            <optgroup label="Provinces">
                                <option value="Sindh">Sindh</option>
                                <option value="Punjab">Punjab</option>
                                <option value="Khyber Pakhtunkhwa">Khyber Pakhtunkhwa</option>
                                <option value="Balochistan">Balochistan</option>
                                <option value="Gilgit-Baltistan">Gilgit-Baltistan</option>
                                <option value="Azad Jammu & Kashmir">Azad Jammu & Kashmir</option>
                            </optgroup>
                        </select>
                    </form>
                </div>
            </div>
            <div class="attorneys-details" id="attorneys-detail">
                <div class="row">
                    <?php
if (mysqli_num_rows($result) > 0) {
    while ($rows = mysqli_fetch_assoc($result)) {
        ?>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="attorneys-info attorneys-hv-link mg-60" id="content-block">
                            <div class="attorneys-avatar hv-link-content">
                                <div class="image">
                                    <img src="../admin-dashboard/template/images/uploads/<?php echo $rows['image']; ?>"
                                        alt="images">
                                </div>
                                <div class="overlay-box">
                                    <div class="content">
                                    <a href="attorney-profile.php?id=<?php echo $rows['id'];?>">View Profile</a>
                                    </div>
                                </div>
                            </div>
                            <div class="attorneys-content">
                                <div class="content-wrap">
                                    <h3 class="name"><a href="#">
                                            <?php echo ucwords("Name: " . $rows['fullname']); ?>
                                        </a></h3>
                                    <p class="position">
                                        <?php echo "Service: " . $rows['services']; ?>
                                    </p>
                                    <p class="location ">
                                        <?php echo "Location: " . $rows['location']; ?>
                                    </p>
                                </div>
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
    </div><!-- attorneys -->
    <div class="featured-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-12">
                    <div class="content">
                        <h6 class="title">Lets solve your problem today</h6>
                        <p>Lorem ipsum dolor sit amet, consecte dunt ut labore</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="fl-btn hvr-vertical">
                        <a href="attorney-app.php" >Book Your Appointment</a>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- featured-banner -->
    <footer id="footer" class="footer">
        <div class="footer-widgets">
            <div class="container">
                <div class="footer-top">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="widget widget-contact mg-footer-mbb">
                                <h2 class="widget-title">Contact</h2>
                                <div class="content">
                                    <ul>
                                        <li><span class="text address">20, Bardeshi, Amin Bazar Savar, Dhaka -
                                                1348</span></li>
                                        <li><span class="text phone">123.456.7890</span></li>
                                        <li><span class="text email">hello@finelaw.com</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="widget widget-services mg-footer-mbb">
                                <h2 class="widget-title">About</h2>
                                <div class="content">
                                    <ul class="widget-menu">
                                        <li><a href="#">About us</a></li>
                                        <li><a href="#">Our Team</a></li>
                                        <li><a href="#">Career</a></li>
                                        <li><a href="#">Practice Area</a></li>
                                        <li><a href="#">Help Guide</a></li>
                                        <li><a href="#">Tutorials</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="widget widget-services mg-footer-mbs">
                                <h2 class="widget-title">Help Desk</h2>
                                <div class="content">
                                    <ul class="widget-menu">
                                        <li><a href="#">Customer Care</a></li>
                                        <li><a href="#">Legal Help</a></li>
                                        <li><a href="#">Service</a></li>
                                        <li><a href="#">Donation</a></li>
                                        <li><a href="#">Child Care</a></li>
                                        <li><a href="#">Presonal Care</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="widget widget-newsletter">
                                <h2 class="widget-title">Newsletter</h2>
                                <div class="content">
                                    <p>Polore eu fugiat nulla pariatur Excepteur sint occaecat cupidat at non tomake
                                        bole</p>
                                    <form action="#" class="form-email-footer">
                                        <input type="text" class="your-email" placeholder="Your email">
                                        <button class="btn-email">
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="widget widget-text mg-footer-mbb">
                                <div class="content">
                                    <div class="images-logo">
                                        <img src="images/footer/07.png" alt="images">
                                    </div>
                                    <p>
                                        Naboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                        Excepteur sint occaecat cupidatat non proiden
                                    </p>
                                    <div class="list-socials">
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-5 col-sm-5">
                            <div class="widget widget-gallery mg-footer-mbs clearfix">
                                <h2 class="widget-title">Gallery</h2>
                                <div class="content">
                                    <div class="images-gallery hv-gallery-icon">
                                        <div class="overlay-gallery">
                                            <div class="item-link">
                                                <a href="#" class="popup-gallery"><i class="fa fa-search"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <img src="images/footer/01.png" alt="images">
                                    </div>
                                    <div class="images-gallery hv-gallery-icon">
                                        <div class="overlay-gallery">
                                            <div class="item-link">
                                                <a href="#" class="popup-gallery"><i class="fa fa-search"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <img src="images/footer/02.png" alt="images">
                                    </div>
                                    <div class="images-gallery hv-gallery-icon">
                                        <div class="overlay-gallery">
                                            <div class="item-link">
                                                <a href="#" class="popup-gallery"><i class="fa fa-search"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <img src="images/footer/03.png" alt="images">
                                    </div>
                                    <div class="images-gallery hv-gallery-icon">
                                        <div class="overlay-gallery">
                                            <div class="item-link">
                                                <a href="#" class="popup-gallery"><i class="fa fa-search"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <img src="images/footer/04.png" alt="images">
                                    </div>
                                    <div class="images-gallery hv-gallery-icon">
                                        <div class="overlay-gallery">
                                            <div class="item-link">
                                                <a href="#" class="popup-gallery"><i class="fa fa-search"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <img src="images/footer/05.png" alt="images">
                                    </div>
                                    <div class="images-gallery hv-gallery-icon">
                                        <div class="overlay-gallery">
                                            <div class="item-link">
                                                <a href="#" class="popup-gallery"><i class="fa fa-search"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <img src="images/footer/06.png" alt="images">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-7 col-sm-7">
                            <div class="widget widget-twitter">
                                <h2 class="widget-title">Recent Tweets</h2>
                                <div class="content">
                                    <div class="tw-wrap">
                                        <div class="text-link">
                                            Lco lodoami tomader lok amitomader vai amar ar kisu naikeho <a
                                                href="#">http://bit.ly/7asF34</a>
                                        </div>
                                        <div class="text-time"><a href="#">@Fine Law</a> - 2 hours ago</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom">
                <div class="container">
                    <div class="bottom-wrap">
                        <div class="row">
                            <div class="col-lg-5 col-md-12">
                                <div class="copyright">
                                    <a href="templateshub.net">Templateshub</a>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-12">
                                <div class="menu-footer">
                                    <ul>
                                        <li><a href="#">Terms & Condition</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Legal</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a id="scroll-top" class="show"></a>
    </footer><!-- footer -->

    <script>

        let serviceDiv = document.getElementById('serviceSearchDiv');
        let locationDiv = document.getElementById('locationSearchDiv');
        document.getElementById('searchByService').addEventListener('click', function () {
            locationDiv.style.display='none';
            serviceDiv.style.display='block';
            let searchMethod = 'service';
            performSearch(searchMethod);
        })
        document.getElementById('searchByLocation').addEventListener('click', function () {
            serviceDiv.style.display='none';
            locationDiv.style.display='block';
            let searchMethod = 'location';
            performSearch(searchMethod);
        })


        function performSearch(searchMethod) {
            if (searchMethod === 'service') {

                document.getElementById("serviceSearchOption").addEventListener('input', function() {
                    let selectedOpt = document.getElementById('serviceSearchOption').value;
                    fetch("searchAttorney.php?service=" + selectedOpt)
                        .then(response => response.text())
                        .then(data => {
                            document.getElementById('attorneys-detail').innerHTML = data;
                        })
                        .catch(error => console.error("Error".error));
                })
            }
            if (searchMethod === 'location') {
                document.getElementById("locationSearchOption").addEventListener('input', function() {
                    let selectedOpt = document.getElementById('locationSearchOption').value;
                    fetch("searchAttorney.php?location=" + selectedOpt)
                        .then(response => response.text())
                        .then(data => {
                            document.getElementById('attorneys-detail').innerHTML = data;
                        })
                        .catch(error => console.error("Error".error));
                })
            }
        }
    </script>
    <script src="javascript/jquery.min.js"></script>
    <script src="javascript/plugins.js"></script>
    <script src="javascript/jquery-ui.js"></script>
    <script src="javascript/gmap3.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCo_pcAdFNbTDCAvMwAD19oRTuEmb9M50c"></script>
    <script src="javascript/jquery-isotope.js"></script>
    <script src="javascript/equalize.min.js"></script>
    <script src="javascript/jquery-countTo.js"></script>
    <script src="javascript/flex-slider.min.js"></script>
    <script src="javascript/main.js"></script>

    <!-- slider -->
    <script src="rev-slider/js/jquery.themepunch.tools.min.js"></script>
    <script src="rev-slider/js/jquery.themepunch.revolution.min.js"></script>
    <script src="javascript/rev-slider.js"></script>

    <!-- Load Extensions only on Local File Systems ! The following part can be removed on Server for On Demand Loading -->
    <script src="rev-slider/js/extensions/extensionsrevolution.extension.actions.min.js"></script>
    <script src="rev-slider/js/extensions/extensionsrevolution.extension.carousel.min.js"></script>
    <script src="rev-slider/js/extensions/extensionsrevolution.extension.kenburn.min.js"></script>
    <script src="rev-slider/js/extensions/extensionsrevolution.extension.layeranimation.min.js"></script>
    <script src="rev-slider/js/extensions/extensionsrevolution.extension.migration.min.js"></script>
    <script src="rev-slider/js/extensions/extensionsrevolution.extension.navigation.min.js"></script>
    <script src="rev-slider/js/extensions/extensionsrevolution.extension.parallax.min.js"></script>
    <script src="rev-slider/js/extensions/extensionsrevolution.extension.slideanims.min.js"></script>
    <script src="rev-slider/js/extensions/extensionsrevolution.extension.video.min.js"></script>
</body>

<!-- attorneys.php  22 Nov 2019 12:06:34 GMT -->

</html>
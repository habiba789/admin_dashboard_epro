<?php
require_once "partials/header.php";

if(isset($_GET['id'])){
    $attorneyId = $_GET['id'];
    $searchSql = "SELECT* FROM lawyers WHERE id = '$attorneyId'";
    $result = mysqli_query($conn, $searchSql);
    if(mysqli_num_rows($result)>0){
        $row = mysqli_fetch_assoc($result);
        $attorney_name = $row['fullname'];
        $attorney_email = $row['email'];
        $attorney_location = $row['location'];
        $attorney_contact = $row['contact'];
        $attorney_service = $row['services'];
        $attorney_image = $row['image'];
        $attorney_desp = $row['description'];
    }
}
$allAttorneySql = "SELECT * FROM lawyers";
$allResult = mysqli_query($conn, $allAttorneySql);

?>
<!DOCTYPE html>
<html lang="zxx">

<!-- attorneys-single.php  22 Nov 2019 12:06:34 GMT -->

<head>
    <meta charset="UTF-8">
    <title>Suprimo</title>

    <!-- Mobile Specific Metas-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap-->
    <link rel="stylesheet" href="stylesheet/bootstrap.css">

    <!-- Template Style-->
    <link rel="stylesheet" href="stylesheet/all.css">
    <link rel="stylesheet" href="stylesheet/animate.css">
    <link rel="stylesheet" href="stylesheet/style.css">
    <link rel="stylesheet" href="stylesheet/shortcodes.css">
    <link rel="stylesheet" href="stylesheet/responsive.css">
    <link rel="stylesheet" href="stylesheet/flexslider.css">
    <link rel="stylesheet" href="rev-slider/css/layers.css">
    <link rel="stylesheet" href="rev-slider/css/navigation.css">
    <link rel="stylesheet" href="rev-slider/css/settings.css">

    <link href="icon/favicon.ico" rel="shortcut icon">
</head>

<body>
    <div class="attorneys-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12">
                    <div class="attorneys-single-warp d-md-flex">
                        <div class="col-left">
                            <div class="personal-details">
                                <div class="featured-post">
                                    <div class="entry-image">
                                        <img src="../admin-dashboard/template/images/uploads/<?php echo $attorney_image;?>"
                                            alt="images">
                                    </div>
                                </div>
                                <ul class="attorneys-info-sn">
                                    <li>
                                        <h3 class="name-info name-size">Advocate <?php echo ucwords($attorney_name);?>
                                        </h3>
                                        <p><?php echo $attorney_service; ?></p>
                                    </li>
                                    <li>
                                        <div class="name-info">Location</div>
                                        <p><?php echo $attorney_location; ?></p>
                                    </li>
                                    <li>
                                        <div class="name-info">Email</div>
                                        <p><?php echo $attorney_email; ?></p>
                                    </li>
                                    <li>
                                        <div class="name-info">Phone</div>
                                        <p>+<?php echo $attorney_contact; ?></p>
                                    </li>
                                    <li>
                                        <div class="name-info">Social Links</div>
                                        <div class="list-socials">
                                            <a href="#" class="icon-facebook"><i class="fa fa-facebook"
                                                    aria-hidden="true"></i></a>
                                            <a href="#" class="icon-twitter"><i class="fa fa-twitter"
                                                    aria-hidden="true"></i></a>
                                            <a href="#" class="icon-linkedin"><i class="fa fa-linkedin"
                                                    aria-hidden="true"></i></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-right">
                            <div class="introduce-attorneys">
                                <h4 class="title">About  <?php echo ucwords($attorney_name); ?> :</h4>
                                <div class="text">
                                    <p>
                                    <?php echo $attorney_desp; ?>
                                    </p>
                                </div>
                            </div>
                            <div class="flat-question">
                                <div class="accordion">
                                    <div class="accordion-toggle line active">
                                        <div class="toggle-title d-flex align-items-center active">
                                            <div class="icon"><i class="fa fa-thumb-tack" aria-hidden="true"></i></div>
                                            <h5 class="name d-flex align-items-sm-center">Skill</h5>
                                        </div>
                                        <div class="toggle-content">
                                            <div class="skillbar-item">
                                                <h6 class="skillbar-title">Primary Law</h6>
                                                <h6 class="skill-bar-percent">90%</h6>
                                                <div class="skillbar" data-percent="90%">
                                                    <div class="skillbar-bar"></div>
                                                </div>
                                            </div>
                                            <div class="skillbar-item">
                                                <h6 class="skillbar-title">Business Law</h6>
                                                <h6 class="skill-bar-percent">97%</h6>
                                                <div class="skillbar" data-percent="97%">
                                                    <div class="skillbar-bar"></div>
                                                </div>
                                            </div>
                                            <div class="skillbar-item">
                                                <h6 class="skillbar-title">Finalcial Law</h6>
                                                <h6 class="skill-bar-percent">70%</h6>
                                                <div class="skillbar" data-percent="70%">
                                                    <div class="skillbar-bar"></div>
                                                </div>
                                            </div>
                                            <div class="skillbar-item">
                                                <h6 class="skillbar-title">Immigration Law</h6>
                                                <h6 class="skill-bar-percent">80%</h6>
                                                <div class="skillbar" data-percent="80%">
                                                    <div class="skillbar-bar"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-toggle line">
                                        <div class="toggle-title d-flex align-items-center">
                                            <div class="icon"><i class="fa fa-address-book-o" aria-hidden="true"></i>
                                            </div>
                                            <h5 class="name d-flex align-items-sm-center">Education & Training</h5>
                                        </div>
                                        <div class="toggle-content">
                                            <div class="skillbar-item">
                                                <h6 class="skillbar-title">Primary Law</h6>
                                                <h6 class="skill-bar-percent">90%</h6>
                                                <div class="skillbar" data-percent="90%">
                                                    <div class="skillbar-bar"></div>
                                                </div>
                                            </div>
                                            <div class="skillbar-item">
                                                <h6 class="skillbar-title">Business Law</h6>
                                                <h6 class="skill-bar-percent">97%</h6>
                                                <div class="skillbar" data-percent="97%">
                                                    <div class="skillbar-bar"></div>
                                                </div>
                                            </div>
                                            <div class="skillbar-item">
                                                <h6 class="skillbar-title">Finalcial Law</h6>
                                                <h6 class="skill-bar-percent">70%</h6>
                                                <div class="skillbar" data-percent="70%">
                                                    <div class="skillbar-bar"></div>
                                                </div>
                                            </div>
                                            <div class="skillbar-item">
                                                <h6 class="skillbar-title">Immigration Law</h6>
                                                <h6 class="skill-bar-percent">80%</h6>
                                                <div class="skillbar" data-percent="80%">
                                                    <div class="skillbar-bar"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-toggle line">
                                        <div class="toggle-title d-flex align-items-center">
                                            <div class="icon"><i class="fa fa-folder-o" aria-hidden="true"></i></div>
                                            <h5 class="name d-flex align-items-sm-center">Career & Experience</h5>
                                        </div>
                                        <div class="toggle-content">
                                            <div class="skillbar-item">
                                                <h6 class="skillbar-title">Primary Law</h6>
                                                <h6 class="skill-bar-percent">90%</h6>
                                                <div class="skillbar" data-percent="90%">
                                                    <div class="skillbar-bar"></div>
                                                </div>
                                            </div>
                                            <div class="skillbar-item">
                                                <h6 class="skillbar-title">Business Law</h6>
                                                <h6 class="skill-bar-percent">97%</h6>
                                                <div class="skillbar" data-percent="97%">
                                                    <div class="skillbar-bar"></div>
                                                </div>
                                            </div>
                                            <div class="skillbar-item">
                                                <h6 class="skillbar-title">Finalcial Law</h6>
                                                <h6 class="skill-bar-percent">70%</h6>
                                                <div class="skillbar" data-percent="70%">
                                                    <div class="skillbar-bar"></div>
                                                </div>
                                            </div>
                                            <div class="skillbar-item">
                                                <h6 class="skillbar-title">Immigration Law</h6>
                                                <h6 class="skill-bar-percent">80%</h6>
                                                <div class="skillbar" data-percent="80%">
                                                    <div class="skillbar-bar"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-toggle line">
                                        <div class="toggle-title d-flex align-items-center">
                                            <div class="icon"><i class="fa fa-trophy" aria-hidden="true"></i></div>
                                            <h5 class="name d-flex align-items-sm-center">Awards & Achivment</h5>
                                        </div>
                                        <div class="toggle-content">
                                            <div class="skillbar-item">
                                                <h6 class="skillbar-title">Primary Law</h6>
                                                <h6 class="skill-bar-percent">90%</h6>
                                                <div class="skillbar" data-percent="90%">
                                                    <div class="skillbar-bar"></div>
                                                </div>
                                            </div>
                                            <div class="skillbar-item">
                                                <h6 class="skillbar-title">Business Law</h6>
                                                <h6 class="skill-bar-percent">97%</h6>
                                                <div class="skillbar" data-percent="97%">
                                                    <div class="skillbar-bar"></div>
                                                </div>
                                            </div>
                                            <div class="skillbar-item">
                                                <h6 class="skillbar-title">Finalcial Law</h6>
                                                <h6 class="skill-bar-percent">70%</h6>
                                                <div class="skillbar" data-percent="70%">
                                                    <div class="skillbar-bar"></div>
                                                </div>
                                            </div>
                                            <div class="skillbar-item">
                                                <h6 class="skillbar-title">Immigration Law</h6>
                                                <h6 class="skill-bar-percent">80%</h6>
                                                <div class="skillbar" data-percent="80%">
                                                    <div class="skillbar-bar"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-12">
                    <div class="sidebar mg-sidebar-res">
                        <div class="widget widget-list-common">
                            <h3 class="widget-title"><span>Other Attorneys</span></h3>
                            <ul>
                                <?php
                                if(mysqli_num_rows($allResult)>0){
                                    while($rows = mysqli_fetch_assoc($allResult)){
                                        $all_attorney_id = $rows['id'];
                                        $all_attorney_name = $rows['fullname'];
                                        $all_attorney_services = $rows['services'];
                                        ?>
                                         <li><a href="attorney-profile.php?id=<?php echo $all_attorney_id;?>"><?php echo $all_attorney_name;?></a></li>
                                        <?php
                                    }
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- attorneys-single -->
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
                        <a href="attorney-app.php">Book Your Appointment</a>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- featured-banner -->
    <?php
    require_once "partials/footer.php";
    ?>

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

<!-- attorneys-single.php  22 Nov 2019 12:06:35 GMT -->

</html>
<?php
require_once "config.php";
require_once "partials/header.php";
$errorMsg = false;
$attorneysSql = "SELECT * FROM lawyers";
$attorneyResult = mysqli_query($conn, $attorneysSql);
if (isset($_POST['appSubmit'])) {
    $customerName = $_POST['customerName'];
    $customerEmail = $_POST['customerEmail'];
    $attorneyId = $_POST['AttorneyId'];
    $appDateTime = $_POST['appDateTime'];

    $currentDate = date("Y-m-d\TH:i:s");

    if ($appDateTime > $currentDate) {
        $searchCustSql = "SELECT * FROM customers WHERE email = '$customerEmail'";
        $searchCustResult = mysqli_query($conn, $searchCustSql);

        if (mysqli_num_rows($searchCustResult) > 0) {
            $custrecord = mysqli_fetch_assoc($searchCustResult);
            $customerId = $custrecord['id'];

            $insertSql = "INSERT INTO appointments(customers_id, Lawyers_id, appDateTime) VALUES ('$customerId', '$attorneyId', '$appDateTime')";

            $insertResult = mysqli_query($conn, $insertSql);

            if ($insertResult) {
                echo "slot booked successfully";
            } else {
                echo "got some issue in bookin a slot";
            }
        } else {
            echo "no such customer found";
        }
    } else {
        $errorMsg = "Kindly enter valid date";
    }

}

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
    <style>
    .attorney-app-container {
        padding: 60px 20px;
    }

    .appointment-form {
        padding: 20px;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .image-container {
        padding: 20px;
    }

    .attorney-app-container .image-container img {
        width: 80%;
    }

    .appointment-form .lawyerSelection option {
        margin-bottom: 10px;
    }

    .book-slot-btn {
        background-color: #cca776;
        color: white;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
    }

    /* Add more styling as needed */
    </style>
</head>

<body>
    <div class="attorney-app-container">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-6">
                    <form id="appointmentForm" class="appointment-form" method="post">
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                            <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </symbol>
                        </svg>
                        <?php
if ($errorMsg) {
    ?>
                        <div class="alert alert-danger d-flex align-items-center" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                                <use xlink:href="#exclamation-triangle-fill" />
                            </svg>
                            <div>
                                <?php echo $errorMsg; ?>
                            </div>
                        </div>
                        <?php
}
?>
                        <div class="form-group">
                            <label for="customerName">Customer Name:</label>
                            <input type="text" id="customerName" name="customerName" required>
                        </div>
                        <div class="form-group">
                            <label for="customerEmail">Customer Email:</label>
                            <input type="email" id="customerEmail" name="customerEmail" required>
                        </div>
                        <div class="form-group">
                            <label for="AttorneyName">Attorney Name:</label>
                            <select id="AttorneyName" class="lawyerSelection" name="AttorneyId" required>
                                <option selected disabled>--Select a Lawyer--</option>
                                <?php
if (mysqli_num_rows($attorneyResult)) {
    while ($rows = mysqli_fetch_assoc($attorneyResult)) {
        $attorneyId = $rows['id'];
        $attorneyName = $rows['fullname'];
        $attorneyService = $rows['services'];
        ?>
                                <option value="<?php echo $attorneyId; ?>">
                                    <?php echo $attorneyName . '-' . $attorneyService; ?></option>
                                <?php
}
}
?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="appointmentDateTime">Appointment Date and Time:</label>
                            <input type="datetime-local" id="appointmentDateTime" name="appDateTime" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="book-slot-btn" name="appSubmit" value="Book a Slot">
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="image-container">
                        <img src="images/attorneys/attorney-app-img-sm.jpg" alt="Lawyer Image">
                    </div>
                </div>



            </div>


        </div>
    </div>
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
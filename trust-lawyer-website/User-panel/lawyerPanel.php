<?php
$errorMsg = false;
echo '    <nav class="header-nav ms-auto">
<ul class="d-flex align-items-center">

    <li class="nav-item dropdown pe-3" style="list-style: none;">
        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="../../admin-dashboard/template/images/uploads/' . $lawyerImage . '" alt="Profile" class="rounded-circle" />
            <span class="d-none d-md-block dropdown-toggle ps-2">' . ucwords($lawyerName)  . ' </span> </a>

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
                <h6>' . ucwords($lawyerName)  . '</h6>
            </li>
            <li>
                <hr class="dropdown-divider" />
            </li>

            <li>
                <a class="dropdown-item d-flex align-items-center" href="userpanel.php">
                    <i class="bi bi-person"></i>
                    <span>My Profile</span>
                </a>
            </li>
            <li>
                <hr class="dropdown-divider" />
            </li>
            <li>
                <a class="dropdown-item d-flex align-items-center" href="logout.php">
                    <i class="bi bi-box-arrow-right"></i>
                    <span>Sign Out</span>
                </a>
            </li>
        </ul>
    </li>
</ul>
</nav>
</header>
<main id="main" class="main">

<div class="pagetitle">
<h3>Welcome ' . ucwords($lawyerName)  . '</h3>
</div><!-- End Page Title -->

<section class="section profile">
<div class="row">
    <div class="col-xl-4">

        <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                <img src="../../admin-dashboard/template/images/uploads/' . $lawyerImage . '" alt="Profile" class="rounded-circle">
                <h2>'.ucwords($lawyerName) .'
</h2>
<div class="social-links mt-2">
    <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
</div>
</div>
</div>

</div>

<div class="col-xl-8">

    <div class="card">
        <div class="card-body pt-3">
            <!-- Bordered Tabs -->
            <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                    <button class="nav-link active" data-bs-toggle="tab"
                        data-bs-target="#profile-overview">Overview</button>
                </li>

                <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit
                        Profile</button>
                </li>

            </ul>
            <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">

                    <h5 class="card-title">Profile Details</h5>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label ">Full Name</div>
                        <div class="col-lg-9 col-md-8">' . $lawyerName . '</div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">Email</div>
                        <div class="col-lg-9 col-md-8">' . $lawyerEmail . '</div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">Password</div>
                        <div class="col-lg-9 col-md-8">' . $lawyerPassword . '</div>
                    </div>


                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">Contact</div>
                        <div class="col-lg-9 col-md-8">' . $lawyerContact . '</div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">Location</div>
                        <div class="col-lg-9 col-md-8">' . $lawyerLocation . '</div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">Service</div>
                        <div class="col-lg-9 col-md-8">' . $lawyerService . '</div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">Description</div>
                        <div class="col-lg-6 col-md-5" style="text-align: justify;">' . $lawyerDesp . '</div>
                    </div>

                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                    <!-- Profile Edit Form -->
                    <form method="post" enctype="multipart/form-data">
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                            <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </symbol>
                        </svg>
                
                        '.
                        ($errorMsg ?'
                        <div class="alert alert-danger d-flex align-items-center" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                                <use xlink:href="#exclamation-triangle-fill" />
                            </svg>
                            <div>
                                '. $errorMsg .'
                            </div>
                        </div>
                        ':'').'
                        
                    

                        <div class="row mb-3" id="preImageDiv">
                            <label for="lawyerImage" class="col-md-4 col-lg-3 col-form-label">Your Image</label>
                            <div class="col-md-8 col-lg-9">
                                <img src="../../admin-dashboard/template/images/uploads/'. $lawyerImage. '" alt="">
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="keepImageCheckbox" value="yes">
                                <label class="form-check-label text-secondary fs-6" for="flexCheckDefault">
                                    Want to upload the new image
                                </label>
                            </div>
                        </div>
                        <div class="row mb-3" id="newImageDiv" style="display:none">
                            <label class="col-md-4 col-lg-3 col-form-label">Upload:</label>
                            <div class="col-md-8 col-lg-9">
                                <input type="file" class="form-control" name="upLawyerImage">
                            </div>
                        </div>
                        <script>
                            document.getElementById("keepImageCheckbox").addEventListener("change",
                                function () {
                                    let newImageDiv = document.getElementById("newImageDiv");
                                    let preImageDiv = document.getElementById("preImageDiv");
                                    newImageDiv.style.display = this.checked ? "flex" : "none";
                                    preImageDiv.style.display = this.checked ? "none" : "flex";
                                });
                        </script>



                        <div class="row mb-3">
                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full
                                Name</label>
                            <div class="col-md-8 col-lg-9">
                                <input name="upLawyerName" type="text" class="form-control" id="fullName"
                                    value="' . $lawyerName . '">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="company" class="col-md-4 col-lg-3 col-form-label">Email</label>
                            <div class="col-md-8 col-lg-9">
                                <input name="upEmail" type="email" class="form-control" id="email"
                                    value="' . $lawyerEmail . '">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="Country" class="col-md-4 col-lg-3 col-form-label">Password</label>
                            <div class="col-md-8 col-lg-9">
                                <input name="upPassword" type="text" class="form-control" id="password"
                                    value="' . $lawyerPassword . '">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="Address" class="col-md-4 col-lg-3 col-form-label">Contact</label>
                            <div class="col-md-8 col-lg-9">
                                <input name="upContact" type="text" class="form-control" id="contact"
                                    value="' . $lawyerContact . '">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="Email" class="col-md-4 col-lg-3 col-form-label">Location</label>
                            <div class="col-md-8 col-lg-9">
                                <input name="upLocation" type="text" class="form-control" id="location"
                                    value="' . $lawyerLocation . '">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="Email" class="col-md-4 col-lg-3 col-form-label">Service</label>
                            <div class="col-md-8 col-lg-9">
                                <input name="upService" type="text" class="form-control" id="service"
                                    value="' . $lawyerService . '">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="Email" class="col-md-4 col-lg-3 col-form-label">Description</label>
                            <div class="col-md-8 col-lg-9">
                                <textarea name="upLawyerDesp" id="despTextarea"
                                    class="despTextarea form-control">' . $lawyerDesp . '</textarea>
                            </div>
                        </div>

                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary col-lg-3" name="updateLawyerForm">Save
                                Changes</button>
                        </div>
                    </form><!-- End Profile Edit Form -->

                </div>

            </div><!-- End Bordered Tabs -->

        </div>
    </div>

</div>
</div>
</section>

</main>';

?>

<?php
if (isset($_POST['updateLawyerForm'])) {
    $upLawyerName = $_POST['upLawyerName'];
    $upEmail = $_POST['upEmail'];
    $upPassword = $_POST['upPassword'];
    $upContact = $_POST['upContact'];
    $upServices = $_POST['upService'];
    $upLocation = $_POST['upLocation'];
    $upLawyerDesp = $_POST['upLawyerDesp'];
    $imgName = $_FILES['upLawyerImage']['name'];
    $tmp_name = $_FILES['upLawyerImage']['tmp_name'];

    function uploadImage($tmp_name, $imgName)
    {
        $targetDir = '../../admin-dashboard/template/images/uploads';
        $targetFile = $targetDir . basename($imgName);
        if (move_uploaded_file($tmp_name, $targetFile)) {
            return $targetFile;
        } else {
            return false;
        }
    }

    $stmt = mysqli_stmt_init($conn);

    $updateSql = "UPDATE lawyers SET fullname=?, email=?, password=?, contact=?, services=?, location=?, description=? WHERE id=?";
    $imageUpdate = false;

    if ($imgName !== '') {
        $updateSql = "UPDATE lawyers SET fullname=?, email=?, password=?, contact=?, services=?, location=?, image=?, description=? WHERE id=?";
        $imageUpdate = true;
    }

    if (mysqli_stmt_prepare($stmt, $updateSql)) {
        if ($imageUpdate) {
            $targetFile = uploadImage($tmp_name, $imgName);
            if ($targetFile) {
                mysqli_stmt_bind_param($stmt, "ssssssssi", $upLawyerName, $upEmail, $upPassword, $upContact, $upServices, $upLocation, $imgName, $upLawyerDesp, $lawyerId);
            } else {
                $errorMsg = "Got some issue in uploading image";
            }
        } else {
            mysqli_stmt_bind_param($stmt, "sssssssi", $upLawyerName, $upEmail, $upPassword, $upContact, $upServices, $upLocation, $upLawyerDesp, $lawyerId);
        }

        mysqli_stmt_execute($stmt);

        if (mysqli_stmt_affected_rows($stmt) > 0) {
            echo "<script>window.location.href='userpanelMain.php'</script>";
        } else {
            $errorMsg = "Update failed.";
        }
    } else {
        $errorMsg = "Error in preparing the statement.";
    }

}
?>
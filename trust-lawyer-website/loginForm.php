<?php


require_once "config.php";
$errorMsg = false;
if(isset($_POST['loginCustomer'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $findCust = "SELECT * FROM customers WHERE email = '$email' AND password = '$password'";
    $custResult = mysqli_query($conn, $findCust);

    if(mysqli_num_rows($custResult)>0){
        $row = mysqli_fetch_assoc($custResult);
        session_start();
        $_SESSION["id"]=$row["id"];
        $_SESSION["login"]=true;
        $_SESSION["userType"]="customer";
        header("location:index.php");
    } else {
        $errorMsg= "No such Record Found. Kindly submit valid credentials !";
    }

}
if(isset($_POST['loginLawyer'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $findLawyer = "SELECT * FROM lawyers WHERE email = '$email' AND password = '$password'";
    $lawyerResult = mysqli_query($conn, $findLawyer);

    if(mysqli_num_rows($lawyerResult)>0){
        $row = mysqli_fetch_assoc($custResult);
        session_start();
        $_SESSION["id"]=$row["id"];
        $_SESSION["login"]=true;
        $_SESSION["userType"]="lawyer";
        header("location:index.php");
    } else {
        $errorMsg= "No such Record Found. Knidly submit valid credentials !";
    }

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Registration Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet" />
    <!-- Bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
    body {
        font-family: "Poppins", sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f3f3f3;
    }

    .container {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 100px 20px;
    }

    .reg-container {
        height: 480px;
        width: 100%;
        max-width: 500px;
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .form-container {
        width: 100%;
        height: 100%;
        /* max-width: 600px; */
        background-color: #ffffff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
        color: #cca776;
        text-align: center;
        margin-bottom: 15px;
    }

    label {
        color: #333333;
        font-weight: 300;
        font-size: 1.1em;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"],
    input[type="submit"],
    input[type="button"] {
        width: 100%;
        padding: 8px;
        margin-bottom: 8px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }

    input[type="radio"] {
        margin-right: 5px;
        cursor: pointer;
    }

    button,
    input[type="submit"] {
        background-color: #cca776;
        color: #ffffff;
        border: none;
        cursor: pointer;
        transition: all 200ms ease-in;
    }


    input[type="submit"]:hover {
        background-color: #b58e5f;
    }

    #customerRadio {
        margin-top: 8px;
    }

    p.signupShift {
        margin-top: 15px;
        margin-left: 4px;
        font-size: 13px;
    }
    </style>
    <script>
    function lawBtnChange() {
        const loginBtn = document.getElementById('loginBtn');
        loginBtn.name = "loginLawyer";
    }

    function custBtnChange() {
        const loginBtn = document.getElementById('loginBtn');
        loginBtn.name = "loginCustomer";
    }
    </script>
</head>

<body>
    <div class="container">
        <div class="reg-container" id="mainContainerId">
            <div class="form-container">
                <div id="formContent" class="form-content">
                    <form id="loginForm" method="POST">
                        <div class="form-panel-1" id="panel-one">
                            <h2>Login Form</h2>

                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                </symbol>
                            </svg>
                            <?php
                                    if($errorMsg){
                                        ?>
                            <div class="alert alert-danger d-flex align-items-center " role="alert">
                                <svg class="bi flex-shrink-0 me-3" width="24" height="24" role="img"
                                    aria-label="Danger:">
                                    <use xlink:href="#exclamation-triangle-fill" />
                                </svg>
                                <div>
                                    <?php echo $errorMsg; ?>
                                    <script>
                                        let regContainer = document.getElementById('mainContainerId');
                                        regContainer.style.height="550px";
                                    </script>
                                </div>
                            </div>
                            <?php
                                    }
                                    
                              ?>
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" class="form-control" required /><br />

                            <label for="password">Password:</label>
                            <input type="text" id="password" name="password" class="form-control" required /><br />

                            <label><input type="radio" id="customerRadio" name="userType" value="customer"
                                    onclick="custBtnChange()" checked />
                                Login as Customer</label><br />
                            <label><input type="radio" id="lawyerRadio" name="userType" value="lawyer"
                                    onclick="lawBtnChange()" />
                                Login as Lawyer</label><br /><br />

                            <input type="submit" id="loginBtn" value="Log In" name="loginCustomer" />

                            <p class="signupShift">Don't have an account? <a href="registrationForm.php">SignUp</a></p>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
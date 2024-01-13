<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Registration Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f3f3f3;
    }

    .container {
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 50px 20px;
    }

    .reg-container {
      height: 800px;
      width: 100%;
      max-width: 1100px;
      align-items: center;
      display: flex;
      justify-content: center;
    }

    .form-container {
      width: 80%;
      height: 100%;
      max-width: 600px;
      background-color: #ffffff;
      padding: 20px;
      border-top-left-radius: 10px;
      border-bottom-left-radius: 10px;
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
    textarea,
    select {
      width: 100%;
      padding: 8px;
      margin-bottom: 10px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    input[type="radio"] {
      margin-right: 5px;
    }

    input[type="submit"] {
      background-color: #cca776;
      color: #ffffff;
      border: none;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #b58e5f;
    }

    .image-container {
      width: 100%;
      height: 100%;
      text-align: center;
     
    }

    img {
      width: 100%;
      height: 100%;
      display: block;
      object-fit: cover;
      border-top-right-radius: 10px;
      border-bottom-right-radius: 10px;
    }

    p {
      text-align: center;
    }

    a {
      color: #cca776;
      text-decoration: none;
    }
  </style>
  <script>
    // JavaScript to show/hide lawyer-specific inputs
    function toggleLawyerInputs() {
      const lawyerInputs = document.getElementById('lawyerInputs');
      lawyerInputs.style.display = document.getElementById('lawyerRadio').checked ? 'block' : 'none';
    }
  </script>
</head>

<body>
  <div class="container">
    <div class="reg-container">


      <!-- Form container -->
      <div class="form-container">
        <h2>Registration Form</h2>
        <form action="process_registration.php" method="POST">
          <label for="fullname">Full Name:</label>
          <input type="text" id="fullname" name="fullname" class="form-control" required><br>

          <label for="email">Email:</label>
          <input type="email" id="email" name="email" class="form-control" required><br>

          <label for="password">Password:</label>
          <input type="password" id="password" name="password" class="form-control" required><br>

          <label for="contact">Contact:</label>
          <input type="text" id="contact" name="contact" class="form-control" required><br>

          <label for="location">Location:</label>
          <input type="text" id="location" name="location" class="form-control" required><br>

          <label><input type="radio" id="customerRadio" name="userType" value="customer" checked
              onchange="toggleLawyerInputs()"> Register as Customer</label><br>
          <label><input type="radio" id="lawyerRadio" name="userType" value="lawyer" onchange="toggleLawyerInputs()">
            Register as Lawyer</label><br><br>

          <!-- Lawyer specific inputs, initially hidden -->
          <div id="lawyerInputs" style="display: none;">
            <label for="services">Services:</label>
            <select id="services" name="services" class="form-select">
              <option value="legal">Legal Advice</option>
              <option value="consultation">Consultation</option>
              <!-- Add more options as needed -->
            </select><br>

            <label for="image">Image:</label>
            <input type="file" id="image" name="image" class="form-control"><br>

            <label for="description">Description:</label><br>
            <textarea id="description" name="description" rows="4" cols="30" class="form-control"></textarea><br>
          </div>

          <input type="submit" value="Register" class="btn btn-primary">
        </form>

        <p>Already have an account? <a href="login.php">Login</a></p>
      </div>

      <!-- Large image container -->
      <div class="image-container">
        <img src="images/attorneys/reg-form-pic.jpg" alt="Large Image">
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
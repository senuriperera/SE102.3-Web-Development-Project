<?php

$databasehost="";
$username="";
$password="";
$database="";

$conn = new mysqli ($databasehost,$username,$password,$database);

if($conn->connect_error){
    die('

    <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Island Explorer</title>
  <link rel="icon" type="image/x-icon" href="assets/web-resources/logo-nav.png">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
  <link rel="stylesheet" href="css/contactUs.css">
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
  <script src="js/bootstrap.bundle.min.js"></script>
</head>

<body background="assets/web-resources/bg-img.png">
  <div>
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container">
        <a class="navbar-brand" href="index.html">
          <img src="assets/web-resources/logo-nav.png" alt="Island Explorer Logo" width="100" height="100"
            class="d-inline-block">
          <span class="navigation-brand-text">Island Explorer</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active nav-link-animation navigation-link-text" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active nav-link-animation navigation-link-text" href="about.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active nav-link-animation navigation-link-text" aria-current="page" href="contactUs.html">Contact
                Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active nav-link-animation navigation-link-text"
                href="destinations.html">Destinations</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active nav-link-animation navigation-link-text" href="activities.html">Activities</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active nav-link-animation navigation-link-text"
                href="accommodations.html">Accommodations</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active nav-link-animation navigation-link-text" href="tourPackages.html">Tour
                Packages</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <div style="min-height: 100vh;">
    <center>
      <h1 style="color: orange;">Connection Error</h1>
      <h3 style="color: orange;">Please try again later</h3>
    </center>
  </div>
  <div>
    <footer class="footer-styles">
      <p style="text-align: center;">Copyright 2023. All rights reserved. Island Explorer</p>
    </footer>
  </div>
</body>

</html>

    ');
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];

    $sql="INSERT INTO feedback VALUES ('$name','$email','$message')";

    if($conn->query($sql)==TRUE){
        echo "
        
        <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Island Explorer</title>
  <link rel="icon" type="image/x-icon" href="assets/web-resources/logo-nav.png">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
  <link rel="stylesheet" href="css/contactUs.css">
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
  <script src="js/bootstrap.bundle.min.js"></script>
</head>

<body background="assets/web-resources/bg-img.png">
  <div>
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container">
        <a class="navbar-brand" href="index.html">
          <img src="assets/web-resources/logo-nav.png" alt="Island Explorer Logo" width="100" height="100"
            class="d-inline-block">
          <span class="navigation-brand-text">Island Explorer</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active nav-link-animation navigation-link-text" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active nav-link-animation navigation-link-text" href="about.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active nav-link-animation navigation-link-text" aria-current="page" href="contactUs.html">Contact
                Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active nav-link-animation navigation-link-text"
                href="destinations.html">Destinations</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active nav-link-animation navigation-link-text" href="activities.html">Activities</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active nav-link-animation navigation-link-text"
                href="accommodations.html">Accommodations</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active nav-link-animation navigation-link-text" href="tourPackages.html">Tour
                Packages</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <div style="min-height: 100vh;">
    <center>
      <h1 style="color: orange;">Thank you for contacting us. We will get back to you as soon as possible.</h1>
    </center>
  </div>
  <div>
    <footer class="footer-styles">
      <p style="text-align: center;">Copyright 2023. All rights reserved. Island Explorer</p>
    </footer>
  </div>
</body>

</html>
        
        "
    }
}

?>
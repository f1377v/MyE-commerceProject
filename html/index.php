<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Review Freak</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="assets/css/main.css" rel="stylesheet" />
  </head>
  <body>
    <nav>
      <input type="checkbox" id="bars">
      <label for="bars" class="barsbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo">Review Freak</label>
      <ul>
        <li><a class="active" href="index.html">Home</a></li>
        <li><a href="search.html">Search</a></li>
        <li><a href="submission.php">Submit</a></li>
        <li><a href="registration.php">Sign Up</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="logout.php">Logout</a></li>
        <li><a href="individual_sample.html">Sample Review</a></li>
        <li><a href="results_sample.html">Reviews</a></li>
      </ul>
    </nav>
    <!--It's not a good approch to deal directly with body So, create a wrapper container and make it a full-window height.-->
    <div style="background: url(assets/images/ReviewTimeTransparent.png)" class="min-height bckground-cover"> 
      <div class="container py-5">
          <header class="text-center text-dark py-5">
              <h1 class="display-4 font-weight-bold mb-4">If It Exists, We Have Reviews For It</h1>
              <p style="font-size:1.25rem;font-weight:700">Join and start helping the community</p>
          </header>
      </div>
    </div>
    <br>
   <?php
    include 'footer.html';
   ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
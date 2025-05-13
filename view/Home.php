<?php
include("conn.php");

session_start();

if (isset($_POST['name'])) {
    $_SESSION['name'] = $_POST['name'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="css/bootstrap.min.css">
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Swift Fleet</title>

<style>
  body {
    background-color: #f8f9fa;
  }

  .navbar {
    background-color: #007bff;
  }

  .navbar-brand {
    color: #fff !important;
    font-size: 1.8rem;
    font-weight: bold;
    letter-spacing: 1px;
  }

  .navbar-nav .nav-link {
    color: #ffffff !important;
    font-weight: 500;
    margin-right: 15px;
  }

  .navbar-nav .nav-link:hover {
    color: #d1e7ff !important;
    text-decoration: underline;
  }

  .welcome-heading {
    color: #007bff;
    font-weight: 700;
    margin-top: 20px;
  }

  .lead {
    color: #555;
    margin-bottom: 30px;
  }

  .image-container {
    margin: 30px auto;
    padding: 20px;
    background-color: #ffffff;
    border-radius: 15px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    text-align: center;
  }

  .image-container img {
    max-width: 100%;
    height: auto;
    border-radius: 10px;
  }
</style>

</head>
<body>

<nav class="navbar navbar-expand-lg py-4">
  <div class="container">
    <a class="navbar-brand" href="#">Swift Fleet</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="../vehicle/Select.php">Vehicle</a></li>
        <li class="nav-item"><a class="nav-link" href="../maintenance/select.php">Maintenance</a></li>
        <li class="nav-item"><a class="nav-link" href="../trip/select.php">Trip</a></li>
        <li class="nav-item"><a class="nav-link" href="Report.php">Report</a></li>
        <li class="nav-item"><a class="nav-link" href="Login.php">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container text-center">
  <h2 class="welcome-heading">Welcome, <?php echo $_SESSION['name']; ?>!</h2>
  <p class="lead">You are now logged in. Explore the system below.</p>
</div>

<div class="container image-container " style="margin-top: -55px;">
  <img src="https://i.pinimg.com/originals/73/5c/ea/735cea56968f703df45d4c551ee3b160.gif" alt="Swift Fleet Image">
</div>


</body>
</html>

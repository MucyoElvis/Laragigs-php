<?php
include('./config/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/bootstrap.min.css">
  <link rel="stylesheet" href="./style.css">
  <title>Laragigs</title>
</head>

<body>
  <!-- top -->
  <section class="col-1 bg-danger text-center text-light fixed-top">
    <div class="container">
      <a href="index.php" style="text-decoration: none;">
        <h1 class="fw-bold">L<span>G</span></h1>
      </a>
    </div>
  </section>

  <section class="bg-danger text-center text-light  mt-5 p-2 pb-3">
  <div class="container col-12 d-flex justify-content-end">
        <a href="admin.php"><img src="./assets/images/Admin Settings Male_128px.png" class="img-fluid" style="width:3rem;"></a>
    </div>

    <div class="container mt-5">
      <h1 class="fw-bold">LARA<span>GIGS</span></h1>
      <p>Find or Post Laravel Jobs & Projects</p>
      <a href="form.php" class="btn btn-lg btn-danger mb-3"  data-bs-toggle="modal" data-bs-target="#enroll" >Sign up To List a Gig</a>
      <div>
        <a href="store.php" class="btn btn-danger btn-lg mt-2">Our Store</a>
      </div>     
    </div>
  
  </section>
  <!-- end of top -->

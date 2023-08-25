<?php include('./components/header.php'); ?>
<?php include('./controllers/items.php'); ?>
<!-- top -->
<section class="col-1 bg-danger text-center text-light fixed-top">
  <div class="container">
    <a href="index.php" style="text-decoration: none;">
      <h1 class="fw-bold">L<span>G</span></h1>
    </a>
  </div>
</section>

<section class="bg-danger text-center text-light  mt-5 p-2 pb-3">
  <div class="container mt-5">
    <h1 class="fw-bold">LARA<span>GIGS</span></h1>
    <p>Find or Post Laravel Jobs & Projects</p>
    <a href="form.php" class="btn btn-lg btn-danger mb-3" data-bs-toggle="modal" data-bs-target="#enroll">Sign up To List a Gig</a>
    <div>
      <a href="index.php" class="btn btn-danger btn-lg mt-2">Home</a>
    </div>
  </div>
</section>
<!-- end of top -->


<section>
  <div class="container">
    <form action="results.php?action=search_1" method="POST" id="searchform">
      <div class="input-group mt-5">
        <input type="search" class="form-control mx-3" onkeyup="search()" placeholder="Search Laravel Gigs ..." name="search_text" id="search_text">
        <button class="btn btn-danger btn-lg " onclick="search()" type="submit">search</button>
      </div>
    </form>
  </div>
</section>

<section>
  <div class="container">
    <?php
    // var_dump($result);
    // if (isset($_GET['action'])) :
    if (mysqli_num_rows($result) > 0) :
    ?>
      <div class="row d-flex justify-content-center gx-5 ">
        <div class="col-12 text-center mt-3">
          <h3>Featured:</h3>
        </div>
        <?php foreach ($result as $item) : ?>
          <div class="col-md-3">
            <div class="card my-5 bg-second" style="border: none;" id="card">
              <div class="card-text">
                <h3 class="text-center pt-2"><?= $item['name']; ?></h3>
              </div>
              <div class="card-body">
                <img src="./assets/images/<?= $item['image'] ?>" class="img-fluid px-4">
              </div>
              <div class="card-text text-center">
                <p class="lead fw-bold">$<?= $item['price'] ?></p>
                <a href="cart.php" class="btn btn-lg btn-danger mb-3">Add To Cart</a>
              </div>
            </div>
          </div>
        <?php endforeach ?>

      <?php else : ?>
        <div class="col-12 text-center mt-3">
          <h3>No Results found</h3>
        </div>
      <?php endif ?>
      </div>
      <!--  -->
  </div>
  <!-- item 9 -->
  <div class="container">
    <div class="row d-flex justify-content-center gx-5">
      <div class="col-12 text-center mt-3">
        <h3>New Items:</h3>
      </div>
      <?php foreach ($datalist as $item) : ?>

        <div class="col-md-3 mx-5">
          <div class="card my-5 bg-second d-flex justify-content-center" style="border: none;" id="card">
            <div class="card-text">
              <h3 class="text-center pt-2"><?= $item['name']; ?></h3>
            </div>
            <div class="card-body">
              <img src="./assets/images/<?= $item['image'] ?>" class="img-fluid px-4">
            </div>
            <div class="card-text text-center">
              <p class="lead fw-bold">$<?= $item['price'] ?></p>
              <a href="cart.php" class="btn btn-lg btn-danger mb-3">Add To Cart</a>
            </div>
          </div>
        </div>

      <?php endforeach ?>
    </div>
  </div>
  </div>
  </div>
</section>

<!-- modal -->
<div class="modal fade" id="enroll" tabindex="-1" aria-labelledby="enrollLabel" aria-hidden="true">

  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="enrollLabel">Registration Form</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p class="lead text-center">
          Fill Out This Form To Start Listing Gigs
        </p>
        <?php include('./components/form.php') ?>
      </div>
    </div>
  </div>
  <script>
    function search() {
      const field = document.getElementById('search_text');
      const form = document.getElementById('searchform');
      const text = field.value;
      if (text.length > 2) {
        form.submit();
      }
    }
  </script>
  <?php include('./components/footer.php'); ?>
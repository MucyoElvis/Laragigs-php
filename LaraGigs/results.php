<?php include('./components/navbar.php');
include('./controllers/search.php');
?>


<div class="container">
<form action="" method="POST" id="searchform">
 <div class="input-group mt-5">
  <input type="search" class="form-control mx-3" onkeyup="search()" placeholder="Search Laravel Gigs ..." name="search_text">
  <button class="btn btn-danger btn-lg " onclick="search()" type="button">search</button>
 </div>
</form>
<h2 class="text-center"><?=$message; ?></h2>
<div class="row">
<?php foreach ($result as $item) : ?>
 <div class="col-md-3 mx-5">
  <div class="card my-5 bg-second" style="border: none;" id="card">
   <div class="card-text">
    <h3 class="text-center pt-2"><?= $item['name']; ?></h3>
   </div>
   <div class="card-body">
    <img src="./assets/images/<?= $item['image']; ?>" class="img-fluid px-4">
   </div>
   <div class="card-text text-center">
    <p class="lead fw-bold">$<?= $item['price']; ?></p>
    <a href="cart.php?action=add&id=<?= $item['id']; ?>&n=<?= $item['name']; ?>&p=<?= $item['price']; ?>" class="btn btn-lg btn-danger mb-3">Add to cart</a>
   </div>
  </div>
 </div>
 
<?php endforeach ?>
</div>
</div>
</div>
<?php include('./components/footer.php'); ?>
<script>
 function search() {

  const form = document.getElementById('searchform');
  form.submit();
 }
</script>

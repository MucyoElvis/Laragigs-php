<div class="container d-flex justify-content-center align-items-center">
 <form action="" method="POST" enctype="multipart/form-data" class="mb-5">
  <div class="form-group mb-2">
   <label for="name" class="form-label">
    Name
   </label>
   <input type="text" class="form-control" name="name">
  </div>

  <div class="form-group mb-2">
   <label for="slug" class="form-label">
    Slug
   </label>
   <input type="text" class="form-control" name="slug">
  </div>

  <div class="form-group mb-2">
   <label for="price" class="form-label">
    Price
   </label>
   <input type="number" class="form-control" name="price">
  </div>

  
  <div class="form-group mb-2">
   <label for="last price" class="form-label">
    Last Price
   </label>
   <input type="number" class="form-control" name="last_price">
  </div>

  
  <div class="form-group mb-2">
    <label for="image" class="col-form-label">
      Image
    </label>
    <input type="file" class="form-control" id="image" name="image" required>
  </div>

  <div class="form-group mb-2">
   <label for="seler id" class="form-label">
    Seller Id
   </label>
   <input type="number" class="form-control" name="seller_id">
  </div>

  <div class="form-group mb-2">
   <label for="description" class="form-label">
    Description
   </label>
   <input type="text" class="form-control" name="description">
  </div>

  <div class="form-group mb-2">
   <label for="instock" class="form-label">
    Instock
   </label>
   <input type="number" class="form-control" name="instock">
  </div>

  <div class="form-group mb-2">
   <label for="date created" class="form-label">
    Year Created
   </label>
   <input type="number" class="form-control" name="date_created" placeholder="2023">
  </div>

  <div class="form-group mb-2">
   <label for="spex" class="form-label">
    Spex
   </label>
   <input type="text" class="form-control" name="spex">
  </div>

  <div class="form-group mb-2">
  <label for="featured" class="form-label">
       Featured :
      </label><br>
      Yes<input type="radio" name="featured" value="yes">
      No<input type="radio" name="featured" value="no" checked>
  </div>

  <div class="form-group mb-2">
   <label for="created at" class="form-label">
    Created at
   </label>
   <input type="datetime-local" class="form-control" name="created_at">
  </div>

  <div class="form-group mb-2">
   <label for="status" class="form-label">
    Status
   </label>
   <select name="status" id="status">
    <option value="available">available</option>
    <option value="sold out">sold out</option>
   </select>
  </div>

 <div class="form-group">
  <input type="submit" value="Submit" name="submit" class="btn btn-info btn-lg mt-5 col-6 offset-3">
 </div>
 </form>
</div>

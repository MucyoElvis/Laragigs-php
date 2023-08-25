<?php
 include('./components/header.php');
if(isset($_POST['edit'])){
 $name=$_POST['name'];
  $slug=$_POST['slug'];
  $price=$_POST['price'];
  $last_price=$_POST['last_price'];
  $seller_id=$_POST['seller_id'];
  $description=$_POST['description'];
  $instock=$_POST['instock'];
  $year=$_POST['date_created'];
  $spex=$_POST['spex'];
  $featured=$_POST['featured'];
  $date_created=$_POST['created_at'];
  // $file=$_FILES['image']['tmp_name'];
  // $filename=$_FILES['image']['name'];
  // $filename= $name.'_'.$filename;
  // if(move_uploaded_file($name,'./assets.images/'.$filename)){
   $sql="UPDATE `items` SET `name`='".$name."',`slug`='".$slug."',`price`='".$price."',`last_price`='".$last_price."',
   `seller_id`='".$seller_id."',`description`='".$description."',`instock`='".$instock."',`date_created`='".$year."',
   `spex`='".$spex."',`featured`='".$featured."',`created_at`='".$date_created."'";
   
   $result=mysqli_query($conn,$sql);
   if($result){
    echo 'Successfully Edited';
    header('location:read.php?msg=Successfully Edited');
   }else{
    echo 'Error'.$sql.'<br>'.mysqli_error($conn);
   }
  }
//}
if(isset($_GET['id'])){
 $user_id=$_GET['id'];

 $sql="SELECT * FROM `items` WHERE `id`=".$user_id;
 $result=mysqli_query($conn,$sql);

 if(mysqli_num_rows($result)>0){
  while($row=$result->fetch_assoc()){
   $name=$row['name'];
   $slug=$row['slug'];
   $price=$row['price'];
   $last_price=$row['last_price'];
   // $filename=$row['image'];
   $seller_id=$row['seller_id'];
   $description=$row['description'];
   $instock=$row['instock'];
   $year=$row['date_created'];
   $spex=$row['spex'];
   $featured=$row['featured'];
   $date_created=$row['created_at'];
  }
 }
}
 
?>

<h3 class="text-center mt-5">Update your Products</h3>
<div class="container d-flex justify-content-center align-items-center">
 <form action="" method="POST" enctype="multipart/form-data" class="mb-5">
  <div class="form-group mb-2">
   <label for="name" class="form-label">
    Name
   </label>
   <input type="text" class="form-control" name="name" value="<?php echo $name ?>">
  </div>

  <div class="form-group mb-2">
   <label for="slug" class="form-label">
    Slug
   </label>
   <input type="text" class="form-control" name="slug" value="<?php echo $slug ?>">
  </div>

  <div class="form-group mb-2">
   <label for="price" class="form-label">
    Price
   </label>
   <input type="number" class="form-control" name="price" value="<?php echo $price ?>">
  </div>

  
  <div class="form-group mb-2">
   <label for="last price" class="form-label">
    Last Price
   </label>
   <input type="number" class="form-control" name="last_price" value="<?php echo $last_price ?>">
  </div>

  
  <div class="form-group mb-2">
    <label for="image" class="col-form-label">
      Image
    </label>
    <input type="file" class="form-control" id="image" name="image" value="<?php //echo $filename?>">
  </div>

  <div class="form-group mb-2">
   <label for="seler id" class="form-label">
    Seller Id
   </label>
   <input type="number" class="form-control" name="seller_id" value="<?php echo $seller_id ?>">
  </div>

  <div class="form-group mb-2">
   <label for="description" class="form-label">
    Description
   </label>
   <input type="text" class="form-control" name="description" value="<?php echo $description ?>">
  </div>

  <div class="form-group mb-2">
   <label for="instock" class="form-label">
    Instock
   </label>
   <input type="number" class="form-control" name="instock" value="<?php echo $instock ?>">
  </div>

  <div class="form-group mb-2">
   <label for="date created" class="form-label">
    Year Created
   </label>
   <input type="number" class="form-control" name="date_created" placeholder="2023" value="<?php echo $year ?>">
  </div>

  <div class="form-group mb-2">
   <label for="spex" class="form-label">
    Spex
   </label>
   <input type="text" class="form-control" name="spex" value="<?php echo $spex ?>">
  </div>

  <div class="form-group mb-2">
  <label for="featured" class="form-label">
       Featured :
      </label><br>
      Yes<input type="radio" name="featured" value="yes"  value="<?php echo $featured ?>">
      No<input type="radio" name="featured" value="no" checked value="<?php echo $featured ?>">
  </div>

  <div class="form-group mb-2">
   <label for="created at" class="form-label">
    Created at
   </label>
   <input type="datetime-local" class="form-control" name="created_at" value="<?php echo $date_created ?>">
  </div>

 <div class="form-group">
  <input type="submit" value="Submit" name="edit" class="btn btn-info btn-lg mt-5 col-6 offset-3">
 </div>
 </form>
</div>

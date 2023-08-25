<?php include('./components/header.php'); 
include('./config/config.php');

 if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $slug=$_POST['slug'];
  $price=$_POST['price'];
  $last_price=$_POST['last_price'];
  $seller_id=$_POST['seller_id'];
  $description=$_POST['description'];
  $instock=$_POST['instock'];
  $year=$_POST['date_created'];
  $spex=$_POST['spex'];
  $status=$_POST['status'];
  $featured=$_POST['featured'];
  $date_created=$_POST['created_at'];
  $file=$_FILES['image']['tmp_name'];
  $filename=$_FILES['image']['name'];
  $filename=$name.'_'.$filename;
  if(move_uploaded_file($file,'./assets/images/' . $filename)){
   $sql="INSERT INTO `items` (`name`,`slug`,`price`,`last_price`,`seller_id`,`description`,
   `instock`,`date_created`,`spex`,`featured`,`created_at`,`image`,`status`) VALUES ('".$name."','".$slug."','".$price."','".$last_price."','".$seller_id."'
   ,'".$description."','".$instock."','".$year."','".$spex."','".$featured."','".$date_created."','".$filename."','".$status."')";
   
   $result=mysqli_query($conn,$sql);

   if($result){
    $msg= 'New Item Successfully Inserted';
    header('location:read.php?msg='.$msg.'&id=' .mysqli_insert_id($conn));
   }else{
    echo 'Error'.$sql.'<br>'.$mysqli_error($conn);
   }
  }
 }

?>
<div class="container d-flex justify-content-center align-items-center">
 <a href="index.php" class="btn btn-danger btn-lg mt-3">Home</a>
  <a href="store.php" class="btn btn-danger btn-lg mt-3 mx-1">Our Store</a>
</div>
 <h3 class="text-center mt-5">Insert New Products</h3>
<?php include('./components/admin-form.php'); ?>
 <script src="./assets/bootstrap.min.js"></script>
<?php include('./components/header.php'); 
 $msg='';
 $id=0;
 if(isset($_GET['id'])){
  $id=$_GET['id'];
 }
 if(isset($_GET['msg'])){
  $msg=$_GET['msg'];
 }else{
  $msg='Welcome To List Of Users';
 }
 $sql="SELECT * FROM `items`";
 $result=mysqli_query($conn,$sql);
?>
<div class="container">
 <div class="alert alert-info">
  <center> <?= $msg ?></center>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   <span aria-hidden="true">&times;</span>
  </button>
 </div>
 <h3 class="text-center mt-5">View Your Products</h3>
 <div class="row">
  <div class="col-12">
   <table class="table mt-5 table-hovered">
    <thead>
     <tr>
      <th>Name</th>
      <th>Slug</th>
      <th>Price</th>
      <th>Last Price</th>
      <th>Image</th>
      <th>Seller Id</th>
      <th>Description</th>
      <th>Instock</th>
      <th>Year</th>
      <th>Spex</th>
      <th>Featured</th>
      <th>Date Created</th>
     </tr>
    </thead>
    <tbody>
     <?php 
      if(mysqli_num_rows($result)>0){
       while($row=$result->fetch_assoc()){  
     ?>
      <tr>
       <td><?php echo $row['id'];?></td>
       <td><?php echo $row['name'];?></td>
       <td><?php echo $row['slug'];?></td>
       <td><?php echo $row['price'];?></td>
       <td><?php echo $row['last_price'];?></td>
       <td><?php echo $row['image'];?></td>
       <td><?php echo $row['seller_id'];?></td>
       <td><?php echo $row['description'];?></td>
       <td><?php echo $row['instock'];?></td>
       <td><?php echo $row['date_created'];?></td>
       <td><?php echo $row['spex'];?></td>
       <td><?php echo $row['featured'];?></td>
       <td><?php echo $row['created_at'];?></td>

       <td><a class="btn btn-info" href="edit.php?id=<?php echo $row['id'];?>">
       Edit</a>&nbsp;<a class="btn btn-danger" href="remove.php?id=<?php echo $row['id'];?>">
       Delete</a></td>
      </tr>
     <?php
     }
    }
     ?>
    </tbody>
   </table>
  </div>
 </div>

</div>
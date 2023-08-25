<?php include('./components/header.php');
include('./config/config.php');
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
 $sql="SELECT * FROM `users`";
 $result=mysqli_query($conn,$sql);
?>

<div class="container">
 <div class="alert alert-info">
  <center> <?= $msg ?></center>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   <span aria-hidden="true">&times;</span>
  </button>
 </div>
 <div class="row">
  <div class="col-12">
   <table class="table table-hovered">
    <thead>
     <tr>
      <th>ID</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email</th>
      <th>Profile</th>
      <th>Company Name</th>
     </tr>

    </thead>
    <tbody>
     <?php
     if (mysqli_num_rows($result) > 0) {
      while ($row = $result->fetch_assoc()) {
     ?>
       <tr>
        <td><?php echo $row['id'];?></td>
        <td><?php echo $row['firstname'];?></td>
        <td><?php echo $row['lastname'];?></td>
        <td><?php echo $row['email'];?></td>
        <td><img src="./assets/images/<?php echo $row['profile'];?>" class="img-fluid rounded-circle" style="height:3rem" width="60rem"></td>
        <td><?php echo $row['companyname'];?></td>
        

        <td><a class="btn btn-info" href="update.php?id=<?php echo $row['id'] ;?>">
        Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id'] ;?>">
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
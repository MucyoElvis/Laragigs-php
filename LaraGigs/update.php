<?php include('./components/header.php');
include('./config/config.php');

 if(isset($_POST['update'])){
  $firstname=$_POST['firstname'];
  $lastname=$_POST['lastname'];
  $email=$_POST['email'];
  $companyname=$_POST['companyname'];
  $user_id=$_POST['user_id'];

  $sql="UPDATE `users` SET 
  `firstname`='".$firstname."',`lastname`='".$lastname."',
  `email`='".$email."',`companyname`='".$companyname."' WHERE `id`=".$user_id;

  $result=mysqli_query($conn,$sql);
  if($result){
   echo 'SUCCESSFULLY UPDATED';
   header('location:view.php?msg=SUCCESSFULLY UPDATED');
  }else{
   echo 'ERROR'.$sql.'<br>'.mysqli_error($conn);
  }
 }

 if(isset($_GET['id'])){
  $user_id=$_GET['id'];

  $sql="SELECT * FROM `users` WHERE `id`=".$user_id;
  $result=mysqli_query($conn,$sql);

  if(mysqli_num_rows($result)>0){
   while($row=$result->fetch_assoc()){
    $firstname=$row['firstname'];
    $lastname=$row['lastname'];
    $email=$row['email'];
    $companyname=$row['companyname'];
   }
  }
 }
?>

<div class="container col-4 ">
   <h4 class="mt-5 text-center">Form update</h4>
     <form action="" method="POST">
     
     <div class="form-group mt-3 p-2">
      <label for="first-name">
       First name
      </label>
      <input type="text" class="form-control" name="firstname" value="<?php echo $firstname;?>">
      <input type="hidden" name="user_id" value="<?php echo $user_id;?>">
     </div>

     <div class="form-group p-2">
      <label for="last-name">
       last name
      </label>
      <input type="text" class="form-control" name="lastname" value="<?php echo $lastname?>">
     </div>

     <div class="form-group p-2">
      <label for="email">
       Email
      </label>
      <input type="email" class="form-control" name="email" value="<?php echo $email?>">
     </div>


     <div class="form-group p-2">
      <label for="companyname" class="mb-2">
       Company Name
      </label>
      <input type="text" class="form-control" name="companyname" value="<?php echo $companyname?>">
     </div>
     <input type="submit" name="update" class="btn btn-info col-4 offset-4 btn-lg mt-3">
   </form>

<?php

if(isset($_POST['action'])){
 $action=$_POST['action'];
 switch ($action) {
  case 'create':
if(isset($_POST['submit'])){
 $firstname=$_POST['firstname'];
 $lastname=$_POST['lastname'];
 $email=$_POST['email'];
 $companyname=$_POST['companyname'];
 $file=$_FILES['profile']['tmp_name'];
 $filename=$_FILES['profile']['name'];
 $filename=$firstname.'_'.$lastname.'_'.$filename;
 if(move_uploaded_file($file,'./assets/images/'.$filename)){
   $sql="INSERT INTO `users` (`firstname`,`lastname`,`email`,`companyname`,`profile`)
   VALUES ('".$firstname."','".$lastname."','".$email."','".$companyname."','".$filename."')";

   $result=mysqli_query($conn,$sql);
   if($result){
     $msg='NEW USER SUCCESSFULLY REGISTERED';
     header('location:view.php?msg='.$msg.'&id='.mysqli_insert_id($conn));
   }else{
     echo 'Error'.$sql.'<br>'.$mysqli_error($conn);
   }
 };
}
break;
case 'edit':
 if(isset($_POST['submit'])){
  $firstname=$_POST['firstname'];
  $lastname=$_POST['lastname'];
  $email=$_POST['email'];
  $companyname=$_POST['companyname'];
  $file=$_FILES['profile']['tmp_name'];
  $filename=$_FILES['profile']['name'];
  $filename=$firstname.'_'.$lastname.'_'.$filename;
  if(move_uploaded_file($file,'./assets/images/'.$filename)){
    $sql="INSERT INTO `users` (`firstname`,`lastname`,`email`,`companyname`,`profile`)
    VALUES ('".$firstname."','".$lastname."','".$email."','".$companyname."','".$filename."')";
 
    $result=mysqli_query($conn,$sql);
    if($result){
      $msg='NEW USER SUCCESSFULLY REGISTERED';
      header('location:view.php?msg='.$msg.'&id='.mysqli_insert_id($conn));
    }else{
      echo 'Error'.$sql.'<br>'.$mysqli_error($conn);
    }
  };
 }
 break;
   
default:
 # code...
 break;
}


}
?>
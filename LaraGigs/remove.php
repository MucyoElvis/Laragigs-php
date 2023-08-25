<?php include('./config/config.php');
  
  if(isset($_GET['id'])){
   $user_id=$_GET['id'];

   $sql="DELETE FROM `items` WHERE `id`=".$user_id;
   $result=mysqli_query($conn,$sql);
   if($result){
    $msg='RECORD DELETED SUCCESSFULLY';
    header('location:read.php?msg='.$msg);
   }else{
    echo 'Error'.$sql.'<br>'.mysqli_error($conn);
   }
  }
?>
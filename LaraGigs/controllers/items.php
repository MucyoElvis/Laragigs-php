<?php
$result=array();
 if(isset($_GET['action'])){
  $action=$_GET['action'];
  switch ($action) {
   case 'search_1':
    # code...
    $text=$_POST['search_text'];
    $sql="SELECT * FROM `items` WHERE `name` LIKE '%".$text."%' OR
     `description` LIKE '%".$text."%' OR `spex` LIKE '%".$text."%'";

     $result=mysqli_query($conn,$sql);

    break;
    case 'color':
      # code...
      $text=$_GET['color'];
      $sql="SELECT * FROM `items` WHERE `name` LIKE '%".$text."%' OR
       `description` LIKE '%".$text."%' OR `spex` LIKE '%".$text."%'";
  
       $result=mysqli_query($conn,$sql);
  
      break;
   
      case 'color':
        # code...
        $text=$_GET['color'];
        $sql="SELECT * FROM `items` WHERE `name` LIKE '%".$text."%' OR
         `description` LIKE '%".$text."%' OR `spex` LIKE '%".$text."%'";
    
         $result=mysqli_query($conn,$sql);
    
        break;
   default:
   $sql1="SELECT * FROM `items` LIMIT 12";
   $result=mysqli_query($conn,$sql1);
    break;
  }
 }else{

  $sql1="SELECT * FROM `items` WHERE `status`='available' AND `featured`=1 LIMIT 12";
  $result=mysqli_query($conn,$sql1);
 }

 $sql2="SELECT * FROM `items` WHERE `status`='available' ORDER BY id desc LIMIT 12";
 $datalist=mysqli_query($conn,$sql2);
 
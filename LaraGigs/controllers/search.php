<?php
$result=array();
$message='';
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
   
   default:
    # code...
    break;
  }
 }
 //var_dump($result);
 $res_count=mysqli_num_rows($result);
 if($res_count<=0){
  $message='No Results found for: <b><em>'.$_POST['search_text'].'</em></b> <br>Below is some other items we have or <a href="search.php">Search Again</a>';
  $sql="SELECT * FROM `items` LIMIT 4";
    $result=mysqli_query($conn,$sql);
 }else{
  $message=$res_count.' Results found for: <b><em>'.$_POST['search_text'].'</em></b>';
 }
?>
<?php 
 include "conn.php";

 $h_a_id=$_SESSION['h_a_id'];
 $newPass=$_REQUEST['newPass'];
 $confirmPass=$_REQUEST['confirmPass'];

 if($confirmPass==$newPass){
    $sql="UPDATE tbl_hotel_admin SET h_a_password='$newPass' WHERE h_a_id ='$h_a_id'";
    $rs=$conn->query($sql);

    if ($rs>0) {
        // echo 200;
        $_SESSION['password_changed']=true;
        header('location:signout.php');
      exit();
   }else{
    echo $sql;
     exit();
   }
 }else{
  echo 201;
  exit();
 }
 
?>
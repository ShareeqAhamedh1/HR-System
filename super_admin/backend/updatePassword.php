<?php 
 include "../backend/conn.php";

 $u_id=$_SESSION['u_id'];
 $newPass=$_REQUEST['newPass'];
 $confirmPass=$_REQUEST['confirmPass'];

 if($confirmPass==$newPass){
    $sql="UPDATE tbl_user SET u_password='$newPass' WHERE u_id ='$u_id'";
    $rs=$conn->query($sql);

    if ($rs>0) {
        echo 200;
      exit();
   }else{
    echo $sql;
     exit();
   }
 }
 
?>
<?php 
include 'conn.php';
$email=$_REQUEST['email'];
$hotelpassword=$_REQUEST['hotelpassword'];

$sql="SELECT * FROM tbl_hotel_admin WHERE email='$email' AND h_a_password='$hotelpassword'";
$rs=$conn->query($sql);

if($rs->num_rows==1){
    $rowUser=$rs->fetch_assoc();
    if($rowUser['verify_status']==0){
        $_SESSION['not_verified']=true;
        header('location:../login.php');
        exit();
    }else if($rowUser['verify_status']==1){
       // $rowUser['h_a_id']=$_SESSION['h_a_id'];
        $_SESSION['h_a_id']=$rowUser['h_a_id'];
        $_SESSION['logged_in']=true;
        header('location:../index.php');
        echo 200;
        exit();
    }else if($rowUser['verify_status']==2){
        $_SESSION['verify_rejected']=true;
        header('location:../login.php');
        exit();
    }else{

    }
    
}else{
    $_SESSION['logged_in_failed']=true;
    header('location:../login.php');
    exit();
}
?>
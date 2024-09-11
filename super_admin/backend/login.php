<?php 
include '../../backend/conn.php';
$email=$_REQUEST['email'];
$hotelpassword=$_REQUEST['hotelpassword'];

$sql="SELECT * FROM tbl_hotel_super_admin WHERE h_s_a_name='$email' AND h_s_a_pass='$hotelpassword'";
$rs=$conn->query($sql);

if($rs->num_rows==1){
    $rowUser=$rs->fetch_assoc();
       // $rowUser['h_a_id']=$_SESSION['h_a_id'];
        $_SESSION['h_s_a_id']=$rowUser['h_s_a_id'];
        $_SESSION['logged_in']=true;
        header('location:../index.php');
        exit();
   
    
}else{
    $_SESSION['logged_in_failed']=true;
    header('location:../login.php');
    exit();
}
?>
<?php 
include '../../backend/conn.php';

$h_a_id=$_REQUEST['h_a_id'];
$status_code=$_REQUEST['status_code'];

$sql="UPDATE tbl_hotel_admin SET verify_status='$status_code' WHERE h_a_id='$h_a_id'";
$rs=$conn->query($sql);

if($rs>0){
    echo 200;
    exit();
}else{
    echo 300;
    exit();
}

?>
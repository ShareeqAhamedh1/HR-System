<?php 
include '../../backend/conn.php';

$h_id=$_REQUEST['h_id'];
$status=$_REQUEST['status'];

if($status=="yes"){
    $statusVal=2;
}else if($status=="no"){
    $statusVal=3;
}

$sql="UPDATE tbl_hotel SET publish_status='$statusVal' WHERE h_id='$h_id'";
$rs=$conn->query($sql);

if($rs>0){

    if($status=="yes"){
        echo 200;
        exit();
    }else if($status=="no"){
        echo 201;
        exit();
    }
    
    
}else{
    echo 300;
    exit();
}

?>
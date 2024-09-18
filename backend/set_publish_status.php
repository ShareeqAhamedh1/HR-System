<?php 
include 'conn.php';

$h_id=$_REQUEST['h_id'];
$publish_status=$_REQUEST['publish_status'];

$sql="UPDATE tbl_hotel SET publish_status='$publish_status' WHERE h_id='$h_id'";
$rs=$conn->query($sql);

if($rs>0){

    if($publish_status==1){
        echo 200;
        exit();
    }else if($publish_status==3){
        echo 201;
        exit();
    }
    
}else{
    echo 300;
    exit();
}

?>
<?php 
include "conn.php";

$h_id=$_REQUEST['h_id'];
$fac_id=$_REQUEST['fac_id'];
$r_id=$_REQUEST['r_id'];

// $icimage=$_REQUEST['icimage'];

$sqlSearch="SELECT * FROM tbl_room_available_fac WHERE r_id='$r_id' AND fac_id='$fac_id'";
$rsSearch=$conn->query($sqlSearch);

if($rsSearch->num_rows==0){
    $sql="INSERT INTO tbl_room_available_fac(r_id,h_id,fac_id) VALUES('$r_id','$h_id','$fac_id')";
    $rs=$conn->query($sql);
    
    if($rs>0){
        echo 200;
        exit();
    }else{
        echo $sql;
        exit();
    }
   
} else{

    echo 201;
    exit();



}



?>
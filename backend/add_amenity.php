<?php 
include "conn.php";

$hid=$_REQUEST['hid'];
// $aname=$_REQUEST['aname'];
$iconSelect=$_REQUEST['iconSelect'];

$sqlAminityCheck="SELECT * FROM tbl_ammunities WHERE a_ic_id='$iconSelect' AND h_id='$hid'";
$rsAminityCheck=$conn->query($sqlAminityCheck);

if($rsAminityCheck->num_rows==0){
    $sql="INSERT INTO tbl_ammunities(h_id,a_ic_id) VALUES('$hid','$iconSelect')";
    $rs=$conn->query($sql);

if($rs>0){
    echo 200;
    exit();
}else{
    echo $sql;
    exit();
}
}else{
    echo 300;
}



?>
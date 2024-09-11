<?php 
include "../../backend/conn.php";


$fname=$_REQUEST['fname'];
// $icimage=$_REQUEST['icimage'];

$sql="INSERT INTO tbl_room_facility(fac_name) VALUES('$fname')";
$rs=$conn->query($sql);

if($rs>0){
    echo 200;
    exit();
}else{
    echo $sql;
    exit();
}

?>
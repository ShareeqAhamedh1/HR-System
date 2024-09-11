<?php 
include "conn.php";

$h_a_id=$_REQUEST['h_id'];
$iname=$_REQUEST['iname'];
// $icimage=$_REQUEST['icimage'];

$sql="INSERT INTO tbl_icon(h_a_id,ic_name) VALUES('$h_a_id','$iname')";
$rs=$conn->query($sql);

if($rs>0){
    echo 200;
    exit();
}else{
    echo $sql;
    exit();
}

?>
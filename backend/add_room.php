<?php 
include "conn.php";

$hid=$_REQUEST['hid'];
$rsize=$_REQUEST['rsize'];
$rabout=$_REQUEST['rabout'];
$rtype=$_REQUEST['rtype'];
$btype=$_REQUEST['btype'];
$guest=$_REQUEST['guest'];

$sql="INSERT INTO tbl_room(h_id,r_size,about,r_type,r_b_type,no_of_guest) VALUES('$hid','$rsize','$rabout','$rtype','$btype','$guest')";
$rs=$conn->query($sql);

if($rs>0){
    echo 200;
    exit();
}else{
    echo $sql;
    exit();
}

?>
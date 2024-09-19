<?php 
include 'conn.php';

$h_a_id=$_SESSION['h_a_id'];
$tic_id=$_REQUEST['tic_id'];

$sql="UPDATE tbl_tickets SET status=2 WHERE tic_id='$tic_id'";
$rs=$conn->query($sql);

if($rs>0){

    header('Location: ../raise_ticket.php');
    exit();
    
}else{
    echo $sql;
    exit();
}

?>
<?php

include "../../backend/conn.php";

    $tic_id=$_REQUEST['tic_id'];

    $status=$_REQUEST['status'];

    $sql="UPDATE tbl_tickets SET status='$status' WHERE tic_id='$tic_id'";
    $rs=$conn->query($sql);


    if($rs>0){
        echo 200;
        exit();
    }else{
        echo 300;
        exit();
    }
?>
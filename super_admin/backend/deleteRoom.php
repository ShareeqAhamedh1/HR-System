<?php

    include "../backend/conn.php";

    $r_id=$_REQUEST['r_id'];

    $sql="DELETE FROM tbl_room WHERE r_id='$r_id'";
    $rs=$conn->query($sql);

    if($rs>0){
        echo 200;
        exit();
    }else{
        echo $sql;
        exit();
    }
    
?>
<?php

    include "conn.php";

    $r_id=$_REQUEST['r_id'];
    $h_id=$_REQUEST['h_id'];

    $sqlSearch="SELECT * FROM tbl_room_available_fac WHERE r_id='$r_id' AND h_id='$h_id'";
    $rsSearch=$conn->query($sqlSearch);
    if($rsSearch->num_rows>0){
        echo 300;
        exit();

    }else{
        $sql="DELETE FROM tbl_room WHERE r_id='$r_id'";
        $rs=$conn->query($sql);
    
        if($rs>0){
            echo 200;
            exit();
        }else{
            echo $sql;
            exit();
        }
       
    }

  
    
?>
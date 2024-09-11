<?php

    include "conn.php";

    $fac_id=$_REQUEST['fac_id'];

    // $sqlSearch="SELECT * FROM tbl_ammunities WHERE a_ic_id='$ic_id'";
    // $rsSearch=$conn->query($sqlSearch);

    // if($rsSearch->num_rows>0){
    //     echo 400;
    //     exit();
    // }else{

    $sql="DELETE FROM tbl_room_available_fac WHERE fac_id='$fac_id'";
    $rs=$conn->query($sql);

    if($rs>0){
        echo 200;
        exit();
    }else{
        echo $sql;
        exit();
    }
    // }
?>
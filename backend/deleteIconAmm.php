<?php

    include "conn.php";

    $ic_id=$_REQUEST['ic_id'];
    $h_id=$_REQUEST['h_id'];

    $sql="DELETE FROM tbl_ammunities WHERE a_ic_id='$ic_id' AND h_id='$h_id'";
    $rs=$conn->query($sql);

    if($rs>0){
        echo 200;
        exit();
    }else{
        echo $sql;
        exit();
    }

?>
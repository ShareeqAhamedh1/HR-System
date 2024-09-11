<?php

    include "../backend/conn.php";

    $ic_id=$_REQUEST['ic_id'];

    $sql="DELETE FROM tbl_ammunities WHERE a_ic_id='$ic_id'";
    $rs=$conn->query($sql);

    if($rs>0){
        echo 200;
        exit();
    }else{
        echo $sql;
        exit();
    }

?>
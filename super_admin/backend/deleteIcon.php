<?php

    include "../../backend/conn.php";

    $ic_id=$_REQUEST['ic_id'];

    $sqlSearch="SELECT * FROM tbl_ammunities WHERE a_ic_id='$ic_id'";
    $rsSearch=$conn->query($sqlSearch);

   


    if($rsSearch->num_rows>0){
        echo 400;
        exit();
    }else{

        $image=getDataBack($conn,'tbl_icon','ic_id',$ic_id,'ic_img');
        unlink('../../assets/img/icons/'.$image);

    $sql="DELETE FROM tbl_icon WHERE ic_id='$ic_id'";
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
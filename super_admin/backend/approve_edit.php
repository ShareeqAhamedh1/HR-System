<?php 
include '../../backend/conn.php';

$h_e_id=$_REQUEST['h_e_id'];
$status_code=$_REQUEST['status_code'];

$sql="UPDATE tbl_hotel_edit SET edit_status='$status_code' WHERE h_e_id='$h_e_id'";
$rs=$conn->query($sql);

$sqlSelect="SELECT * FROM tbl_hotel_edit WHERE h_e_id='$h_e_id' AND edit_status=1";
$rsSelect=$conn->query($sqlSelect);

$rowSelect=$rsSelect->fetch_assoc();

$h_id=$rowSelect['h_id'];
$e_name=$rowSelect['h_name'];
$e_address=$rowSelect['h_address'];
$e_desc=$rowSelect['h_short_desc'];
$e_thumb_img=$rowSelect['h_thumb_img'];
$e_small_img=$rowSelect['h_small_thumb_img'];
$e_about=$rowSelect['h_about'];

$imageSmall=getDataBack($conn,'tbl_hotel','h_id',$h_id,'h_small_thumb_img');
        unlink('../../assets/img/small_img/'.$imageSmall);

        $imageThumb=getDataBack($conn,'tbl_hotel','h_id',$h_id,'h_thumb_img');
        unlink('../../assets/img/hotel_thumb/'.$imageThumb);


$sqlUpdate="UPDATE tbl_hotel SET 
            h_name='$e_name',
            h_address='$e_address',
            h_short_desc='$e_desc',
            h_thumb_img='$e_thumb_img',
            h_small_thumb_img='$e_small_img',
            h_about='$e_about' WHERE h_id='$h_id'";

$rsUpdate=$conn->query($sqlUpdate);


if($status_code==1){
    if($rs>0 && $rsUpdate>0){
        echo 200;
        exit();
    }else{
        echo 300;
        exit();
    }
    
}else{
    echo 201;
    exit();
}



?>
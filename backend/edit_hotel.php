<?php
include "conn.php";

$hname=$_REQUEST['hname'];
$hdesc=$_REQUEST['hdesc'];
$habout=$_REQUEST['habout'];
$haddress=$_REQUEST['haddress'];
$hid=$_REQUEST['hid'];
$h_a_id=$_SESSION['h_a_id'];


$edit_status=0;
$sqlCheck="SELECT * FROM tbl_hotel_edit WHERE h_id='$hid' AND edit_status=0";
$rsCheck=$conn->query($sqlCheck);

if($rsCheck->num_rows == 1){
        echo 201;
        exit();
}else{

    $sql = "INSERT INTO tbl_hotel_edit(h_name,h_address,h_short_desc,h_about,h_id,h_a_id,edit_status) 
    VALUES ('$hname','$haddress','$hdesc','$habout','$hid','$h_a_id','$edit_status')";

    $rs=$conn->query($sql);

    
$last_id = $conn->insert_id;


$htimgTemp = $_FILES['htimg']['tmp_name'];
$htsimgTemp = $_FILES['htsimg']['tmp_name'];

$allowedList=array('jpg','jpeg','png','webp');
$errorLocation= '../hoteldetails.php';


if($htimgTemp != ""){

    $htimg=$_REQUEST['htimg'];

    $filePaththumb='../assets/img/hotel_thumb/';
    uploadImage('htimg',$filePaththumb,$allowedList,$errorLocation);
    $htimg = $GLOBALS['fileNameNew'];

    $sql = "UPDATE tbl_hotel_edit SET h_thumb_img='$htimg' WHERE h_e_id='$last_id'";
    $rs=$conn->query($sql);
}

if($htsimgTemp != ""){

    $htsimg=$_REQUEST['htsimg'];

    $filePaththumbsmall='../assets/img/small_img/';
    uploadImage('htsimg',$filePaththumbsmall,$allowedList,$errorLocation);
    $htsimg = $GLOBALS['fileNameNew'];

    $sql = "UPDATE tbl_hotel_edit SET h_small_thumb_img='$htsimg' WHERE h_e_id='$last_id'";
    $rs=$conn->query($sql);
}

    if($rs>0){
        echo 200;
        exit();
    }else{
        echo 500;
        exit();
    }

}













?>
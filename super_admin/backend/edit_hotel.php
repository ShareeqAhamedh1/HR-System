<?php
include "../backend/conn.php";

$hname=$_REQUEST['hname'];
$hdesc=$_REQUEST['hdesc'];
// $htimg=$_REQUEST['htimg'];
// $htsimg=$_REQUEST['htsimg'];
$habout=$_REQUEST['habout'];
$haddress=$_REQUEST['haddress'];
$hid=$_REQUEST['hid'];

$filePaththumb='../assets/img/hotel_thumb/';
$filePaththumbsmall='../assets/img/small_img/';
$allowedList=array('jpg','jpeg','png','webp');
$errorLocation= '../hoteldetails.php';

// uploadImage('htimg',$filePaththumb,$allowedList,$errorLocation);
// $htimg = $GLOBALS['fileNameNew'];
// uploadImage('htsimg',$filePaththumbsmall,$allowedList,$errorLocation);
// $htsimg = $GLOBALS['fileNameNew'];

$sql = "UPDATE tbl_hotel SET 
        h_name = '$hname',
        h_address = '$haddress',
        h_short_desc = '$hdesc',
        -- h_thumb_img = '$htimg',
        -- h_small_thumb_img = '$htsimg',
        h_about = '$habout' 
        WHERE h_id = '$hid'";

$rs=$conn->query($sql);

if($rs>0){
    echo 200;
    exit();
}else{
    echo 500;
    exit();
}

?>
<?php 
include "../../backend/conn.php";

$iname=$_REQUEST['iname'];
// $icimage=$_REQUEST['icimage'];

$icimage = $_FILES['icimage']['tmp_name'];
$allowedList=array('jpg','jpeg','png','webp');
$errorLocation= '../hoteldetails.php';

if($icimage != ""){

    $icimageOrg=$_REQUEST['icimage'];

    $filePaththumb='../../assets/img/icons/';
    uploadImage('icimage',$filePaththumb,$allowedList,$errorLocation);
    $icimageOrg = $GLOBALS['fileNameNew'];

    $sql="INSERT INTO tbl_icon(ic_name,ic_img) VALUES('$iname','$icimageOrg')";
    $rs=$conn->query($sql);

    // $sql = "UPDATE tbl_hotel_edit SET h_thumb_img='$icimageOrg' WHERE h_e_id='$last_id'";
    // $rs=$conn->query($sql);
}



if($rs>0){
    echo 200;
    exit();
}else{
    echo $sql;
    exit();
}

?>
<?php
  include '../backend/conn.php';

  $hname=$_REQUEST['hname'];
  $haddress=$_REQUEST['haddress'];
  $hdesc=$_REQUEST['hdesc'];
  $habout=$_REQUEST['habout'];
//   $htimg=$_REQUEST['htimg'];
//   $htsimg=$_REQUEST['htsimg'];

$h_a_id=$_SESSION['h_a_id'];

$filePaththumb='../assets/img/hotel_thumb/';
$filePaththumbsmall='../assets/img/small_img/';
$allowedList=array('jpg','jpeg','png','webp');
$errorLocation= '../hoteldetails.php';

uploadImage('htimg',$filePaththumb,$allowedList,$errorLocation);
$htimg = $GLOBALS['fileNameNew'];
uploadImage('htsimg',$filePaththumbsmall,$allowedList,$errorLocation);
$htsimg = $GLOBALS['fileNameNew'];

$sql="INSERT INTO tbl_hotel(h_name,h_address,h_short_desc,h_thumb_img,h_small_thumb_img,h_about,h_a_id) VALUES ('$hname','$haddress','$hdesc','$htimg','$htsimg','$habout','$h_a_id')";
$rs=$conn->query($sql);


if($rs > 0){
  header('location:../hoteldetails.php');
  exit();
}else{
  header('location:../hoteldetails.php');
  exit();
}

 ?>
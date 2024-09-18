<?php
error_reporting(0);
date_default_timezone_set('Asia/Dubai');

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_hotelmanagement";
// $dbname_02 = "db_location";


// $servername = "localhost";
// $username = "posfkpop_db_frieght_admin";
// $password = "X,]YR&gniDfg";
// $dbname = "posfkpop_db_frieght";
//
// $username1 = "posfkpop_world_admin";
// $password1 = "%o;g{b(wT(v3";
// $dbname1 = "posfkpop_world";

$current_date_time = date('Y/m/d H:i:s');

$conn = new mysqli($servername,$username,$password,$dbname);
// $conn_loc = new mysqli($servername,$username1,$password1,$dbname1);
// $conn_loc = new mysqli($servername,$username,$password,$dbname_02);

if(isset($_SESSION['h_a_id'])){
  $h_a_id = $_SESSION['h_a_id'];
}


if(isset($_SESSION['h_s_a_id'])){
  $h_s_a_id = $_SESSION['h_s_a_id'];
}
// function getUserProgressCount($conn,$u_id,$qst){
//   $sql = "SELECT * FROM tbl_quote WHERE u_id='$u_id' AND q_status='$qst'";
//   $rs=$conn->query($sql);

//   return $rs->num_rows;
// }



function uploadImage($fileName,$filePath,$allowedList,$errorLocation){

  $img = $_FILES[$fileName];
  $imgName =$_FILES[$fileName]['name'];
  $imgTempName = $_FILES[$fileName]['tmp_name'];
  $imgSize = $_FILES[$fileName]['size'];
  $imgError= $_FILES[$fileName]['error'];

  $fileExt = explode(".",$imgName);
  $fileActualExt = strtolower(end($fileExt));

  $allowed = $allowedList;

  if(in_array($fileActualExt, $allowed)){
    if($imgError == 0){
      $GLOBALS['fileNameNew']='hotel'.uniqid('',true).".".$fileActualExt;
        $fileDestination = $filePath.$GLOBALS['fileNameNew'];

        $resultsImage = move_uploaded_file($imgTempName,$fileDestination);

      }
      else{
        header('location:'.$errorLocation.'?imgerror');
        exit();
      }
  }
  else{
    header('location:'.$errorLocation.'?extensionError&'.$fileActualExt);
    exit();
  }
}

function getDataBack($conn,$table,$col_id,$id,$coulmn){
  $sql = "SELECT * FROM $table WHERE $col_id = '$id'";
  $rs = $conn->query($sql);

  if ($rs->num_rows > 0) {
    $row = $rs->fetch_assoc();

    return $row[$coulmn];
  }
}

?>

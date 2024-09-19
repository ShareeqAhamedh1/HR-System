<?php 
include 'conn.php';

$h_a_id=$_REQUEST['h_a_id'];
$subject=$_REQUEST['subject'];
$description=$_REQUEST['description'];
$priority=$_REQUEST['priority'];
// $raiseFile=$_REQUEST['raiseFile'];

$filePath='../assets/img/hotel_admins/tickets/';

$allowedList=array('jpg','jpeg','png','webp');
$errorLocation= '../raise_ticket.php';

uploadImage('raiseFile',$filePath,$allowedList,$errorLocation);
$raiseFile = $GLOBALS['fileNameNew'];



$sql="INSERT INTO tbl_tickets(subject,description,priority,raiseFile,h_a_id,status) 
VALUES('$subject','$description','$priority','$raiseFile','$h_a_id',0)";

$rs=$conn->query($sql);

if($rs>0){
    $_SESSION['ticket_added']=true;
    header('location:../raise_ticket.php');
    exit();
}else{
    $_SESSION['ticket_added_failed']=true;
    header('location:../raise_ticket.php');
    exit();
}

?>
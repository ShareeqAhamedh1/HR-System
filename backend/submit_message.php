<?php

include "conn.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the message input
    $h_a_id = $_POST['h_a_id'];
    $tic_id = $_POST['tic_id'];
    $message = $_POST['message'];

    // Handle photo upload (if any)
    if (isset($_FILES['photo']) && $_FILES['photo']['error'] == 0) {

        $filePathPhoto='../assets/img/messages/photos/';
        $allowedList=array('jpg','jpeg','png','webp');
        $errorLocation= 'Location: ../ticketConvo.php?tic_id=' . $tic_id . '&h_a_id=' . $h_a_id;

        uploadImage('photo',$filePathPhoto,$allowedList,$errorLocation);
        $photoFileName = $GLOBALS['fileNameNew'];
    }

    // Handle attachment upload (if any)
    if (isset($_FILES['attachment']) && $_FILES['attachment']['error'] == 0) {
        $filePathDoc='../assets/img/messages/doc/';
        $allowedList = array('jpg', 'jpeg', 'png', 'webp', 'pdf', 'doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'txt', 'csv');
        $errorLocation= 'Location: ../ticketConvo.php?tic_id=' . $tic_id . '&h_a_id=' . $h_a_id;

        uploadImage('attachment',$filePathDoc,$allowedList,$errorLocation);
        $attachmentFileName = $GLOBALS['fileNameNew'];
       
    }

    // Insert the message and file paths into the database
    $sql = "INSERT INTO tbl_ticket_chat (tic_desc, tic_img, tic_file, tic_id, h_a_id, h_s_a_id, tic_msg_sender) 
            VALUES ('$message', '$photoFileName', '$attachmentFileName', '$tic_id', '$h_a_id', '$h_s_a_id', 2)";
    $rs = $conn->query($sql);

  

    // Redirect based on success or failure
    if ($rs && $rsStatus) {
        $_SESSION['message_sent'] = true;
        header('Location: ../ticketConvo.php?tic_id=' . $tic_id . '&h_a_id=' . $h_a_id);
        exit();
    } else {
        $_SESSION['message_failed'] = true;
        header('Location: ../ticketConvo.php?tic_id=' . $tic_id . '&h_a_id=' . $h_a_id);
        exit();
    }
}

?>

<?php 
include "conn.php";

// Get POST variables
$h_a_id = $_POST['h_a_id'];
$name = $_POST['name'];
$email = $_POST['email'];
$haddress = $_POST['haddress'];
$phoneno = $_POST['phoneno'];
$nic = $_POST['nic'];
$dob = $_POST['dob'];

// Update profile information
$updateProfileQuery = "UPDATE tbl_hotel_admin SET 
    h_a_name='$name', 
    email='$email', 
    home_address='$haddress', 
    phone_no='$phoneno', 
    h_nic_no='$nic', 
    owner_dob='$dob' 
    WHERE h_a_id='$h_a_id'";

if ($conn->query($updateProfileQuery) === TRUE) {
    // Handle file uploads if any
    // if (isset($_FILES['icimage'])) {
    //     $icimages = $_FILES['icimage'];
    //     $allowedList = array('jpg', 'jpeg', 'png', 'webp');
    //     $filePaththumb = '../../assets/img/rooms/';
    //     $uploadErrors = [];

    //     foreach ($icimages['tmp_name'] as $key => $tmp_name) {
    //         $fileName = $icimages['name'][$key];
    //         $fileTmp = $icimages['tmp_name'][$key];
    //         $fileError = $icimages['error'][$key];
    //         $fileSize = $icimages['size'][$key];
    //         $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    //         if (!in_array($fileExt, $allowedList)) {
    //             $uploadErrors[] = "File $fileName is not allowed.";
    //             continue;
    //         }

    //         $fileNameNew = uniqid('', true) . '.' . $fileExt;
    //         $fileDest = $filePaththumb . $fileNameNew;

    //         if (move_uploaded_file($fileTmp, $fileDest)) {
    //             $sql = "INSERT INTO tbl_icon (ic_name, ic_img) VALUES ('$fileName', '$fileNameNew')";
    //             if (!$conn->query($sql)) {
    //                 $uploadErrors[] = "Failed to insert $fileName into database.";
    //             }
    //         } else {
    //             $uploadErrors[] = "Failed to upload $fileName.";
    //         }
    //     }

    //     if (!empty($uploadErrors)) {
    //         echo implode(', ', $uploadErrors);
    //         exit();
    //     }
    // }

    echo 200; // Success
} else {
    echo "Error updating profile: " . $conn->error;
}

exit();
?>

<?php 
include "conn.php";

// Get POST variables
$h_a_id = $_REQUEST['h_a_id'];
$h_id = $_REQUEST['h_id'];

// Check if files were uploaded
if (isset($_FILES['icimage'])) {
    $icimages = $_FILES['icimage'];

    // Allowed file types
    $allowedList = array('jpg', 'jpeg', 'png', 'webp');
    $filePaththumb = '../../assets/img/rooms/'; // Directory to store uploaded images

    $uploadErrors = [];

    // Process each file
    foreach ($icimages['tmp_name'] as $key => $tmp_name) {
        $fileName = $icimages['name'][$key];
        $fileTmp = $icimages['tmp_name'][$key];
        $fileError = $icimages['error'][$key];
        $fileSize = $icimages['size'][$key];

        // Extract file extension
        $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        // Validate file type
        if (!in_array($fileExt, $allowedList)) {
            $uploadErrors[] = "File $fileName is not allowed.";
            continue;
        }

        // Generate a new file name
        $fileNameNew = uniqid('', true) . '.' . $fileExt;
        $fileDest = $filePaththumb . $fileNameNew;

        // Move uploaded file to destination directory
        if (move_uploaded_file($fileTmp, $fileDest)) {
            // Insert file details into the database
            $sql = "INSERT INTO tbl_hotel_image (h_id, i_name) VALUES ('$h_id', '$fileNameNew')";
            $rs = $conn->query($sql);

            if (!$rs) {
                $uploadErrors[] = "Failed to insert $fileName into database.";
            }
        } else {
            $uploadErrors[] = "Failed to upload $fileName.";
        }
    }

    if (empty($uploadErrors)) {
        echo 200; // Success
    } else {
        echo implode(', ', $uploadErrors); // Display errors if any
    }
} else {
    echo "No files were uploaded.";
}

exit();
?>

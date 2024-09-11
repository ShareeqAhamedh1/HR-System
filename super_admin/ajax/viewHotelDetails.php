<?php 
include "../../backend/conn.php";

$h_id = $_REQUEST['h_id'];

$sqlHotel = "SELECT * FROM tbl_hotel_edit WHERE h_id='$h_id' AND edit_status=0";
$rsHotel = $conn->query($sqlHotel);
$rowsHotel = $rsHotel->fetch_assoc();
?>

<div class="row" id="user-profile">
    <div class="col-lg-12">
        <div class="modal-header modal-header-primary">
            <h3>
                <i class="fa fa-pencil m-r-5"></i>
                <?= $rowsHotel['h_name'] ?> Details
            </h3>
        </div>
        <div class="card custom-card">
            <div class="card-body">
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="hname">Hotel Name</label>
                        <input type="text" name="hname" id="hname" class="form-control" placeholder="Enter hotel name" value="<?= $rowsHotel['h_name'] ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label for="haddress">Hotel Address</label>
                        <input type="text" name="haddress" id="haddress" class="form-control" placeholder="Enter hotel address" value="<?= $rowsHotel['h_address'] ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label for="hdesc">Description</label>
                        <input type="text" name="hdesc" id="hdesc" class="form-control" placeholder="Enter hotel description" value="<?= $rowsHotel['h_short_desc'] ?>" readonly>
                    </div>

                    <!-- Images side by side -->
                    <div class="d-flex gap-3 mb-3">
                        <div class="form-group flex-fill">
                            <img src="../assets/img/hotel_thumb/<?= $rowsHotel['h_thumb_img'] ?>" id="dobImage" class="img-fluid" alt="Thumbnail image" style="max-width: 50px; height: auto; border: 1px solid #ddd; padding: 5px;">
                        </div>

                        <div class="form-group flex-fill">
                            <img src="../assets/img/small_img/<?= $rowsHotel['h_small_thumb_img'] ?>" id="nicImage" class="img-fluid" alt="Small Thumbnail Image" style="max-width: 50px; height: auto; border: 1px solid #ddd; padding: 5px;">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="habout">About</label>
                        <input type="text" name="habout" id="habout" class="form-control" placeholder="Enter hotel about" value="<?= $rowsHotel['h_about'] ?>" readonly>
                    </div>

                    <div class="d-flex btn-list mt-3">
                        <a class="btn btn-icon btn-success btn-wave waves-effect waves-light me-2"
                           onclick="approveEdit(<?= $rowsHotel['h_e_id'] ?>,1)" 
                           data-bs-toggle="tooltip" 
                           data-bs-original-title="Approve">
                            <i class="ri-check-line lh-1"></i>
                        </a>
                        <a class="btn btn-icon btn-danger btn-wave waves-effect waves-light"
                           onclick="approveEdit(<?= $rowsHotel['h_e_id'] ?>,2)" 
                           data-bs-toggle="tooltip" 
                           data-bs-original-title="Reject">
                            <i class="ri-close-line lh-1"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

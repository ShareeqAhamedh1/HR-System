<?php 
include "../../backend/conn.php";

$h_id=$_REQUEST['h_id'];


if(isset($_REQUEST['h_a_id'])){
	$hotel_admin_id=$_REQUEST['h_a_id'];
}else{

$sqlHotel="SELECT * FROM tbl_hotel WHERE h_id='$h_id'";
$rsHotel=$conn->query($sqlHotel);

$rowsHotel=$rsHotel->fetch_assoc();
$hotel_admin_id=$rowsHotel['h_a_id'];

}




$sqlHotelAdmin="SELECT * FROM tbl_hotel_admin WHERE h_a_id='$hotel_admin_id'";
$rsHotelAdmin=$conn->query($sqlHotelAdmin);

$rowHotelAdmin=$rsHotelAdmin->fetch_assoc();

?>
							
				<div class="row" id="user-profile">
					<div class="col-lg-12">
								<div class="modal-header modal-header-primary">
									<h3><i class="fa fa-pencil m-r-5"></i><?= $rowHotelAdmin['h_a_name']?> Details</h3>
									<!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> -->
								</div>
								<div class="card custom-card">
									<div class="card-body">
										<form  method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="hname">Name</label>
                                                <input type="text" name="hname" id="hname" class="form-control" placeholder="Enter hotel name" value="<?= $rowHotelAdmin['h_a_name'] ?>" readonly>
                                            </div>

											<div class="form-group">
												<label for="haddress">Email</label>
												<input type="text" name="haddress" id="haddress" class="form-control" placeholder="Enter hotel address" value="<?= $rowHotelAdmin['email']?>" readonly>
											</div>

											<div class="form-group">
												<label for="hdesc">Phone No</label>
                                                <input type="text" name="haddress" id="haddress" class="form-control" placeholder="Enter hotel address" value="<?= $rowHotelAdmin['phone_no']?>" readonly>
												</div>
                                            <div class="form-group">
												<label for="haddress">Date Of Birth</label>
												<input type="text" name="haddress" id="haddress" class="form-control" placeholder="Enter hotel address" value="<?= $rowHotelAdmin['owner_dob']?>" readonly>
											</div>
                                            <div class="form-group">
												<label for="haddress">NIC NO</label>
												<input type="text" name="haddress" id="haddress" class="form-control" placeholder="Enter hotel address" value="<?= $rowHotelAdmin['h_nic_no']?>" readonly>
											</div>
                                            <div class="form-group">
												<label for="haddress">Home Address</label>
												<input type="text" name="haddress" id="haddress" class="form-control" placeholder="Enter hotel address" value="<?= $rowHotelAdmin['home_address']?>" readonly>
											</div>

                                            <?php 
                                                if($rowHotelAdmin['role']==0){
                                                    $role="Editor";
                                                }else if($rowHotelAdmin['role']==1){
                                                    $role="Admin";
                                                }else{
                                                    $role="";
                                                }
                                            ?>

                                            <div class="form-group">
												<label for="haddress">Role</label>
												<input type="text" name="haddress" id="haddress" class="form-control" placeholder="Enter hotel address" value="<?= $role ?>" readonly>
											</div>

											<!-- <div class="form-group">
												<label for="htimg">Hotel Thumbnail Image</label>
												<input type="file" name="htimg" id="htimg" class="form-control" placeholder="Enter image URL" >
											</div>

											<div class="form-group">
												<label for="htsimg">Hotel Thumbnail Small Image</label>
												<input type="file" name="htsimg" id="htsimg" class="form-control" placeholder="Enter small image URL" >
											</div> -->
											
										</form>

									</div>
								</div>
						</div>
				</div>
<?php 
include "../backend/conn.php";

$h_id=$_REQUEST['h_id'];

$sqlHotel="SELECT * FROM tbl_hotel WHERE h_id='$h_id'";
$rsHotel=$conn->query($sqlHotel);
$rowsHotel=$rsHotel->fetch_assoc();

?>
							
				<div class="row" id="user-profile">
					<div class="col-lg-12">
								<div class="modal-header modal-header-primary">
									<h3><i class="fa fa-pencil m-r-5"></i> Edit Hotel Details</h3>
									<!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> -->
								</div>
								<div class="card custom-card">
									<div class="card-body">
										<form  method="post" enctype="multipart/form-data">
											<div class="form-group">
												<label for="hname">Hotel Name</label>
												<input type="text" name="hname" id="hname" class="form-control" placeholder="Enter hotel name" value="<?= $rowsHotel['h_name']?>" required>
												<input type="hidden" name="h_id" id="h_id" class="form-control" value="<?= $rowsHotel['h_id']?>" >
											</div>

											<div class="form-group">
												<label for="haddress">Hotel Address</label>
												<input type="text" name="haddress" id="haddress" class="form-control" placeholder="Enter hotel address" value="<?= $rowsHotel['h_address']?>" required>
											</div>

											<div class="form-group">
												<label for="hdesc">Hotel Description</label>
												<textarea name="hdesc" id="hdesc" class="form-control" rows="2" placeholder="Enter hotel description" value="<?= $rowsHotel['h_short_desc']?>" required></textarea>
											</div>

											<div class="form-group">
												<label for="htimg">Hotel Thumbnail Image</label>
												<input type="file" name="htimg" id="htimg" class="form-control" placeholder="Enter image URL" >
											</div>

											<div class="form-group">
												<label for="htsimg">Hotel Thumbnail Small Image</label>
												<input type="file" name="htsimg" id="htsimg" class="form-control" placeholder="Enter small image URL" >
											</div>
											<div class="form-group">
												<label for="habout">About Hotel</label>
												<textarea name="habout" id="habout" class="form-control" rows="3" placeholder="Enter hotel description" value="<?= $rowsHotel['h_about']?>" required></textarea>
											</div>

											<button type="button" onclick="editHotel()" class="btn btn-primary">update</button>
										</form>

									</div>
								</div>
						</div>
				</div>
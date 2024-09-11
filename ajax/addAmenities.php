<?php 
include "../backend/conn.php";
$h_a_id=$_SESSION['h_a_id'];
$h_id=$_REQUEST['h_id'];
?>

<div class="row" id="user-profile">
					<div class="col-lg-12">
								<div class="modal-header modal-header-primary">
									<h3><i class="fa fa-pencil m-r-5"></i> Add Amenities</h3>
									<!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> -->
								</div>
								<div class="card custom-card">
									<div class="card-body">
										<form  method="post" enctype="multipart/form-data">
											<div class="form-group">
											
												<input type="hidden" name="h_id" id="h_id" class="form-control" value="<?= $h_id ?>" >
											</div>

											<div class="form-group">
											<label for="iconSelect">Icon</label>
											<select name="iconSelect" id="iconSelect" class="form-control">
													<?php
													$sqlIcon="SELECT * FROM tbl_icon";
													$rsIcon=$conn->query($sqlIcon);

													if($rsIcon->num_rows>0){
														while($rowsIcon=$rsIcon->fetch_assoc()){

															?>
															<option value="<?= $rowsIcon['ic_id'] ?>"><?= $rowsIcon['ic_name'] ?></option>
															<?php
														}
													 } else {
														// Display a message if no icons are found
														echo "<option value=''>No icons available</option>";
													}
													?>
												</Select>
												<!-- <input type="text" name="aname" id="aname" class="form-control" placeholder="Enter Amenity Name" value="" required> -->
												
											</div>
											
											<button type="button" onclick="addAmenity()" class="btn btn-primary">Add</button>
										</form>

									</div>
								</div>
						</div>
				</div>
<?php 
include "../backend/conn.php";

$h_a_id=$_SESSION['h_a_id'];
$r_id=$_REQUEST['r_id'];
$h_id=$_REQUEST['h_id'];
?>

<div class="row" id="user-profile">
					<div class="col-lg-12">
								<div class="modal-header modal-header-primary">
									<h3><i class="fa fa-pencil m-r-5"></i> Add Facilities</h3>
									<!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> -->
								</div>
								<div class="card custom-card">
									<div class="card-body">
										<form  method="post" enctype="multipart/form-data">
											<div class="form-group">
												<?php 
													$sqlFac="SELECT * FROM tbl_room_facility";
													$rsFac=$conn->query($sqlFac);

													
												?>
												<label for="fac_id">Facility Name</label>
												<select name="fac_id" id="fac_id" class="form-control" required><?php 
													if($rsFac->num_rows>0){
														while($rowsFac=$rsFac->fetch_assoc()){
															?> 

														<option value="<?= $rowsFac['fac_id'] ?>"><?= $rowsFac['fac_name'] ?></option>
															<?php
														}	
													}
													?>

													<!-- Add more options as needed -->
												</select>
												
												<input type="hidden" name="h_id" id="h_id" class="form-control" value="<?= $h_id ?>" >
												<input type="hidden" name="r_id" id="r_id" class="form-control" value="<?= $r_id ?>" >
											</div>

										
											<button type="button" onclick="addFacility()" class="btn btn-primary">Add</button>
										</form>

									</div>
								</div>
						</div>
				</div>
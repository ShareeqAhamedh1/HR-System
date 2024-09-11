<?php 
include "../../backend/conn.php";

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
												<label for="hname">Facility Name</label>
												<input type="text" name="fname" id="fname" class="form-control" placeholder="Enter icon name" value="" required>
											
											</div>

										
											<button type="button" onclick="addFacility()" class="btn btn-primary">Add</button>
										</form>

									</div>
								</div>
						</div>
				</div>
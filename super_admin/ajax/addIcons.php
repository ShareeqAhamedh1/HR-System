<?php 
include "../../backend/conn.php";

?>

<div class="row" id="user-profile">
					<div class="col-lg-12">
								<div class="modal-header modal-header-primary">
									<h3><i class="fa fa-pencil m-r-5"></i> Add Icons</h3>
									<!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> -->
								</div>
								<div class="card custom-card">
									<div class="card-body">
										<form  method="post" enctype="multipart/form-data">
											<div class="form-group">
												<label for="hname">Icon Name</label>
												<input type="text" name="iname" id="iname" class="form-control" placeholder="Enter icon name" value="" required>
												
											</div>

											<div class="form-group">
												<label for="haddress">Icon Image</label>
												<input type="file" name="icimage" id="icimage" class="form-control" placeholder="Add Image" value="" required></input>
											</div>
											<button type="button" onclick="addIcon()" class="btn btn-primary">Add</button>
										</form>

									</div>
								</div>
						</div>
				</div>
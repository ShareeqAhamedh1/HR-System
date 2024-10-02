<?php include("layout/header.php"); 
$h_a_id=$_SESSION['h_a_id'];
?>
		<!--APP-CONTENT START-->
		<div class="main-content app-content">

		<?php 
			$sql="SELECT * FROM tbl_hotel_admin WHERE h_a_id='$h_a_id'";
			$rs=$conn->query($sql);

			if($rs->num_rows==1){
				$rows=$rs->fetch_assoc();
				?> 
				
			
			<div class="container-fluid">

				<!-- Page Header -->
				<div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
				    <div class="">
				        <h1 class="page-title fw-semibold fs-20 mb-0"> Edit Profile</h1>
				        <div class="">
				            <nav>
				                <ol class="breadcrumb mb-0">
				                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
				                    <li class="breadcrumb-item active" aria-current="page"> Edit Profile</li>
				                </ol>
				            </nav>
				        </div>
				    </div>
				    
				</div>
				<!-- Page Header Close -->


				<!-- ROW-1 OPEN -->
				<div class="row">
					<div class="col-xl-4 col-md-12 col-sm-12">
						<div class="card custom-card edit-password-section">
							<div class="card-header">
								<div class="card-title">Edit Password</div>
							</div>
							<div class="card-body">
								<!-- <div class="d-flex mb-3">
									<img alt="User Avatar" class="rounded-circle avatar-lg avatar me-2" src="assets/images/faces/8.jpg">
									<div class="ms-auto mt-xl-2 mt-lg-0 me-lg-2">
										<a href="editprofile.html" class="btn btn-primary btn-sm mt-1 mb-1"><i class="fe fe-camera me-1 float-start mt-1"></i>Edit profile</a>
										<a href="javascript:void(0);" class="btn btn-danger btn-sm mt-1 mb-1"><i class="fe fe-camera-off me-1 mt-1 float-start"></i>Delete profile</a>
									</div>
								</div> -->
								<div class="form-group mb-3">
									<label class="form-label">New Password</label>
									<input type="password" class="form-control" id="newPass" name="newPass" value="" required>
									<input type="hidden" name="h_a_id" id="h_a_id" value="<?= $h_a_id ?>">
								</div>
								<div class="form-group mb-3">
									<label class="form-label">Confirm Password</label>
									<input type="password" class="form-control" id="confirmPass" name="confirmPass" value="" required>
								</div>
							</div>
							<div class="card-footer text-end">
								<button type="button" onclick="updatePassword()" class="btn btn-primary">Update</button>
								<!-- <a  class="btn btn-danger">Cancel</a> -->
							</div>
						</div>
					
					</div>
					<div class="col-xl-8 col-md-12 col-sm-12">
						<div class="card custom-card">
							<div class="card-header">
								<h3 class="card-title">Edit Profile</h3>
							</div>
							<div class="card-body">
								<form id="editProfileForm" enctype="multipart/form-data">
									<div class="form-group mb-3">
										<label class="form-label" for="name">Name</label>
										<input type="text" class="form-control" id="name" name="name" value="<?= $rows['h_a_name'] ?>" placeholder="First Name">
									</div>
									<div class="form-group mb-3">
										<label class="form-label" for="email">Email address</label>
										<input type="email" class="form-control" id="email" name="email" value="<?= $rows['email'] ?>" placeholder="Email address">
									</div>
									<div class="form-group mb-3">
										<label class="form-label" for="haddress">Home Address</label>
										<input type="text" class="form-control" id="haddress" name="haddress" value="<?= $rows['home_address'] ?>" placeholder="Enter Home Address">
									</div>
									<div class="form-group mb-3">
										<label class="form-label" for="phoneno">Contact Number</label>
										<input type="number" class="form-control" id="phoneno" name="phoneno" value="<?= $rows['phone_no'] ?>" placeholder="Phone number">
									</div>
									<div class="form-group mb-3">
										<label class="form-label" for="nic">NIC NO</label>
										<input type="number" class="form-control" id="nic" name="nic" value="<?= $rows['h_nic_no'] ?>" placeholder="NIC No">
									</div>
									<div class="form-group mb-3">
										<label class="form-label" for="dob">Date Of Birth</label>
										<input type="date" name="dob" id="dob" value="<?= $rows['owner_dob'] ?>">
									</div>
									<div class="form-group mb-3">
										<label class="form-label" for="icimage">Profile Images</label>
										<input type="file" class="form-control" id="icimage" name="icimage[]" multiple>
									</div>
								</form>
							</div>
							<div class="card-footer text-end">
								<button type="button" onclick="editAdmin(<?= $h_a_id ?>)" class="btn btn-warning mt-1">Edit</button>
							</div>
						</div>
					</div>

				</div>
				<!-- ROW-1 CLOSED -->

				<!-- ROW-2 OPEN -->
				
				<!-- ROW-2 CLOSED -->
			</div>
		</div>
		<!--APP-CONTENT CLOSE-->
		
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModal" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  <div class="input-group">
                    <a href="javascript:void(0);" class="input-group-text" id="Search-Grid"><i class="fe fe-search header-link-icon fs-18"></i></a>
                    <input type="search" class="form-control border-0 px-2" placeholder="Search" aria-label="Username">
                    <a href="javascript:void(0);" class="input-group-text" id="voice-search"><i class="fe fe-mic header-link-icon"></i></a>
                    <a href="javascript:void(0);" class="btn btn-light btn-icon" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fe fe-more-vertical"></i>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                      <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                      <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                    </ul>
                  </div>
                  <div class="mt-4">
                    <p class="font-weight-semibold text-muted mb-2">Are You Looking For...</p>
                    <span class="search-tags"><i class="fe fe-user me-2"></i>People<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a></span>
                    <span class="search-tags"><i class="fe fe-file-text me-2"></i>Pages<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a></span>
                    <span class="search-tags"><i class="fe fe-align-left me-2"></i>Articles<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a></span>
                    <span class="search-tags"><i class="fe fe-server me-2"></i>Tags<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a></span>
                  </div>
                  <div class="my-4">
                    <p class="font-weight-semibold text-muted mb-2">Recent Search :</p>
                    <div class="p-2 border br-5 d-flex align-items-center text-muted mb-2 alert">
                      <a href="notifications.html"><span>Notifications</span></a>
                      <a class="ms-auto lh-1" href="javascript:void(0);" data-bs-dismiss="alert" aria-label="Close"><i class="fe fe-x text-muted"></i></a>
                    </div>
                    <div class="p-2 border br-5 d-flex align-items-center text-muted mb-2 alert">
                      <a href="alerts.html"><span>Alerts</span></a>
                      <a class="ms-auto lh-1" href="javascript:void(0);" data-bs-dismiss="alert" aria-label="Close"><i class="fe fe-x text-muted"></i></a>
                    </div>
                    <div class="p-2 border br-5 d-flex align-items-center text-muted mb-0 alert">
                      <a href="mail.html"><span>Mail</span></a>
                      <a class="ms-auto lh-1" href="javascript:void(0);" data-bs-dismiss="alert" aria-label="Close"><i class="fe fe-x text-muted"></i></a>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <div class="btn-group ms-auto">
                    <button class="btn btn-sm btn-primary-light">Search</button>
                    <button class="btn btn-sm btn-primary">Clear Recents</button>
                  </div>
                </div>
              </div>
            </div>

			<?php
			}
		?>
        </div>

		<?php include("layout/footer.php"); ?>
		<script>
			function updatePassword(){
				var newPass=document.getElementById('newPass').value;
				var confirmPass=document.getElementById('confirmPass').value;
				var h_a_id=document.getElementById('h_a_id').value;
			

				$.ajax({
					url:'backend/updatePassword.php',
					method:'POST',
					data:{
						newPass:newPass,
						confirmPass:confirmPass
					},success:function(resp){
						if(resp == 200){
								swal("Changed", "Password changed, please loging again", "success")
									.then((value) => {
										if (value) {
											// $('#editModal').modal('hide');
											window.location.href = 'backend/signout.php';
										}
									});
								}
								else if(resp == 201){
									swal("Warning", "Entered Passwords are not same", "warning")
									.then((value) => {
										if (value) {
											// $('#editModal').modal('hide');
											window.location.reload();
										}
									});

								}else if(resp == 202){
									swal("Warning", "Entered Passwords cannot be empty", "error")
									.then((value) => {
										if (value) {
											// $('#editModal').modal('hide');
											window.location.reload();
										}
									});

								}else {
									console.log(resp);
								}
					}
				});
				
			}

			function editAdmin(h_a_id) {
				// Create a new FormData object
				var formData = new FormData(document.getElementById('editProfileForm'));

				// Add hidden fields if needed
				formData.append('h_a_id', h_a_id);

				// AJAX request to update profile and upload images
				$.ajax({
					url: 'backend/editAdmin.php', // URL of the backend script
					method: 'POST',
					data: formData,
					processData: false, // Prevent jQuery from converting the data into a query string
					contentType: false, // Prevent jQuery from setting the content type
					success: function(resp) {
						if (resp == 200) {
							swal("Success", "Profile updated successfully", "success")
								.then((value) => {
									if (value) {
										$('#editModal').modal('hide');
										window.location.reload();
									}
								});
						} else {
							swal("Cancelled", "Something went wrong: " + resp, "error")
								.then((value) => {
									if (value) {
										$('#editModal').modal('hide');
										window.location.reload();
									}
								});
							console.log(resp);
						}
					},
					error: function(xhr, status, error) {
						swal("Error", "Failed to update profile: " + error, "error");
						console.error(`Error: ${error}, Status: ${status}, XHR: ${xhr.responseText}`);
					}
				});
			}

		</script>
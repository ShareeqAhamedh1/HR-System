<?php include("layout/header.php"); ?>
		<!--APP-CONTENT START-->
		<div class="main-content app-content">
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
				    <div class="ms-auto pageheader-btn">
				        <button type="button" class="btn btn-primary btn-wave waves-effect waves-light me-2"> <i class="fe fe-plus mx-1 align-middle"></i>Add Account</button>
				        <button type="button" class="btn btn-success btn-wave waves-effect waves-light"> <i class="fe fe-log-in mx-1 align-middle"></i>Export</button>
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
								<div class="d-flex mb-3">
									<img alt="User Avatar" class="rounded-circle avatar-lg avatar me-2" src="../assets/images/faces/8.jpg">
									<div class="ms-auto mt-xl-2 mt-lg-0 me-lg-2">
										<a href="editprofile.html" class="btn btn-primary btn-sm mt-1 mb-1"><i class="fe fe-camera me-1 float-start mt-1"></i>Edit profile</a>
										<a href="javascript:void(0);" class="btn btn-danger btn-sm mt-1 mb-1"><i class="fe fe-camera-off me-1 mt-1 float-start"></i>Delete profile</a>
									</div>
								</div>
								<div class="form-group mb-3">
									<label class="form-label">New Password</label>
									<input type="password" class="form-control" id="newPass" name="newPass" value="">
								</div>
								<div class="form-group mb-3">
									<label class="form-label">Confirm Password</label>
									<input type="password" class="form-control" id="confirmPass" name="confirmPass" value="">
								</div>
							</div>
							<div class="card-footer text-end">
								<a onclick="updatePassword()" class="btn btn-primary">Update</a>
								<a  class="btn btn-danger">Cancel</a>
							</div>
						</div>
						<div class="card custom-card panel-theme">
							<div class="card-header">
								<div class="float-start">
									<h3 class="card-title">Contact</h3>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="card-body no-padding">
								<ul class="list-group no-margin">
									<li class="list-group-item">
										<a href="javascript:void(0);" class="d-flex">
											<i class="bi bi-envelope-fill list-contact-icons border text-center br-100"></i> 
											<span class="contact-icons  ms-2 my-auto">support@demo.com</span>
										</a>
									</li>
									<li class="list-group-item"><a href="javascript:void(0);" class="d-flex"><i class="fe fe-globe list-contact-icons border text-center br-100"></i><span class="contact-icons  ms-2 my-auto"> www.abcd.com</span></a></li>
									<li class="list-group-item"><a href="javascript:void(0);" class="d-flex"><i class="fe fe-phone list-contact-icons border text-center br-100"></i> <span class="contact-icons  ms-2 my-auto">+125 5826 3658 </span></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-xl-8 col-md-12 col-sm-12">
						<div class="card custom-card">
							<div class="card-header">
								<h3 class="card-title">Edit Profile</h3>
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col-lg-6 col-md-12">
										<div class="form-group mb-3">
											<label class="form-label" for="exampleInputname">First Name</label>
											<input type="text" class="form-control" id="exampleInputname" placeholder="First Name">
										</div>
									</div>
									<div class="col-lg-6 col-md-12">
										<div class="form-group mb-3">
											<label class="form-label" for="exampleInputname1">Last Name</label>
											<input type="text" class="form-control" id="exampleInputname1" placeholder="Enter Last Name">
										</div>
									</div>
								</div>
								<div class="form-group mb-3">
									<label class="form-label" for="exampleInputEmail1">Email address</label>
									<input type="email" class="form-control" id="exampleInputEmail1" placeholder="email address">
								</div>
								<div class="form-group mb-3">
									<label class="form-label" for="exampleInputnumber">Conatct Number</label>
									<input type="number" class="form-control" id="exampleInputnumber" placeholder="ph number">
								</div>
								<div class="form-group mb-3">
									<label class="form-label">About Me</label>
									<textarea class="form-control" rows="6">My bio.........</textarea>
								</div>
								<div class="form-group mb-3">
									<label class="form-label">Website</label>
									<input class="form-control" placeholder="http://splink.com">
								</div>
								<div class="form-group mb-3">
									<label class="form-label">Date Of Birth</label>
									<div class="row">
										<div class="col-md-4 mb-2">
											<select class="form-control" data-trigger name="choices-single-default" id="choices-single-default">
												<option value="0">Date</option>
												<option value="1">01</option>
												<option value="2">02</option>
												<option value="3">03</option>
												<option value="4">04</option>
												<option value="5">05</option>
												<option value="6">06</option>
												<option value="7">07</option>
												<option value="8">08</option>
												<option value="9">09</option>
												<option value="10">10</option>
												<option value="11">11</option>
												<option value="12">12</option>
												<option value="13">13</option>
												<option value="14">14</option>
												<option value="15">15</option>
												<option value="16">16</option>
												<option value="17">17</option>
												<option value="18">18</option>
												<option value="19">19</option>
												<option value="20">20</option>
												<option value="21">21</option>
												<option value="22">22</option>
												<option value="23">23</option>
												<option value="24">24</option>
												<option value="25">25</option>
												<option value="26">26</option>
												<option value="27">27</option>
												<option value="28">28</option>
												<option value="29">29</option>
												<option value="30">30</option>
												<option value="31">31</option>
											</select>
										</div>
										<div class="col-md-4 mb-2">
											<select class="form-control" data-trigger name="choices-single-default" id="choices-single-default2">
												<option value="0">Mon</option>
												<option value="1">Jan</option>
												<option value="2">Feb</option>
												<option value="3">Mar</option>
												<option value="4">Apr</option>
												<option value="5">May</option>
												<option value="6">June</option>
												<option value="7">July</option>
												<option value="8">Aug</option>
												<option value="9">Sep</option>
												<option value="10">Oct</option>
												<option value="11">Nov</option>
												<option value="12">Dec</option>
											</select>
										</div>
										<div class="col-md-4 mb-2">
											<select class="form-control" data-trigger name="choices-single-default" id="choices-single-default3">
												<option value="0">Year</option>
												<option value="1">2018</option>
												<option value="2">2017</option>
												<option value="3">2016</option>
												<option value="4">2015</option>
												<option value="5">2014</option>
												<option value="6">2013</option>
												<option value="7">2102</option>
												<option value="8">2012</option>
												<option value="9">2011</option>
												<option value="10">2010</option>
												<option value="11">2009</option>
												<option value="12">2008</option>
												<option value="13">2007</option>
												<option value="14">2006</option>
												<option value="15">2005</option>
												<option value="16">2004</option>
												<option value="17">2003</option>
												<option value="18">2002</option>
												<option value="19">2001</option>
												<option value="20">1999</option>
												<option value="21">1998</option>
												<option value="22">1997</option>
												<option value="23">1996</option>
												<option value="24">1995</option>
												<option value="25">1994</option>
												<option value="26">1993</option>
												<option value="27">1992</option>
												<option value="28">1991</option>
												<option value="29">1990</option>
												<option value="30">1989</option>
												<option value="31">1988</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="card-footer text-end">
								<a href="javascript:void(0);" class="btn btn-success mt-1">Save</a>
								<a href="javascript:void(0);" class="btn btn-danger mt-1">Cancel</a>
							</div>
						</div>
					</div>
				</div>
				<!-- ROW-1 CLOSED -->

				<!-- ROW-2 OPEN -->
				<div class="row">
					<div class="col-12">
						<div class="card custom-card">
							<div class="card-header ">
								<h3 class="card-title ">Projects</h3>
								<div class="card-options ms-auto">
									<button id="add__new__list" type="button" class="btn btn-md btn-primary " data-bs-toggle="" data-target=".bd-example-modal-lg"><i class="fa fa-plus"></i> Add a new Project</button>
								</div>
							</div>
							<div class="table-responsive">
								<table class="table text-nowrap table-striped">
									<thead>
										<tr>
											<th scope="col">ID</th>
											<th scope="col">Project Name</th>
											<th scope="col">Backend</th>
											<th scope="col">Deadline</th>
											<th scope="col">Team Members</th>
											<th scope="col">Edit Project Details </th>
											<th scope="col">list info</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>At vero eos et accusamus et iusto odio</td>
											<td>PHP</td>
											<td>15/11/2018</td>
											<td>15 Members</td>
											<td>
												<a class="btn btn-sm btn-primary" href="javascript:void(0);"><i class="fe fe-edit"></i> Edit</a>
												<a class="btn btn-sm btn-danger" href="javascript:void(0);"><i class="fe fe-trash"></i> Delete</a>
											</td>
											<td><a class="btn btn-sm btn-secondary" href="javascript:void(0);"><i class="fe fe-info-circle"></i> Details</a> </td>
										</tr>
										<tr>
											<td>2</td>
											<td>voluptatum deleniti atque corrupti quos</td>
											<td>Angular js</td>
											<td>25/11/2018</td>
											<td>12 Members</td>
											<td>
												<a class="btn btn-sm btn-primary" href="javascript:void(0);"><i class="fe fe-edit"></i> Edit</a>
												<a class="btn btn-sm btn-danger" href="javascript:void(0);"><i class="fe fe-trash"></i> Delete</a>
											</td>
											<td><a class="btn btn-sm btn-secondary" href="javascript:void(0);"><i class="fe fe-info-circle"></i> Details</a> </td>
										</tr>
										<tr>
											<td>3</td>
											<td>dignissimos ducimus qui blanditiis praesentium </td>
											<td>Java</td>
											<td>5/12/2018</td>
											<td>20 Members</td>
											<td>
												<a class="btn btn-sm btn-primary" href="javascript:void(0);"><i class="fe fe-edit"></i> Edit</a>
												<a class="btn btn-sm btn-danger" href="javascript:void(0);"><i class="fe fe-trash"></i> Delete</a>
											</td>
											<td><a class="btn btn-sm btn-secondary" href="javascript:void(0);"><i class="fe fe-info-circle"></i> Details</a> </td>
										</tr>
										<tr>
											<td>4</td>
											<td>deleniti atque corrupti quos dolores  </td>
											<td>Phython</td>
											<td>14/12/2018</td>
											<td>10 Members</td>
											<td>
												<a class="btn btn-sm btn-primary" href="javascript:void(0);"><i class="fe fe-edit"></i> Edit</a>
												<a class="btn btn-sm btn-danger" href="javascript:void(0);"><i class="fe fe-trash"></i> Delete</a>
											</td>
											<td><a class="btn btn-sm btn-secondary" href="javascript:void(0);"><i class="fe fe-info-circle"></i> Details</a> </td>
										</tr>
										<tr>
											<td>5</td>
											<td>et quas molestias excepturi sint occaecati</td>
											<td>Phython</td>
											<td>4/12/2018</td>
											<td>17 Members</td>
											<td>
												<a class="btn btn-sm btn-primary" href="javascript:void(0);"><i class="fe fe-edit"></i> Edit</a>
												<a class="btn btn-sm btn-danger" href="javascript:void(0);"><i class="fe fe-trash"></i> Delete</a>
											</td>
											<td><a class="btn btn-sm btn-secondary" href="javascript:void(0);"><i class="fe fe-info-circle"></i> Details</a> </td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
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
        </div>

		<?php include("layout/footer.php"); ?>
		<script>
			function updatePassword(){
				var newPass=document.getElementById('newPass').value;
				var confirmPass=document.getElementById('confirmPass').value;
				alert(confirmPass);
				$.ajax({
					url:'backend/updatePassword.php',
					method:'POST',
					data:{
						newPass:newPass,
						confirmPass:confirmPass
					},success:function(resp){
						if(resp == 200){
									document.getElementById('newPass').value="";
									document.getElementById('confirmPass').value="";
									// swal("Changed", "Other Charges Changed", "success");  
								}
								else {
									console.log(resp);
								}
					}
				});
				
			}
		</script>
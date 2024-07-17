<?php include("layout/header.php"); ?>

		<!--APP-CONTENT START-->
		<div class="main-content app-content">
			<div class="container-fluid">

				<!-- Page Header -->
				<div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
				    <div class="">
				        <h1 class="page-title fw-semibold fs-20 mb-0"> Profile</h1>
				        <div class="">
				            <nav>
				                <ol class="breadcrumb mb-0">
				                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
				                    <li class="breadcrumb-item active" aria-current="page"> Profile</li>
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
				<div class="row" id="user-profile">
					<div class="col-lg-12">
						<div class="card custom-card">
							<div class="card-body">
								<div class="wideget-user">
									<div class="row">
										<div class="col-lg-12 col-md-12 col-xl-6">
											<div class="wideget-user-desc d-sm-flex">
												<div class="wideget-user-img">
													<img class="" src="../assets/images/faces/8.jpg" alt="img">
												</div>
												<div class="user-wrap mt-auto">
													<h4>Elizabeth Dyer</h4>
													<h6 class="text-muted mb-3">Member Since: November 2017</h6>
													<a href="javascript:void(0);" class="btn btn-primary mt-1 mb-1"><i class="fa fa-rss"></i> Follow</a>
													<a href="emailservices.html" class="btn btn-secondary mt-1 mb-1"><i class="fa fa-envelope"></i> E-mail</a>
												</div>
											</div>
										</div>
										<div class="col-lg-12 col-md-12 col-xl-6">
											<div class="text-xl-right mt-4 mt-xl-0">
												<a href="emailservices.html" class="btn btn-outline-light">Message</a>
												<a href="editprofile.html" class="btn btn-primary">Edit Profile</a>
											</div>
											<div class="mt-4">
												<div class="main-profile-contact-list float-lg-end d-lg-flex">
													<div class="me-5">
														<div class="media">
															<div class="media-icon bg-primary  me-3 mt-1">
																<i class="fe fe-file-plus fs-20"></i>
															</div>
															<div class="media-body">
																<span class="text-muted">Posts</span>
																<div class="fw-semibold fs-25">
																	328
																</div>
															</div>
														</div>
													</div>
													<div class="me-5 mt-5 mt-md-0">
														<div class="media">
															<div class="media-icon bg-success me-3 mt-1">
																<i class="fe fe-users  fs-20"></i>
															</div>
															<div class="media-body">
																<span class="text-muted">Followers</span>
																<div class="fw-semibold fs-25">
																	937k
																</div>
															</div>
														</div>
													</div>
													<div class="me-0 mt-5 mt-md-0">
														<div class="media">
															<div class="media-icon bg-orange me-3 mt-1">
																<i class="fe fe-wifi fs-20"></i>
															</div>
															<div class="media-body">
																<span class="text-muted">Following</span>
																<div class="fw-semibold fs-25">
																	2,876
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="border-top">
								<div class="wideget-user-tab">
									<div class="tab-menu-heading">
										<div class="tabs-menu1">
											<ul class="nav">
												<li class=""><a href="#tab-51" class="active show" data-bs-toggle="tab">Profile</a></li>
												<li><a href="#tab-61" data-bs-toggle="tab" class="">Friends</a></li>
												<li><a href="#tab-71" data-bs-toggle="tab" class="">Gallery</a></li>
												<li><a href="#tab-81" data-bs-toggle="tab" class="">Followers</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-content">
							<div class="tab-pane p-0 active show border-0" id="tab-51">
								<div id="profile-log-switch">
									<div class="card custom-card">
										<div class="card-body">
											<div class="media-heading">
												<h5><strong>Personal Information</strong></h5>
											</div>
											<div class="table-responsive ">
												<table class="table row table-borderless">
													<tbody class="col-lg-12 col-xl-6 p-0">
														<tr>
															<td><strong>Full Name :</strong> Elizabeth Dyer</td>
														</tr>
														<tr>
															<td><strong>Location :</strong> USA</td>
														</tr>
														<tr>
															<td><strong>Languages :</strong> English, German, Spanish.</td>
														</tr>
													</tbody>
													<tbody class="col-lg-12 col-xl-6 p-0">
														<tr>
															<td><strong>Website :</strong> abcdz.com</td>
														</tr>
														<tr>
															<td><strong>Email :</strong> georgemestayer@abcdz.com</td>
														</tr>
														<tr>
															<td><strong>Phone :</strong> +125 254 3562 </td>
														</tr>
													</tbody>
												</table>
											</div>
											<div class="row profie-img">
												<div class="col-md-12">
													<div class="media-heading">
														<h5><strong>Biography</strong></h5>
													</div>
													<p>
														Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus</p>
													<p class="mb-0">because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter but because those who do not know how to pursue consequences that are extremely painful. Nor
														again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great
														pleasure.
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane p-0 border-0" id="tab-61">
								<ul class="widget-users row p-0 border-0">
									<li class="col-lg-4  col-md-6 col-sm-12 col-12">
										<div class="card custom-card border p-0">
											<a href="profile.html">
												<div class="card-body text-center">
													<img class="avatar avatar-xxl rounded-circle cover-image" alt="img" src="../assets/images/faces/15.jpg">
													<h4 class="fs-16 mb-0 mt-3 text-dark fw-semibold">James Thomas</h4>
													<span class="text-muted">Web designer</span>
												</div>
											</a>
											<div class="card-footer text-center">
												<div class="row user-social-detail">
													<a href="javascript:void(0);" class="social-profile me-4 rounded-circle text-center">
														<i class="bi bi-google"></i>
													</a>
													<a href="javascript:void(0);" class="social-profile me-4 rounded-circle text-center">
														<i class="bi bi-facebook"></i>
													</a>
													<a href="javascript:void(0);" class="social-profile  rounded-circle text-center">
														<i class="bi bi-twitter"></i>
													</a>
												</div>
											</div>
										</div>
									</li>
									<li class="col-lg-4 col-md-6 col-sm-12 col-12">
										<div class="card custom-card border p-0">
											<a href="profile.html">
												<div class="card-body text-center">
													<img class="avatar avatar-xxl rounded-circle cover-image" alt="img" src="../assets/images/faces/9.jpg">
													<h4 class="fs-16 mb-0 mt-3 text-dark fw-semibold">George Clooney</h4>
													<span class="text-muted">Web designer</span>
												</div>
											</a>
											<div class="card-footer text-center">
												<div class="row user-social-detail">
													<a href="javascript:void(0);" class="social-profile me-4 rounded-circle text-center">
														<i class="bi bi-google"></i>
													</a>
													<a href="javascript:void(0);" class="social-profile me-4 rounded-circle text-center">
														<i class="bi bi-facebook"></i>
													</a>
													<a href="javascript:void(0);" class="social-profile  rounded-circle text-center">
														<i class="bi bi-twitter"></i>
													</a>
												</div>
											</div>
										</div>
									</li>
									<li class="col-lg-4 col-md-6 col-sm-12 col-12">
										<div class="card custom-card border p-0">
											<a href="profile.html">
												<div class="card-body text-center">
													<img class="avatar avatar-xxl rounded-circle cover-image" alt="img" src="../assets/images/faces/2.jpg">
													<h4 class="fs-16 mb-0 mt-3 text-dark fw-semibold">Robert Downey Jr.</h4>
													<span class="text-muted">Web designer</span>
												</div>
											</a>
											<div class="card-footer text-center">
												<div class="row user-social-detail">
													<a href="javascript:void(0);" class="social-profile me-4 rounded-circle text-center">
														<i class="bi bi-google"></i>
													</a>
													<a href="javascript:void(0);" class="social-profile me-4 rounded-circle text-center">
														<i class="bi bi-facebook"></i>
													</a>
													<a href="javascript:void(0);" class="social-profile  rounded-circle text-center">
														<i class="bi bi-twitter"></i>
													</a>
												</div>
											</div>
										</div>
									</li>
									<li class="col-lg-4 col-md-6 col-sm-12 col-12">
										<div class="card custom-card border p-0 mb-lg-0">
											<a href="profile.html">
												<div class="card-body text-center">
													<img class="avatar avatar-xxl rounded-circle cover-image" alt="img" src="../assets/images/faces/12.jpg">
													<h4 class="fs-16 mb-0 mt-3 text-dark fw-semibold">Emma Watson</h4>
													<span class="text-muted">Web designer</span>
												</div>
											</a>
											<div class="card-footer text-center">
												<div class="row user-social-detail">
													<a href="javascript:void(0);" class="social-profile me-4 rounded-circle text-center">
														<i class="bi bi-google"></i>
													</a>
													<a href="javascript:void(0);" class="social-profile me-4 rounded-circle text-center">
														<i class="bi bi-facebook"></i>
													</a>
													<a href="javascript:void(0);" class="social-profile  rounded-circle text-center">
														<i class="bi bi-twitter"></i>
													</a>
												</div>
											</div>
										</div>
									</li>
									<li class="col-lg-4 col-md-6 col-sm-12 col-12">
										<div class="card custom-card border p-0 mb-lg-0">
											<a href="profile.html">
												<div class="card-body text-center">
													<img class="avatar avatar-xxl rounded-circle cover-image" alt="img" src="../assets/images/faces/4.jpg">
													<h4 class="fs-16 mb-0 mt-3 text-dark fw-semibold">Mila Kunis</h4>
													<span class="text-muted">Web designer</span>
												</div>
											</a>
											<div class="card-footer text-center">
												<div class="row user-social-detail">
													<a href="javascript:void(0);" class="social-profile me-4 rounded-circle text-center">
														<i class="bi bi-google"></i>
													</a>
													<a href="javascript:void(0);" class="social-profile me-4 rounded-circle text-center">
														<i class="bi bi-facebook"></i>
													</a>
													<a href="javascript:void(0);" class="social-profile  rounded-circle text-center">
														<i class="bi bi-twitter"></i>
													</a>
												</div>
											</div>
										</div>
									</li>
									<li class="col-lg-4 col-md-6 col-sm-12 col-12">
										<div class="card custom-card border p-0 mb-0">
											<div class="card-body text-center">
												<img class="avatar avatar-xxl rounded-circle cover-image" alt="img" src="../assets/images/faces/6.jpg">
												<a href="profile.html">
													<h4 class="fs-16 mb-0 mt-3 text-dark fw-semibold">Ryan Gossling</h4>
												</a>
												<span class="text-muted">Web designer</span>
											</div>
											<div class="card-footer text-center">
												<div class="row user-social-detail">
													<a href="javascript:void(0);" class="social-profile me-4 rounded-circle text-center">
														<i class="bi bi-google"></i>
													</a>
													<a href="javascript:void(0);" class="social-profile me-4 rounded-circle text-center">
														<i class="bi bi-facebook"></i>
													</a>
													<a href="javascript:void(0);" class="social-profile  rounded-circle text-center">
														<i class="bi bi-twitter"></i>
													</a>
												</div>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<div class="tab-pane p-0 border-0" id="tab-71">
								<div class="row  mb-4 img-gallery" id="lightgallery">
									<div class="col-lg-3 col-md-3 col-sm-6 col-12">
										<a href="../assets/images/media/1.jpg" class="glightbox card" data-gallery="gallery1">
											<img src="../assets/images/media/1.jpg" alt="image" >
										</a>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-6 col-12">
										<a href="../assets/images/media/1.jpg" class="glightbox card" data-gallery="gallery1">
											<img src="../assets/images/media/1.jpg" alt="image" >
										</a>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-6 col-12">
										<a href="../assets/images/media/2.jpg" class="glightbox card" data-gallery="gallery1">
											<img src="../assets/images/media/2.jpg" alt="image" >
										</a>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-6 col-12">
										<a href="../assets/images/media/3.jpg" class="glightbox card" data-gallery="gallery1">
											<img src="../assets/images/media/3.jpg" alt="image" >
										</a>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-6 col-12">
										<a href="../assets/images/media/4.jpg" class="glightbox card" data-gallery="gallery1">
											<img src="../assets/images/media/4.jpg" alt="image" >
										</a>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-6 col-12">
										<a href="../assets/images/media/5.jpg" class="glightbox card" data-gallery="gallery1">
											<img src="../assets/images/media/5.jpg" alt="image" >
										</a>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-6 col-12">
										<a href="../assets/images/media/6.jpg" class="glightbox card" data-gallery="gallery1">
											<img src="../assets/images/media/6.jpg" alt="image" >
										</a>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-6 col-12">
										<a href="../assets/images/media/6.jpg" class="glightbox card" data-gallery="gallery1">
											<img src="../assets/images/media/6.jpg" alt="image" >
										</a>
									</div>
								</div>
							</div>
							<div class="tab-pane p-0 border-0" id="tab-81">
								<div class="row">
									<div class=" col-lg-6 col-md-12">
										<div class="card border p-0 over-flow-hidden">
											<div class="media card-body media-xs overflow-visible ">
												<img class="avatar rounded-circle avatar-md me-3" src="../assets/images/faces/8.jpg" alt="avatar-img">
												<div class="media-body valign-middle">
													<a href="javascript:void(0);" class=" fw-semibold text-dark">John Paige</a>
													<p class="text-muted mb-0">johan@gmail.com</p>
												</div>
												<div class="media-body valign-middle text-end overflow-visible mt-2 ms-auto">
													<button class="btn btn-primary" type="button">Follow</button>
												</div>
											</div>
										</div>
									</div>
									<div class=" col-lg-6 col-md-12">
										<div class="card border p-0 over-flow-hidden">
											<div class="media card-body media-xs overflow-visible ">
												<span class="avatar cover-image avatar-md rounded-circle bg-pink me-3">LQ</span>
												<div class="media-body valign-middle mt-0">
													<a href="javascript:void(0);" class="fw-semibold text-dark">Lillian Quinn</a>
													<p class="text-muted mb-0">lilliangore</p>
												</div>
												<div class="media-body valign-middle text-end overflow-visible mt-1 ms-auto">
													<button class="btn btn-primary" type="button">Follow</button>
												</div>
											</div>
										</div>
									</div>
									<div class=" col-lg-6 col-md-12">
										<div class="card border p-0 over-flow-hidden">
											<div class="media card-body media-xs overflow-visible ">
												<span class="avatar cover-image avatar-md rounded-circle me-3 bg-primary flex-none">IH</span>
												<div class="media-body valign-middle mt-0">
													<a href="javascript:void(0);" class="fw-semibold text-dark">Irene Harris</a>
													<p class="text-muted mb-0">Irene@gmail.com</p>
												</div>
												<div class="media-body valign-middle text-end overflow-visible mt-1 ms-auto">
													<button class="btn btn-primary" type="button">Follow</button>
												</div>
											</div>
										</div>
									</div>
									<div class=" col-lg-6 col-md-12">
										<div class="card border p-0 over-flow-hidden">
											<div class="media card-body media-xs overflow-visible ">
												<img class="avatar rounded-circle avatar-md me-3" src="../assets/images/faces/3.jpg" alt="avatar-img">
												<div class="media-body valign-middle mt-0">
													<a href="javascript:void(0);" class="text-dark fw-semibold">Saureen Bgist</a>
													<p class="text-muted mb-0">harryuqt</p>
												</div>
												<div class="media-body valign-middle text-end overflow-visible mt-1 ms-auto">
													<button class="btn btn-primary" type="button">Follow</button>
												</div>
											</div>
										</div>
									</div>
									<div class=" col-lg-6 col-md-12">
										<div class="card border p-0 over-flow-hidden">
											<div class="media card-body media-xs overflow-visible ">
												<img class="avatar rounded-circle avatar-md me-3" src="../assets/images/faces/2.jpg" alt="avatar-img">
												<div class="media-body valign-middle mt-0">
													<a href="javascript:void(0);" class="text-dark fw-semibold">Maureen Biologist</a>
													<p class="text-muted mb-0">harryuqt</p>
												</div>
												<div class="media-body valign-middle text-end overflow-visible mt-1 ms-auto">
													<button class="btn btn-primary" type="button">Follow</button>
												</div>
											</div>
										</div>
									</div>
									<div class=" col-lg-6 col-md-12">
										<div class="card border p-0 over-flow-hidden">
											<div class="media card-body media-xs overflow-visible ">
												<span class="avatar cover-image avatar-md rounded-circle me-3 bg-info flex-none">PF</span>
												<div class="media-body valign-middle mt-0">
													<a href="javascript:void(0);" class="fw-semibold text-dark">Paddy O'Furniture.</a>
													<p class="text-muted mb-0">Paddy@gmail.com</p>
												</div>
												<div class="media-body valign-middle text-end overflow-visible mt-1 ms-auto">
													<button class="btn btn-primary" type="button">Follow</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- COL-END -->
				</div>
				<!-- ROW-1 CLOSED -->
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
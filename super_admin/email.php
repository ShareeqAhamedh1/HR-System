<?php include("layout/header.php"); ?>

		<!--APP-CONTENT START-->
		<div class="main-content app-content">
			<div class="container-fluid">

				<!-- Page Header -->
				<div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
				    <div class="">
				        <h1 class="page-title fw-semibold fs-20 mb-0"> Mail-Inbox</h1>
				        <div class="">
				            <nav>
				                <ol class="breadcrumb mb-0">
				                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
				                    <li class="breadcrumb-item active" aria-current="page"> Mail-Inbox</li>
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


				<!-- Row -->
				<div class="row">
					<div class="col-md-12 col-lg-4 col-xl-3">
						<div class="card custom-card">
							<div class="list-group list-group-transparent mb-0 mail-inbox pb-3">
								<div class="mt-4 mb-4 mx-4 text-center">
									<a href="emailservices.php" class="btn btn-primary btn-lg d-grid">Compose</a>
								</div>
								<a href="javascript:void(0);" class="list-group-item d-flex align-items-center active mx-4">
									<span class="icons"><i class="ri-mail-line"></i></span> Inbox <span class="ms-auto badge bg-success">14</span>
								</a>
								<a href="javascript:void(0);" class="list-group-item d-flex align-items-center mx-4">
									<span class="icons"><i class="ri-mail-open-line"></i></span> Drafts
								</a>
								<a href="javascript:void(0);" class="list-group-item d-flex align-items-center mx-4">
									<span class="icons"><i class="ri-star-line"></i></span> Starred <span class="ms-auto badge bg-danger">03</span>
								</a>
								<a href="javascript:void(0);" class="list-group-item d-flex align-items-center mx-4">
									<span class="icons"><i class="ri-mail-send-line"></i></span> Sent Mail
								</a>
								<a href="javascript:void(0);" class="list-group-item d-flex align-items-center mx-4">
									<span class="icons"><i class="ri-price-tag-3-line"></i></span> Tags
								</a>
								<a href="javascript:void(0);" class="list-group-item d-flex align-items-center mx-4">
									<span class="icons"><i class="ri-delete-bin-line"></i></span> Trash
								</a>
							</div>
							<div class="card-body border-top ps-0">
								<div class="list-group list-group-transparent mb-0 mail-inbox mx-4">
									<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center  py-2">
										<span class="w-3 h-3 rounded-circle bg-primary me-2"></span> Friends
									</a>
									<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center  py-2">
										<span class="w-3 h-3 rounded-circle bg-secondary me-2"></span> Family
									</a>
									<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center  py-2">
										<span class="w-3 h-3 rounded-circle bg-success me-2"></span> Social
									</a>
									<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center  py-2">
										<span class="w-3 h-3 rounded-circle bg-info me-2"></span> Office
									</a>
									<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center  py-2">
										<span class="w-3 h-3 rounded-circle bg-warning me-2"></span> Work
									</a>
									<a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center  py-2">
										<span class="w-3 h-3 rounded-circle bg-danger me-2"></span> Settings
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-lg-8 col-xl-9">
						<div class="card custom-card">
							<div class="card-body p-6">
								<div class="inbox-body">
									<div class="mail-option">
										<div class="chk-all p-0 border-0">
											<div class="btn-group">
												<button type="button" class="btn btn-outline-light dropdown-toggle border" data-bs-toggle="dropdown" aria-expanded="true">
													All
												</button>
												<ul class="dropdown-menu" >
													<li><a class="dropdown-item" href="javascript:void(0);">None</a></li>
													<li><a class="dropdown-item" href="javascript:void(0);">Read</a></li>
													<li><a class="dropdown-item" href="javascript:void(0);">Unread</a></li>
													<li>
														<hr class="dropdown-divider">
													</li>
													<li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
												</ul>
											</div>
										</div>
										<div class="btn-group">
											<a  href="javascript:void(0);" class="btn btn-outline-light">
												<i class="ri-restart-line fs-16 align-middle"></i>
											</a>
										</div>
										<div class="btn-group">
											<button type="button" class="btn btn-outline-light dropdown-toggle border" data-bs-toggle="dropdown" aria-expanded="true">
												More
											</button>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-pencil me-2"></i> Mark as Read</a></li>
												<li><a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-ban me-2"></i> Spam</a></li>
												<li><a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash-o me-2"></i>Delete</a></li>
												<li>
													<hr class="dropdown-divider">
												</li>
												<li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
											</ul>
										</div>


										<ul class="unstyled inbox-pagination float-end d-flex">
											<li  class="my-auto me-1"><span>1-50 of 234</span></li>

											<li>
												<a class="np-btn" href="javascript:void(0);"><i class="ri-arrow-right-s-line pagination-right"></i></a>
											</li>
										</ul>
									</div>
									<div class="table-responsive">
										<table class="table table-inbox table-hover text-nowrap mb-0 border">
											<tbody>
												<tr class="">
													<td class="inbox-small-cells">
														<label class="custom-control custom-checkbox mb-0">
															<input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="...">
														</label>
													</td>
													<td class="inbox-small-cells"><i class="bi bi-star-fill text-warning"></i></td>
													<td class="inbox-small-cells"><i class="bi bi-bookmark-fill"></i></td>
													<td class="view-message dont-show fw-semibold">Tim Reid, S P N</td>
													<td class="view-message">Boost Your Website Traffic</td>
													<td class="view-message text-end fw-semibold">April 01</td>
												</tr>
												<tr class="">
													<td class="inbox-small-cells">
														<label class="custom-control custom-checkbox mb-0">
															<input class="form-check-input" type="checkbox" id="checkboxNoLabel2" value="" aria-label="...">
														</label>
													</td>
													<td class="inbox-small-cells"><i class="bi bi-star-fill inbox-started"></i></td>
													<td class="inbox-small-cells"><i class="bi bi-bookmark-fill"></i></td>
													<td class="view-message dont-show fw-semibold">Freelancer.com </td>
													<td class="view-message">Stop wasting your visitors </td>
													<td class="view-message text-end fw-semibold">May 23</td>
												</tr>
												<tr class="unread">
													<td class="inbox-small-cells">
														<label class="custom-control custom-checkbox mb-0">
															<input class="form-check-input" type="checkbox" id="checkboxNoLabel3" value="" aria-label="...">
														</label>
													</td>
													<td class="inbox-small-cells"><i class="bi bi-star-fill"></i></td>
													<td class="inbox-small-cells"><i class="bi bi-bookmark-fill text-danger"></i></td>
													<td class="view-message  dont-show">PHPClass</td>
													<td class="view-message ">Added a new class: Login Class Fast Site</td>
													<td class="view-message  text-end">9:27 AM</td>
												</tr>

												<tr class="">
													<td class="inbox-small-cells">
														<label class="custom-control custom-checkbox mb-0">
															<input class="form-check-input" type="checkbox" id="checkboxNoLabel4" value="" aria-label="...">
														</label>
													</td>
													<td class="inbox-small-cells"><i class="bi bi-star-fill"></i></td>
													<td class="inbox-small-cells"><i class="bi bi-bookmark-fill"></i></td>
													<td class="view-message dont-show fw-semibold">Facebook</td>
													<td class="view-message view-message">Somebody requested a new password </td>
													<td class="view-message text-end fw-semibold">June 13</td>
												</tr>
												<tr class="">
													<td class="inbox-small-cells">
														<label class="custom-control custom-checkbox mb-0">
															<input class="form-check-input" type="checkbox" id="checkboxNoLabel5" value="" aria-label="...">
														</label>
													</td>
													<td class="inbox-small-cells"><i class="bi bi-star-fill text-warning"></i></td>
													<td class="inbox-small-cells"><i class="bi bi-bookmark-fill"></i></td>
													<td class="view-message dont-show fw-semibold">Skype</td>
													<td class="view-message view-message">Password successfully changed</td>
													<td class="view-message text-end fw-semibold">March 24</td>
												</tr>
												<tr class="">
													<td class="inbox-small-cells">
														<label class="custom-control custom-checkbox mb-0">
															<input class="form-check-input" type="checkbox" id="checkboxNoLabel6" value="" aria-label="...">
														</label>
													</td>
													<td class="inbox-small-cells"><i class="bi bi-star-fill inbox-started"></i></td>
													<td class="inbox-small-cells"><i class="bi bi-bookmark-fill"></i></td>
													<td class="view-message dont-show fw-semibold">Google+</td>
													<td class="view-message">alireza, do you know</td>
													<td class="view-message text-end fw-semibold">March 09</td>
												</tr>
												<tr class="">
													<td class="inbox-small-cells">
														<label class="custom-control custom-checkbox mb-0">
															<input class="form-check-input" type="checkbox" id="checkboxNoLabel7" value="" aria-label="...">
														</label>
													</td>
													<td class="inbox-small-cells"><i class="bi bi-star-fill inbox-started"></i></td>
													<td class="inbox-small-cells"><i class="bi bi-bookmark-fill"></i></td>
													<td class="view-message dont-show fw-semibold">WOW Slider </td>
													<td class="view-message">New WOW Slider v7.8 - 67% off</td>
													<td class="view-message text-end fw-semibold">March 14</td>
												</tr>
												<tr class="">
													<td class="inbox-small-cells">
														<label class="custom-control custom-checkbox mb-0">
															<input class="form-check-input" type="checkbox" id="checkboxNoLabel8" value="" aria-label="...">
														</label>
													</td>
													<td class="inbox-small-cells"><i class="bi bi-star-fill inbox-started text-warning"></i></td>
													<td class="inbox-small-cells"><i class="bi bi-bookmark-fill"></i></td>
													<td class="view-message dont-show fw-semibold">LinkedIn Pulse</td>
													<td class="view-message">The One Sign Your Co-Worker Will Stab</td>
													<td class="view-message text-end fw-semibold">Feb 19</td>
												</tr>
												<tr class="unread">
													<td class="inbox-small-cells">
														<label class="custom-control custom-checkbox mb-0">
															<input class="form-check-input" type="checkbox" id="checkboxNoLabel9" value="" aria-label="...">
														</label>
													</td>
													<td class="inbox-small-cells"><i class="bi bi-star-fill"></i></td>
													<td class="inbox-small-cells"><i class="bi bi-bookmark-fill"></i></td>
													<td class="view-message dont-show fw-semibold">Google Webmaster </td>
													<td class="view-message">Improve the search presence of WebSite</td>
													<td class="view-message text-end fw-semibold">March 15</td>
												</tr>
												<tr class="">
													<td class="inbox-small-cells">
														<label class="custom-control custom-checkbox mb-0">
															<input class="form-check-input" type="checkbox" id="checkboxNoLabel10" value="" aria-label="...">
														</label>
													</td>
													<td class="inbox-small-cells"><i class="bi bi-star-fill"></i></td>
													<td class="inbox-small-cells"><i class="bi bi-bookmark-fill"></i></td>
													<td class="view-message dont-show fw-semibold">JW Player</td>
													<td class="view-message">Last Chance: Upgrade to Pro for </td>
													<td class="view-message text-end fw-semibold">March 15</td>
												</tr>
												<tr class="">
													<td class="inbox-small-cells">
														<label class="custom-control custom-checkbox mb-0">
															<input class="form-check-input" type="checkbox" id="checkboxNoLabel11" value="" aria-label="...">
														</label>
													</td>
													<td class="inbox-small-cells"><i class="bi bi-star-fill"></i></td>
													<td class="inbox-small-cells"><i class="bi bi-bookmark-fill"></i></td>
													<td class="view-message dont-show fw-semibold">Drupal Community</td>
													<td class="view-message view-message">Welcome to the Drupal Community</td>
													<td class="view-message text-end fw-semibold">March 04</td>
												</tr>
												<tr class="">
													<td class="inbox-small-cells">
														<label class="custom-control custom-checkbox mb-0">
															<input class="form-check-input" type="checkbox" id="checkboxNoLabel12" value="" aria-label="...">
														</label>
													</td>
													<td class="inbox-small-cells"><i class="bi bi-star-fill inbox-started text-warning"></i></td>
													<td class="inbox-small-cells"><i class="bi bi-bookmark-fill"></i></td>
													<td class="dont-show fw-semibold">Zoosk </td>
													<td class="view-message">7 new singles we think you'll like</td>
													<td class="view-message text-end fw-semibold">May 14</td>
												</tr>
												<tr class="">
													<td class="inbox-small-cells">
														<label class="custom-control custom-checkbox mb-0">
															<input class="form-check-input" type="checkbox" id="checkboxNoLabel13" value="" aria-label="...">
														</label>
													</td>
													<td class="inbox-small-cells"><i class="bi bi-star-fill"></i></td>
													<td class="inbox-small-cells"><i class="bi bi-bookmark-fill text-danger"></i></td>
													<td class="view-message dont-show fw-semibold">LinkedIn </td>
													<td class="view-message">Alireza: Nokia Networks, System Group and </td>
													<td class="view-message text-end fw-semibold">February 25</td>
												</tr>
												<tr class="">
													<td class="inbox-small-cells">
														<label class="custom-control custom-checkbox mb-0">
															<input class="form-check-input" type="checkbox" id="checkboxNoLabel14" value="" aria-label="...">
														</label>
													</td>
													<td class="inbox-small-cells"><i class="bi bi-star-fill"></i></td>
													<td class="inbox-small-cells"><i class="bi bi-bookmark-fill"></i></td>
													<td class="dont-show fw-semibold">Facebook</td>
													<td class="view-message view-message">Your account was recently logged into</td>
													<td class="view-message text-end fw-semibold">March 14</td>
												</tr>
												<tr class="">
													<td class="inbox-small-cells">
														<label class="custom-control custom-checkbox mb-0">
															<input class="form-check-input" type="checkbox" id="checkboxNoLabel15" value="" aria-label="...">
														</label>
													</td>
													<td class="inbox-small-cells"><i class="bi bi-star-fill"></i></td>
													<td class="inbox-small-cells"><i class="bi bi-bookmark-fill"></i></td>
													<td class="view-message dont-show fw-semibold">Twitter</td>
													<td class="view-message">Your Twitter password has been changed</td>
													<td class="view-message text-end fw-semibold">April 07</td>
												</tr>
												<tr class="">
													<td class="inbox-small-cells">
														<label class="custom-control custom-checkbox mb-0">
															<input class="form-check-input" type="checkbox" id="checkboxNoLabel16" value="" aria-label="...">
														</label>
													</td>
													<td class="inbox-small-cells"><i class="bi bi-star-fill"></i></td>
													<td class="inbox-small-cells"><i class="bi bi-bookmark-fill"></i></td>
													<td class="view-message dont-show fw-semibold">InternetSeer</td>
													<td class="view-message">Performance Report</td>
													<td class="view-message text-end fw-semibold">July 14</td>
												</tr>
												<tr class="">
													<td class="inbox-small-cells">
														<label class="custom-control custom-checkbox mb-0">
															<input class="form-check-input" type="checkbox" id="checkboxNoLabel17" value="" aria-label="...">
														</label>
													</td>
													<td class="inbox-small-cells"><i class="bi bi-star-fill"></i></td>
													<td class="inbox-small-cells"><i class="bi bi-bookmark-fill text-danger"></i></td>
													<td class="view-message dont-show fw-semibold">Bertina </td>
													<td class="view-message">IMPORTANT: Don't lose your domains!</td>
													<td class="view-message text-end fw-semibold">June 16</td>
												</tr>
												<tr class="">
													<td class="inbox-small-cells">
														<label class="custom-control custom-checkbox mb-0">
															<input class="form-check-input" type="checkbox" id="checkboxNoLabel18" value="" aria-label="...">
														</label>
													</td>
													<td class="inbox-small-cells"><i class="bi bi-star-fill inbox-started"></i></td>
													<td class="inbox-small-cells"><i class="bi bi-bookmark-fill text-danger"></i></td>
													<td class="view-message dont-show fw-semibold">Laura Gaffin, S P N </td>
													<td class="view-message">Your Website On Google (Higher Rankings Are Better)</td>
													<td class="view-message text-end fw-semibold">August 10</td>
												</tr>
												<tr class="">
													<td class="inbox-small-cells">
														<label class="custom-control custom-checkbox mb-0">
															<input class="form-check-input" type="checkbox" id="checkboxNoLabel19" value="" aria-label="...">
														</label>
													</td>
													<td class="inbox-small-cells"><i class="bi bi-star-fill"></i></td>
													<td class="inbox-small-cells"><i class="bi bi-bookmark-fill"></i></td>
													<td class="view-message dont-show fw-semibold">Facebook</td>
													<td class="view-message view-message">Alireza Zare Login faild</td>
													<td class="view-message text-end fw-semibold">feb 14</td>
												</tr>
												<tr class="">
													<td class="inbox-small-cells">
														<label class="custom-control custom-checkbox mb-0">
															<input class="form-check-input" type="checkbox" id="checkboxNoLabel20" value="" aria-label="...">
														</label>
													</td>
													<td class="inbox-small-cells"><i class="bi bi-star-fill inbox-started"></i></td>
													<td class="inbox-small-cells"><i class="bi bi-bookmark-fill"></i></td>
													<td class="view-message dont-show fw-semibold">AddMe.com</td>
													<td class="view-message">Submit Your Website to the AddMe Business Directory</td>
													<td class="view-message text-end fw-semibold">August 10</td>
												</tr>
												<tr class="">
													<td class="inbox-small-cells">
														<label class="custom-control custom-checkbox mb-0">
															<input class="form-check-input" type="checkbox" id="checkboxNoLabel21" value="" aria-label="...">
														</label>
													</td>
													<td class="inbox-small-cells"><i class="bi bi-star-fill"></i></td>
													<td class="inbox-small-cells"><i class="bi bi-bookmark-fill"></i></td>
													<td class="view-message dont-show fw-semibold">Terri Rexer, S P N</td>
													<td class="view-message view-message">Forget Google AdWords: Un-Limited Clicks fo</td>
													<td class="view-message text-end fw-semibold">April 14</td>
												</tr>

											</tbody>
										</table>

									</div>
								</div>
							</div>
						</div>
						<ul class="pagination mb-4">
							<li class="page-item page-prev disabled">
								<a class="page-link" href="javascript:void(0);" tabindex="-1">Prev</a>
							</li>
							<li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
							<li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
							<li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
							<li class="page-item"><a class="page-link" href="javascript:void(0);">4</a></li>
							<li class="page-item"><a class="page-link" href="javascript:void(0);">5</a></li>
							<li class="page-item page-next">
								<a class="page-link" href="javascript:void(0);">Next</a>
							</li>
						</ul>
					</div>
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
                      <a href="notifications.php"><span>Notifications</span></a>
                      <a class="ms-auto lh-1" href="javascript:void(0);" data-bs-dismiss="alert" aria-label="Close"><i class="fe fe-x text-muted"></i></a>
                    </div>
                    <div class="p-2 border br-5 d-flex align-items-center text-muted mb-2 alert">
                      <a href="alerts.php"><span>Alerts</span></a>
                      <a class="ms-auto lh-1" href="javascript:void(0);" data-bs-dismiss="alert" aria-label="Close"><i class="fe fe-x text-muted"></i></a>
                    </div>
                    <div class="p-2 border br-5 d-flex align-items-center text-muted mb-0 alert">
                      <a href="mail.php"><span>Mail</span></a>
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
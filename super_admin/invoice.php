<?php include("layout/header.php"); ?>

		<!-- Start::app-content -->
		<div class="main-content app-content">
			<div class="container-fluid">

				<!-- Page Header -->
				<div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
				    <div class="">
				        <h1 class="page-title fw-semibold fs-20 mb-0"> Invoice</h1>
				        <div class="">
				            <nav>
				                <ol class="breadcrumb mb-0">
				                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
				                    <li class="breadcrumb-item active" aria-current="page"> Invoice</li>
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
					<div class="col-md-12">
						<div class="card custom-card">
							<div class="card-body">
								<div class="clearfix">
									<div class="float-start">
										<h3 class="card-title mb-0 fs-16">#INV-526</h3>
									</div>
									<div class="float-end">
										<h3 class="card-title fs-16">Date: 12-09-2019</h3>
									</div>
								</div>
								<hr class="mb-2 mt-1">
								<div class="row">
									<div class="col-lg-6 ">
										<p class="h3">Invoice Form:</p>
										<address>
											Street Address<br>
											State, City<br>
											Region, Postal Code<br>
											yourdomain@example.com
										</address>
									</div>
									<div class="col-lg-6 text-end">
										<p class="h3">Invoice To:</p>
										<address>
											Street Address<br>
											State, City<br>
											Region, Postal Code<br>
											ypurdomain@example.com
										</address>
									</div>
								</div>
								<div class="table-responsive push">
									<table class="table text-nowrap table-hover border">
										<tbody>
											<tr class=" ">
												<th class="text-center fw-semibold"></th>
												<th class="fw-semibold">Item</th>
												<th class="text-center fw-semibold">Quantity</th>
												<th class="text-end fw-semibold">Unit Price</th>
												<th class="text-end fw-semibold">Sub Total</th>
											</tr>
											<tr>
												<td class="text-center">1</td>
												<td>
													<p class="font-w600 mb-1">Logo Design</p>
													<div class="text-muted">
														<div class="text-muted">Sed ut perspiciatis unde omnis iste
															natus error sit voluptatem accusantium doloremque laudantium
														</div>
													</div>
												</td>
												<td class="text-center">2</td>
												<td class="text-end">$674</td>
												<td class="text-end">$1,308</td>
											</tr>
											<tr>
												<td class="text-center">2</td>
												<td>
													<p class="font-w600 mb-1">Website wireframe for 2 pages</p>
													<div class="text-muted">At vero eos et accusamus et iusto odio
														dignissimos ducimus qui blanditiis praesentium voluptatum</div>
												</td>
												<td class="text-center">4</td>
												<td class="text-end">$1,500</td>
												<td class="text-end">$6,000</td>
											</tr>
											<tr>
												<td class="text-center">3</td>
												<td>
													<p class="font-w600 mb-1">PSD to HTML coding</p>
													<div class="text-muted">Duis aute irure dolor in reprehenderit in
														voluptate velit esse cillum dolore eu fugiat nulla pariatur
													</div>
												</td>
												<td class="text-center">3</td>
												<td class="text-end">$530</td>
												<td class="text-end">$1,690</td>
											</tr>
											<tr>
												<td class="text-center">4</td>
												<td>
													<p class="font-w600 mb-1">E-commerce Development</p>
													<div class="text-muted">When our power of choice is untrammelled and
														when nothing prevents our being able</div>
												</td>
												<td class="text-center">2</td>
												<td class="text-end">$800</td>
												<td class="text-end">$1,600</td>
											</tr>
											<tr>
												<td class="text-center">5</td>
												<td>
													<p class="font-w600 mb-1">Design and layout of 2 pages in Photoshop
													</p>
													<div class="text-muted">Lorem ipsum dolor sit amet, consectetur
														adipiscing elit, sed do eiusmod tempor incididunt ut labore
													</div>
												</td>
												<td class="text-center">2</td>
												<td class="text-end">$720</td>
												<td class="text-end">$1,440</td>
											</tr>
											<tr>
												<td colspan="4" class="fw-bold text-uppercase text-end">Total</td>
												<td class="fw-bold text-end h4">$12,038</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class="card-footer text-end">
								<button type="button" class="btn btn-primary mb-1"
									onclick="javascript:window.print();"><i class="si si-wallet"></i> Pay
									Invoice</button>
								<button type="button" class="btn btn-success mb-1"
									onclick="javascript:window.print();"><i class="si si-paper-plane"></i> Send
									Invoice</button>
								<button type="button" class="btn btn-info mb-1" onclick="javascript:window.print();"><i
										class="si si-printer"></i> Print Invoice</button>
							</div>
						</div>
					</div><!-- COL-END -->
				</div>
				<!-- ROW-1 CLOSED -->
			</div>
		</div>
		<!-- End::app-content -->
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
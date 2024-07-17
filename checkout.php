<?php include("layout/header.php"); ?>

		<!--APP-CONTENT START-->
		<div class="main-content app-content">
			<div class="container-fluid">

				<!-- Page Header -->
				<div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
				    <div class="">
				        <h1 class="page-title fw-semibold fs-20 mb-0">Checkout</h1>
				        <div class="">
				            <nav>
				                <ol class="breadcrumb mb-0">
				                    <li class="breadcrumb-item"><a href="#">E-Commerce</a></li>
				                    <li class="breadcrumb-item active" aria-current="page">Checkout</li>
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
					<div class="col-xl-8 col-md-12">
						<div class="card custom-card">
							<div class="card-header">
								<h3 class="card-title">Billing Information</h3>
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col-sm-6 col-md-6">
										<div class="form-group mb-3">
											<label class="form-label">First Name <span class="text-red">*</span></label>
											<input type="text" class="form-control" placeholder="First name">
										</div>
									</div>
									<div class="col-sm-6 col-md-6">
										<div class="form-group mb-3">
											<label class="form-label">Last Name <span class="text-red">*</span></label>
											<input type="text" class="form-control" placeholder="Last name">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group mb-3">
											<label class="form-label">Company Name <span
													class="text-red">*</span></label>
											<input type="text" class="form-control" placeholder="Company name">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group mb-3">
											<label class="form-label">Email address <span
													class="text-red">*</span></label>
											<input type="email" class="form-control" placeholder="Email">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group mb-3">
											<label class="form-label">Country <span class="text-red">*</span></label>
											<select class="form-control" data-trigger name="choices-single-default" id="choices-single-default">
												<option value="">Choose One</option> 
												<option value="1">Germany</option>
												<option value="2">Canada</option>
												<option value="3">Usa</option>
												<option value="4">Aus</option>
											</select>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group mb-3">
											<label class="form-label">Address <span class="text-red">*</span></label>
											<input type="text" class="form-control" placeholder="Home Address">
										</div>
									</div>
									<div class="col-sm-6 col-md-6">
										<div class="form-group mb-3">
											<label class="form-label">City <span class="text-red">*</span></label>
											<input type="text" class="form-control" placeholder="City">
										</div>
									</div>
									<div class="col-sm-6 col-md-6">
										<div class="form-group mb-3">
											<label class="form-label">Postal Code <span
													class="text-red">*</span></label>
											<input type="number" class="form-control" placeholder="ZIP Code">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="card custom-card">
							<div class="card-header">
								<h3 class="card-title">Payment Information</h3>
							</div>
							<div class="card-body">
								<div class="card-pay">
									<ul class="tabs-menu nav">
										<li class=""><a href="#tab20" class="active" data-bs-toggle="tab"><i
													class="ri-bank-card-line align-bottom fs-16"></i> Credit Card</a></li>
										<li><a href="#tab21" data-bs-toggle="tab" class=""><i class="ri-paypal-fill align-bottom fs-16"></i>
												Paypal</a></li>
										<li><a href="#tab22" data-bs-toggle="tab" class=""><i
													class="ri-bank-fill align-bottom fs-16"></i> Bank Transfer</a></li>
									</ul>
									<div class="tab-content">
										<div class="tab-pane active show" id="tab20">
											<div class="bg-danger-transparent-2 text-danger br-3 mb-4" role="alert">
												Please Enter Valid Details</div>
											<div class="form-group mb-3">
												<label class="form-label">Card Holder Name</label>
												<input type="text" class="form-control" placeholder="First Name">
											</div>
											<div class="form-group mb-3">
												<label class="form-label">Card number</label>
												<div class="input-group">
													<input type="text" class="form-control" placeholder="Search for...">
													<span class="input-group-text btn btn-success shadow-none">
														<i class="ri-visa-fill"></i> &nbsp; <i
															class="ri-bank-card-fill"></i> &nbsp;
														<i class="ri-mastercard-fill"></i>
													</span>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-8">
													<div class="form-group mb-3">
														<label class="form-label">Expiration</label>
														<div class="input-group">
															<input type="number" class="form-control" placeholder="MM"
																name="Month">
															<input type="number" class="form-control" placeholder="YY"
																name="Year">
														</div>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<label class="form-label">CVV <i
																class="fa fa-question-circle"></i></label>
														<input type="number" class="form-control" required="">
													</div>
												</div>
											</div>
											<a href="javascript:void(0);" class="btn  btn-lg btn-primary">Confirm</a>
										</div>
										<div class="tab-pane" id="tab21">
											<p>Paypal is easiest way to pay online</p>
											<p><a href="javascript:void(0);" class="btn btn-primary"><i
														class="fa fa-paypal"></i> Log in my Paypal</a></p>
											<p class="mb-0"><strong>Note:</strong> Nemo enim ipsam voluptatem quia
												voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni
												dolores eos qui ratione voluptatem sequi nesciunt. </p>
										</div>
										<div class="tab-pane" id="tab22">
											<p>Bank account details</p>
											<dl class="card-text">
												<dt>BANK: </dt>
												<dd> THE UNION BANK 0456</dd>
											</dl>
											<dl class="card-text">
												<dt>Account Number: </dt>
												<dd> 67542897653214</dd>
											</dl>
											<dl class="card-text">
												<dt>IBAN: </dt>
												<dd>543218769</dd>
											</dl>
											<p class="mb-0"><strong>Note:</strong> Nemo enim ipsam voluptatem quia
												voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni
												dolores eos qui ratione voluptatem sequi nesciunt. </p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-md-12">
						<div class="card custom-card cart">
							<div class="card-header">
								<h3 class="card-title">Your Order</h3>
							</div>
							<div class="card-body">
								<div class="d-flex">
									<div class="d-flex">
										<img class="avatar img-fluid avatar-xl border p-0 br-7"
											src="../assets/images/pngs/9.png" alt="img">
										<div class="ms-3 mt-2">
											<h4 class="mb-1 fw-semibold fs-14"><a
													href="javascript:void(0);">bracelets</a></h4>
											<div class="mb-2 text-warning fs-14">
												<i class="ri-star-fill fs-16"></i>
												<i class="ri-star-fill fs-16"></i>
												<i class="ri-star-fill fs-16"></i>
												<i class="ri-star-half-line fs-16"></i>
												<i class="ri-star-line fs-16"></i>
											</div>
										</div>
									</div>
									<div class="ms-auto my-auto">
										<span class="me-4 my-auto fs-16 fw-semibold">$438</span>
									</div>
								</div>
								<div class="d-flex mt-4">
									<div class="d-flex">
										<img class="avatar img-fluid avatar-xl border p-0 br-7"
											src="../assets/images/pngs/1.png" alt="img">
										<div class="ms-3 mt-2">
											<h4 class="mb-1 fw-semibold fs-14"><a href="javascript:void(0);">Cup</a>
											</h4>
											<div class="mb-2 text-warning fs-14">
												<i class="ri-star-fill fs-16"></i>
												<i class="ri-star-fill fs-16"></i>
												<i class="ri-star-fill fs-16"></i>
												<i class="ri-star-half-line fs-16"></i>
												<i class="ri-star-line fs-16"></i>
											</div>
										</div>
									</div>
									<div class="ms-auto my-auto">
										<span class="me-4 my-auto fs-16 fw-semibold">$765</span>
									</div>
								</div>
								<div class="d-flex mt-4">
									<div class="d-flex">
										<img class="avatar img-fluid avatar-xl border p-0 br-7"
											src="../assets/images/pngs/6.png" alt="img">
										<div class="ms-3 mt-2">
											<h4 class="mb-1 fw-semibold fs-14"><a href="javascript:void(0);">Goggles</a>
											</h4>
											<div class="mb-2 text-warning fs-14">
												<i class="ri-star-fill fs-16"></i>
												<i class="ri-star-fill fs-16"></i>
												<i class="ri-star-fill fs-16"></i>
												<i class="ri-star-half-line fs-16"></i>
												<i class="ri-star-line fs-16"></i>
											</div>
										</div>
									</div>
									<div class="ms-auto my-auto">
										<span class="me-4 my-auto fs-16 fw-semibold">$543</span>
									</div>
								</div>
								<table class="table mt-4">
									<tr>
										<td class="border-top-0 border-bottom-0">Sub Total</td>
										<td class="text-end fw-bold border-top-0 border-bottom-0">$4,360</td>
									</tr>
									<tr>
										<td class="border-top-0 border-bottom-0">Discount</td>
										<td class="text-end fw-bold border-top-0 border-bottom-0">5%</td>
									</tr>
									<tr>
										<td class="border-top-0 border-bottom-0">Shipping</td>
										<td class="text-end fw-bold border-top-0 border-bottom-0">Free</td>
									</tr>
									<tr>
										<td class="fs-20 fw-bold border-top-0 border-bottom-0">Total</td>
										<td class="text-end fs-20 fw-bold border-top-0 border-bottom-0">$3,976</td>
									</tr>
								</table>
							</div>
							<div class="card-footer text-end">
								<a href="javascript:void(0);" class="btn btn-primary">Place Order</a>
							</div>
						</div>
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
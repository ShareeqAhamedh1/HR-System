<?php include("layout/header.php"); ?>
		<!--APP-CONTENT START-->
		<div class="main-content app-content">
			<div class="container-fluid">

				<!-- Page Header -->
				<div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
				    <div class="">
				        <h1 class="page-title fw-semibold fs-20 mb-0">Shopping Cart</h1>
				        <div class="">
				            <nav>
				                <ol class="breadcrumb mb-0">
				                    <li class="breadcrumb-item"><a href="#">E-Commerce</a></li>
				                    <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
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
					<div class="col-xl-8 col-lg-12">
						<div class="card cart custom-card">
							<div class="card-header">
								<h3 class="card-title">Shopping Cart</h3>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-bordered table-vcenter text-nowrap mb-0">
										<thead>
											<tr class="border-top">
												<th class="w-5">Product</th>
												<th>Title</th>
												<th>Price</th>
												<th class="w-150">Quantity</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<img src="../assets/images/pngs/1.png" alt="" class="cart-img">
												</td>
												<td>laborum et dolorum fuga</td>
												<td class="fw-bold">$568</td>
												<td class="product-quantity-container">
                                                    <div class="input-group rounded flex-nowrap">
                                                        <button class="btn btn-icon btn-light input-group-text flex-fill product-quantity-minus border-end-0" ><i class="ri-subtract-line"></i></button>
                                                        <input type="text" class="form-control form-control-sm text-center w-100" aria-label="quantity" id="product-quantity" value="2">
                                                        <button class="btn btn-icon btn-light input-group-text flex-fill product-quantity-plus border-start-0" ><i class="ri-add-line"></i></button>
                                                    </div>
                                                </td>
												<td>
													<a href="javascript:void(0)"
														class="btn btn-icon btn-secondary-transparent btn-wave waves-effect waves-light"
														data-bs-toggle="tooltip" data-bs-placement="top"
														title="Save for Wishlist"><i class="ri-heart-line"></i></a>
													<a href="javascript:void(0)"
														class="btn btn-icon btn-info-transparent btn-wave waves-effect waves-light"
														data-bs-toggle="tooltip" data-bs-placement="top"
														title="Remove"><i class="ri-delete-bin-7-line"></i></a>
												</td>
											</tr>
											<tr>
												<td>
													<img src="../assets/images/pngs/4.png" alt="" class="cart-img">
												</td>
												<td>laborum et dolorum fuga</td>
												<td class="fw-bold">$1,027</td>
												<td class="product-quantity-container">
                                                    <div class="input-group rounded flex-nowrap">
                                                        <button class="btn btn-icon btn-light input-group-text flex-fill product-quantity-minus border-end-0" ><i class="ri-subtract-line"></i></button>
                                                        <input type="text" class="form-control form-control-sm text-center w-100" aria-label="quantity" id="product-quantity1" value="2">
                                                        <button class="btn btn-icon btn-light input-group-text flex-fill product-quantity-plus border-start-0" ><i class="ri-add-line"></i></button>
                                                    </div>
                                                </td>
												<td>
													<a href="javascript:void(0)"
														class="btn btn-icon btn-secondary-transparent btn-wave waves-effect waves-light"
														data-bs-toggle="tooltip" data-bs-placement="top"
														title="Save for Wishlist"><i class="ri-heart-line"></i></a>
													<a href="javascript:void(0)"
														class="btn btn-icon btn-info-transparent btn-wave waves-effect waves-light"
														data-bs-toggle="tooltip" data-bs-placement="top"
														title="Remove"><i class="ri-delete-bin-7-line"></i></a>
												</td>
											</tr>
											<tr>
												<td>
													<img src="../assets/images/pngs/2.png" alt="" class="cart-img">
												</td>
												<td>laborum et dolorum fuga</td>
												<td class="fw-bold">$1,027</td>
												<td class="product-quantity-container">
                                                    <div class="input-group rounded flex-nowrap">
                                                        <button class="btn btn-icon btn-light input-group-text flex-fill product-quantity-minus border-end-0" ><i class="ri-subtract-line"></i></button>
                                                        <input type="text" class="form-control form-control-sm text-center w-100" aria-label="quantity" id="product-quantity2" value="2">
                                                        <button class="btn btn-icon btn-light input-group-text flex-fill product-quantity-plus border-start-0" ><i class="ri-add-line"></i></button>
                                                    </div>
                                                </td>
												<td>
													<a href="javascript:void(0)"
														class="btn btn-icon btn-secondary-transparent btn-wave waves-effect waves-light"
														data-bs-toggle="tooltip" data-bs-placement="top"
														title="Save for Wishlist"><i class="ri-heart-line"></i></a>
													<a href="javascript:void(0)"
														class="btn btn-icon btn-info-transparent btn-wave waves-effect waves-light"
														data-bs-toggle="tooltip" data-bs-placement="top"
														title="Remove"><i class="ri-delete-bin-7-line"></i></a>
												</td>
											</tr>
											<tr>
												<td>
													<img src="../assets/images/pngs/5.png" alt="" class="cart-img">
												</td>
												<td>laborum et dolorum fuga</td>
												<td class="fw-bold">$1,027</td>
												<td class="product-quantity-container">
                                                    <div class="input-group rounded flex-nowrap">
                                                        <button class="btn btn-icon btn-light input-group-text flex-fill product-quantity-minus border-end-0" ><i class="ri-subtract-line"></i></button>
                                                        <input type="text" class="form-control form-control-sm text-center w-100" aria-label="quantity" id="product-quantity3" value="2">
                                                        <button class="btn btn-icon btn-light input-group-text flex-fill product-quantity-plus border-start-0" ><i class="ri-add-line"></i></button>
                                                    </div>
                                                </td>
												<td>
													<a href="javascript:void(0)"
														class="btn btn-icon btn-secondary-transparent btn-wave waves-effect waves-light"
														data-bs-toggle="tooltip" data-bs-placement="top"
														title="Save for Wishlist"><i class="ri-heart-line"></i></a>
													<a href="javascript:void(0)"
														class="btn btn-icon btn-info-transparent btn-wave waves-effect waves-light"
														data-bs-toggle="tooltip" data-bs-placement="top"
														title="Remove"><i class="ri-delete-bin-7-line"></i></a>
												</td>
											</tr>
											<tr>
												<td>
													<img src="../assets/images/pngs/6.png" alt="" class="cart-img">
												</td>
												<td>laborum et dolorum fuga</td>
												<td class="fw-bold">$1,027</td>
												<td class="product-quantity-container">
                                                    <div class="input-group rounded flex-nowrap">
                                                        <button class="btn btn-icon btn-light input-group-text flex-fill product-quantity-minus border-end-0" ><i class="ri-subtract-line"></i></button>
                                                        <input type="text" class="form-control form-control-sm text-center w-100" aria-label="quantity" id="product-quantity4" value="2">
                                                        <button class="btn btn-icon btn-light input-group-text flex-fill product-quantity-plus border-start-0" ><i class="ri-add-line"></i></button>
                                                    </div>
                                                </td>
												<td>
													<a href="javascript:void(0)"
														class="btn btn-icon btn-secondary-transparent btn-wave waves-effect waves-light"
														data-bs-toggle="tooltip" data-bs-placement="top"
														title="Save for Wishlist"><i class="ri-heart-line"></i></a>
													<a href="javascript:void(0)"
														class="btn btn-icon btn-info-transparent btn-wave waves-effect waves-light"
														data-bs-toggle="tooltip" data-bs-placement="top"
														title="Remove"><i class="ri-delete-bin-7-line"></i></a>
												</td>
											</tr>
											<tr>
												<td>
													<img src="../assets/images/pngs/7.png" alt="" class="cart-img">
												</td>
												<td>laborum et dolorum fuga</td>
												<td class="fw-bold">$1,027</td>
												<td class="product-quantity-container">
                                                    <div class="input-group rounded flex-nowrap">
                                                        <button class="btn btn-icon btn-light input-group-text flex-fill product-quantity-minus border-end-0" ><i class="ri-subtract-line"></i></button>
                                                        <input type="text" class="form-control form-control-sm text-center w-100" aria-label="quantity" id="product-quantity5" value="2">
                                                        <button class="btn btn-icon btn-light input-group-text flex-fill product-quantity-plus border-start-0" ><i class="ri-add-line"></i></button>
                                                    </div>
                                                </td>
												<td>
													<a href="javascript:void(0)"
														class="btn btn-icon btn-secondary-transparent btn-wave waves-effect waves-light"
														data-bs-toggle="tooltip" data-bs-placement="top"
														title="Save for Wishlist"><i class="ri-heart-line"></i></a>
													<a href="javascript:void(0)"
														class="btn btn-icon btn-info-transparent btn-wave waves-effect waves-light"
														data-bs-toggle="tooltip" data-bs-placement="top"
														title="Remove"><i class="ri-delete-bin-7-line"></i></a>
												</td>
											</tr>
											<tr class="border-bottom">
												<td>
													<img src="../assets/images/pngs/8.png" alt="" class="cart-img">
												</td>
												<td>laborum et dolorum fuga</td>
												<td class="fw-bold">$1,589</td>
												<td class="product-quantity-container">
                                                    <div class="input-group rounded flex-nowrap">
                                                        <button class="btn btn-icon btn-light input-group-text flex-fill product-quantity-minus border-end-0" ><i class="ri-subtract-line"></i></button>
                                                        <input type="text" class="form-control form-control-sm text-center w-100" aria-label="quantity" id="product-quantity6" value="2">
                                                        <button class="btn btn-icon btn-light input-group-text flex-fill product-quantity-plus border-start-0" ><i class="ri-add-line"></i></button>
                                                    </div>
                                                </td>
												<td>
													<a href="javascript:void(0)"
														class="btn btn-icon btn-secondary-transparent btn-wave waves-effect waves-light"
														data-bs-toggle="tooltip" data-bs-placement="top"
														title="Save for Wishlist"><i class="ri-heart-line"></i></a>
													<a href="javascript:void(0)"
														class="btn btn-icon btn-info-transparent btn-wave waves-effect waves-light"
														data-bs-toggle="tooltip" data-bs-placement="top"
														title="Remove"><i class="ri-delete-bin-7-line"></i></a>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-12">
						<div class="card custom-card">
							<div class="card-header">
								<h3 class="card-title">Have coupon?</h3>
							</div>
							<div class="card-body">
								<form>
									<div class="form-group">
										<div class="input-group"> <input type="text" class="form-control coupon"
												placeholder="Coupon code"> <span class="input-group-btn"> <button
													class="btn btn-primary btn-apply coupon rounded-0 rounded-end-2 py-2">Apply</button>
											</span> </div>
									</div>
								</form>
							</div>
						</div>
						<div class="card custom-card">
							<div class="card-header">
								<h3 class="card-title">Price Details</h3>
							</div>
							<div class="card-body">
								<table class="table border-top-0">
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
							<div class="card-footer">
								<div class="btn-list">
									<a href="shop.html" class="btn btn-primary"><i
											class="fa fa-arrow-left me-1"></i>Continue Shopping</a>
									<a href="checkout.html" class="btn btn-success float-sm-end">Check out<i
											class="fa fa-arrow-right me-1"></i></a>
								</div>
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
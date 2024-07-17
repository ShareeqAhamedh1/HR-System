<?php include("layout/header.php"); ?>

		<!--APP-CONTENT START-->
		<div class="main-content app-content">
			<div class="container-fluid">

				<!-- Page Header -->
				<div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
				    <div class="">
				        <h1 class="page-title fw-semibold fs-20 mb-0">Shop</h1>
				        <div class="">
				            <nav>
				                <ol class="breadcrumb mb-0">
				                    <li class="breadcrumb-item"><a href="#">E-Commerce</a></li>
				                    <li class="breadcrumb-item active" aria-current="page">Shop</li>
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
				<div class="row row-cards">
					<div class="col-xl-3 col-lg-4">
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<form class="shop__filter card custom-card">
									<div class="card-header">
										<h3 class="card-title">
											Colors
										</h3>
									</div>
									<div class="card-body">
										<div class="row gutters-xs">
											<div class="col-auto">
												<label class="colorinput">
													<input name="color" type="radio" value="azure" class="colorinput-input" checked="">
													<span class="colorinput-color bg-azure"></span>
												</label>
											</div>
											<div class="col-auto">
												<label class="colorinput">
													<input name="color" type="radio" value="indigo" class="colorinput-input">
													<span class="colorinput-color bg-indigo"></span>
												</label>
											</div>
											<div class="col-auto">
												<label class="colorinput">
													<input name="color" type="radio" value="purple" class="colorinput-input">
													<span class="colorinput-color bg-purple"></span>
												</label>
											</div>
											<div class="col-auto">
												<label class="colorinput">
													<input name="color" type="radio" value="pink" class="colorinput-input">
													<span class="colorinput-color bg-pink"></span>
												</label>
											</div>
											<div class="col-auto">
												<label class="colorinput">
													<input name="color" type="radio" value="red" class="colorinput-input">
													<span class="colorinput-color bg-red"></span>
												</label>
											</div>
											<div class="col-auto">
												<label class="colorinput">
													<input name="color" type="radio" value="orange" class="colorinput-input">
													<span class="colorinput-color bg-orange"></span>
												</label>
											</div>
											<div class="col-auto">
												<label class="colorinput">
													<input name="color" type="radio" value="yellow" class="colorinput-input">
													<span class="colorinput-color bg-yellow"></span>
												</label>
											</div>
											<div class="col-auto">
												<label class="colorinput">
													<input name="color" type="radio" value="lime" class="colorinput-input">
													<span class="colorinput-color bg-lime"></span>
												</label>
											</div>
											<div class="col-auto">
												<label class="colorinput">
													<input name="color" type="radio" value="green" class="colorinput-input">
													<span class="colorinput-color bg-green"></span>
												</label>
											</div>
											<div class="col-auto">
												<label class="colorinput">
													<input name="color" type="radio" value="teal" class="colorinput-input">
													<span class="colorinput-color bg-teal"></span>
												</label>
											</div>
										</div>
									</div>
								</form>
								<div class="card custom-card">
									<div class="card-header">
										<div class="card-title"> Categories &amp; Fliters</div>
									</div>
									<div class="card-body">
										<div class="custom-checkbox custom-control mb-2">
											<input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..." checked>
											<label  class="custom-control-label">Mens</label>
										</div>
										<div class="custom-checkbox mb-2 custom-control">
											<input class="form-check-input" type="checkbox" id="checkboxNoLabel2" value="" aria-label="...">
											<label  class="custom-control-label">Womens</label>
										</div>
										<div class="custom-checkbox mb-2 custom-control">
											<input class="form-check-input" type="checkbox" id="checkboxNoLabel3" value="" aria-label="...">
											<label  class="custom-control-label">Kids</label>
										</div>
										<div class="custom-checkbox mb-2 custom-control">
											<input class="form-check-input" type="checkbox" id="checkboxNoLabel4" value="" aria-label="...">
											<label  class="custom-control-label">Others</label>
										</div>
										<div class="form-group mt-3">
											<label class="form-label">Category</label>
											<select class="form-control" data-trigger name="choices-single-default" id="choices-single-default2">
												<option value="">--Select--</option> 
												<option value="1">Dress</option>
												<option value="2">Bags &amp; Purses</option>
												<option value="3">Coat &amp; Jacket</option>
												<option value="4">Beauty</option>
												<option value="5">Jeans</option>
												<option value="5">Jewellery</option>
												<option value="5">Electronics</option>
												<option value="5">Sports</option>
												<option value="5">Technology</option>
												<option value="5">Watches</option>
												<option value="5">Accessories</option>
											</select>
										</div>
										<div class="form-group mt-2">
											<label class="form-label">Brand</label>
											<select class="form-control" data-trigger name="choices-single-default" id="choices-single-default3">
												<option value="">--Select--</option> 
												<option value="1">White</option>
												<option value="2">Black</option>
												<option value="3">Red</option>
												<option value="4">Green</option>
												<option value="5">Blue</option>
												<option value="6">Yellow</option>
											</select>
										</div>
										<div class="form-group mt-2">
											<label class="form-label">Type</label>
											<select class="form-control" data-trigger name="choices-single-default" id="choices-single-default4">
												<option value="">--Select--</option> 
												<option value="1">Extra Small</option>
												<option value="2">Small</option>
												<option value="3">Medium</option>
												<option value="4">Large</option>
												<option value="5">Extra Large</option>
											</select>
										</div>
										<div class="form-group mt-2 mb-3">
											<label class="form-label">Color</label>
											<select class="form-control" data-trigger name="choices-single-default" id="choices-single-default5">
												<option value="">--Select--</option> 
												<option value="1">White</option>
												<option value="2">Black</option>
												<option value="3">Red</option>
												<option value="4">Green</option>
												<option value="5">Blue</option>
												<option value="6">Yellow</option>
											</select>
										</div>
										<a class="btn btn-primary mt-1" href="javascript:void(0);">Apply Filter</a>
										<a class="btn btn-danger mt-1" href="javascript:void(0);">Search Now</a>
									</div>
								</div>
							</div>
						</div>
					</div><!-- COL-END -->
					<div class="col-xl-9 col-lg-8">
						<div class="card custom-card">
							<div class="row card-body p-2">
								<div class="col-sm-12">
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Search ...">
										<button  class="input-group-text btn btn-primary">Search</button>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-6 col-xl-4">
								<div class="card custom-card item-card">
									<div class="ribbone">
										<div class="ribbon"><span>new</span></div>
									</div>
									<div class="product-grid6  card-body p-0">
										<div class="product-image6">
											<a href="shop-description.html">
												<img class="img-fluid w-100" src="../assets/images/pngs/9.png" alt="img">
											</a>
										</div>
										<div class="product-content text-center">
											<div class="mb-2 text-warning">
												<i class="ri-star-fill fs-16"></i>
												<i class="ri-star-fill fs-16"></i>
												<i class="ri-star-fill fs-16"></i>
												<i class="ri-star-half-line fs-16"></i>
												<i class="ri-star-line fs-16"></i>
											</div>
											<h4 class="title"><a href="javascript:void(0);">bracelets</a></h4>
											<div class="price">$16,599<span class="ms-4">$19,799</span></div>
										</div>
										<ul class="icons">
											<li><a href="shop-description.html" class="btn" data-bs-placement="top" data-bs-toggle="tooltip" title="" data-bs-original-title="Quick View"><i class="ri-eye-line"></i></a></li>
											<li><a href="shop-description.html" class="btn" data-bs-placement="top" data-bs-toggle="tooltip" title="" data-bs-original-title="Add to Wishlist"><i class="ri-heart-line"></i></a></li>
											<li><a href="shop-description.html" class="btn" data-bs-placement="top" data-bs-toggle="tooltip" title="" data-bs-original-title="Add to Cart"><i class="ri-shopping-cart-2-fill"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xl-4">
								<div class="card custom-card item-card">
									<span class="ribbon1">
										<span>25%</span>
									</span>
									<div class="product-grid6 card-body p-0">
										<div class="product-image6">
											<a href="shop-description.html">
												<img class="img-fluid w-100" src="../assets/images/pngs/1.png" alt="img">
											</a>
										</div>
										<div class="product-content text-center">
											<div class="text-center mb-2 text-warning">
												<i class="ri-star-fill fs-16"></i>
												<i class="ri-star-fill fs-16"></i>
												<i class="ri-star-half-line fs-16"></i>
												<i class="ri-star-line fs-16"></i>
												<i class="ri-star-line fs-16"></i>
											</div>
											<h4 class="title"><a href="javascript:void(0);">Cup</a></h4>
											<div class="price">$529<span class="ms-4">$799</span></div>
										</div>
										<ul class="icons">
											<li><a href="shop-description.html" class="btn" data-bs-placement="top" data-bs-toggle="tooltip" title="" data-bs-original-title="Quick View"><i class="ri-eye-line"></i></a></li>
											<li><a href="shop-description.html" class="btn" data-bs-placement="top" data-bs-toggle="tooltip" title="" data-bs-original-title="Add to Wishlist"><i class="ri-heart-line"></i></a></li>
											<li><a href="shop-description.html" class="btn" data-bs-placement="top" data-bs-toggle="tooltip" title="" data-bs-original-title="Add to Cart"><i class="ri-shopping-cart-2-fill"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xl-4">
								<div class="card custom-card item-card">
									<div class="product-grid6  card-body p-0">
										<div class="product-image6">
											<a href="shop-description.html">
												<img class="img-fluid w-100" src="../assets/images/pngs/7.png" alt="img">
											</a>
										</div>
										<div class="product-content text-center">
											<div class="text-center mb-2 text-warning">
												<i class="ri-star-fill fs-16"></i>
												<i class="ri-star-fill fs-16"></i>
												<i class="ri-star-fill fs-16"></i>
												<i class="ri-star-fill fs-16"></i>
												<i class="ri-star-half-line fs-16"></i>
											</div>
											<h4 class="title"><a href="javascript:void(0);">Stool</a></h4>
											<div class="price">$25,239<span class="ms-4">$34,399</span></div>
										</div>
										<ul class="icons">
											<li><a href="shop-description.html" class="btn" data-bs-placement="top" data-bs-toggle="tooltip" title="" data-bs-original-title="Quick View"><i class="ri-eye-line"></i></a></li>
											<li><a href="shop-description.html" class="btn" data-bs-placement="top" data-bs-toggle="tooltip" title="" data-bs-original-title="Add to Wishlist"><i class="ri-heart-line"></i></a></li>
											<li><a href="shop-description.html" class="btn" data-bs-placement="top" data-bs-toggle="tooltip" title="" data-bs-original-title="Add to Cart"><i class="ri-shopping-cart-2-fill"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xl-4">
								<div class="card custom-card item-card">
									<span class="ribbon1">
										<span>25%</span>
									</span>
									<div class="product-grid6  card-body p-0">
										<div class="product-image6">
											<a href="shop-description.html">
												<img class="img-fluid w-100" src="../assets/images/pngs/2.png" alt="img">
											</a>
										</div>
										<div class="product-content text-center">
											<div class="text-center mb-2 text-warning">
												<i class="ri-star-fill fs-16"></i>
												<i class="ri-star-fill fs-16"></i>
												<i class="ri-star-fill fs-16"></i>
												<i class="ri-star-half-line fs-16"></i>
												<i class="ri-star-line fs-16"></i>
											</div>
											<h4 class="title"><a href="javascript:void(0);">Video Game</a></h4>
											<div class="price">$345<span class="ms-4">$459</span></div>
										</div>
										<ul class="icons">
											<li><a href="shop-description.html" class="btn" data-bs-placement="top" data-bs-toggle="tooltip" title="" data-bs-original-title="Quick View"><i class="ri-eye-line"></i></a></li>
											<li><a href="shop-description.html" class="btn" data-bs-placement="top" data-bs-toggle="tooltip" title="" data-bs-original-title="Add to Wishlist"><i class="ri-heart-line"></i></a></li>
											<li><a href="shop-description.html" class="btn" data-bs-placement="top" data-bs-toggle="tooltip" title="" data-bs-original-title="Add to Cart"><i class="ri-shopping-cart-2-fill"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xl-4">
								<div class="card custom-card item-card">
									<div class="product-grid6  card-body p-0 ">
										<div class="product-image6">
											<a href="shop-description.html">
												<img class="img-fluid w-100" src="../assets/images/pngs/4.png" alt="img">
											</a>
										</div>
										<div class="product-content text-center">
											<div class="text-center mb-2 text-warning">
												<i class="ri-star-fill fs-16"></i>
												<i class="ri-star-half-line fs-16"></i>
												<i class="ri-star-line fs-16"></i>
												<i class="ri-star-line fs-16"></i>
												<i class="ri-star-line fs-16"></i>
											</div>
											<h4 class="title"><a href="javascript:void(0);">Flower Pot</a></h4>
											<div class="price">$277<span class="ms-4">$456</span></div>
										</div>
										<ul class="icons">
											<li><a href="shop-description.html" class="btn" data-bs-placement="top" data-bs-toggle="tooltip" title="" data-bs-original-title="Quick View"><i class="ri-eye-line"></i></a></li>
											<li><a href="shop-description.html" class="btn" data-bs-placement="top" data-bs-toggle="tooltip" title="" data-bs-original-title="Add to Wishlist"><i class="ri-heart-line"></i></a></li>
											<li><a href="shop-description.html" class="btn" data-bs-placement="top" data-bs-toggle="tooltip" title="" data-bs-original-title="Add to Cart"><i class="ri-shopping-cart-2-fill"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xl-4">
								<div class="card custom-card item-card">
									<div class="product-grid6  card-body p-0">
										<div class="product-image6">
											<a href="shop-description.html">
												<img class="img-fluid w-100" src="../assets/images/pngs/8.png" alt="img">
											</a>
										</div>
										<div class="product-content text-center">
											<div class="text-center mb-2 text-warning">
												<i class="ri-star-fill fs-16"></i>
												<i class="ri-star-fill fs-16"></i>
												<i class="ri-star-fill fs-16"></i>
												<i class="ri-star-fill fs-16"></i>
												<i class="ri-star-half-line fs-16"></i>
											</div>
											<h4 class="title"><a href="javascript:void(0);">Watch</a></h4>
											<div class="price">$567<span class="ms-4">$866</span></div>
										</div>
										<ul class="icons">
											<li><a href="shop-description.html" class="btn" data-bs-placement="top" data-bs-toggle="tooltip" title="" data-bs-original-title="Quick View"><i class="ri-eye-line"></i></a></li>
											<li><a href="shop-description.html" class="btn" data-bs-placement="top" data-bs-toggle="tooltip" title="" data-bs-original-title="Add to Wishlist"><i class="ri-heart-line"></i></a></li>
											<li><a href="shop-description.html" class="btn" data-bs-placement="top" data-bs-toggle="tooltip" title="" data-bs-original-title="Add to Cart"><i class="ri-shopping-cart-2-fill"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xl-4">
								<div class="card custom-card item-card">
									<div class="product-grid6  card-body p-0">
										<div class="product-image6">
											<a href="shop-description.html">
												<img class="img-fluid w-100" src="../assets/images/pngs/3.png" alt="img">
											</a>
										</div>
										<div class="product-content text-center">
											<div class="text-center mb-2 text-warning">
												<i class="ri-star-fill fs-16"></i>
												<i class="ri-star-fill fs-16"></i>
												<i class="ri-star-half-line fs-16"></i>
												<i class="ri-star-line fs-16"></i>
												<i class="ri-star-line fs-16"></i>
											</div>
											<h4 class="title"><a href="javascript:void(0);">Headset</a></h4>
											<div class="price">$455<span class="ms-4">$567</span></div>
										</div>
										<ul class="icons">
											<li><a href="shop-description.html" class="btn" data-bs-placement="top" data-bs-toggle="tooltip" title="" data-bs-original-title="Quick View"><i class="ri-eye-line"></i></a></li>
											<li><a href="shop-description.html" class="btn" data-bs-placement="top" data-bs-toggle="tooltip" title="" data-bs-original-title="Add to Wishlist"><i class="ri-heart-line"></i></a></li>
											<li><a href="shop-description.html" class="btn" data-bs-placement="top" data-bs-toggle="tooltip" title="" data-bs-original-title="Add to Cart"><i class="ri-shopping-cart-2-fill"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xl-4">
								<div class="card custom-card item-card">
									<div class="product-grid6  card-body p-0">
										<div class="product-image6">
											<a href="shop-description.html">
												<img class="img-fluid w-100" src="../assets/images/pngs/5.png" alt="img">
											</a>
										</div>
										<div class="product-content text-center">
											<div class="text-center mb-2 text-warning">
												<i class="ri-star-fill fs-16"></i>
												<i class="ri-star-fill fs-16"></i>
												<i class="ri-star-fill fs-16"></i>
												<i class="ri-star-half-line fs-16"></i>
												<i class="ri-star-line fs-16"></i>
											</div>
											<h4 class="title"><a href="javascript:void(0);">Chair</a></h4>
											<div class="price">$345<span class="ms-4">$499</span></div>
										</div>
										<ul class="icons">
											<li><a href="shop-description.html" class="btn" data-bs-placement="top" data-bs-toggle="tooltip" title="" data-bs-original-title="Quick View"><i class="ri-eye-line"></i></a></li>
											<li><a href="shop-description.html" class="btn" data-bs-placement="top" data-bs-toggle="tooltip" title="" data-bs-original-title="Add to Wishlist"><i class="ri-heart-line"></i></a></li>
											<li><a href="shop-description.html" class="btn" data-bs-placement="top" data-bs-toggle="tooltip" title="" data-bs-original-title="Add to Cart"><i class="ri-shopping-cart-2-fill"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xl-4">
								<div class="card custom-card item-card">
									<span class="ribbon1">
										<span>30%</span>
									</span>
									<div class="product-grid6  card-body p-0">
										<div class="product-image6">
											<a href="shop-description.html">
												<img class="img-fluid w-100" src="../assets/images/pngs/6.png" alt="img">
											</a>
										</div>
										<div class="product-content text-center">
											<div class="text-center mb-2 text-warning">
												<i class="ri-star-fill fs-16"></i>
												<i class="ri-star-fill fs-16"></i>
												<i class="ri-star-fill fs-16"></i>
												<i class="ri-star-fill fs-16"></i>
												<i class="ri-star-half-line fs-16"></i>
											</div>
											<h4 class="title"><a href="javascript:void(0);">Goggles</a></h4>
											<div class="price">$543<span class="ms-4">$688</span></div>
										</div>
										<ul class="icons">
											<li><a href="shop-description.html" class="btn" data-bs-placement="top" data-bs-toggle="tooltip" title="" data-bs-original-title="Quick View"><i class="ri-eye-line"></i></a></li>
											<li><a href="shop-description.html" class="btn" data-bs-placement="top" data-bs-toggle="tooltip" title="" data-bs-original-title="Add to Wishlist"><i class="ri-heart-line"></i></a></li>
											<li><a href="shop-description.html" class="btn" data-bs-placement="top" data-bs-toggle="tooltip" title="" data-bs-original-title="Add to Cart"><i class="ri-shopping-cart-2-fill"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="mb-5">
							<div class="float-end">
								<ul class="pagination ">
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
					</div><!-- COL-END -->
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
<?php include("layout/header.php"); 

if(!isset($_SESSION['h_a_id'])){
    $_SESSION['h_a_id']=$_REQUEST['h_a_id'];
    $_SESSION['tic_id']=$_REQUEST['tic_id'];
    $h_a_id=$_SESSION['h_a_id'];
    $tic_id=$_SESSION['tic_id'];
}else{
    $h_a_id=$_SESSION['h_a_id'];
    $tic_id=$_SESSION['tic_id'];
}

?>

		<!--APP-CONTENT START-->
		<div class="main-content app-content">
			<div class="container-fluid">

				<!-- Page Header -->
				<div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
				    <div class="">
				        <h1 class="page-title fw-semibold fs-20 mb-0"> Raise a ticket</h1>
				        <div class="">
				            <nav>
				                <ol class="breadcrumb mb-0">
				                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
				                    <li class="breadcrumb-item active" aria-current="page"> Raise a ticket</li>
				                </ol>
				            </nav>
				        </div>
				    </div>
				    
				</div>
				<!-- Page Header Close -->


				<!-- Row -->
				<div class="row">
                    <div class="col-md-12 col-lg-6 col-xl-6">
                                    <?php 
										if(isset($_SESSION['ticket_added'])){

											?>
											<div class="alert alert-success" role="alert">
												Ticket Added
											</div>
											<?php
											unset($_SESSION['ticket_added']);
										}
										?>

                                        <?php 
										if(isset($_SESSION['ticket_added_failed'])){

											?>
											<div class="alert alert-warning" role="alert">
												Ticket Added Failed
											</div>
											<?php
											unset($_SESSION['ticket_added_failed']);
										}
										?>
                        <div class="card custom-card">
                            <div class="list-group list-group-transparent mb-0 mail-inbox pb-3">
                                <div class="card-body">
                                    <form action="backend/addTicket.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="subject">Subject</label>
                                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                                            <input type="hidden" class="form-control" id="h_a_id" name="h_a_id" value="<?= $h_a_id ?>" required>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="description">Description</label>
                                            <textarea type="text" class="form-control" id="description" name="description" placeholder="Description" required></textarea>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="priority">Priority</label>
                                            <select name="priority" id="priority" class="form-control" required>
                                                <option value="1">Low</option>
                                                <option value="2">Medium</option>
                                                <option value="3">High</option>
                                            </select>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="raiseFile">File</label>
                                            <input type="file" class="form-control" id="raiseFile" name="raiseFile">
                                        </div>

                                        <div class="card-footer text-end">
                                             <button type="submit" class="btn btn-warning mt-1">Add</button>
                                         </div>
                                    </form>
                                </div>
                               
                            </div>
                        </div>
                    </div>

					<div class="col-md-12 col-lg-6 col-xl-6">
						<div class="card custom-card">
							<div class="card-body p-6">
								<div class="inbox-body">
									<div class="mail-option">
										<!-- <div class="chk-all p-0 border-0">
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
										</div> -->
										<!-- <div class="btn-group">
											<a  href="javascript:void(0);" class="btn btn-outline-light">
												<i class="ri-restart-line fs-16 align-middle"></i>
											</a>
										</div> -->
										<!-- <div class="btn-group">
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
										</div> -->


										<!-- <ul class="unstyled inbox-pagination float-end d-flex">
											<li  class="my-auto me-1"><span>1-50 of 234</span></li>

											<li>
												<a class="np-btn" href="javascript:void(0);"><i class="ri-arrow-right-s-line pagination-right"></i></a>
											</li>
										</ul> -->
                                        <div>
                                            <h5>Raised Tickets</h5>
                                        </div>
									</div>
									<div class="table-responsive">
                                        <table class="table table-inbox table-hover text-nowrap mb-0 border">
                                            <thead>
                                                <tr>
                                                <th>No</th>
                                                    <th>Subject</th>
                                                    <th>Description</th>
                                                    <th>Priority</th>
                                                    <th>Status</th>
                                                    <!-- <th>Actions</th>  -->
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $sqlTickets="SELECT * FROM tbl_tickets WHERE h_a_id='$h_a_id'";
                                                $rsTickets=$conn->query($sqlTickets);
                                                if($rsTickets->num_rows>0){
                                                    $num=1;
                                                    while($rowsTickets=$rsTickets->fetch_assoc()){
                                                        $priorityStatus=$rowsTickets['priority']; 
                                                        $status=$rowsTickets['status']; 
                                                        if($priorityStatus==1){
                                                            $priority="LOW";
                                                        }else if($priorityStatus==2){
                                                            $priority="MEDIUM";
                                                        }else if($priorityStatus==3){
                                                            $priority="HIGH";
                                                        }

                                                        if($status==0){
                                                            $statusProgress="Pending";
                                                            $color="primary";
                                                        }else if($status==1){
                                                            $statusProgress="Answered";
                                                            $color="warning";
                                                        }
                                                        else if($status==2){
                                                            $statusProgress="Sorted";
                                                            $color="success";
                                                        }
                                                        ?> 
                                                      
                                                <tr>
                                                    <td class="view-message fw-semibold"><?= $num ?></td>
                                                    <td class="view-message fw-semibold"><?= $rowsTickets['subject'] ?></td>
                                                    <td class="view-message"><?= $rowsTickets['subject'] ?></td>
                                                    <td class="view-message"><?= $priority ?></td>
                                                    <td class="text-<?= $color ?> view-message"><?= $statusProgress ?></td>
                                                    <?php 
                                                        if($status==0 || $status==1){
                                                            ?>
                                                    <td><a href="ticketConvo.php?tic_id=<?= $rowsTickets['tic_id']  ?>&h_a_id=<?= $h_a_id ?>"><button type="button" class="btn btn-sm btn-success">Reply</button></a></td>
                                                            <?php
                                                        }
                                                    ?>
                                                    

                                                    <!-- <td class="inbox-small-cells">
                                                        <label class="custom-control custom-checkbox mb-0">
                                                            <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="...">
                                                        </label>
                                                        <i class="bi bi-star-fill text-warning"></i>
                                                        <i class="bi bi-bookmark-fill"></i>
                                                    </td> -->
                                                </tr>
                                                <?php
                                                $num+=1;
                                                        
                                                    }
                                                }
                                                ?>
                                                <!-- Add more rows as needed -->
                                            </tbody>
                                        </table>
                                    </div>

								</div>
							</div>
						</div>
						<!-- <ul class="pagination mb-4">
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
						</ul> -->
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
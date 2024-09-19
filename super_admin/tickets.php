<?php include("layout/header.php");


// if(isset($_SESSION['h_a_id'])){
//     unset($_SESSION['h_a_id']);
// }

?>

        <!-- Start::app-content -->
        <div class="main-content app-content">
            <div class="container-fluid">

                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <div class="">
                        <h1 class="page-title fw-semibold fs-20 mb-0">Tickets</h1>
                        <div class="">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="#">page</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Tickets</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                 
                </div>
                <!-- Page Header Close -->


               
               
                <!-- ROW-1 END -->
              
                <!-- ROW-5 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                   Ticket details
                                </div>

                            </div>
                            <div class="card-body">

                                <div class="d-sm-flex mb-4 justify-content-between">
                                    <div class="my-1">
                                        <span class="">Show</span>
                                        <div class="btn-group">
                                            <!-- <button type="button" class="btn btn-outline-light dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                10
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">10</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">25</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">50</a></li>
                                            </ul> -->
                                            <select class="form-control" data-trigger name="choices-single-default" id="choices-single-default">
                                                <option value="Choice 1">10</option>
                                                <option value="Choice 2">20</option>
                                                <option value="Choice 3">30</option>
                                                <option value="Choice 4">40</option>
                                            </select>
                                        </div>
                                        <span class="">Entries</span>
                                    </div>
                                    <div class="d-flex flex-wrap gap-2 my-1">
                                        <div>
                                            <input class="form-control form-control-sm h-35" type="text"
                                                placeholder="Search Here" aria-label=".form-control-sm example">
                                        </div>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);"
                                                class="btn btn-primary btn-sm btn-wave waves-effect waves-light"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Sort By<i
                                                    class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                            </a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">New</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Popular</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Relevant</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="table-responsive deals-table">
                                    <table class="table text-nowrap table-hover border table-bordered">
                                        <thead class="border-top">
                                            <tr>
                                                <th class="bg-transparent border-bottom-0 w-5 text-uppercase">No</th>
                                                <th class="bg-transparent border-bottom-0 text-uppercase">Admin Detail</th>
                                                <th class="bg-transparent border-bottom-0 text-uppercase">Subject</th>
                                                <th class="bg-transparent border-bottom-0 text-uppercase">Description</th>
                                                <th class="bg-transparent border-bottom-0 text-uppercase">Priority</th>
                                                <th class="bg-transparent border-bottom-0 text-uppercase">Status</th>
                                                <th class="bg-transparent border-bottom-0 text-uppercase">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sqlTickets = "SELECT * FROM tbl_tickets ORDER BY tic_id DESC";

                                            $rsTickets=$conn->query($sqlTickets);

                                            if($rsTickets->num_rows>0){
                                                $num=1;
                                                while($rowsTickets=$rsTickets->fetch_assoc()){
                                                    $h_a_id=$rowsTickets['h_a_id'];
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
                                                <td class="text-muted fs-15 fw-semibold"><?= $num ?></td>
                                                <?php
                                                        $sqlAdmin="SELECT * FROM tbl_hotel_admin WHERE h_a_id='$h_a_id'";
                                                        $rsAdmin=$conn->query($sqlAdmin);
                                                        if($rsAdmin->num_rows==1){
                                                            $rowsAdmin=$rsAdmin->fetch_assoc();

                                                ?>
                                                <td class="text-muted fs-15 fw-semibold"><a class="btn  btn-primary btn-wave waves-effect"onclick="openViewUSerModal(<?= $h_a_id ?>)" 
													data-bs-toggle="tooltip" 
													data-bs-original-title="View User"><?= $rowsAdmin['h_a_name'] ?></a>
                                                     </td>

                                                <?php
                                            }


                                                    ?>
                                                <td class="text-muted fs-15 fw-semibold"><?= $rowsTickets['subject'] ?></td>
                                                <td class="text-muted fs-15 fw-semibold"><?= $rowsTickets['description'] ?></td>
                                                <td class=" fs-15 fw-semibold"><?= $priority ?></td>
                                                <td class="text-<?= $color ?> fs-15 fw-semibold"><?= $statusProgress ?></td>
                                                <td class="">

                                                <?php
                                                if($status==0 || $status == 1){
                                                    ?>
                                                  
                                                <a href="ticketConvo.php?tic_id=<?= $rowsTickets['tic_id']  ?>&h_a_id=<?= $h_a_id ?>"><button type="button" class="btn btn-sm btn-success">Reply</button></a>
                                                <?php
                                                }
                                                ?>
                                                <!-- <button type="button" class="btn btn-sm btn-danger" onclick="deleteTicket()"><i class="ri-delete-bin-line"></i></button> -->
                                     
                                                </td>
                                            </tr>
                                            <?php
                                            $num+=1;
                                                }
                                            }
                                            ?>

                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="d-flex align-items-center">
                                    <div>
                                        Showing <?= $no_of_hotel-1 ?> Entries <i class="bi bi-arrow-right ms-2 fw-semibold"></i>
                                    </div>
                                    <div class="ms-auto">
                                        <nav aria-label="Page navigation" class="pagination-style-4">
                                            <ul class="pagination mb-0">
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="javascript:void(0);">
                                                        Prev
                                                    </a>
                                                </li>
                                                <li class="page-item active"><a class="page-link"
                                                        href="javascript:void(0);">1</a></li>
                                                <li class="page-item"><a class="page-link"
                                                        href="javascript:void(0);">2</a></li>
                                                <li class="page-item">
                                                    <a class="page-link text-primary" href="javascript:void(0);">
                                                        next
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- ROW-5 END -->

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

        <div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-xl" role="document">
				<div class="modal-content">
					
					<div class="modal-body ">
						<div class="row">
							<div class="col-lg-6" id="view_data">
								<!-- Dynamic content for editing will be loaded here -->
							</div>
							
						</div>
					</div>
					
				</div>
			</div>
		</div>
        <?php include("layout/footer.php"); ?>

        <script>
                function openViewUSerModal(id){
				$('#viewModal').modal('show');
                $('#view_data').load('ajax/viewHotel.php',{ h_a_id:id });
				
			}
            function openTicket(){
                $('#viewModal').modal('show');
            }

            function completeTicket(tic_id,status){
                alert(tic_id)
                alert(status)

                    $.ajax({
                        url:'backend/ticketStatus.php',
                        method:'POST',
                        data:{
                            tic_id:tic_id,
                            status:status
                        },success:function(resp){
                            if(resp == 200){
                                swal("Completed", "Ticket Completed", "success")
								.then((value) => {
								if (value) {
									$('#viewModal').modal('hide');
									window.location.reload();
								}
							});
                            }
                            else {
                                swal("Cancelled", "Something went wrong", "error")
                                .then((value) => {
                                    if (value) {
                                    }
                                });
                                console.log(resp);
                            }

                        }

                    })
                }

            

            // function reject(id,status){
            //     alert(status);

            // // alert(id);
            // }
        </script>
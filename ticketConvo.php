<?php include("layout/header.php"); 


// if(!isset($_SESSION['h_a_id'])){
//     $_SESSION['h_a_id']=$_REQUEST['h_a_id'];
//     $_SESSION['tic_id']=$_REQUEST['tic_id'];
//     $h_a_id=$_SESSION['h_a_id'];
//     $tic_id=$_SESSION['tic_id'];
// }else{
//     $h_a_id=$_SESSION['h_a_id'];
//     $tic_id=$_SESSION['tic_id'];
// }

$h_a_id=$_REQUEST['h_a_id'];
$tic_id=$_REQUEST['tic_id'];






?>



<div class="main-content app-content">
<div class="container-fluid">
								<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
									<div class="card custom-card">
										<div class="main-content-app">
											<div class="main-content-body main-content-body-chat">
												<div class="main-chat-header pt-3">
													<div class="main-img-user online"><img alt="avatar" src="assets/images/faces/1.jpg"></div>
													<div class="main-chat-msg-name mt-2">
														<h6 class="mb-0">Admin</h6>
														<!-- <span class="dot-label bg-success"></span><small class="me-3">online</small> -->
													</div>
													<nav class="nav">
														<a class="nav-link" href="javascript:void(0);" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-horizontal fs-18"></i>
														</a>
														<div class="dropdown-menu dropdown-menu-end shadow">
															<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-phone-call me-1 d-inline-flex"></i> Phone Call</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-video me-1 d-inline-flex"></i> Video Call</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-user-plus me-1 d-inline-flex"></i> Add Contact</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash-2 me-1 d-inline-flex"></i> Delete</a>
														</div>
														<a class="nav-link" data-bs-toggle="tooltip" href="javascript:void(0);" title="Phone Call"><i class="fe fe-phone-call fs-18"></i></a>
														<a class="nav-link" data-bs-toggle="tooltip" href="javascript:void(0);" title="Video Call"><i class="fe fe-video fs-18"></i></a>
														<a class="nav-link" data-bs-toggle="tooltip" href="javascript:void(0);" title="Add Contact"><i class="fe fe-user-plus fs-18"></i></a>
														<a class="nav-link" data-bs-toggle="tooltip" href="javascript:void(0);" title="Delete"><i class="fe fe-trash-2 fs-18"></i></a>
													</nav>
												</div><!-- main-chat-header -->
												<div class="main-chat-body" id="ChatBody">
													<div class="content-inner">
														<!-- <label class="main-chat-time"><span>3 days ago</span></label> -->
														<div class="media flex-row-reverse chat-right">
															<div class="main-img-user online"><img alt="avatar" src="assets/images/faces/2.jpg"></div>
															<div class="media-body">

                                                            <?php
                                                                $sqlMsg="SELECT * FROM tbl_ticket_chat WHERE tic_id='$tic_id' AND tic_msg_sender=1";
                                                                $rsMsg=$conn->query($sqlMsg);

                                                                if($rsMsg->num_rows>0){
                                                                    while($rowsMsg=$rsMsg->fetch_assoc()){
                                                                        ?>
                                                                      
                                                                      <?php 
                                                                    if($rowsMsg['tic_img']=="" && $rowsMsg['tic_file']==""){
                                                                        ?>
                                                                        <div class="main-msg-wrapper bg-primary p-2 rounded">
                                                                         <?= htmlspecialchars($rowsMsg['tic_desc']); ?>
                                                                        </div>
                                                                        <?php
                                                                    }else
                                                                    ?>

                                                                    <?php 
                                                                    if($rowsMsg['tic_img']!=""){
                                                                        ?>
                                                                        <div class="main-msg-wrapper bg-primary p-2 rounded">
                                                                         <img src="assets/img/messages/photos/<?= $rowsMsg['tic_img'] ?>" alt="">
                                                                         </div>
                                                                        <?php
                                                                        if($rowsMsg['tic_desc']!=""){
                                                                            ?>
                                                                            <div class="main-msg-wrapper bg-primary p-2 rounded">
                                                                            <?= htmlspecialchars($rowsMsg['tic_desc']); ?>
                                                                            </div>
                                                                            <?php
                                                                        }
                                                                        ?>
                                                                        
                                                                        <?php
                                                                    }else
                                                                    ?>
                                                                  <?php 
                                                                        if ($rowsMsg['tic_file'] != "") {
                                                                            ?>
                                                                            <a href="assets/img/messages/doc/<?= $rowsMsg['tic_file']; ?>" download class="btn btn-sm btn-outline-secondary mt-2">
                                                                                <i class="fe fe-download"></i> Download File
                                                                            </a>
                                                                            <?php
                                                                        if($rowsMsg['tic_desc']!=""){
                                                                            ?>
                                                                            <div class="main-msg-wrapper bg-primary p-2 rounded">
                                                                            <?= htmlspecialchars($rowsMsg['tic_desc']); ?>
                                                                            </div>
                                                                            <?php
                                                                        }
                                                                        ?>
                                                                            <?php
                                                                        }
                                                                        ?>

																  
																  
                                                                
																<div>
																	<span><?= formatTimeDifference($rowsMsg['tic_date']) ?></span> <a href="javascript:void(0);"><i class="icon ion-android-more-horizontal"></i></a>
																</div>
                                                                <?php
                                                                    }
                                                                }
                                                            ?>
															</div>
														</div>
														<div class="media chat-left mb-3">
                                                            <div class="main-img-user online">
                                                                <img alt="avatar" src="assets/images/faces/1.jpg" class="rounded-circle" style="width: 50px;">
                                                            </div>
                                                            <div class="media-body ms-3">

                                                                <?php
                                                                    $sqlMsgUser = "SELECT * FROM tbl_ticket_chat WHERE tic_id='$tic_id' AND tic_msg_sender=2";
                                                                    $rsMsgUser = $conn->query($sqlMsgUser);

                                                                    if ($rsMsgUser->num_rows > 0) {
                                                                        while ($rowsMsgUser = $rsMsgUser->fetch_assoc()) {
                                                                ?>
                                                                    
                                                                    <?php 
                                                                    if($rowsMsgUser['tic_img']=="" && $rowsMsgUser['tic_file']==""){
                                                                        ?>
                                                                        <div class="main-msg-wrapper bg-primary p-2 rounded">
                                                                         <?= htmlspecialchars($rowsMsgUser['tic_desc']); ?>
                                                                        </div>
                                                                        <?php
                                                                    }else
                                                                    ?>

                                                                    <?php 
                                                                    if($rowsMsgUser['tic_img']!=""){
                                                                        ?>
                                                                        <div class="main-msg-wrapper bg-primary p-2 rounded">
                                                                         <img src="assets/img/messages/photos/<?= $rowsMsgUser['tic_img'] ?>" alt="">
                                                                         </div>
                                                                        <?php
                                                                        if($rowsMsgUser['tic_desc']!=""){
                                                                            ?>
                                                                            <div class="main-msg-wrapper bg-primary p-2 rounded">
                                                                            <?= htmlspecialchars($rowsMsgUser['tic_desc']); ?>
                                                                            </div>
                                                                            <?php
                                                                        }
                                                                        ?>
                                                                        
                                                                        <?php
                                                                    }else
                                                                    ?>
                                                                  <?php 
                                                                        if ($rowsMsgUser['tic_file'] != "") {
                                                                            ?>
                                                                            <a href="assets/img/messages/doc/<?= $rowsMsgUser['tic_file']; ?>" download class="btn btn-sm btn-outline-secondary mt-2">
                                                                                <i class="fe fe-download"></i> Download File
                                                                            </a>
                                                                            <?php
                                                                        if($rowsMsgUser['tic_desc']!=""){
                                                                            ?>
                                                                            <div class="main-msg-wrapper bg-primary p-2 rounded">
                                                                            <?= htmlspecialchars($rowsMsgUser['tic_desc']); ?>
                                                                            </div>
                                                                            <?php
                                                                        }
                                                                        ?>
                                                                            <?php
                                                                        }
                                                                        ?>


                                                                    <?php 
                                                                    if($rowsMsgUser['tic_img']==""){
                                                                        ?>
                                                                        
                                                                        <?php
                                                                    }
                                                                    ?>

                                                                    <div class="d-flex justify-content-between mt-2">
                                                                        <span class="text-muted small"><?= formatTimeDifference($rowsMsgUser['tic_date']); ?></span>
                                                                        <a href="javascript:void(0);" class="text-muted small"><i class="icon ion-android-more-horizontal"></i></a>
                                                                    </div>
                                                                <?php
                                                                        }
                                                                    }
                                                                ?>
                                                            </div>
                                                        </div>
														
													</div>
												</div>
                                                <form action="backend/submit_message.php" method="POST" enctype="multipart/form-data">
                                                    <div class="main-chat-footer">
                                                        <nav class="nav">
                                                            <!-- Add Photo -->
                                                            <a class="nav-link" data-bs-toggle="tooltip" href="javascript:void(0);" title="Add Photo" onclick="document.getElementById('addPhotoInput').click();">
                                                                <i class="fe fe-image"></i>
                                                            </a>
                                                            <input type="file" name="photo" accept="image/*" style="display: none;" id="addPhotoInput">

                                                            <!-- Attach a File -->
                                                            <a class="nav-link" data-bs-toggle="tooltip" href="javascript:void(0);" title="Attach a File" onclick="document.getElementById('attachFileInput').click();">
                                                                <i class="fe fe-paperclip"></i>
                                                            </a>
                                                            <input type="file" name="attachment" style="display: none;" id="attachFileInput">
                                                        </nav>

                                                        <!-- Hidden Inputs -->
                                                        <input type="hidden" name="h_a_id" id="h_a_id" value="<?= $h_a_id ?>">  
                                                        <input type="hidden" name="tic_id" id="tic_id" value="<?= $tic_id ?>">     

                                                        <!-- Message Input -->
                                                        <input class="form-control" placeholder="Type your message here..." name="message" type="text" required>

                                                        <!-- Submit Button -->
                                                        <a class="main-msg-send" href="javascript:void(0);" onclick="submitMessage()">
                                                            <i class="bi bi-send-fill text-primary"></i>
                                                        </a>
                                                    </div>
                                                </form>
											</div>
                                            <a href="raise_ticket.php"><button type="button" class="btn btn-sm btn-success">Back</button></a>
                                            <a href="backend/close_ticket.php?tic_id=<?= $tic_id  ?>"><button type="button" class="btn btn-sm btn-success">close Ticket</button></a>
										</div>
									</div>
								</div>
							</div>


                            
            </div>
        </div>

		<?php include("layout/footer.php"); ?>

        <script>
            // Function to submit the form
            function submitMessage() {
                const form = document.querySelector('form');
                form.submit(); // Submit the form
            }
</script>
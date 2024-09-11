<?php 
include "../backend/conn.php";

$h_id=$_REQUEST['h_id'];
?>

<div class="row" id="user-profile">
					<div class="col-lg-12">
								<div class="modal-header modal-header-primary">
									<h3><i class="fa fa-pencil m-r-5"></i> Add Room Details</h3>
									<!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> -->
								</div>
								<div class="card custom-card">
									<div class="card-body">
										<form  method="post" enctype="multipart/form-data">
											<div class="form-group">
												<label for="hname">Room Type</label>
												<input type="text" name="rtype" id="rtype" class="form-control" placeholder="Enter room type" value="" required>
												<input type="hidden" name="h_id" id="h_id" class="form-control" value="<?= $h_id ?>" >
											</div>
											<div class="form-group">
												<label for="hname">Bed type</label>
												<input type="text" name="btype" id="btype" class="form-control" placeholder="Enter bed type" value="" required>
											</div>
											<div class="form-group">
												<label for="guest">Number of guests</label>
												<div class="input-group">
													<button class="btn btn-outline-secondary" type="button" id="decreaseBtn">-</button>
													<input type="text" name="guest" id="guest" class="form-control text-center" placeholder="Enter no of guest" value="1" required>
													<button class="btn btn-outline-secondary" type="button" id="increaseBtn">+</button>
												</div>
											</div>
											<div class="form-group">
												<label for="hname">Room Size</label>
												<input type="text" name="rsize" id="rsize" class="form-control" placeholder="Enter room size in squar feet" value="" required>
											</div>

											<div class="form-group">
												<label for="haddress">About</label>
												<textarea rows="2" name="rabout" id="rabout" class="form-control" placeholder="Enter something about the room" value="" required></textarea>
											</div>
											<button type="button" onclick="addRoom()" class="btn btn-primary">Add</button>
										</form>

									</div>
								</div>
						</div>
				</div>

				<script>
    // Functionality for the increase and decrease buttons
    document.getElementById('increaseBtn').addEventListener('click', function () {
        let guestInput = document.getElementById('guest');
        let currentValue = parseInt(guestInput.value) || 0;
        guestInput.value = currentValue + 1;
    });

    document.getElementById('decreaseBtn').addEventListener('click', function () {
        let guestInput = document.getElementById('guest');
        let currentValue = parseInt(guestInput.value) || 0;
        if (currentValue > 0) {
            guestInput.value = currentValue - 1;
        }
    });
</script>

<?php 
include "../backend/conn.php";

// $h_a_id=$_SESSION['h_a_id'];
$h_id=$_REQUEST['h_id'];

$sqlRoom="SELECT * FROM tbl_room WHERE h_id='$h_id'";
$rsRoom=$conn->query($sqlRoom);

if($rsRoom->num_rows>0){

   
?> 

<div class="col-lg-12 mt-4">
    <div class="card custom-card w-100">
        <div class="card-body">
            <h4 class="card-title">Added Rooms</h4>
            <table class="table table-bordered">
                <thead>
                    <tr>
                    <th>Room Type</th>
                    <th>Bed Type</th>
                    <th>No of Guest</th>
                        <th>Room size</th>
                        <th>About</th>
                        <th>Facilities</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($rowsRoom=$rsRoom->fetch_assoc()){
                            ?>
                            <tr>
                            <td><?= $rowsRoom['r_type'] ?></td>
                            <td><?= $rowsRoom['r_b_type'] ?></td>
                            <td><?= $rowsRoom['no_of_guest'] ?></td>
                                <td><?= $rowsRoom['r_size'] ?></td>
                                <td><?= $rowsRoom['about'] ?></td>
                                <td>
                                        <button type="button" class="btn btn-sm btn-warning" onclick="openAddFacilityRoomModal(<?= $rowsRoom['r_id']; ?>,<?= $h_id ?>)"><i class="ri-add-box-line"></i></button>
                                    </td>
                                <td>
                                        <button type="button" class="btn btn-sm btn-danger" onclick="deleteRoom(<?= $rowsRoom['r_id']; ?>,<?= $h_id ?>)"><i class="ri-delete-bin-line"></i></button>
                                    </td>
                            </tr>

                            <?php
                        }
                    ?>
                  
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
}
?>


<?php 
include "../backend/conn.php";

$h_a_id=$_SESSION['h_a_id'];
$h_id=$_REQUEST['h_id'];
$r_id=$_REQUEST['r_id'];

$sqlFac="SELECT * FROM tbl_room_available_fac WHERE h_id='$h_id' AND r_id='$r_id'";
$rsFac=$conn->query($sqlFac);

if($rsFac->num_rows>0){
?> 

<div class="col-lg-12 mt-4">
    <div class="card custom-card">
        <div class="card-body">
            <h4 class="card-title">Added Facilities</h4>
            <table class="table table-bordered">
                <thead>
                    <tr>
                       
                        <th>Facility Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($rowsFac=$rsFac->fetch_assoc()){

                            $fac_id=$rowsFac['fac_id'];
                            $sqlRoomFac="SELECT * FROM tbl_room_facility WHERE fac_id='$fac_id'";
                            $rsRoomFac=$conn->query($sqlRoomFac);
                            if($rsRoomFac->num_rows>0){
                                while($rowsRoomFac=$rsRoomFac->fetch_assoc()){
                                    ?> 
                                    
                               
                            <tr>
                                <td><?= $rowsRoomFac['fac_name'] ?></td>
                                <td>
                                        <button type="button" class="btn btn-sm btn-danger" onclick="deleteFacility(<?= $rowsRoomFac['fac_id'] ?>)"><i class="ri-delete-bin-line"></i></button>
                                    </td>
                            </tr>

                            <?php
                                }
                            }

                            ?>

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

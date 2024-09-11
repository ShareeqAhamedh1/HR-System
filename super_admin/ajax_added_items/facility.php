
<?php 
include "../../backend/conn.php";



$sqlFac="SELECT * FROM tbl_room_facility";
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
                            ?>
                            <tr>
                                <td><?= $rowsFac['fac_name'] ?></td>
                                
                                <td>
                                        <button type="button" class="btn btn-sm btn-danger" onclick="deleteFac(<?= $rowsFac['fac_id'] ?>)">Delete</button>
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

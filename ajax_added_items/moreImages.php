
<?php 
include "../backend/conn.php";

// $h_a_id=$_SESSION['h_a_id'];
$hid=$_REQUEST['h_id'];

$sqlImg="SELECT * FROM tbl_hotel_image WHERE h_id='$hid'";
$rsImg=$conn->query($sqlImg);

if($rsImg->num_rows>0){

   
?> 

<div class="col-lg-12 mt-4">
    <div class="card custom-card">
        <div class="card-body">
            <h4 class="card-title">Added Images</h4>
            <table class="table table-bordered">
                <thead>
                    <tr>
                       
                        <th>Added Image</th>
                        <th>Action</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($rowsImg=$rsImg->fetch_assoc()){
                            $img_id=$rowsImg['i_id'];
                          
                            ?>
                            <tr>
                             
                                <td><img src="assets/img/hotel/<?= $rowsImg['i_name'] ?>" alt="" style="width:60px"></td>
                                <td>
                                        <button type="button" class="btn btn-sm btn-danger" onclick="deleteIconMoreImg(<?= $rowsImg['i_id']; ?>,<?= $hid ?>)"><i class="ri-delete-bin-line"></i></button>
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


<?php 
include "../backend/conn.php";

// $h_a_id=$_SESSION['h_a_id'];
$hid=$_REQUEST['h_id'];

$sqlAmm="SELECT * FROM tbl_ammunities WHERE h_id='$hid'";
$rsAmm=$conn->query($sqlAmm);

if($rsAmm->num_rows>0){

   
?> 

<div class="col-lg-12 mt-4">
    <div class="card custom-card">
        <div class="card-body">
            <h4 class="card-title">Added Aminities</h4>
            <table class="table table-bordered">
                <thead>
                    <tr>
                       
                        <th>Aminity Name</th>
                        <th>Icon Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($rowsAmm=$rsAmm->fetch_assoc()){
                            $ic_id=$rowsAmm['a_ic_id'];
                            $sqlIcon="SELECT * FROM tbl_icon WHERE ic_id='$ic_id'";
                            $rsIcon=$conn->query($sqlIcon);
                            $rowsIcon=$rsIcon->fetch_assoc();
                            ?>
                            <tr>
                                <td><?= $rowsIcon['ic_name'] ?></td>
                                <td><img src="assets/img/icons/<?= $rowsIcon['ic_img'] ?>" alt="" style="width:60px"></td>
                                <td>
                                        <button type="button" class="btn btn-sm btn-danger" onclick="deleteIconAmm(<?= $rowsIcon['ic_id']; ?>,<?= $hid ?>)">Delete</button>
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

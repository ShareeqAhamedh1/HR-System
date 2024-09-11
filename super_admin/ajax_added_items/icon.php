
<?php 
include "../../backend/conn.php";



$sqlIcon="SELECT * FROM tbl_icon";
$rsIcon=$conn->query($sqlIcon);

if($rsIcon->num_rows>0){
?> 

<div class="col-lg-12 mt-4">
    <div class="card custom-card">
        <div class="card-body">
            <h4 class="card-title">Added Icons</h4>
            <table class="table table-bordered">
                <thead>
                    <tr>
                       
                        <th>Icon Name</th>
                        <th>Icon Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($rowsIcon=$rsIcon->fetch_assoc()){
                            ?>
                            <tr>
                                <td><?= $rowsIcon['ic_name'] ?></td>
                                <td><img src="../assets/img/icons/<?= $rowsIcon['ic_img'] ?>" alt="" style="width:60px"></td>
                                <td>
                                        <button type="button" class="btn btn-sm btn-danger" onclick="deleteIcon(<?= $rowsIcon['ic_id'] ?>)">Delete</button>
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

<?php

include "../general/env.php";


if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delete = "DELETE FROM `medicines` WHERE id = $id";
    $d = mysqli_query($connect, $delete);
    header('location:/adminPanel/admin/list-medicine.php');
}

$select = "SELECT * FROM `medicines`";
$s = mysqli_query($connect, $select);


include "../shared/head.php";
include "../shared/header.php";

?>
<p class="text-center display-5"> Customers </p>
<h1 class="text-center display-3"> Medicines </h5>
<div class="container col-md-5">
    <div class="card">
        <div class="card-body">
            <table class="table ">
                <tr>
                    <th> Medicine Title</th>
                    <th>ACTION</th>
                </tr>

                <?php foreach ($s as $data) { ?>
                    <tr>
                        <td> <?php echo $data['medicine_title'] ?> </td>
                        <td> <a class="btn btn-dark" href="/userPanel/user/show-medicine.php?show=<?php echo $data['id'] ?>"> SHOW </a>
                        </td>
                    </tr>
                <?php } ?>

            </table>
        </div>
    </div>
</div>
</div>
<?php
include "../shared/footer.php";
include "../shared/script.php";
?>
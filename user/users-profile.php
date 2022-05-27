
<?php

include "../general/env.php";


$select = "SELECT * FROM `customers`";
$s = mysqli_query($connect, $select);



include "../shared/head.php";
include "../shared/header.php";

?>
<p class="text-center display-5"> Customers </p>
<h1 class="text-center display-3"> profile </h5>
<div class="container col-md-5">
    <div class="card">
        <div class="card-body">
            <table class="table ">
                <tr>
                    <th> name </th>
                    <th>ACTION</th>
                </tr>

                <?php foreach ($s as $data) { ?>
                    <tr>
                        <td> <?php echo $data['name'] ?> </td>
                        <td> <a class="btn btn-dark" href="/userPanel/user/show-profile.php?show=<?php echo $data['customer_id'] ?>"> SHOW </a>
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
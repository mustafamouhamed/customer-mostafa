<?php
include "../shared/head.php";
include "../shared/header.php";

include "../general/env.php";

if (isset($_GET['show'])) {
    $id = $_GET['show'];
    $select = "SELECT  *  FROM `medicines` WHERE id = $id ";
    $s = mysqli_query($connect, $select);
    $row = mysqli_fetch_assoc($s);
}
?>
<p class="text-center display-5"> Customers </p>
<h5 class="text-center display-3"> Medicine </h5>
<div class="container col-md-4 mt-5 text=center">
    <div class="card">
        <img src="/userPanel/user/upload/<?php echo $row['medicine_image'] ?>" class="img-top" alt="">
        <div class="card-body">
            <h3> <?php echo $row['medicine_title'] ?> </h3>
            <p> <?php echo $row['medicine_description'] ?></p>
        </div>
    </div>
</div>
<?php
include "../shared/footer.php";
include "../shared/script.php";
?>
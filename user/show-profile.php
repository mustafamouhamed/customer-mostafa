<?php
include "../shared/head.php";
include "../shared/header.php";

include "../general/env.php";

if (isset($_GET['show'])) {
    $id = $_GET['show'];
    $select = "SELECT  *  FROM `customers` WHERE customer_id = $id ";
    $s = mysqli_query($connect, $select);
    $row = mysqli_fetch_assoc($s);
}
?>
<p class="text-center display-5"> Customers </p>
<h5 class="text-center display-3"> show profile  </h5>
<div class="container col-md-4 mt-5 text=center">
    <div class="card">
        <img src="/userPanel/user/upload/<?php echo $row['image'] ?>" class="img-top" alt="">
        <div class="card-body">
            <h3> <?php echo $row['name'] ?> </h3>
            <p> <?php echo $row['address'] ?></p>
        </div>
    </div>
</div>
<?php
include "../shared/footer.php";
include "../shared/script.php";
?>
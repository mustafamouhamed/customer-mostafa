<?php
include "../shared/head.php";
include "../shared/header.php";
include "../general/env.php";
$select = "SELECT * FROM `orders`";
$h = mysqli_query($connect, $select);

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delete = "DELETE FROM `orders` where order_id = $id ";
    $p = mysqli_query($connect ,$delete);
    header("location:/userPanel/user/list-orders.php");
}
?>
<p class="text-center display-3"> ORDERS </p>
<h5 class="text-center display-3"> ORDERS </h5>
<div class="container col-md-5">
    <div class="card">
        <div class="card-body">
            <table class="table ">
                <tr>
                    <th>order amount</th>
                    <th>order description</th>
                
                    <th>ACTION</th>
                </tr>
                <?php foreach($h as $data) {?>
                <tr>
                  
                    <td> <?php  echo $data['order_amount']?></td>
                    <td> <?php  echo $data['order_description']?></td>
                 
                    <td>  
              
                        <a href="/userPanel/user/list-orders.php?delete=<?php echo $data['order_id']?>" class="btn btn-danger" onclick="return confirm('Are You Sure ?')">delete </a>
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
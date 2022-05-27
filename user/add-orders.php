<?php
include "../shared/head.php";
include "../shared/header.php";
include "../general/env.php";
$selectmed = "SELECT * FROM `medicines`";
$s = mysqli_query($connect, $selectmed);
$selectcut = "SELECT * FROM `customers`";
$h = mysqli_query($connect, $selectcut);

if (isset($_POST['order'])) {
  
    $order_amount = $_POST['order_amount'];
    $order_description = $_POST['order_description'];
    $med_id = $_POST['id'];
    $cust_id  = $_POST['customer_id'];
    $insert = "INSERT INTO `orders` VALUES (NULL , $order_amount,'$order_description', $med_id,$cust_id )";
    $i = mysqli_query($connect, $insert);
  
}
?>
<h1 class="text-center display-3"> MAKE ORDER </h1>

<div class="container col-md-6">
    <div class="card">
        <div class="card-body">
            <form method="POST">
                <div class="mb-3">
                    <label class="form-label">Order Amount</label>
                    <input name="order_amount" type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Order Descripation</label>
                    <input  name="order_description" type="text" class="form-control">
                </div>
                <div class="mb-3">
                <label class="form-label">Medicine ID</label>
                    <select name="id" class="form-control">
                        <?php foreach($s as $data){?>
                        <option value="<?php echo $data['id']?>"> <?php  echo $data['medicine_title']?> </option>
                        <?php }?>
                    </select>
                   
                </div>
                <div class="mb-3">
                    <label class="form-label">Customer ID</label>
                    <select name="customer_id" class="form-control">
                        <?php foreach($h as $data){?>
                        <option value="<?php echo $data['customer_id']?>"> <?php  echo $data['name']?> </option>
                        <?php }?>
                    </select>
                </div>
                <div class="d-grid gap-2">
                    <button name="order" class="btn btn-outline-success">Add order</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
include "../shared/footer.php";
include "../shared/script.php";
?>
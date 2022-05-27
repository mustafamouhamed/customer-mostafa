<?php
include "../general/env.php";
include "../shared/head.php";

if(isset($_POST['createAcount'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];  
  $address = $_POST['address'];
  $password = $_POST['password'];
  $image_name = time() . $_FILES['image']['name'];
  $image_tmp = $_FILES['image']['tmp_name'];
  $location = "upload/";
  if (move_uploaded_file($image_tmp, $location . $image_name)) {
    echo "uploaded true";
} else {
    echo "uploaded false";
}
  $insert = "INSERT INTO `customers` VALUES (NULL , '$name' , '$email' ,$phone, '$address' ,'$password','$image_name')";
  $i = mysqli_query($connect,$insert);
  if ($i){
    echo "true insert";
    header("location:/userPanel/user/login.php");
  }else{
    echo "false insert";
  }
  }
 
?>

<main>
  <div class="container">

    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

            <div class="d-flex justify-content-center py-4">
              <a href="/userPanel/user/pages-register.php" class="logo d-flex align-items-center w-auto">
                <img src="userPanel/assets/img/logo.png" alt="">
                <span class="d-none d-lg-block">Register</span>
              </a>
            </div><!-- End Logo -->

            <div class="card mb-3">

              <div class="card-body">

                <div class="pt-4 pb-2">
                  <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                  <p class="text-center small">Enter your personal details to create account</p>
                </div>

                <form method="POST" class="row g-3 needs-validation" enctype="multipart/form-data">
                  <div class="col-12">
                    <label for="" class="form-label">Your Name</label>
                    <input type="text" name="name" class="form-control">
                  </div>

                  <div class="col-12">
                    <label for="" class="form-label">Your Email</label>
                    <input type="email" name="email" class="form-control">
                  </div>

                  <div class="col-12">
                    <label class="form-label">Your Phone</label>
                    <input type="text" name="phone" class="form-control">
                  </div>

                  <div class="col-12">
                    <label class="form-label">Your Address</label>
                    <input type="text" name="address" class="form-control">
                  </div>

                  <div class="col-12">
                    <label class="form-label">Your Password</label>
                    <input type="password" name="password" class="form-control">
                  </div>
                  <div class="col-12">
                    <label class="form-label">Your image</label>
                    <input type="file" name="image" >
                  </div>

                  <div class="col-12">
                    <button class="btn btn-primary w-100" name="createAcount">Create Account</button>
                  </div>

                  <div class="col-12">
                    <p class="small mb-0">Already have an account? <a href="/userPanel/user/login.php">Login</a></p>
                  </div>

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>

  </div>
</main><!-- End #main -->

<?php
include "../shared/script.php";
?>
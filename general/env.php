<?php 
$host = 'localhost';
$user = "root";
$password = "";
$dbName = "pharmacy";
$connect = mysqli_connect( $host , $user , $password , $dbName );
function auth()
{
    if ($_SESSION['email'] != "") {
    } else {
        header("location:/userPanel/user/login.php");
    }
}
if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header("location:/userPanel/user/login.php");
}

?>
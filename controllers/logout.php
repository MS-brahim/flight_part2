<?php 
if (isset($_POST['logout'])) {
    session_destroy();
    unset($_SESSION['user']);
    header("location: ../views/login.php");
}
?>
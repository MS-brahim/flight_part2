<?php 
session_start();
include_once('../controllers/details.php');
include_once '../models/connect_db.php'; 

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Price | AirLux</title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    
    
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/style.css">
	<script src="https://kit.fontawesome.com/8f45faa16b.js" crossorigin="anonymous"></script>
    
	

</head>
<body>
    <?php include_once "parts/navbar.php"?>

    <!-- start content reservation -->
    <?php 
    include_once '../controllers/reservation-controller.php';

    if(isset($_POST['reserve'])){
        echo "jjjjhhhj";
    }else{
        echo "hibrrbrbrbr";
        // date_default_timezone_set("Morocco/Safi");
        // $t=time();
        // $time = date("Y-m-d h:i:s");

    }
    ?>

    <!-- end content reservatin  -->
    <?php
    include_once "parts/footer.php";
    include_once "parts/scripts.php";
    ?>
	<script src="assets/js/reservation.js"> </script>
</body>
</html>
    

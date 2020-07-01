<?php 
session_start();
include_once('../controllers/details.php');
include_once '../models/connect_db.php'; 

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Confirmer | AirLux</title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    
    
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/style.css">
	
    
	

</head>
<body>
    <?php include_once "parts/navbar.php"?>

    <!-- start content confimermation -->
    <div class="container mt-4">
        <h1 class='text-center'>Confirm Your Reserve</h1>
        <form action="">
            <div class="jumbotron">
                <?php
                    $Confirm ="SELECT * FROM vols";
                    $sql = "SELECT * FROM client";
                    $sql2 = "SELECT * FROM reservation";
                    $result = $con->query($Confirm);
                    if ($result->num_rows != 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) { 

                    ?>
                                <tr>
                                    vol id <td><?php echo $row["id_vol"]?></td><br>
                                    client id <td><?php echo $row["departure"]?></td><br>
                                    <hr>
                                </tr>   
                                                                
                    <?php
                        }
                    }
                
                    $con->close();
                    
                ?>
                <p class="lead text-center">
                    <a class="btn btn-primary btn-lg text-white" href="index.php" >Confirm</a>
                </p>
            </div>
        </form>
    </div>

    <!-- end content confirmation  -->
    <?php
    include_once "parts/footer.php";
    include_once "parts/scripts.php";
    ?>
	<script src="assets/js/reservation.js"> </script>
</body>
</html>
    

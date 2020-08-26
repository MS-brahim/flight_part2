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
        <h1 class='text-center'>Confirm your reservation</h1>
        <form action="">
            <div class="jumbotron">
            
                <?php
                    $sql2 = "SELECT * FROM reservation R 
                    INNER JOIN client C ON R.id_client = C.id_client
                    INNER JOIN vols V ON R.id_vol = V.id_vol
                    where R.id_reservation = (SELECT MAX(id_reservation) FROM reservation)
                    ";
                    $result = $con->query($sql2);
                    if ($result->num_rows != 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) { 

                    ?>
                    
                        <ul class="list-group ">
                            <li class="list-group-item">
                                <span>Customer name :</span> <b><?php echo $row["nom"] ." ". $row["prenom"]?></b>
                            </li>
                            <li class="list-group-item">
                                <span>Customer passport  :</span> <b><?php echo $row["num_passport"]?></b>
                            </li>
                            <li class="list-group-item">
                                <span>Customer Phone  :</span> <b><?php echo $row["phone"]?></b>
                            </li>
                            <li class="list-group-item">
                                <span>Customer email  :</span> <b><?php echo $row["email"]?></b>
                            </li>
                            <li class="list-group-item">
                                <span>Deservation date :</span> <b><?php echo $row["date_reservation"]?></b>
                            </li>
                            <li class="list-group-item">
                                <span>Flight name :</span> <b><?php echo $row["nom_vol"]?></b>
                            </li>
                            <li class="list-group-item">
                                <span>Departure :</span> <b><?php echo $row["departure"]?></b>
                                at <b><?php echo $row["d_depart"]?></b>
                            </li>
                            <li class="list-group-item">
                                <span>Arrival :</span> <b><?php echo $row["arrival"]?></b>
                                at <b><?php echo $row["d_arrival"]?></b>
                            </li>
                            <li class="list-group-item">
                                <span>Price :</span> <b><?php echo $row["prix"]?></b>
                            </li>
                        </ul>
                        <p class="lead text-center mt-2">
                            <a class="btn btn-primary btn-lg text-white" href="index.php" >Confirm</a>
                        </p>
                    <?php
                        }
                    }
                    $con->close();
                ?>
                
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
    

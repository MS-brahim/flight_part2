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
    
    
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/style.css">
	
    
	

</head>
<body>
    <?php include_once "parts/navbar.php"?>

    <!-- start content reservation -->
    <?php 
    include_once '../controllers/reservation-controller.php';

    require_once '../models/reservClass.php';
    $reservation = new Reserve();
    
    $errors = "";
    if(isset($_POST['reserve'])){

        $fname = $reservation->santString($_POST['fname']);
        $lname = $reservation->santString($_POST['lname']);
        $phone = $reservation->santString($_POST['phone']);
        $email = $reservation->santString($_POST['email']);
        $passport = $reservation->santString($_POST['numPassport']);

        $id_client = $_POST['id_client'];

        $id_vol = $_GET['id_vol'];

        $id_user = $_SESSION['id_user'];

        $reserv = $reservation->addClient($fname, $lname,$phone,$email,$passport,$id_user);
        $reser2 = $reservation->addReserve($id_client,$reserv,$id_vol,$id_user);
        
        if($reserv){
            echo "Booked successfully";
        }
        else{
            echo 'Submission error !! try again';
        }
    }

    
    ?>
    <div class='container'>
        <div class=''>
            <div class='modal-content'>
                <form action="" method="post">
                    <div class='modal-body'>
                        <div class='container-fluid'>
                            <div class='row'>
                                <div class='col-md-6'>
                                    <div class='form-group'>
                                        <span class='form-label'>First name</span>
                                        <input class='form-control' type='firstname' placeholder='first name' name='fname'>
                                    </div>
                                </div>
                                <div class='col-md-6'>
                                    <div class='form-group'>
                                        <span class='form-label'>Last name</span>
                                        <input class='form-control' type='lastname' placeholder='last name' name='lname'>
                                    </div>
                                </div>
                                
                                <div class='col-md-6'>
                                    <div class='form-group'>
                                        <span class='form-label'>Phone</span>
                                        <input class='form-control' type='tel' placeholder='name' name='phone'>
                                    </div>
                                </div>
                                
                                <div class='col-md-6'>
                                    <div class='form-group'>
                                        <span class='form-label'>mail</span>
                                        <input class='form-control' type='email' placeholder='Phone' name='email'>
                                    </div>
                                </div>
                                
                                <div class='col-md-6'>
                                    <div class='form-group'>
                                        <span class='form-label'>passport number</span>
                                        <input class='form-control' type='text' placeholder='passport number' name='numPassport'>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='modal-footer'>
                        <input type="submit" class="btn btn-primary" name='reserve' value='Reservation'>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- end content reservatin  -->
    <?php
    include_once "parts/footer.php";
    include_once "parts/scripts.php";
    ?>
	<script src="assets/js/reservation.js"> </script>
</body>
</html>
    

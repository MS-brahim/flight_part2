<?php 
session_start();
ob_start();
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
    
    if(isset($_POST['reserve'])){

        $fname = $reservation->santString($_POST['fname']);
        $lname = $reservation->santString($_POST['lname']);
        $phone = $reservation->santString($_POST['phone']);
        $email = $reservation->santString($_POST['email']);
        $passport = $reservation->santString($_POST['numPassport']);

        $idU = $_SESSION['user'];
        $id_user = $idU;
        $id_vol = $_GET['id_vol'];

        $id_client = $reservation->addClient($fname, $lname,$phone,$email,$passport,$id_user);
        

        $reser2 = $reservation->addReserve($id_client,$id_vol,$id_user);
        
        if($id_client){
            
            echo "<div class='container'><div class='alert alert-success'>Booked successfully</div></div>";
            if($reser2==true){
                header('location: confirmation.php?id_client=<?php .$id_client.?>');
                ob_end_clean();
            }
        }
        else{
            echo "<div class='container'><div class='alert alert-danger'>Submission error !! try again</div></div>";
        }
        
    }

    
    ?>
    <div class='container' id="confirm">
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
                        <input type="submit" href="" class="btn btn-primary" name='reserve' value='Reservation'>
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
    

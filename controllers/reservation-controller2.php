<?php 
    require_once '../models/reservClass.php';
    $reservation = new Reserve();
    
    if(isset($_POST['reserve'])){

        $fname = $reservation->santString($_POST['fname']);
        $lname = $reservation->santString($_POST['lname']);
        $phone = $reservation->santString($_POST['phone']);
        $email = $reservation->santString($_POST['email']);
        $passport = $reservation->santString($_POST['numPassport']);

        $idU = $_SESSION['user'];
        $id_vol = $_GET['id_vol'];

        $id_client = $reservation->addClient($fname, $lname,$phone,$email,$passport,$idU);
        $reser2 = $reservation->addReserve($id_client,$id_vol,$idU);
        
        
        if($id_client){
            
            echo "<div class='container'><div class='alert alert-success'>Booked successfully</div></div>";
            if($reser2==true){
                // $lastid = mysqli_insert_id($conn);
                header('location: ../views/confirmation.php');
                ob_end_clean();
            }
        }
        else{
            echo "<div class='container'><div class='alert alert-danger'>Submission error !! try again</div></div>";
        }
        
    }    
    ?>
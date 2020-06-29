<?php 
    session_start();
    
    require_once '../models/userClass.php';

    if(isset($_SESSION['user'])){
        header('location: ../views/admin.php');
    };
    if(isset($_SESSION['user'])){
        header('location: index.php');
    };
    

 
    // $fname_err = $lname_err = $phone_err = $email_err = $passport_err = $password_err = $confirm_pwd_err ="";

    $newUser = new User();
    if(isset($_POST['register'])){
    $fname = $newUser->santString($_POST['fname']);
    $lname = $newUser->santString($_POST['lname']);
    $phone = $newUser->santString($_POST['phone']);
    $email = $newUser->santString($_POST['email']);
    $passport = $newUser->santString($_POST['numPassport']);
    $password = $newUser->santString($_POST['password']);

        $registerValid = $newUser->register($fname, $lname,$phone,$email,$passport,$password);
     
        if(!$registerValid){
            echo 'Invalid username or password';
            header('location: ../views/register.php');
            
        }
        else{
            $_SESSION['user'] = $registerValid;
            header('location: ../views/register.php');
        }
    }
   
?>


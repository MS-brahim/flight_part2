<?php

    session_start();

    if(isset($_SESSION['user'])){
        // if ($count == 1 ) 
        // {
            header('location: ../views/welcome.php');
        // }else{
        //     header('location :../views/users.php');
        // }
    };
    if(isset($_SESSION['user'])){
        header('location: users.php');
    };

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $email= $_POST['email'];
        $password= $_POST['password'];
        $hachedPassword = sha1($password);
        
        $stmt = $con->prepare("SELECT nom, email, mot_de_passe,groupID FROM utilisateur WHERE email= ? AND mot_de_passe= ?");
        $stmt->execute(array($email, $hachedPassword));
        $count = $stmt->rowcount();
        
        
        $_SESSION['user'] = $email; //Register Session email
        if ($count == 1 ) {
            header("Location: ../views/welcome.php");                
        } else {
            header("Location: ../index.html");
        }
    }
?>
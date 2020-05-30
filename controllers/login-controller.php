<?php

    session_start();

    if(isset($_SESSION['user'])){
        header('location: welcome.php');
    };

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $email= $_POST['email'];
        $password= $_POST['password'];
        $hachedPassword = sha1($password);
        
        $stmt = $con->prepare("SELECT nom, email, mot_de_passe FROM utilisateur WHERE email= ? AND mot_de_passe= ? AND groupID=1");
        $stmt->execute(array($email, $hachedPassword));
        $count = $stmt->rowcount();

        if($count > 0){
        $_SESSION['user'] = $email; //Register  Session email
            header('location: welcome.php');
            exit();
        }
                
    }
?>
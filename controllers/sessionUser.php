<?php
    session_start();
    
    $user_check=$_SESSION['user'];

    $ses_sql=mysqli_query($con,"select email,id_user, nom, prenom, groupID from Utilisateur where email='$user_check'");
    $row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

    $typeUser = $row['groupID'];
    $loggedin_session=$row['email'];
    $fullname = $row['nom'].' '.$row['prenom'];
    $loggedin_id=$row['id_user'];

    if(!isset($loggedin_session) || $loggedin_session==NULL) {
        header("Location: welcome.php");
    }
?>
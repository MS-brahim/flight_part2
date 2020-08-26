<?php
include_once('../models/userClass.php');

$user = new User();

//fetch user data
@$sql = "SELECT * FROM utilisateur WHERE id_user = '".$_SESSION['user']."'";
$row = $user->details($sql);
?>
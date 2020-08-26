<?php
include_once "../models/connect_DB.php";


$id = $_GET["id"];

$query = mysqli_query($con,"SELECT status FROM vols WHERE id_vol = $id") or die(mysqli_error());
$row1= mysqli_fetch_array($query);

if ($row1['status']=== '0') {
  mysqli_query($con,"UPDATE vols SET status = '1' WHERE id_vol = $id")or die(mysqli_error());
  header('location: ../views/admin.php');
}else{
  mysqli_query($con,"UPDATE vols SET status = '0' WHERE id_vol = $id")or die(mysqli_error());
  header('location: ../views/admin.php');
}


?>
<?php
session_start();
include "../models/volsclass.php";

$delete = new Vols();
if (isset($_GET['D_ID'])) {
    $idV = $_GET['D_ID'];
    $res = $delete->delete($idV);
    if($res){
        // echo "Record deleted successfully";
        header('location: ../views/admin.php');
    }else{
        echo "Failed to Delete Record ";
    }
}
?>
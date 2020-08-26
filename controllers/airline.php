<?php
    include "../models/volsclass.php";
    $newVols = new vols();
    if(isset($_POST['addVol'])){
                        
        $nam = $newVols->santString($_POST['nam']);
        $dep = $newVols->santString($_POST['depart']);
        $arriv = $newVols->santString($_POST['arrival']);
        $tDep = $newVols->santString($_POST['d_depart']);
        $tArv = $newVols->santString($_POST['d_arrival']);
        $prix = $newVols->santString($_POST['prix']);
        $place = $newVols->santString($_POST['place']);
                     
        $addV = $newVols->insertVols($nam,$dep,$arriv,$tDep,$tArv,$prix,$place);    
        if(!$addV){
            echo 'Invalid vols';
        }else{
            @header("location: ../views/admin.php");
        }
    }
?>


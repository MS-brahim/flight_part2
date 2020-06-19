<?php 
class flight {
    var $host = "localhost";
    var $user = "root";
    var $password = "";
    var $db = "app_vols";
    var $tableVols ="vols";
    var $tableUser= "Utilisateur";

    public function connect(){
        $con = mysqli_connect($this->host,$this->user,$this->password,$this->db);
        return $con;
    }
    
    public function saveVols($fn,$dep,$arv,$tdep,$tArv,$prx,$plce){
        $conn=$this->connect();
        mysqli_query($conn,"INSERT INTO ".$this->tableVols."(
            nom_vol,departure,arrival, d_depart, d_arrival, prix, place) VALUES('$fn','$dep','$arv','$tdep','$tArv','$prx','$plce')") or die(
            mysqli_error($conn));
    }
}
?>

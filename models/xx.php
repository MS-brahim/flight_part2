<?php 
class reserve {
    var $host = "localhost";
    var $user = "root";
    var $password = "";
    var $db = "app_vols";
    var $tableVols ="vols";
    var $tableUser= "Utilisateur";
    var $reserved = "reservation";

    public function connect(){
        $con = mysqli_connect($this->host,$this->user,$this->password,$this->db);
        return $con;
    }
    
    public function addTicket($fname,$lname,$phone,$email,$passport){
        $conn=$this->connect();
        mysqli_query($conn,"INSERT INTO ".$this->tableVols."(
            nom_vol,departure,arrival, d_depart, d_arrival, prix, place) VALUES('$fn','$dep','$arv','$tdep','$tArv','$prx','$plce')") or die(
            mysqli_error($conn));

            echo "add successFully";
    }
}
?>

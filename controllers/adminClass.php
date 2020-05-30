<?php 
class Database {
    var $host = "localhost";
    var $user = "root";
    var $password = "";
    var $db = "app_vols";
    var $tableName ="vols";

    public function connect(){
        $con = mysqli_connect($this->host,$this->user,$this->password,$this->db);
        return $con;
    }
    
    public function saveRecords($fn,$dep,$arv,$tdep,$tArv,$prx,$plce){
        $conn=$this->connect();
        mysqli_query($conn,"INSERT INTO ".$this->tableName."(
            nom_vol,departure,arrival, d_depart, d_arrival, prix, place) VALUES('$fn','$dep','$arv','$tdep','$tArv','$prx','$plce')") or die(
            mysqli_error($conn));

            echo "add successFully";
    }
    


    // function connect(){
    //     $this->con =new mysqli("localhost","root","","app_vols");
    // }
    // function saveRecords($fn, $dep,$arv) {	


    //     $stmt =$this->con->prepare("INSERT Into vols (nom_vol, departure, arrival) values(?,?,?)");
    //         $stmt->bind_param("sss", $fn, $dep,$arv);
    //         $stmt->execute();
    // }
}
?>
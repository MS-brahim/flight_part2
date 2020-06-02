<?php 
class Database {
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
    
    public function saveRecords($fn,$dep,$arv,$tdep,$tArv,$prx,$plce){
        $conn=$this->connect();
        mysqli_query($conn,"INSERT INTO ".$this->tableVols."(
            nom_vol,departure,arrival, d_depart, d_arrival, prix, place) VALUES('$fn','$dep','$arv','$tdep','$tArv','$prx','$plce')") or die(
            mysqli_error($conn));

            echo "add successFully";
    }

    // public function line_update($id,$nflight,$depart, $arrival,$date_depart, $date_arrival,$prix,$places) {

    //     mysqli_query($this->conn, "UPDATE vols 
    //                                SET nom_vol = '$nflight', departure = '$depart', arrival = '$arrival', d_depart = '$date_depart', d_arrival = '$date_arrival'  , prix = '$prix', place ='$places'
    //                                WHERE id_vol = '$id'") 
    //                                or die(mysqli_error($this->conn));

        
    // }
    
    // public function select($tableUser){  
    //        $array = array();  
    //        $query = "SELECT * FROM ".$tableUser."";  
    //        $result = mysqli_query($this->con, $query);  
    //        while($row = mysqli_fetch_assoc($result))  
    //        {  
    //             $array[] = $row;  
    //        }  
    //        return $array;  
    // }  


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

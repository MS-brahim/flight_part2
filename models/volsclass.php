<?php
include_once "config_db.php";

class Vols extends connectDb {

    public function __construct()
    {
        parent::__construct();
    }
    
    public function select($table)
    {
        $sql = "SELECT * FROM ".$table;
        $array = array();
        $query = mysqli_query($this->conn,$sql);
        while($row = mysqli_fetch_assoc($query)){
            $array[] = $row;
        }
        return $array;
    }

    public function insertVols($nam,$dep,$arriv,$tDep,$tArv,$prix,$place){
        
        if(empty($nam) or empty($dep) or empty($arriv) or empty($tDep) or empty($tArv) or empty($prix) or empty($place)){
            return false;
        }else{

            $sql = "INSERT INTO vols (nom_vol, departure, arrival, d_depart, d_arrival, prix,place) 
                    VALUES ('$nam', '$dep', '$arriv', '$tDep', '$tArv', '$prix','$place')";

                if(mysqli_query($this->conn,$sql)){
                    return true;
                }else{
                    die("Error : ".mysqli_error($this->conn));
            }
        }    
    } 

    public function delete($idV){
        $sql = "DELETE FROM vols WHERE id_vol = '$idV'";
        $res = mysqli_query($this->conn, $sql);
        if($res){
            return true;
        }else{
            return false;
            
        }
    }
   
    // filter values
    public function santString($value){
        $str = trim($value);
        $str = filter_var($str,FILTER_SANITIZE_STRING);
        return $str;
    }         
}
?>
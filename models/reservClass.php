<?php
include_once "config_db.php";

class Reserve extends connectDb {

    public function __construct()
    {
        parent::__construct();
    }

    public function addClient($fname, $lname,$phone,$email,$passport,$id_user)
        {
            if(empty($fname) or empty($lname) or empty($phone) or empty($email) or empty($passport) ){
                return false;
            }else{
                $sqlC = "INSERT INTO client (nom, prenom, phone, email, num_passport, id_user) 
                        VALUES ('$fname', '$lname', '$phone', '$email', '$passport','$id_user')";
                if(mysqli_query($this->conn,$sqlC)){
                    $id_client = $this->conn->insert_id;
                    return $id_client;            
                }                
            }
    }

    public function addReserve($id_client,$id_vol, $id_user){        

        $sqlR = "INSERT INTO reservation (id_client, id_vol, id_user) 
                VALUES ('$id_client', '$id_vol','$id_user')";
        mysqli_query($this->conn,$sqlR);
        return true;
    }

    public function reserveID($idU)
    {
        $sql = "SELECT * FROM reservation R 
                INNER JOIN utilisateur U ON U.id_user = '$idU'
                INNER JOIN client C ON C.id_client = R.id_client
                INNER JOIN vols V ON R.id_vol = V.id_vol
                where R.id_user = '$idU'
                ";
        $array = array();
        $query = mysqli_query($this->conn,$sql);
        while($row = mysqli_fetch_assoc($query)){
            $array[] = $row;
        }
        return $array;
    }

    // filter values
    public function santString($value){
        $str = trim($value);
        $str = filter_var($str,FILTER_SANITIZE_STRING);
        return $str;
    }  
}
?>
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

    public function reserveID($id_reserve)
    {
        $query = "SELECT * FROM reservation WHERE id_reservation='$id_reserve'";
        $stmt = $this->conn->prepare($query);
		$stmt->execute();
		$result = $stmt->get_result();
		return  $result;
    }

    // history 
    function reserve_join($id_user) {

        $query = "SELECT id_reservation,id_client,id_vol, date_reservation FROM reservation INNER JOIN utilisateur ON reservation.id_user=utilisateur.id_user AND utilisateur.id_user = '$id_user'";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();
        return  $result;
            
    }

    // filter values
    public function santString($value){
        $str = trim($value);
        $str = filter_var($str,FILTER_SANITIZE_STRING);
        return $str;
    }  
}
?>
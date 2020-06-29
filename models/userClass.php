<?php
include_once "config_db.php";

class User extends connectDb {

    public function __construct()
    {
        parent::__construct();
    }
    // register 
    public function register($fname, $lname,$phone,$email,$passport,$password){
        
        if(empty($fname) or empty($lname) or empty($phone) or empty($email) or empty($passport) or empty($password)){
            return false;
        }else{
            
            $sql3 = mysqli_query($this->conn,"SELECT email 
                                            FROM utilisateur 
                                            WHERE email='$email'");

            if(mysqli_num_rows($sql3)>0){
                header ("location: ../views/register.php");
                exit;
            }else{

                $sql2 = "INSERT INTO utilisateur (nom, prenom, tel, email, num_passport, mot_de_passe) 
                        VALUES ('$fname', '$lname', '$phone', '$email', '$passport', '$password')";

                if(mysqli_query($this->conn,$sql2)){
                    return true;
                }else{
                    die("Error : ".mysqli_error($this->conn));
                }
            } 
        }          
    }

    // login 
    function checklogin($email,$password){
        
        $sql = "SELECT * FROM utilisateur WHERE email = '$email' AND mot_de_passe = '$password'";
        $query = $this->conn->query($sql);

        if($query->num_rows > 0){
            $row = $query->fetch_array();
            return $row['id_user'];
        }
        else{
            return false;
        }
    }

    // fetch array 
    public function details($sql){

        $query = $this->conn->query($sql);
        
        $row = $query->fetch_array();
            
        return $row;       
    }

    // filter values
    public function santString($value){
        $str = trim($value);
        $str = filter_var($str,FILTER_SANITIZE_STRING);
        return $str;
    }
}
?>
<?php
class User {
    function __construct() {
        $this->conn = new mysqli("localhost","root","","app_vols");
    }
    function user_check($mail, $password) {

        $query= "SELECT * FROM Utilisateur WHERE email=? && mot_de_passe =? ";
        $stmt =$this->conn->prepare($query);
        $stmt->bind_param("ss",$email,sha1($password));
        $stmt->execute();
        $result= $stmt->get_result();
        $row1 = mysqli_num_rows($result);
        $row2 = $result->fetch_assoc();
    
        $_SESSION["nom"] = $row2["nom"];
        $_SESSION["prenom"] = $row2["prenom"];
        $_SESSION["groupID"] =  $row2["groupID"];
        $_SESSION["id_user"] =  $row2["id_user"];
    
        // The mysqli_num_rows() function returns the number of rows in a result set.
    
    
        if ($row1 == 1 ) {
            if ($row2["groupID"] == 1) {
                header("Location: ../views/welcome.php");
                # code...
            } else {
                # code...
                header("Location: ../views/users.php");
                
    
            }
            
            
            
        } else {
            header("Location: ../views/users.php");
            
        }
    }
}
?>
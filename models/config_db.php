<?php
class connectDb {

    private $host   = "localhost";
    private $userDb = "root";
    private $passDb = "";
    private $Db     = "app_vols";

    protected $conn;

    public function __construct(){
        if(!isset($this->conn)){
            $this->conn = new mysqli($this->host,$this->userDb,$this->passDb,$this->Db);

            if(!$this->conn){
                echo "Cannot Connect To Database Server";
                exit;
            }
        }
        return $this->conn;
    }
}
?>
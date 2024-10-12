<?php
class database
{
    // declaration of variables
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $dbname = "edmb";
    public static $con = null;
    private $status = false;

    function __construct()
    {
        $this->initDatabase();
    }
    public function getStatus(){
        return $this->status;
    }

    private function initDatabase(){
        try {
            $con = new PDO("mysql:host=$this->host;dbname=".$this->dbname,
             $this->user, $this->pass);
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->status = true;
            echo "success";
        } catch (PDOException $th) {
            echo $th;
        }
    }
}

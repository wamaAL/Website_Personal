
<?php 

class konek{
    protected $host = "localhost";
    protected $user = "root";
    protected $pass = "";
    protected $database= "akademik";
    public $conn;

    function __construct()
    {
        try {
            $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->database);
        } catch (\Throwable $th) {
           echo $th->getMessage();
        }
    }    
}

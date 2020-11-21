<?php
    //make connection
    $conn = mysqli_connect('localhost', 'root', '', 'foodtaker');
    
    //check connection
    if(!$conn){
        echo 'Connection error: ' . mysqli_connect_error();
    }

    ##class Database{
    ##private $host = "localhost";
    ##private $db_name = "foodtaker";
    ##private $username = "root";
    ##private $password = "";
    ##public $conn;

    ##public function getconnection(){
        ##$this->conn = null;

        ##try{
            ##$this->conn = new PDO("mysql:host=" .$this->host . ";dbname=" .$this->db_name . $this->username. $this->password);

        ##}catch (PDOException $exception){
            ##echo "Connection Error: " . $exception->getMessage();
        #}
        #return $this->conn;
    #}
    #}
?>
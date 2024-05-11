<?php
class DB {
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "QLDP";
    public $con;

    public function __construct(){
        $this->con = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
    }
}
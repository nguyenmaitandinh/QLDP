<?php

class DB {
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "hotel_db";
    public $con;

    public function __construct() {
        try {
            $this->con = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function query($sql, $params = []) {
        try {
            $stmt = $this->con->prepare($sql);
            $stmt->execute($params);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Query failed: " . $e->getMessage();
            return false;
        }
    }

    public function exec($sql, $params = []) {
        try {
            $stmt = $this->con->prepare($sql);
            $stmt->execute($params);
            return $stmt->rowCount();
        } catch (PDOException $e) {
            echo "Query failed: " . $e->getMessage();
            return false;
        }
    }
}

?>

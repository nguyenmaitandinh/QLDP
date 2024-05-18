<?php
    class DB {
        private $servername = "localhost";
        private $username = "root";
        private $password = "";
        private $dbname = "hotel_booking";
        public $con;

        public function __construct() {
            try {
                $this->con = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
                $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
            }
        }

        public function getInstance($select) {
            try {
                $result = $this->con->query($select);
                return $result->fetch(PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                echo "Query failed: " . $e->getMessage();
            }
        }

        public function exec($query) {
            try {
                return $this->con->exec($query);
            } catch (PDOException $e) {
                echo "Query failed: " . $e->getMessage();
            }
        }
    }
?>
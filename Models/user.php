<?php
    class user{
        public $con;

        public function __construct() {
            require_once('./Models/DB.php');
            $db = new DB();
            $this->con = $db->con;
        }
  
        function InsertUser($tenhk, $matkhau, $sodienthoai, $email) {
            $db = new DB();
            $query = "INSERT INTO khachhang (makh, tenhk, matkhau, sodienthoai, email) 
                      VALUES (NULL, '$tenhk', '$matkhau', '$sodienthoai', '$email')";
            return $db->exec($query);
        }
        

        function CheckUser($tenhk) {
            $db = new DB();
            $select = "SELECT * FROM khachhang WHERE tenhk='$tenhk'";
            $result = $db->getInstance($select);
            return $result ? true : false;
        }
        
        
       
   
    }
?>
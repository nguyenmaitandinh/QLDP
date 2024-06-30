<?php
class UserModel {
    public $con;

    public function __construct(){
        require_once('./Models/DB.php');
        $db = new DB();
        $this->con = $db->con;
    }

    public function login($us, $pa) {
        try {
            $sql = "SELECT * FROM khachhang WHERE tenhk LIKE N'$us' AND matkhau = N'$pa'";
            $data = $this->con->prepare($sql);
            $data->execute();
            $user = $data->fetch(PDO::FETCH_ASSOC);
    
            if ($user) {
                return $user; // Trả về dữ liệu của người dùng khi tìm thấy
            }
    
            return false; // Trả về false nếu không tìm thấy người dùng
        } catch (PDOException $e) {
            // Bắt ngoại lệ PDO và ghi log
            echo "Error: " . $e->getMessage();
            return false; // Hoặc xử lý ngoại lệ khác tùy theo yêu cầu
        }
    }

    public function CheckUser($tenhk) {
        $sql = "SELECT * FROM khachhang WHERE tenhk = :tenhk";
        $data = $this->con->prepare($sql);
        $data->bindParam(':tenhk', $tenhk);
        $data->execute();
        $count = $data->rowCount();
        if ($count > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function InsertUser($tenhk, $crypt, $sodienthoai, $email) {
        try {
            $sql = "INSERT INTO khachhang (tenhk, matkhau, sodienthoai, email) VALUES (:tenhk, :crypt, :sodienthoai, :email)";
            $data = $this->con->prepare($sql);
            $data->bindParam(':tenhk', $tenhk);
            $data->bindParam(':crypt', $crypt);
            $data->bindParam(':sodienthoai', $sodienthoai);
            $data->bindParam(':email', $email);
            $result = $data->execute();
            return $result;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

}
?>

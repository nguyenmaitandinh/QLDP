<?php

class RoomModel {
    private $con;

    public function __construct() {
        require_once('./Models/DB.php');
        $db = new DB();
        $this->con = $db->con;
    }

    public function GetRoomId($id){
        $sql = "SELECT * FROM room_categories WHERE id = ?";
        $data = $this->con->prepare($sql);
        $data->execute([$id]);
        $room = $data->fetchAll();
        return $room;
    }

    public function BookRoom($ten, $sodienthoai, $diachi, $checkin, $checkout) {
        $sql = "INSERT INTO roombook (ten, sodienthoai, diachi, checkin, checkout) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->con->prepare($sql);
        $stmt->execute([$ten, $sodienthoai, $diachi, $checkin, $checkout]);
    }
    
    public function get_star($id, $customer_id){
        $sql = "SELECT rating FROM rating WHERE product_id = ? AND customer_id = ?";
        $stmt = $this->con->prepare($sql);
        $stmt->execute([$id, $customer_id]);
        
        // Kiểm tra xem có dữ liệu trả về hay không
        if ($stmt->rowCount() > 0) {
            return $stmt; // Trả về kết quả truy vấn
        } else {
            return false; // Hoặc xử lý theo cách khác nếu không có đánh giá
        }
    }
    
    public function get_total_ratings($id) {
        $sql = "SELECT rating FROM rating WHERE product_id = ?";
        $stmt = $this->con->prepare($sql);
        $stmt->execute([$id]);
        
        // Kiểm tra xem có dữ liệu trả về hay không
        if ($stmt->rowCount() > 0) {
            return $stmt; // Trả về kết quả truy vấn
        } else {
            return false; // Hoặc xử lý theo cách khác nếu không có đánh giá
        }
    }
    public function insert_binhluan($tenNguoiBinhLuan, $noiDungBinhLuan, $roomId) {
        if ($tenNguoiBinhLuan == '' || $noiDungBinhLuan == '') {
            $alert = "<span class='error'>Vui lòng nhập đầy đủ thông tin.</span>";
            return $alert;
        } else {
            $blogId = 0; // Hoặc bất kỳ giá trị mặc định nào bạn muốn
            $hinh = ''; // Giá trị mặc định cho cột 'hinh'
            $sql = "INSERT INTO binhluan (tenbinhluan, binhluan, room_id, blog_id, hinh) VALUES (?, ?, ?, ?, ?)";
            $stmt = $this->con->prepare($sql);
            $stmt->execute([$tenNguoiBinhLuan, $noiDungBinhLuan, $roomId, $blogId, $hinh]);
            if ($stmt) {
                $alert = "<div class='alert alert-success w-50' role='alert'>Bình luận của bạn đã được gửi và sẽ được kiểm duyệt.</div>";
                return $alert;
            } else {
                $alert = "<div class='alert alert-danger ' role='alert'>Gửi bình luận không thành công.</div>";
                return $alert;
            }
        }
    }
    
    
}


?>

<?php

require_once('./Models/user.php');
require_once('./Models/UserModel.php');
require_once ('./Models/session.php'); 
class HomeController extends BaseController{

    public function index(){
        //Đầu tiên là layout, thứ 2 giao diện cần hiển thị
        $this->view('layout.fontend.main', 'fontend.home.index');
    }
    public function dangnhap() {
      
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['us'], $_POST['pa'])) {
            $us = $_POST['us'];
            $pa = $_POST['pa'];
            $cdau = '@GFJHS^4';
            $csau = '!JYSAS56';
            $crypt = md5($cdau . $pa . $csau);
    
            $user = new UserModel();
            $result = $user->login($us, $crypt);
    
            if ($result !== false) {
                // Sử dụng trực tiếp mảng trả về từ phương thức login
                $_SESSION['customer_login'] = true;
                $_SESSION['customer_id'] = $result['makh'];
                $_SESSION['customer_name'] = $result['tenhk'];
    
                // In ra giá trị các biến session
                echo "customer_login: " . $_SESSION['customer_login'] . "<br>";
                echo "customer_id: " . $_SESSION['customer_id'] . "<br>";
                echo "customer_name: " . $_SESSION['customer_name'] . "<br>";
    
                header('Location: index.php');
                exit();
            } else {
                $alert = "<span class='error'>Email hoặc mật khẩu không đúng</span>";
                $this->view('layout.fontend.login', ['error' => $alert]);
            }
        } else {
            $this->view('layout.fontend.login', ['error' => '']);
        }
    }
    

    public function dangxuat() {
        // Hủy bỏ các biến Session khi đăng xuất
        $_SESSION['customer_login'] = false;
        $_SESSION['customer_id'] = '';
        $_SESSION['customer_name'] = '';

        // Chuyển hướng về trang đăng nhập hoặc trang chủ
        header('Location: index.php?c=home&a=dangnhap');
        exit();
    }

    public function dangky() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $tenhk = $_POST['txttenkh'];
            $sodienthoai = $_POST['txtsodt'];
            $email = $_POST['txtemail'];
            $pass = $_POST['txtpass'];
            $cdau = '@GFJHS^4';
            $csau = '!JYSAS56';
            $crypt = md5($cdau . $pass . $csau); // Sử dụng $pass thay vì $pa
    
            $ur = new UserModel();
            $check = $ur->CheckUser($tenhk);
            if ($check) {
                // Tên đăng nhập đã tồn tại, thông báo lỗi
                echo '<script> alert("Tên đăng nhập đã tồn tại");</script>';
                $this->view('layout.fontend.dangky', ''); // Hiển thị lại form đăng ký
            } else {
                // Tên đăng nhập không tồn tại, thực hiện đăng ký
                $kt = $ur->InsertUser($tenhk, $crypt, $sodienthoai, $email);
                if ($kt) {
                    // Đăng ký thành công, chuyển hướng về trang đăng nhập
                    echo '<script> alert("Đăng ký thành công");</script>';
                    header('Location: index.php?c=home&a=dangnhap');
                    exit();
                } else {
                    // Đăng ký thất bại, thông báo lỗi
                    echo '<script> alert("Đăng ký thất bại");</script>';
                    $this->view('layout.fontend.dangky', ''); // Hiển thị lại form đăng ký
                }
            }
        } else {
            // Phương thức không phải POST, hiển thị form đăng ký
            $this->view('layout.fontend.dangky', '');
        }
    }
    
    public function lienhe(){
        $this->view('layout.fontend.lienhe', '');
    }
    public function gioithieu(){
        $this->view('layout.fontend.gioithieu', '');
    }

    public function phong(){
        $this->view('layout.fontend.phong', '');
    }
   
   
} 
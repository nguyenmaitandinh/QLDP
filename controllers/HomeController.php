<?php
require_once('./Models/user.php');
class HomeController extends BaseController{

    public function index(){
        //Đầu tiên là layout, thứ 2 giao diện cần hiển thị
        $this->view('layout.fontend.main', 'fontend.home.index');
    }
    public function dangnhap() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_POST['us'], $_POST['pa'])) {
                    $us = $_POST['us'];
                    $pa = $_POST['pa'];
                    $cdau='@GFJHS^4';
                    $csau='!JYSAS56';
                    $crypt=md5($cdau.$pa.$csau);
                    $user = new UserModel();
                    $result = $user->login($us,$crypt);

                    if ($result) {
                        $cookie_name = "user_login";
                        setcookie($cookie_name, $us, time() + (86400 * 30), "/");
                        header('Location: http://localhost/QLDP/index.php');
                        exit();
                    } else {
                        $this->view('layout.fontend.login', '', ['error' => 'Sai tên truy cập hoặc mật khẩu']);
                    }
                }
            }
            $this->view('layout.fontend.login', '');
        
    }
    public function dangky() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $tenhk = $_POST['txttenkh'];
            $sodienthoai = $_POST['txtsodt'];
            $email = $_POST['txtemail'];
            $pass = $_POST['txtpass'];
            $cdau = '@GFJHS^4';
            $csau = '!JYSAS56';
            $crypt = md5($cdau . $pass . $csau);
    
            $ur = new user();
            $check = $ur->CheckUser($tenhk);
            if ($check) {
                echo '<script> alert("Username đã tồn tại");</script>';
                include "./views/layout/fontend/dangky.php";
            } else {
                $kt = $ur->InsertUser($tenhk, $crypt, $sodienthoai, $email,$pass);
                print_r($kt);   
                if ($kt) {
                    echo '<script> alert("Đăng ký thành công");</script>';
                    header('Location: http://localhost/QLDP/?c=home&a=dangnhap');
                } else {
                    echo '<script> alert("Đăng ký thất bại");</script>';
                    header('Location: http://localhost/QLDP/?c=home&a=dangky');
                }
            }
        } else {
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
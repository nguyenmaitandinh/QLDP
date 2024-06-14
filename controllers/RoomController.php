<?php

class RoomController extends BaseController
{
    private $roomModel;

    public function __construct() {
        require_once('./Models/RoomModel.php');
        $this->roomModel = new RoomModel();
    }

    public function chitiet() { 
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $room = $this->roomModel->GetRoomId($id);
            if(empty($room)) {
                $this->view('layout.fontend.pageerror', '');
            } else {
                $this->view( 'fontend.room.chitiet', ['room' => $room]);
            }
        } else {
            $this->view('layout.fontend.pageerror', '');
        }
    }
    public function roombook(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $room = $this->roomModel->GetRoomId($id);
            if(empty($room)) {
                $this->view('layout.fontend.pageerror', '');
            } else {
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $ten = $_POST['ten'];
                    $sodienthoai = $_POST['sodienthoai'];
                    $diachi = $_POST['diachi'];
                    $checkin = $_POST['checkin'];
                    $checkout = $_POST['checkout'];
    
                    $this->roomModel->BookRoom($ten, $sodienthoai, $diachi, $checkin, $checkout);
                    echo "<script>
                            alert('Đặt phòng thành công!');
                            window.location.href = 'http://localhost/QLDP/?c=home&a=Phong';
                          </script>";
                    exit(); 
                } else {
                    $this->view('fontend.room.roombook', ['room' => $room]);
                }
            }
        } else {
            $this->view('layout.fontend.pageerror', '');
        }
    }
    
    
    
}

?>

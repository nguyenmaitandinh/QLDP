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
}

?>

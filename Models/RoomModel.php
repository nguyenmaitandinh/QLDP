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
}

?>

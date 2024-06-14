<?php 
include('db_connect.php'); 

// Fetch all room bookings
$room = $conn->query("SELECT * FROM roombook");
$room_arr = array();
while($row = $room->fetch_assoc()){
    $room_arr[$row['id']] = $row;
}

?>
<div class="container-fluid">
    <div class="col-lg-12">
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tên Khách Hàng</th>
                                    <th>Số Điện Thoại</th>
                                    <th>Địa Chỉ</th>
                                    <th>Ngày Nhận</th>
                                    <th>Ngày Trả</th>
                                   
                            </thead>
                            <tbody>
                                <?php 
                                $i = 1;
                                // Loop through each room booking and display data
                                foreach ($room_arr as $room) {
                                    echo "<tr>";
                                    echo "<td>" . $i++ . "</td>";
                                    echo "<td>" . $room['ten'] . "</td>"; // Tên Khách Hàng
                                    echo "<td>" . $room['sodienthoai'] . "</td>"; // Số Điện Thoại
                                    echo "<td>" . $room['diachi'] . "</td>"; // Địa Chỉ
                                    echo "<td>" . $room['checkin'] . "</td>"; // Ngày Nhận
                                    echo "<td>" . $room['checkout'] . "</td>"; // Ngày Trả
                                   
                                    echo "</tr>";
									
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

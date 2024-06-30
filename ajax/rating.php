<?php
require_once(__DIR__ . '/../Models/DB.php');

$db = new DB();

if(isset($_POST['index']) && isset($_POST['product_id']) && isset($_POST['customer_id'])) {
    $index = $_POST['index'];
    $product_id = $_POST['product_id'];
    $customer_id = $_POST['customer_id'];

    // Ghi log các giá trị nhận được từ AJAX request
    error_log("Received AJAX request:");
    error_log("Index: $index, Product ID: $product_id, Customer ID: $customer_id");

    // Sử dụng prepared statement để tránh SQL injection
    $query = "INSERT INTO rating (product_id, customer_id, rating) VALUES (?, ?, ?)";
    $params = [$product_id, $customer_id, $index];
    $result = $db->exec($query, $params);
    

    if($result !== false) {
        echo 'success'; // Trả về thành công nếu insert thành công
    } else {
        echo 'error'; // Trả về lỗi nếu insert không thành công
    }
} else {
    echo 'error'; // Trường hợp thiếu tham số POST
}
?>

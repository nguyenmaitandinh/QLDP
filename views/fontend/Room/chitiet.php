<?php
require_once('./Models/RoomModel.php');

// Khởi tạo RoomModel
$roomModel = new RoomModel();

// Bao gồm menu
require_once('./views/layout/fontend/menu.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Các thẻ meta và link CSS -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="./public/image/favicon.png" type="image/png">
    <title>Tấn Dỉnh luxury</title>
    <link rel="stylesheet" href="./public/css/bootstrap.css">
    <link rel="stylesheet" href="./public/vendors/linericon/style.css">
    <link rel="stylesheet" href="./public/css/font-awesome.min.css">
    <link rel="stylesheet" href="./public/vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="./public/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="./public/vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="./public/vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" href="./public/css/responsive.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <style>
        .img-fluid {
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
        }

        .btn-success:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }
        .binhluan {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 5px;
        }
        .hihi {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .binhluan .form-control {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

<!--================Breadcrumb Area =================-->
<section class="breadcrumb_area">
    <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
    <div class="container">
        <div class="page-cover text-center">
            <h2 class="page-cover-tittle">Chi Tiết Phòng</h2>
            <ol class="breadcrumb">
                <!-- Breadcrumb (nếu có) -->
            </ol>
        </div>
    </div>
</section>

<div class="container mt-5 mb-5">
    <?php
    include 'admin/db_connect.php'; // Bao gồm kết nối CSDL
    $qry = $conn->prepare("SELECT * FROM room_categories WHERE id = ?");
    $qry->bind_param("i", $_GET['id']);
    $qry->execute();
    $result = $qry->get_result();
    while ($row = $result->fetch_assoc()):
    ?>
    <div class="row">
        <div class="col-lg-6 hihi">
            <img class="img-fluid" src="assets/img/<?php echo htmlspecialchars($row['cover_img']); ?>" alt="Project Cover Image" />
        </div>
        <div class="col-lg-6 hihi">
            <div class="project-name"><h4><?php echo htmlspecialchars($row['name']); ?></h4></div>
            <div class="project-category mt-1 mb-1"><h6 class="text-danger"><?php echo "$ " . number_format($row['price'], 2); ?> per day</h6></div>
            <p><strong>Mô tả:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod mattis dolor eget lobortis.</p>
            

            <?php
            if (isset($_SESSION['customer_id'])) {
                $customer_id = $_SESSION['customer_id'];

                // Lấy tổng số sao của khách hàng đang đăng nhập
                $get_star = $roomModel->get_star($row['id'], $customer_id);

                if ($get_star) {
                    $tongsao_cua_ban = 0;
                    $solan_cua_ban = 0;

                    while ($result_star = $get_star->fetch(PDO::FETCH_ASSOC)) {
                        $tongsao_cua_ban += $result_star['rating'];
                        $solan_cua_ban += 1;
                    }

                    if ($solan_cua_ban > 0) {
                        $trungbinhsao_cua_ban = $tongsao_cua_ban / $solan_cua_ban;
                    } else {
                        echo "Bạn chưa có đánh giá nào.<br>";
                        $trungbinhsao_cua_ban = 0; // Khởi tạo biến để tránh lỗi
                    }
                } else {
                    echo "Không thể lấy đánh giá của bạn.<br>";
                    $trungbinhsao_cua_ban = 0; // Khởi tạo biến để tránh lỗi
                }

                // Lấy tổng số sao của tất cả các khách hàng
                $get_all_ratings = $roomModel->get_total_ratings($row['id']);

                if ($get_all_ratings) {
                    $tongsao_tat_ca = 0;
                    $solan_tat_ca = 0;

                    while ($rating = $get_all_ratings->fetch(PDO::FETCH_ASSOC)) {
                        $tongsao_tat_ca += $rating['rating'];
                        $solan_tat_ca += 1;
                    }

                    // Lấy trung bình sao của tất cả khách hàng
                    if ($solan_tat_ca > 0) {
                        $trungbinhsao_tat_ca = $tongsao_tat_ca / $solan_tat_ca;
                    } else {
                        echo "Chưa có đánh giá nào từ các khách hàng.<br>";
                        $trungbinhsao_tat_ca = 0; // Khởi tạo biến để tránh lỗi
                    }
                } else {
                    echo "Không thể lấy đánh giá từ các khách hàng.<br>";
                    $trungbinhsao_tat_ca = 0; // Khởi tạo biến để tránh lỗi
                }
            } else {
                echo "Vui lòng đăng nhập để xem và đánh giá sản phẩm.<br>";
                $trungbinhsao_tat_ca = 0; // Khởi tạo biến để tránh lỗi khi không đăng nhập
            }
            ?>

            <ul style="list-style: none; padding: 0; display: flex;">
                <?php
                // Lấy số sao hiện tại
                $current_rating = isset($row['rating']) ? $row['rating'] : 0;

                // Vòng lặp để hiển thị các nút đánh giá
                for ($count = 1; $count <= 5; $count++) {
                    $color = ($count <= round($trungbinhsao_tat_ca)) ? 'color: #ffcc00;' : 'color: #ccc;';

                    if (isset($_SESSION['customer_id'])) {
                        ?>
                        <li class="rating"
                            style="cursor:pointer; font-size:30px;<?php echo $color; ?>"
                            id="<?php echo $row['id'] . '-' . $count; ?>"
                            data-id="<?php echo $row['id']; ?>"
                            data-rating="<?php echo $count; ?>"
                            data-index="<?php echo $count; ?>"
                            data-customer-id="<?php echo $_SESSION['customer_id']; ?>">
                            &#9733;
                        </li>
                        <?php
                    } else {
                        ?>
                        <li class="rating_login"
                            style="cursor:pointer; font-size:30px;color: #ccc; "
                            id="<?php echo $row['id'] . '-' . $count; ?>"
                            data-id="<?php echo $row['id']; ?>"
                            data-rating="<?php echo $count; ?>"
                            data-index="<?php echo $count; ?>"
                            data-customer-id="">
                            &#9733;
                        </li>
                        <?php
                    }
                }
                ?>
            </ul>
            <a href="?c=room&a=roombook&id=<?php echo $row['id']; ?>" class="btn btn-info btn-block w-25">Đặt Phòng</a>
        </div>
    </div>
    <?php
if (isset($_POST['binhluan_submit'])) {
    $tenNguoiBinhLuan = $_POST['tennguoibinhluan'];
    $noiDungBinhLuan = $_POST['binhluan'];
    $roomId = $_POST['porduct_id_binhluan'];
    
    $binhluan = $roomModel->insert_binhluan($tenNguoiBinhLuan, $noiDungBinhLuan, $roomId);
    // echo $binhluan; // Hiển thị thông báo
}
?>



<div class="binhluan mt-3 mb-5">
    <form action="" method="POST">
        <p><input type="hidden" value="<?php echo $row['id']; ?>" name="porduct_id_binhluan"></p>
        <div class="form-group">
            <label for="tennguoibinhluan">Tên người bình luận</label>
            <input type="text" class="form-control" id="tennguoibinhluan" name="tennguoibinhluan" placeholder="Nhập tên của bạn">
        </div>
        <div class="form-group">
            <label for="binhluan">Bình luận</label>
            <textarea name="binhluan" class="form-control" id="binhluan" rows="4" placeholder="Nhập bình luận của bạn"></textarea>
        </div>
        <div class="form-group">
           <!-- <?php echo $binhluan?>; -->
        </div>

        <div class="text-right">
            <button type="submit" name="binhluan_submit" class="btn btn-primary">Gửi bình luận</button>
        </div>
    </form>
</div>

     <?php
    endwhile;
    ?>
</div>

<!--================End Breadcrumb Area =================-->

<!-- jQuery, Bootstrap JS, và các plugin JS -->
<script src="./public/js/jquery-3.2.1.min.js"></script>
<script src="./public/js/popper.js"></script>
<script src="./public/js/bootstrap.min.js"></script>
<script src="./public/js/stellar.js"></script>
<script src="./public/vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="./public/vendors/nice-select/js/jquery.nice-select.min.js"></script>
<script src="./public/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
<script src="./public/js/jquery.ajaxchimp.min.js"></script>
<script src="./public/js/mail-script.js"></script>
<script src="./public/js/theme.js"></script>
<script>
setTimeout(function() {
    document.querySelector('.alert').style.display = 'none';
}, 1000); // 5000 milliseconds = 5 seconds
</script>

<script>
    $(document).ready(function() {
        var isLoggedIn = <?php echo json_encode(isset($_SESSION['customer_id'])); ?>;

        // Hàm để xóa nền của các nút đánh giá
        function remove_background(product_id) {
            for (var count = 1; count <= 5; count++) {
                $('#' + product_id + '-' + count).css('color', '#ccc');
            }
        }

        // Xử lý sự kiện khi rê chuột vào nút đánh giá
        $(document).on('mouseenter', '.rating', function() {
            if (!isLoggedIn) {
                return;
            }

            var index = $(this).data("index");
            var product_id = $(this).data('id');

            remove_background(product_id);

            for (var count = 1; count <= index; count++) {
                $('#' + product_id + '-' + count).css('color', '#ffcc00');
            }
        });

        // Xử lý sự kiện khi rời chuột khỏi nút đánh giá
        $(document).on('mouseleave', '.rating', function() {
            if (!isLoggedIn) {
                return;
            }

            var rating = $(this).data("rating");
            var product_id = $(this).data('id');

            remove_background(product_id);

            for (var count = 1; count <= rating; count++) {
                $('#' + product_id + '-' + count).css('color', '#ffcc00');
            }
        });

        // Xử lý sự kiện khi click vào nút đánh giá
        $('.rating').click(function() {
            if (!isLoggedIn) {
                alert('Vui lòng đăng nhập để đánh giá.');
                return;
            }

            var index = $(this).data("index");
            var product_id = $(this).data('id');
            var customer_id = $(this).data('customer-id');

            $.ajax({
                url: 'ajax/rating.php',
                data: {index: index, product_id: product_id, customer_id: customer_id},
                type: 'POST',
                success: function(response) {
                    if(response.trim() == 'success') {
                        alert('Đánh giá ' + index + ' sao thành công');
                    } else {
                        alert('Đã xảy ra lỗi trong quá trình đánh giá.');
                    }
                },
                error: function(xhr, status, error) {
                    alert('Đã xảy ra lỗi trong quá trình gửi yêu cầu');
                }
            });
        });
    });
</script>

</body>
</html>

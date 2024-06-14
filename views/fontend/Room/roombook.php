<!DOCTYPE html>
<html lang="en">
<head>

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="./public/image/favicon.png" type="image/png">
        <title>Tấn Dỉnh luxury</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="./public/css/bootstrap.css">
        <link rel="stylesheet" href="./public/vendors/linericon/style.css">
        <link rel="stylesheet" href="./public/css/font-awesome.min.css">
        <link rel="stylesheet" href="./public/vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="./public/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="./public/vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="./public/vendors/owl-carousel/owl.carousel.min.css">
        <!-- main css -->
        <link rel="stylesheet" href="./public/css/style.css">
        <link rel="stylesheet" href="./public/css/responsive.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
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

    </style>
</head>
<body>
<?php require_once('./views/layout/fontend/menu.php');?>
        <!--================Header Area =================-->
      
        <!--================Header Area =================-->
        
        <!--================Breadcrumb Area =================-->
        <section class="breadcrumb_area">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="page-cover text-center">
                    <h2 class="page-cover-tittle">Đặt Phòng</h2>
                    <ol class="breadcrumb">
                        
                        
                    </ol>
                </div>
            </div>
        </section>

<div class="container mt-5 mb-5">
    <?php 
    include 'admin/db_connect.php';
    $qry = $conn->prepare("SELECT * FROM room_categories WHERE id = ?");
    $qry->bind_param("i", $_GET['id']); 
    $qry->execute();
    $result = $qry->get_result();
    while($row = $result->fetch_assoc()):
    ?>
   <div class="container mt-5">
    <div class="row">
      <div class="col-lg-6 mb-4">
        <img class="img-fluid rounded" src="assets/img/<?php echo htmlspecialchars($row['cover_img']); ?>" alt="Project Cover Image" />
      </div>
      <div class="col-lg-6">
        <div class="card shadow-sm">
          <div class="card-body">
            
          <form method="post" action="">
            <div class="row mb-3">
            <div class="project-name text-center"><h4><?php echo htmlspecialchars($row['name']); ?></h4></div>
            <div class="project-category mt-1 mb-1 text-center"><h6 class="text-danger"><?php echo "$ " . number_format($row['price'], 2); ?> per day</h6></div>
            <div class="col-md-6">
            <label for="name" class="form-label">Tên</label>
            <input type="text" class="form-control" id="name" name="ten" placeholder="Nhập tên của bạn" required>
        </div>
        <div class="col-md-6">
            <label for="phone" class="form-label">Số Điện Thoại</label>
            <input type="tel" class="form-control" id="phone" name="sodienthoai" placeholder="Nhập số điện thoại của bạn" required>
        </div>
    </div>
    <div class="mb-3">
        <label for="diachi" class="form-label">Địa Chỉ</label>
        <input type="text" class="form-control" id="diachi" name="diachi" placeholder="Nhập địa chỉ của bạn" required>
    </div>
    <div class="row mb-3">
        <div class="col-md-6">
            <label for="checkin" class="form-label">Ngày Nhận Phòng</label>
            <input type="date" class="form-control" id="checkin" name="checkin" required>
        </div>
        <div class="col-md-6">
            <label for="checkout" class="form-label">Ngày Trả Phòng</label>
            <input type="date" class="form-control" id="checkout" name="checkout" required>
        </div>
    </div>
    <button type="submit" class="btn btn-primary w-100 mt-3">Đặt Phòng</button>
          </form>

          </div>
        </div>
      </div>
    </div>
  </div>

    <?php endwhile; ?>
</div>
<?php require_once('./views/layout/fontend/footer.php');?>
        <!--================Contact Area =================-->
        
        <!--================ start footer Area  =================-->	
     
        <script src="./public/js/jquery-3.2.1.min.js"></script>
        <script src="./public/js/popper.js"></script>
        <script src="./public/js/bootstrap.min.js"></script>
        <script src="./public/vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="./public/js/jquery.ajaxchimp.min.js"></script>
        <script src="./public/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
        <script src="./public/vendors/nice-select/js/jquery.nice-select.js"></script>
        <script src="./public/js/mail-script.js"></script>
        <script src="./public/js/stellar.js"></script>
        <script src="./public/vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
        <script src="./public/vendors/isotope/isotope-min.js"></script>
        <script src="./public/js/stellar.js"></script>
        <script src="./public/vendors/lightbox/simpleLightbox.min.js"></script>
        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="./public/js/gmaps.min.js"></script>
        <!-- contact js -->
        <script src="./public/js/jquery.form.js"></script>
        <script src="./public/js/jquery.validate.min.js"></script>
        <script src="./public/js/contact.js"></script>
        <script src="./public/js/custom.js"></script>
</body>
</html>

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
                    <h2 class="page-cover-tittle">Chi Tiết </h2>
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
    <div class="row">
        <div class="col-lg-6">
            <img class="img-fluid" src="assets/img/<?php echo $row['cover_img']; ?>" alt="" />
        </div>
        <div class="col-lg-6">
            <div class="project-name"><?php echo $row['name']; ?></div>
            <div class="project-category text-white-50 mt-3"><?php echo "$ " . number_format($row['price'], 2); ?> per day</div>
            <p><strong>Mô tả:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod mattis dolor eget lobortis.</p>
            <a href="#" class="btn btn-success">Đặt phòng</a>
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

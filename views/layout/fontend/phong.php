<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="image/favicon.png" type="image/png">
        <title>Tấn Dỉnh luxury</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="./public/css/bootstrap.css">
        <link rel="stylesheet" href="./public/vendors/linericon/style.css">
        <link rel="stylesheet" href="./public/css/font-awesome.min.css">
        <link rel="stylesheet" href="./public/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="./public/vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="./public/vendors/owl-carousel/owl.carousel.min.css">
        <!-- main css -->
        <link rel="stylesheet" href="./public/css/style.css">
        <link rel="stylesheet" href="./public/css/styles.css">
        <link rel="stylesheet" href="./public/css/responsive.css">
        <style>
    .portfolio-box {
        position: relative;
        display: block;
        margin-bottom: 30px;
        overflow: hidden; /* Để ẩn phần hình ảnh bị cắt bớt */
    }
    .portfolio-box img {
        width: 100%;
        height: 200px; /* Chiều cao cố định */
        object-fit: cover; /* Cắt bớt hình ảnh để vừa khung */
        border-radius: 5px;
    }
    .portfolio-box-caption {
        position: absolute;
        bottom: 0;
        background: rgba(0, 0, 0, 0.7);
        color: #fff;
        width: 100%;
        padding: 20px;
        border-radius: 0 0 5px 5px;
        text-align: center;
    }
    .portfolio-box-caption .project-category {
        font-size: 14px;
    }
    .portfolio-box-caption .project-name {
        font-size: 18px;
        font-weight: bold;
    }
</style>
    </head>
    <body>
        <!--================Header Area =================-->
        <?php require_once('./views/layout/fontend/menu.php');?>
        <!--================Header Area =================-->
        
        <!--================Breadcrumb Area =================-->
        <section class="breadcrumb_area">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="page-cover text-center">
                    <h2 class="page-cover-tittle">Phòng</h2>
                
                </div>
            </div>
        </section>
        <!--================Breadcrumb Area =================-->
        
        <!--================ Accomodation Area  =================-->
        <section class="accomodation_area section_gap">
            <div class="container">
                <div class="section_title text-center">
                    <h2 class="title_color">Special Accomodation</h2>
                    <p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast,</p>
                </div>
                <div id="portfolio">
    <div class="container-fluid p-4">
        <div class="row">
            <?php 
            include 'admin/db_connect.php';
            $qry = $conn->query("SELECT * FROM room_categories ORDER BY RAND()");
            while($row = $qry->fetch_assoc()):
            ?>
            <div class="col-lg-4 col-md-6 mb-4">
                <a class="portfolio-box" href="#">
                    <img class="img-fluid" src="assets/img/<?php echo $row['cover_img']; ?>" alt="" />
                    <div class="portfolio-box-caption">
                        <div class="project-category text-white-50 mt-3"><?php echo "$ " . number_format($row['price'], 2); ?> per day</div>
                        <div class="project-name"><?php echo $row['name']; ?></div>
                        <div class="col mt-4">
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="?c=room&a=chitiet&id=<?php echo $row['id'];?>" class="prod-img">
                                        <button type="button" class="btn btn-success">Chi tiết</button>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-info">Đặt Phòng</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>
            </div>
        </section>
        <!--================ Accomodation Area  =================-->
        <!--================Booking Tabel Area =================-->
        <section class="hotel_booking_area">
            <div class="container">
                <div class="row hotel_booking_table">
                    <div class="col-md-3">
                        <h2>Book<br> Your Room</h2>
                    </div>
                    <div class="col-md-9">
                        <div class="boking_table">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="book_tabel_item">
                                        <div class="form-group">
                                            <div class='input-group date' id='datetimepicker11'>
                                                <input type='text' class="form-control" placeholder="Arrival Date"/>
                                                <span class="input-group-addon">
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class='input-group date' id='datetimepicker1'>
                                                <input type='text' class="form-control" placeholder="Departure Date"/>
                                                <span class="input-group-addon">
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="book_tabel_item">
                                        <div class="input-group">
                                            <select class="wide">
                                                <option data-display="Adult">Adult</option>
                                                <option value="1">Old</option>
                                                <option value="2">Younger</option>
                                                <option value="3">Potato</option>
                                            </select>
                                        </div>
                                        <div class="input-group">
                                            <select class="wide">
                                                <option data-display="Child">Child</option>
                                                <option value="1">Child</option>
                                                <option value="2">Baby</option>
                                                <option value="3">Child</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="book_tabel_item">
                                        <div class="input-group">
                                            <select class="wide">
                                                <option data-display="Child">Number of Rooms</option>
                                                <option value="1">Room 01</option>
                                                <option value="2">Room 02</option>
                                                <option value="3">Room 03</option>
                                            </select>
                                        </div>
                                        <a class="book_now_btn button_hover" href="#">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Booking Tabel Area  =================-->
        <!--================ Accomodation Area  =================-->
        <section class="accomodation_area section_gap">
            <div class="container">
                <div class="section_title text-center">
                    <h2 class="title_color">Normal Accomodation</h2>
                    <p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast,</p>
                </div>
                <div class="row accomodation_two">
                    <div class="col-lg-3 col-sm-6">
                        <div class="accomodation_item text-center">
                            <div class="hotel_img">
                                <img src="./public/image/room1.jpg" alt="">
                                <a href="#" class="btn theme_btn button_hover">Book Now</a>
                            </div>
                            <a href="#"><h4 class="sec_h4">Double Deluxe Room</h4></a>
                            <h5>$250<small>/night</small></h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="accomodation_item text-center">
                            <div class="hotel_img">
                                <img src="./public/image/room2.jpg" alt="">
                                <a href="#" class="btn theme_btn button_hover">Book Now</a>
                            </div>
                            <a href="#"><h4 class="sec_h4">Single Deluxe Room</h4></a>
                            <h5>$200<small>/night</small></h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="accomodation_item text-center">
                            <div class="hotel_img">
                                <img src="./public/image/room3.jpg" alt="">
                                <a href="#" class="btn theme_btn button_hover">Book Now</a>
                            </div>
                            <a href="#"><h4 class="sec_h4">Honeymoon Suit</h4></a>
                            <h5>$750<small>/night</small></h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="accomodation_item text-center">
                            <div class="hotel_img">
                                <img src="./public/image/room4.jpg" alt="">
                                <a href="#" class="btn theme_btn button_hover">Book Now</a>
                            </div>
                            <a href="#"><h4 class="sec_h4">Economy Double</h4></a>
                            <h5>$200<small>/night</small></h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="accomodation_item text-center">
                            <div class="hotel_img">
                                <img src="./public/image/room1.jpg" alt="">
                                <a href="#" class="btn theme_btn button_hover">Book Now</a>
                            </div>
                            <a href="#"><h4 class="sec_h4">Double Deluxe Room</h4></a>
                            <h5>$250<small>/night</small></h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="accomodation_item text-center">
                            <div class="hotel_img">
                                <img src="./public/image/room2.jpg" alt="">
                                <a href="#" class="btn theme_btn button_hover">Book Now</a>
                            </div>
                            <a href="#"><h4 class="sec_h4">Single Deluxe Room</h4></a>
                            <h5>$200<small>/night</small></h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="accomodation_item text-center">
                            <div class="hotel_img">
                                <img src="./public/image/room3.jpg" alt="">
                                <a href="#" class="btn theme_btn button_hover">Book Now</a>
                            </div>
                            <a href="#"><h4 class="sec_h4">Honeymoon Suit</h4></a>
                            <h5>$750<small>/night</small></h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="accomodation_item text-center">
                            <div class="hotel_img">
                                <img src="./public/image/room4.jpg" alt="">
                                <a href="#" class="btn theme_btn button_hover">Book Now</a>
                            </div>
                            <a href="#"><h4 class="sec_h4">Economy Double</h4></a>
                            <h5>$200<small>/night</small></h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php require_once('./views/layout/fontend/footer.php');?>
        <script src="./public/js/jquery-3.2.1.min.js"></script>
        <script src="./public/js/popper.js"></script>
        <script src="./public/js/bootstrap.min.js"></script>
        <script src="./public/vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="./public/js/jquery.ajaxchimp.min.js"></script>
        <script src="./public/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
        <script src="./public/vendors/nice-select/js/jquery.nice-select.js"></script>
        <script src="./public/js/mail-script.js"></script>
        <script src="./public/js/stellar.js"></script>
        <script src="./public/vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="./public/js/custom.js"></script>
    </body>
</html>
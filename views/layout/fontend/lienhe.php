<!doctype html>
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
                    <h2 class="page-cover-tittle">Liên Hệ </h2>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Trang Chủ </a></li>
                        <li class="active">Liên Hệ</li>
                    </ol>
                </div>
            </div>
        </section>
        <!--================Breadcrumb Area =================-->
        
        <!--================Contact Area =================-->
        <section class="contact_area section_gap">
            <div class="container">
                <div id="mapBox" class="mapBox" 
                    data-lat="40.701083" 
                    data-lon="-74.1522848" 
                    data-zoom="13" 
                    data-info="PO Box CT16122 Collins Street West, Victoria 8007, Australia."
                    data-mlat="40.701083"
                    data-mlon="-74.1522848">
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="contact_info">
                            <div class="info_item">
                                <i class="lnr lnr-home"></i>
                                <h6>California, United States</h6>
                                <p>Santa monica bullevard</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-phone-handset"></i>
                                <h6><a href="#">00 (440) 9865 562</a></h6>
                                <p>Mon to Fri 9am to 6 pm</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-envelope"></i>
                                <h6><a href="#">support@colorlib.com</a></h6>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 text-right">
                                <button type="submit" value="submit" class="btn theme_btn button_hover">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
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
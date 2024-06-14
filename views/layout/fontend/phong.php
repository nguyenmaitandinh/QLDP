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
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
        <style>
 .portfolio-box {
    transition: transform 0.3s ease;
}

.portfolio-box:hover {
    transform: scale(1.05);
}

.image-container {
    position: relative;
    width: 100%;
    padding-top: 75%; /* Adjust this percentage to change the aspect ratio */
    overflow: hidden;
}

.image-container img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover; 
    border-top-left-radius: 0.25rem;
    border-top-right-radius: 0.25rem;
}

.portfolio-box-caption {
    padding: 1rem;
}

.card-footer {
    padding: 0.75rem 1rem;
}

.btn-block {
    width: 100%;
}

.text-muted {
    font-size: 0.9rem;
}
b{
    color: black;
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
        <section class="page-section bg-light">
		
		<div class="container ">	
        <div class="container">
                <div class="section_title text-center">
                    <h2 class="title_color">Special Accomodation</h2>
                    <p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast,</p>
                </div>
				<div class="col-lg-12">	
						<div class="card">
							<div class="card-body">	
									<form action="index.php?page=list" id="filter" method="POST">
			        					<div class="row">
			        						<div class="col-md-3">
			        							<label for="">Chech-in Date</label>
			        							<input type="text" class="form-control datepicker" name="date_in" autocomplete="off" value="<?php echo isset($date_in) ? date("Y-m-d",strtotime($date_in)) : "" ?>">
			        						</div>
			        						<div class="col-md-3">
			        							<label for="">Chech-out Date</label>
			        							<input type="text" class="form-control datepicker" name="date_out" autocomplete="off" value="<?php echo isset($date_out) ? date("Y-m-d",strtotime($date_out)) : "" ?>">
			        						</div>
			        						<div class="col-md-3">
			        							<br>
			        							<button class="btn-btn-block btn-primary mt-3">Check Availability</button>
			        						</div>

			        					</div>
			        				</form>
							</div>
						</div>	

						<hr>	
						
                        <?php 
                        include 'admin/db_connect.php';
                        $qry = $conn->query("SELECT * FROM room_categories ORDER BY RAND()");
                        while($row = $qry->fetch_assoc()):
                        ?>
						<div class="card item-rooms mb-3">
							<div class="card-body">
								<div class="row">
                                    <div class="col-md-5">
                                        <img class="card-img-top img-fluid" src="assets/img/<?php echo $row['cover_img']; ?>" alt="Room Image" />
                                    </div>
                                    <div class="col-md-5" height="100%">
                                        <h4 class="mt-4"><b> Giá Phòng : <?php echo "$" . number_format($row['price'], 2); ?> </b><span> </span></h3>
                                            <br>
                                        <h4><b>
                                        Tên Phòng : <?php echo $row['name']; ?>
                                        </b></h4>
                                
                                    </div>
                                    <div class="col-md-2">  

                                        <div class="align-self-end mt-5  w-100">
                                            <a href="?c=room&a=roombook&id=<?php echo $row['id'];?>" class="btn btn-info btn-block">Đặt Phòng</a>
                                        </div><br>
                                        <div class="align-self-end   w-100">
                                            <a href="?c=room&a=chitiet&id=<?php echo $row['id'];?>" class="btn btn btn-outline-success btn-block">Chi tiết</a>
                                        </div>

                                       
                                    
                                    </div>
                                
                                </div>
							</div>

						
						</div>
						<?php endwhile; ?>
				</div>	
		</div>	
</section>
      
        <!--================ Accomodation Area  =================-->
        <!--================Booking Tabel Area =================-->
      
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
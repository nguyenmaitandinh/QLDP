<?php
    $c = isset($_GET['c']) ? $_GET['c'] : 'home';
    $a = isset($_GET['a']) ? $_GET['a'] : 'index';
?>
<header class="header_area">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
          
            <a class="navbar-brand logo_h" href="index.html"><img src="./public/image/Logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            
            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                <ul class="nav navbar-nav menu_nav ml-auto">
                    <li class="nav-item <?php echo ($c == 'home' && $a == 'index') ? 'active' : ''; ?>"><a class="nav-link" href="?c=home&a=index">Trang Chủ</a></li>
                    <li class="nav-item <?php echo ($c == 'home' && $a == 'gioithieu') ? 'active' : ''; ?>"><a class="nav-link" href="?c=home&a=gioithieu">Giới Thiệu</a></li>
                    <li class="nav-item <?php echo ($c == 'home' && $a == 'Phong') ? 'active' : ''; ?>"><a class="nav-link" href="?c=home&a=Phong">Phòng</a></li>
                    <li class="nav-item <?php echo ($c == 'home' && $a == 'lienhe') ? 'active' : ''; ?>"><a class="nav-link" href="?c=home&a=lienhe">Liên Hệ</a></li>
                    <li class="nav-item <?php echo ($c == 'home' && $a == 'dangnhap') ? 'active' : ''; ?>"><a class="nav-link" href="?c=home&a=dangnhap">Đăng Nhập</a></li>
                </ul>
                <ul class="nav navbar-nav menu_nav ml-auto">
                   
                </ul>
            </div>
        </nav>
    </div>
</header>

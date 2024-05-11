<?php
class HomeController extends BaseController{

    public function index(){
        //Đầu tiên là layout, thứ 2 giao diện cần hiển thị
        $this->view('layout.fontend.main', 'fontend.home.index');
    }

   
} 
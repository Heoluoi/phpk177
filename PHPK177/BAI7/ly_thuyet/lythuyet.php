<?php

// header - chuyển hướng trang 
//đường dẫn tuyệt đối
// header('location:https://google.com.vn');

//đường dẫn tương đối
// ../ lùi 1 cấp
// header('location:../bai7.php');

// session
//bắt đầu phiên làm việc session
session_start();

//khởi tạo session
$_SESSION['name']='nguyễn thê phúc';

// lấy giá trị trong session
// echo $_SESSION['name'];

//xoá 1 session
// unset($_SESSION['name']);

//xoá tất cả session

// session_destroy(); //dùng cho logout


// header('location:thu_muc/vietpro.php');

// hằng
// khai báo
// define('Tên biến','Giá trị')
// chú ý:hằng không bị thay đổi trong quá trình thực thi
define('PI',3.14);

//lấy giá trị của hằng
// echo constant('PI');

// kiểm tra tồn tại của hằng
// defined('PI')   : output : true: tồn tại , False: không tồn tại
var_dump(defined('PI'));

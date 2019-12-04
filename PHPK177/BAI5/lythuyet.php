<?php
$file_upload = $_GET['file_upload']; // hứng bằng phương thức get
//bước 1: mở file
$file_path = 'upload/'.$file_upload;
//buowcs2: thông báo tải file: 
header("Content-Disposition: attachment; filename = $file_upload"); //tải xuống
//buowcs3: trình duyệt trả về định dạng files
header("Content-Type: application/pdf");
//bước 4: đọc file
readfile($file_path);
?>
<?php
$file_upload = $_GET['file_upload'];
$file_path = 'upload/'.$file_upload;
//header("Content-Disposition: attachment; filename = $file_upload"); //tải xuống
header("Content-Type: application/pdf");
readfile($file_path);
?>
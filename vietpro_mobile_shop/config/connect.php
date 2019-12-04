<?php
if(!defined('SECURITY')){
	die("Bạn không có quyền truy cập file này");
}
$conn = mysqli_connect('localhost','root','','phpk177');
if($conn){
    mysqli_query($conn, "SET NAMES 'utf8'");
}else{
    die('Kết nối thất bại');
}
?>
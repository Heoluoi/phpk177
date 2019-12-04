<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
//phương thức get
//cú pháp: $_GET['tham_so]; // biến toàn cục lưu trữ dưới dạng mảng bất tuần tự
//truyền tham số: 
//http://abc.com/index.php?tham_so1=gia_tri1&tham_so2=gia_tri2

//ví dụ:  
//hàm isset
// if(isset($_GET['ten']) && isset($_GET['tuoi']) && isset($_GET['diachi'])){
//     $ten = $_GET['ten'];
//     $tuoi = $_GET['tuoi'];
//     $diachi = $_GET['diachi'];
//     echo $ten.'<br/>'.$tuoi.'<br/>'.$diachi.'<br/>';
// }

//mảng
// $array = array(biểu_thuwcs1, bieu_thuc2, bieu_thuc3, ....);
// $array = [biểu_thuwcs1, bieu_thuc2, bieu_thuc3, ....];
//ví dụ:   
// $array = ['một'=>1,2,'ba','bốn'=>'bốn',true,5.5,'vân vân'];
// //foreach
// foreach ($array as $key => $value) {
//     echo $value;
// }
//echo $array[4];
//json
//đọc file json
$data_json = file_get_contents('data.json');
//chuyển file json sang dạng mảng
$result_json = json_decode($data_json, true);
//print_r($result_json);
foreach ($result_json as $key => $value) {
    echo $value.'<br/>';
}
//chuyển json sang php => ghi dữ liệu vào json thì dữ liệu cũ sẽ bị thaybthees bằng dữ liệu mới
$data_en_json = json_encode($result_json);
//pull vào json
file_put_contents('data.json',$data_en_json);

//bài tập
?>
<!-- <form action="" method="get">
    <input type="text" name="user">
    <input type="text" name="pass">
    <input type="submit" name="sbm">
</form> -->
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- khai báo vùng làm việc php -->
    <?php
    /*đây là php
    echo 'đây là php';*/
    ////////////////////////////biến trong php
    // $ten_Bien = "giá trị của biến";
    // echo $ten_Bien;
    /////////////////////////////// kiểu dữ liệu
    // //////////////////////số nguyên
    // $soNguyen = 10; int
    // echo $soNguyen;
    ///////////////////số thực
    // $soThuc = 5.5;
    // echo $soThuc;
    ///////////////////////logic
    // $logic = 5 < 3; 
    // echo $logic;
    /////////////////////chuỗi
    // $chuoi = "xin chào cả lớp";
    /////////////////////////////////toán tử trong php
    /////////gán
    //$gan = "toán tử gán";
    /// nối
    // $a = "vietpro";
    // echo "xin chào".$a;
    //so sánh
    //logic
    // (!6<3)
    //kết hợp
    ////////////ví dụ nâng cao: 
    // $a = 10;
    // $b = $a++;  //11//21
    // $b = ++$a;  //11//21/10
    // echo $b;
    ///////////////////hằng php
    // define('ABC',6.9);
    // echo ABC;
    ///////////////////////////////////bài tập
$a = 5; $b; $c; $d = 2;
echo $a;  //kết quả cho ra T 5
$a++; //a=6
echo $a;  //kết quả cho ra U  6
$b = $a--; //b=a=6 và a=5 
echo $b; // kết qyar này cho ra v 6
$c = --$a; //a=4 c=a=4
echo $c; // kết quả cho ra x 4
$c += 10; //c=c+10  c+4+10=14
$c -= $a; //c=c-a   c=14-4=10
echo $c; // kết quả cho ra Y  
$c /= $d; //c=c/d  c=10/2=5
echo $c;  // kết quả cho ra Z 5
?>
</body>
</html>
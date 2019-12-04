<?php
///////////////////////////////////////1.Biểu thức điều kiện
//IF - IF ELSE - ELSE IF - SWICH CASE ()HỌC SAU
////////////////////IF
// if($biểu thức){
//  code...
// }
////ví dụ
// $soNguyen = 10;
// if($soNguyen > 0){
//     echo 'đây lafg số nguyên dương';
// }
//ví duj2: 
// $a = 0;
// if($a==0){
//     echo 'đây là a=0';
// }
////////////////////if else
//cú pháp:
// if(){

// }else{

// }
// $soNguyen = -10;
// if($soNguyen > 0){
//     echo 'đây lafg số nguyên dương';
// }
// else{
//     echo 'đây là số nguyên âm';
// }
///ví dụ: kết quả khác 3 thì in ra sai và ngược lại
// $a = 1;
// $b = 2;
// if($a + $b != 3){
//     echo 'sai';
// }else{
//     echo 'đúng';
// }
/////////////////////////////else if
// $soNguyen = 10;
// if($soNguyen > 0){
//     echo 'đây lafg số nguyên dương';
// }
// else if($soNguyen < 0){
//     echo 'đây là số nguyên âm';
// }else{
//     echo 'đây là số 0';
// }
//ví dụ: 
// $m = 0;
// if($m==1){
// echo 'm=1';
// }else if($m==2){
// echo 'm=2';
// }else if($m==3){
// echo 'm=3';
// }else if($m==0){
// echo 'm=0';
// }else{
//     echo 'không có kết quả';
// }
/////////////////////////////////////////////2.Vòng lặp
//WHILE - FOR -DO WHILE (HỌC SAU)
/////////while
//cú pháp: 
// while($biểu_thức){

// }
//ví dụ:
// $i = 5;
// while($i <10){
// echo $i.',';
// $i++;
// }
//ví dụ: in ra các số từ 10-1 và có dấu phải, dấu chấm kết thúc câu
// $i = 10;
// while($i > 0){
//     if($i > 1){
//         echo $i.',';
//     }else{
//         echo $i.'.';
//     }
// $i--;
// }
//////////////////////////////////////////vòng lặp for
//cú pháp
// for(biến_khởi_tạo, biểu_thức, tăng/giảm_biến_khởi_tạo){
// code thực thi
// }
//ví dụ: dùng vòng lặp for để lấy ra các số chẵn từ 10 -> 0
// for($i = 10; $i >= 0; $i -= 2){
// echo $i.',';
// }
//////////////////////////////////////////////3.bài tập
////////// Bài tập 1:- tính tổng của dãy số từ 1 đến 100
// $tong = 0;
// for($i =1; $i <=100; $i++){
//     $tong += $i;
// }
// echo $tong;
 ///////////////bài tập 2:- thiết kế bản cửu chương từ 2 -9:
for($i=2; $i <=9; $i++){
for($j=1; $j<=10; $j++){
echo $i.'x'.$j.'='.$i*$j.',';
}
echo '<br/>';
}$
?>
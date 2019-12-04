<?php
//mảng 1 chiều
// $array = [1,2,3,4];
// $array = array(1,2,3,4);
// $array = ['mau'=>['xanh','đỏ','tím','vàng'],'laravel','khoahoc'=>'php','css'];
// echo '<pre>';
// print_r($array['mau'][3]);
// echo '<pre/>';
//ví dụ miêu tả qua data
//lấy ra tất cả các sp có id là: 20,22,24,26
//SELECT * FROM product WHERE prd_id IN(20,22,24,26) //IN: tìm tất cả các bản ghi có id là
//số lượng
// $cart = [
//     '20' => 1,
//     '22' => 3,
//     '24' => 4,
//     '26' => 9
// ]; 
// $cat[22];
    // $cart[22]++;
    // $cart[22]++;
    
    // $mang[]='';
    // foreach ($cart as $key => $value) {
    //     $mang[] = $key;
    // }
    // print_r($mang);
    // echo implode(',',$mang);
    //cách 2:
    // $mang = array_keys($cart);
    // print_r($mang);
//trong sesion
// $_SESSION['cart'] = [
//     '20' => 1,
//     '22' => 3,
//     '24' => 4,
//     '26' => 9
// ]; 
// $_SESSION['cart'][22]=1;
//$cart và $_SESSION['cart'] là giống nhau
$_SESSION['cart']['id_san_pham']='số lượng';
echo '<pre>';
print_r($_SESSION);
echo '<pre/>';
?> 
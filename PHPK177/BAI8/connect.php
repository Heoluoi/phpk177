<?php
//lấy ra data trong sql có 3 bước:
//buowcs1: kết nối data
    $connect = mysqli_connect('localhost','root','','hocphpk177');
    if($connect){
        mysqli_query($connect, "SET NAMES 'utf8'"); // giá trị kết nối
        //print_r ('kết nối thành công');
    }else{
        die('Kết nối thất bại');
    }
//buowcs2: viết câu truy vấn và thực thi
    $sql = "SELECT * FROM thanhvien";
    $query = mysqli_query($connect, $sql);
//bước thứ 3 lấy ra bản ghi row
//////hàm đếm kết quả của truy vấn
    //$num_rows = mysqli_num_rows($query);
    //echo $num_rows;
//////hàm lấy ra số bản ghi trong table
    //$row = mysqli_fetch_assoc($query);
    //hàm này nó nhận kq thực thi truy ván và nó trả về 1 mảng
    //mảng chưa toàn bộ dl của chúng ta
    //key là cột dữ liệu, vlue là dữ liệu trong bản ghi
    //echo $row['name_ds'];
    //sd vòng lặp while để lấy ra tất cả các kq
    while($row = mysqli_fetch_assoc($query)){
       echo $row['id_ds'].'<br/>';
       echo $row['name_ds'].'<br/>';
       echo $row['address_ds'].'<br/>';
       echo $row['phone'].'<br/>';
       echo '<hr/>';
    }
    ?>
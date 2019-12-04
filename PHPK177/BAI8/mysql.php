<?php
//sql: structure query language
//là 1 ngôn ngữ có cấu trúc

//1.sql: có cấu trúc
//a.SQL server: c#, asp.net
//b.mysql: php thuần, laravel, node js, ruby, python, php cms joomla, wp
//có 3 bộ thư viện con: 
//mysql : php phiển bản cũ 5
// mysqli: phiển bản mới ->php 7
//bdo: nước ngoài hay dùng
//2. sql không có cấu trúc: mangento
////////////////////mysqli
//có 4 tầng:
//taangf1: db cơ sở dũ liệu
//1db = 1 web
//tầng 2: table (bảng dữ liệu)
//mỗi db sẽ có rất nhiều table
//mỗi 1 tb sẽ quan lý 1 đối tượng của web
//taangf3 : colum (trường thông tin)
//mỗi 1 trường thông tin thì có nhiều bản ghi đó
//tầng 4: row (thêm bản ghi)
//INSERT

////////////////////
//4 câu lệnh kinh điển
//1. SELECT: lấy ra toàn bộ thông tin trong db
//SELECT * FROM thanhvien
//2. INSERT thực thi chức năng thêm
//INSERT INTO thanhvien(name_ds, address_ds, phone)
//VALUES('Phan Quỳnh Hằng','Tuyên Quang','0972166777');
//3. UPDATE: thực thi chức năng sửa
//UPDATE thanhvien
//SET name_ds='Lê THị Quỳnh Hồng', address_ds='Hà Nội'
//WHERE id_ds = 1
//4. DELETE thực thi chức năng xóa
//DELETE FROM thanhvien
//WHERE id_ds = 1

?>
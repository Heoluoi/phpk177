<?php
// 5 câu lệnh SQL bổ trợ cho select
//1. WHERE (điều kiện)
//lấy ra tât cả cá thành viên ở hn
//SELECT * FROM thanh_vien WHERE address='hà nôik'
//2+3. AND - OR : và - hoặc
//Lấy ra taatr các thành viên ở hà nội và sinh năm 20000
//SELECT * FROM thanhvien WHERE address='hanoi' AND birthday>='2000-01-01' AND birthday<='2000-12-31'
//Lấy ra taatr các thành viên ở hà nội hoặc sinh năm 20000
//SELECT * FROM thanhvien WHERE address='hanoi' OR birthday>='2000-01-01' AND birthday<='2000-12-31'
//4. ORDER BY (sắp xếp theo thứ tự) : tăng dần (ASC)/ giảm dần (DESC)
//vd: Lấy ra taatrs cả các thanh vienr theo thứ tự mới đăng ký
//SELECT * FROM thanhvien ORDER BY user_id DESC 
//5. LIMIT (giới hạn số bản ghi hienr thị)
//vd: l lấy ra 5 sp mới nhaats
//SELECT * FROM product ORDER BY prd_id DESC LIMIT 5

///KẾT NỐI BẢNG: INNER JOIN
//SELECT * FROM product INNER JOIN  category ON product.cat_id=category.cat_id
















?>
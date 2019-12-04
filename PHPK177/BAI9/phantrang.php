<?php
// SELECT * FROM product LIMIT 5

// Trang1: 1-5| 0-4 | SELECT * FROM product LIMIT 0, 5
// Trang số 2: 6-10| 5-9| SELECT * FROM product LIMIT 5,5
// ......
// Trang N là($page)

// ----

// 1 sản phẩm 0
// 2 sản phẩm 1
// 3 snr phẩm 2

// 4 sản phẩm 3
// 5 sản phẩm 4
// 6 sản phẩm 5

// 7 sản phẩm 6


// $page = $_GET['page'];


// $per_row = $page*$rows_per_page-$rows_per_page;
// bấm trang 1: 1*3-3=0
// bấm trang số 2: 2*3-3=3
// bấm trang 3: 3*3-3=6
// thì có phải là được tìm được $per_row, và chỉ còn $page là phải tìm


// LIMIT 0,3
// LIMIT 3,3
// LIMIT 6,3
?>
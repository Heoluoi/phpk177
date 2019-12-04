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
    //Phương thức Post
    //$_GET['tham_so'];
    //$_POST['tham_so];
    //tham số $_POST thường là name của ô input
    //làm việc với post chúng ta luoon2 kiểm tra submit
    // if(isset($_POST['sbm'])){
    //     $email = $_POST['email'];
    //     $pass = $_POST['pass'];
    //     //echo $email.'<br/>'.$pass;
    //     echo 'xin chào';
    // }
////////////////////////////files upload
// $_FILES['tham_so']['name']; //lấy được tên của file upload
// $_FILES['tham_so']['size']; //lấy được kích cỡ file
// $_FILES['tham_so']['type']; // lấy được kiểu file

// $_FILES['tham_so']['error']; //lấy được file

// $_FILES['tham_so']['tmp_name']; //upload lên thư mục tạm 
// move_uploaded_file($bien_thu_muc_tam, 'upload/anhdep.jpg');
if(isset($_POST['sbm'])){
    $file_name = $_FILES['file_name']['name'];
    $tmp_name = $_FILES['file_name']['tmp_name'];
    $file_error = $_FILES['file_name']['error'];
    if($file_error > 0){
        echo 'File upload bị lỗi';
    }else{
        move_uploaded_file($tmp_name, 'upload/'.$file_name);
        echo 'Tải lên thành công'.'<hr/>';
    }
}
?>
<img src="<?php echo 'upload/'.$file_name; ?>" 
alt="" style = "max-width: 30%;">
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file_name">
    <input type="submit" name="sbm">
</form>
<!-- <form action="" method="post">
    <input type="email" name="email">
    <input type="password" name="pass">
    <input type="submit" name="sbm">
</form> -->
</body>
</html>
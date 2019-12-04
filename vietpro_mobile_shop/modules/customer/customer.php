<?php 
//mail 
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// 
if(isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['mail']) && isset($_POST['add'])){
    $name= $_POST['name'];
    $phone = $_POST['phone'];
    $mail = $_POST['mail'];
    $add = $_POST['add'];
    // 
    $trr_body = '';
    $trr_body .= '
    <p>
    <b>Khách hàng:</b>'.$name.'<br>
    <b>Điện thoại:</b>'.$phone.'<br>
    <b>Địa chỉ:</b>'.$add.'<br>
    </p
    ';
    $str_body .= '
    <table border="1" cellspacing="0" cellpadding="10" bordercolor="#305eb3" width="100%">
    <tr bgcolor="#305eb3">
        <td width="70%"><b><font color="#FFFFFF">Sản phẩm</font></b></td>
        <td width="10%"><b><font color="#FFFFFF">Số lượng</font></b></td>
        <td width="20%"><b><font color="#FFFFFF">Tổng tiền</font></b></td>
    </tr>
    ';
    $sql = "SELECT * FROM product WHERE prd_id IN($str_key)";
    $query = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($query)){
        $sl = $_SESSION['cart'][$row['prd_id']];
        $thanhTien = $sl*$row['prd_price'];
        $str_body .= '
        <tr>
            <td>'.$row['prd_id'].'</td>
            <td>'.$row['prd_name'].'</td>
            <td>'.$sl.'</td>
            <td>'.$row['prd_price'].' đ</td>
            <td>'.$thanhTien.'</td>
        </tr>
        ';
        $str_body .= '
        <tr style = "font-size:30px; font-weight :bold; color: red;">
            <td>Tổng tiền:<td/>
            <td colspan="4" align:"right">'.$total.'đ</td>
        </tr>
    </table>

        <p align:"center" style ="font-weight: bold;">Cám ơn bạn đã mua hàng của chúng tôi!!!</p>
        ';
        // 
        // Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 2;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'congsuthuc@.com';                     // SMTP username
    $mail->Password   = 'secret';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('heoluoi9xbg@gmail.com', 'VietproShop');
    // $mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
    $mail->addAddress($mail);               // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Xác nhận đơn hàng từ VietproShop';
    $mail->Body    = $str_body;
    $mail->AltBody = 'Mô tả đơn hàng';

    $mail->send();
    header('location: index.php?page_layout=sucess');
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

    }

}
?>
<!--	Customer Info	-->
<div id="customer">
    <form id="frm" method="post">
        <div class="row">

            <div id="customer-name" class="col-lg-4 col-md-4 col-sm-12">
                <input placeholder="Họ và tên (bắt buộc)" type="text" name="name" class="form-control" required>
            </div>
            <div id="customer-phone" class="col-lg-4 col-md-4 col-sm-12">
                <input placeholder="Số điện thoại (bắt buộc)" type="text" name="phone" class="form-control" required>
            </div>
            <div id="customer-mail" class="col-lg-4 col-md-4 col-sm-12">
                <input placeholder="Email (bắt buộc)" type="text" name="mail" class="form-control" required>
            </div>
            <div id="customer-add" class="col-lg-12 col-md-12 col-sm-12">
                <input placeholder="Địa chỉ nhà riêng hoặc cơ quan (bắt buộc)" type="text" name="add"
                    class="form-control" required>
            </div>

        </div>
    </form>
    <div class="row">
        <div class="by-now col-lg-6 col-md-6 col-sm-12">
            <a onclick="buyNow()" href="#">
                <b>Mua ngay</b>
                <span>Giao hàng tận nơi siêu tốc</span>
            </a>
        </div>
        <div class="by-now col-lg-6 col-md-6 col-sm-12">
            <a href="#">
                <b>Trả góp Online</b>
                <span>Vui lòng call (+84) 0988 550 553</span>
            </a>
        </div>
    </div>
</div>
<!--	End Customer Info	-->
<script>
    function buyNow() {
        document.getElementById('frm').submit()
    }
</script>
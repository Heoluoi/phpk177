<?php 
if(isset($_POST['sbm'])){
	$comm_name = $_POST['comm_name'];
    $comm_mail = $_POST['comm_mail'];
    $comm_details = $_POST['comm_details'];

$sql = "INSERT INTO comment(comm_name, comm_mail, comm_details) 
VALUES('$comm_name', '$comm_mail', '$comm_details')";	
$query = mysqli_query($conn, $sql);

header('location:index.php?page_layout=comment');
}
?>


<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                            </svg></a></li>
            <li><a href="">Quản lý bình luận</a></li>
            <li class="active">Thêm bình luận</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Thêm bình luận</h1>
        </div>
    </div>
    <!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-md-8">
                        <form role="form" method="post">
                            <div class="form-group">
                                <label>Họ & Tên</label>
                                <input type="text" name="comm_name" required class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="comm_mail" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Bình luận</label>
                                <input type="text" name="comm_details" required class="form-control">
                            </div>
                            <button type="submit" name="sbm" class="btn btn-primary">Thêm mới</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                    </div>
                    </form>
                </div>
            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->

</div>
<!--/.main-->
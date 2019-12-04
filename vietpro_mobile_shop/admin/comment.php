<script>
function delItem(name)
{
return confirm('bạn muốn xóa sản phẩm: '+name+' ?');
}
</script>
<?php
//phân trang

if(isset($_GET['page'])){
	$page = $_GET['page'];
}
else{
	$page = 1;
}
$rows_per_page = 6;
$per_row = $page*$rows_per_page-$rows_per_page;
$total_rows = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM comment "));
$total_pages = ceil($total_rows/$rows_per_page);
$list_pages = '';
$page_prev = $page - 1;
if($page_prev <= 0){
	$page_prev = 1;
}
$list_pages .= '<li class="page-item"><a class="page-link" href="index.php?page_layout=comment&page='.$page_prev.'">&laquo;</a></li>';
for($i=1; $i<=$total_pages; $i++){
	if($i==$page){
		$active = 'active';
	}
	else{
		$active = '';
	}
	$list_pages .= '<li class="page-item '.$active.'"><a class="page-link" href="index.php?page_layout=comment&page='.$i.'">'.$i.'</a></li>';
}
$page_next = $page + 1;
if($page_next > $total_pages){
	$page_next = $total_pages;
}
$list_pages .= '<li class="page-item"><a class="page-link" href="index.php?page_layout=comment&page='.$page_next.'">&raquo;</a></li>';

?>


<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg></a></li>
            <li class="active">Danh sách bình luận</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Danh sách bình luận</h1>
        </div>
    </div>
    <!--/.row-->
    <div id="toolbar" class="btn-group">
        <a href="index.php?page_layout=add_comment" class="btn btn-success">
            <i class="glyphicon glyphicon-plus"></i> Thêm bình luận
        </a>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <table data-toolbar="#toolbar" data-toggle="table">

                        <thead>
                            <tr>
                                <th data-field="id" data-sortable="true">ID</th>
                                <th data-field="name" data-sortable="true">Họ & Tên</th>
                                <th data-field="mail" data-sortable="true">Email</th>
                                <th data-field="date" data-sortable="true">Ngày bình luận</th>
                                <th data-field="details" data-sortable="true">Bình luận</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $sql = "SELECT * FROM comment ORDER BY comm_id ASC LIMIT $per_row, $rows_per_page";
                            $query = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_assoc($query)){         
                                ?>
                            <tr>
                                <td style=""><?php echo $row['comm_id']; ?></td>
                                <td style=""><?php echo $row['comm_name']; ?></td>
                                <td style=""><?php echo $row['comm_mail']; ?></td>
                                <td style=""><?php echo $row['comm_date']; ?></td>
                                <td style=""><?php echo $row['comm_details']; ?></td>
                                <td class="form-group">
                                    <a href="index.php?page_layout=edit_comment&comment_id= <?php echo $row['comm_id']; ?>" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i></a>
                                    <a onclick="return delItem('<?php echo $row['comm_name'];?>')" href="del_comment.php?comm_id=<?php echo $row['comm_id']; ?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                                </td>
                            </tr>
                            <?php
                                    }
                                ?>
                        </tbody>
                    </table>
                </div>
                <div class="panel-footer">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <?php echo $list_pages;?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!--/.row-->
</div>
<!--/.main-->

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-table.js"></script>
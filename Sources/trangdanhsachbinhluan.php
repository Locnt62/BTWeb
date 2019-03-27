<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<?php session_start();?>
<?php require_once("connection.php");?>
<?php include("TEMPLATE.php");?>
<?php
	if (isset($_GET["id_delete"])) {
        
		$sql = "DELETE FROM comment WHERE cm_id = ".$_GET["id_delete"];
		mysqli_query($conn,$sql);
	}
	
?>
<?php
    $sql="SELECT * FROM comment";
    $query=mysqli_query($conn,$sql);
?>
<div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <br><br>
                    <h2> Danh sách các bình luận</h2>
                    <table border="1px;" align="center">
                    <thead>
                        <tr>
                        <th bgcolor="#E6E6FA" style="text-align:center;">STT</th>
                        <th bgcolor="#E6E6FA" style="text-align:center;">ID Comment</th>
                        <th bgcolor="#E6E6FA" style="text-align:center;">Tên </th>
                        <th bgcolor="#E6E6FA" style="text-align:center;"> Nội dung</th>
                        <th bgcolor="#E6E6FA" style="text-align:center;"> CM_Check</th>
                        <th bgcolor="#E6E6FA" style="text-align:center;">ID Tin</th>
                        <th bgcolor="#E6E6FA" style="text-align:center;">Xử lý</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        $i = 0; 
                        while ( $data = mysqli_fetch_array($query) ) {
                            $idcmt=$data['cm_id'];        
                    ?>
                    <tr>
                        <td><?php echo $i;?></td>
                        <td><?php echo $idcmt;?></td>
                        <td><?php echo $data['ten'];?></td>
                        <td><?php echo $data['noidung'];?></td>
                        
                        <td><?php echo ($data['cm_check'] == 'N') ? "Chưa duyệt" : "Đã duyệt"; ?></td>
                        
                        <td><?php echo $data['idtin'];?></td>
                        <td>
                            <a href="sua_binhluan.php?id=<?php echo $idcmt;?>" style="text-decoration:none;">Sửa</a>
                            <a href="trangdanhsachbinhluan.php?id_delete=<?php echo $idcmt;?>" style="text-decoration:none;">Xóa</a>
                        </td>
                    </tr>
                    </tr>
                    <?php
                        $i++;
                        }
                    ?>
                    </tbody>
                    </table>
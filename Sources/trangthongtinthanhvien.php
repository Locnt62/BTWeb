<!DOCTYPE html>
<html lang="vi-VN">
    <head>
		<style>
			button.1{
				padding:12px 14px;
			}
		</style>
<?php session_start();?>
<?php require_once("connection.php");?>
<?php include("TEMPLATE.php");?>



<?php
	$sql = "SELECT * FROM users";
	$query = mysqli_query($conn,$sql);
	
?>
<?php
	if (isset($_GET["id_delete"])) {
		$sql = "DELETE FROM users WHERE id = ".$_GET["id_delete"];
		mysqli_query($conn,$sql);
	}
	
?>
<div id="page-wrapper">
        <div class="container-fluid">
			    <div class="row">
                <div class="col-lg-12">
					<br><br>
<a href="trangthemthanhvien.php" style="text-decoration:none;">Thêm thành viên</a>
<table border="1px;" align="center">
	<thead>
		<tr>
			<th bgcolor="#E6E6FA" style="text-align:center;">STT</th>
			<th bgcolor="#E6E6FA" style="text-align:center;">ID</th>
			<th bgcolor="#E6E6FA" style="text-align:center;">Username</th>
			<th bgcolor="#E6E6FA" style="text-align:center;">Email</th>
			<th bgcolor="#E6E6FA"style="text-align:center;">Khóa tài khoản</th>
			<th bgcolor="#E6E6FA" style="text-align:center;">Quyền</th>
			<th bgcolor="#E6E6FA" style="text-align:center;">Hành động</th>
		<tr>
	</thead>
	<tbody>
	<?php
		$i = 0; 
		while ( $data = mysqli_fetch_array($query) ) {
			
			$id = $data['id'];
			
        
	?>
		<tr>
			<td><?php echo $i; ?></td>
			<td><?php echo $id;?></td>
			<td><?php echo $data['username']; ?></td>
			<td><?php echo $data['email']; ?></td>
			<td><?php echo ($data['is_block'] == 1) ? "Bị khóa" : "Không bị khóa"; ?></td>
			<td><?php echo ($data['permision'] == 0) ? "Thành viên thường" : "Admin"; ?></td>
			<td>
				<a href="trangsuathanhvien.php?id=<?php echo $id;?>" style="text-decoration:none;">Sửa</a>
				<a href="trangthongtinthanhvien.php?id_delete=<?php echo $id;?>" style="text-decoration:none;">Xóa</a>
			</td>
		</tr>
	<?php 
			$i++;
        }
	?>
	</tbody>
</table>
</div>
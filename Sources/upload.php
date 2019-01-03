<!DOCTYPE html>
<?php require_once("connection.php");?>
 <?php   include("TEMPLATE(CLIENT).php");?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
</head>
<body>
<div id="page-wrapper">
<div class="container-fluid">
        <div class="row">
                <div class="col-lg-12">
				<br>
				<h2><?php echo $_SESSION['fullname']?> 's profile</h2>
				<?php
	if(isset($_GET['id'])){
		$id=$_GET['id'];
	?>
	<?php
		// Kiểm tra phương thức gửi form đi có phải là POST hay ko ?
		if($_SERVER["REQUEST_METHOD"] == "POST"){
		    // Kiểm tra quá trình upload file có bị lỗi gì không ?
		    if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
		    	// Mảng chưa định dạng file cho phép
		        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
		        // Lấy thông tin file bao gồm tên file, loại file, kích cỡ file
		        $filename = $_FILES["photo"]["name"];
		        $filetype = $_FILES["photo"]["type"];
				$filesize = $_FILES["photo"]["size"];
				$filelocation="upload/" . $_FILES["photo"]["name"];
		    
		        // Kiểm tra định dạng file .jpg, png,...
		        $ext = pathinfo($filename, PATHINFO_EXTENSION);
		        // Nếu không đúng định dạng file thì báo lỗi
		        if(!array_key_exists($ext, $allowed)) die("Lỗi : Vui lòng chọn đúng định dang file.");
		    
		        // Cho phép kích thước tối đa của file là 5MB
		        $maxsize = 5 * 1024 * 1024;
		        // Nếu kích thước lớn hơn 5MB thì báo lỗi
		        if($filesize > $maxsize) die("Lỗi : Kích thước file lớn hơn giới hạn cho phép");
		    
		        // Kiểm tra file ok hết chưa
		        if(in_array($filetype, $allowed)){
		            // Kiểm tra xem file đã tồn tại chưa, nếu rồi thì báo lỗi, không thì tiến hành upload
		            if(file_exists("upload/" . $_FILES["photo"]["name"])){
		                echo $_FILES["photo"]["name"] . " đã tồn tại";
		            } else{
		            	// Hàm move_uploaded_file sẽ tiến hành upload file lên thư mục upload
		                move_uploaded_file($_FILES["photo"]["tmp_name"], "upload/" . $_FILES["photo"]["name"]);
		                // Thông báo thành công
						echo "Cập nhật ảnh đại diện thành công";
						
						$sql1="INSERT INTO avar (name_anh,size_anh,type_anh,id_use) values('$filename','$filetype','$filelocation','$id')";
						$query1=mysqli_query($conn,$sql1);
						$flag=true;
		            } 
		        } else{
		            echo "Lỗi : Có vấn đề xảy ra khi upload file"; 
		        }
		    } else{
		        echo "Lỗi: " . $_FILES["photo"]["error"];
		    }
		}
	?>
	
    <form action="upload.php?id=<?php echo $id;?>" method="post" enctype="multipart/form-data">
        <h4> Upload ảnh đại diện</h4>
        <label for="fileSelect">Tên file:</label>
        <input type="file" name="photo" id="fileSelect">
		<br>
        <input type="submit" name="submit" value="Upload file">
        <p><strong>Ghi chú:</strong> Chỉ cho phép định dạng .jpg, .jpeg, .gif và kích thước tối đa tệp tin là 5MB.</p>
    </form>
	<?php
		$sql="SELECT * FROM users where id='$id'";
		$query=mysqli_query($conn,$sql);
		while($dt=mysqli_fetch_array($query)){
	?>
	<table border="1px;" align="center">
	<thead>
		<tr>
			<th bgcolor="#E6E6FA">Username</th>
			<th bgcolor="#E6E6FA">Email</th>
			<th bgcolor="#E6E6FA">Password</th>
			<th bgcolor="#E6E6FA">Fullname</th>
			<th bgcolor="#E6E6FA">Xóa ảnh đại diện</th>
		</tr>
		<tr>
			<td><?php echo $dt['username'];?></td>
			<td><?php echo $dt['email'];?></td>
			<td><?php echo $dt['password'];?></td>
			<td><?php echo $dt['fullname'];?></td>
			<td><a href="upload.php?id_delete=<?php echo $id;?>"style="text-decoration:none;">Xóa</a>
		</tr>
	</thead>
	</table>
			<br>
			<?php
				$sql3="SELECT * FROM avar where id_use='$id'";
				$query3=mysqli_query($conn,$sql3);
				while($rs=mysqli_fetch_array($query3)){
					$anh=$rs['type_anh'];
					$idanh=$rs['id_anh'];
				
			?>
		<?php if($rs['type_anh'] !=null){?>
		
		<img src="<?php echo $anh;?>" width="200px" height="250px">
			
			<?php
				}else{
					echo"<img src='avar.png' width='200px' height='250px'>";
				}
			}
			?>
	<?php
		}
		}
	?>
	<?php
		if (isset($_GET["id_delete"])) {

			$sql4="SELECT * FROM avar where id_use=".$_GET["id_delete"];
			$query4=mysqli_query($conn,$sql4);
			while($r=mysqli_fetch_array($query4)){
				if(unlink($r['type_anh'])){
					$sql5="DELETE from avar where id_use=".$_GET["id_delete"];
					$query5=mysqli_query($conn,$sql5);
					
				}
			}
		}
	?>
</body>
</html>

<?php

	if (isset($_SESSION['permision']) == true) {
		// Ngược lại nếu đã đăng nhập
		$permission = $_SESSION['permision'];
		// Kiểm tra quyền của người đó có phải là admin hay không
		if ($permission == '0') {
			// Nếu không phải admin thì xuất thông báo
			echo "Bạn không đủ quyền truy cập vào trang này !<br>";
			echo "<a href='Home4.php' style='text-decoration:none;'> Trang chủ</a>";
			exit();
		
			
		}
	}

?>
<!DOCTYPE html>
<html lang="vi-VN">
<head>

<style>
*{
        box-sizing: border-box;
    }
    input[type=text],select,textarea{
        width: 100%;
        padding:12px;
        border: 1px solid black;
        resize: vertical;
    }
    input[type=submit]{
        background-color:#2eb82e;
        color:white;
        margin-top:5px;
        padding:12px 20px;
        border: none;
        border-radius: 4px;
        float:right;
        cursor: pointer;
    }
    input[tyoe=submit]:hover{
        background-color:#3c743c;
    }
    .containt{
        background-color:#ccccb3;
        padding:18px 20px;
        border-radius: 5px;
        width:600px;
        
    }
    .col-1{
        float:left;
        width:25%;
        margin-top:5px;
    }
    .col-2{
        float:left;
        width:75%;
        margin-top:5px;
    }
    .row::after{
        content: "";
        display:block;
        clear: both;
    }
    @media screen and (max-width:600px){
        .col-1,.col-2,input[type=submit]{
            width:100%;
            margin-top:0;
        }
	}
</style>        
</head>
<?php
	session_start(); 
 ?>
<?php require_once("connection.php");?>
<?php include("TEMPLATE.php");?>

<?php
	if (isset($_POST["btn_sua"])) {
		//lấy thông tin từ các form bằng phương thức POST
		$name = $_POST["fullname"];
		$email = $_POST["email"];
		$permission = $_POST["permission"];
		$is_block = 0;
		if (isset($_POST["is_block"])) {
			$is_block = $_POST["is_block"];
		}
 
		$id = $_POST["id"];
		// Viết câu lệnh cập nhật thông tin người dùng
		$sql = "UPDATE users SET fullname = '$name', email = '$email', permision = '$permission', is_block = '$is_block' WHERE id=$id";
		// thực thi câu $sql với biến conn lấy từ file connection.php
		mysqli_query($conn,$sql);
		
	}
 
	$id = -1;
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
	}
	$sql = "SELECT * FROM users WHERE id = ".$id;
	$query = mysqli_query($conn,$sql);
 
	function make_permission_dropdown($id){
		$select_1 = "";
		$select_2 = "";
		$select_3 = "";
		if ($id == 0) {
			$select_1 = 'selected = "selected"';
		}
		if ($id == 1) {
			$select_2 = 'selected = "selected"';
		}
		
		$select = '<select id="permission" name="permission">
						<option value="-1"></option>
						<option value="0" '.$select_1.'>Thành viên thường</option>
						<option value="1" '.$select_2.'>Admin cấp 1</option>
						
					</select>';
 
		return $select;
	}
 
 
?>
	<?php
		while ( $data = mysqli_fetch_array($query) ) {
			$i = 1;
			$id = $data['id'];
			$is_block = "";
			if ($data['is_block'] == 1) {
				$is_block = "checked='checked'";
			}
    ?>
    <body>
    <div id="page-wrapper">
        <div class="container-fluid">
			    <div class="row">
                <div class="col-lg-12">
					<br><br>
                <p style="font-weight:bolder;">Chỉnh sửa thành viên</p>
            
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                <div class="containt">
                    <div class="row">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <label for="hoten"> Họ và Tên</label>
                        </div>
                        <div class="col-2">
                            <input  type ="text" name="fullname" id="fullname" value="<?php echo $data['fullname']; ?>" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <label for="email">Địa chỉ email</label>
                        </div>
                        <div class="col-2">
                            <input type="text" id="email" name="email" value="<?php echo $data['email']; ?>">
                        </div>
                    </div>
					<div class="row">
						<div class="col-1">
							<label for="permission">Quyền</label>
						</div>
						<div class="col-2">
                            <?php echo make_permission_dropdown($data['permision']); ?>
						</div>
					</div>
					<div class="row">
						<div class="col-1">
							<label for="block">Block người dùng</label>
						</div>
						<div class="col-2">
                            <input type="checkbox" id="is_block" name="is_block" value="1" <?php echo $is_block; ?> >
						</div>
					</div>
                    <div class="row">
                        <input type="submit" name="btn_sua" value="Cập nhật thông tin">
                    </div>
                </div>
                </form>
                <?php } ?>
        </div>
    </div>
</body>
</html>

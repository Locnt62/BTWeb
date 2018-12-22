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
	if (isset($_POST["btn_them"])) {
		//lấy thông tin từ các form bằng phương thức POST
		$username = $_POST["username"];
		$password = $_POST["password"];
		$name = $_POST["fullname"];
		$email = $_POST["email"];
		$permission = $_POST["permission"];
		$is_block = 0;
		if (isset($_POST["is_block"])) {
			$is_block = $_POST["is_block"];
		}
 
		if ($username == "" || $password == "" || $name == "" || $email == "" || $permission == "") {
			echo "Bạn cần điền đầy đủ thông tin !";
		}else{
			// Viết câu lệnh thêm thông tin người dùng
			$sql = "INSERT INTO users (username, password, fullname, email, permision, is_block, createdate) VALUES ('$username', '$password', '$name', '$email', '$permission', '$is_block', now())";
			// thực thi câu $sql với biến conn lấy từ file connection.php
			$result = mysqli_query($conn,$sql);
			if (!$result) {
				echo "Người dùng đã tồn tại vui lòng không trùng username và email !";
			}else{
				header('Location: trangthongtinthanhvien.php');
			}
			
		}
		
	}
?>
<body>
<div id="page-wrapper">
        <div class="container-fluid">
			    <div class="row">
                <div class="col-lg-12">
					<br><br>
                <h2>Thêm thành viên</h2>
            
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                <div class="containt">
                    <div class="row">
                        <div class="col-1">
                            <label for="username">Username</label>
                        </div>
                        <div class="col-2">
                            <input type="text" id="username" name="username" require>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <label for="password">Mật khẩu</label>
                        </div>
                        <div class="col-2">
                            <input type="text" name="password" id="password" require>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <label for="hoten"> Họ và Tên</label>
                        </div>
                        <div class="col-2">
                            <input type="text" id="name" name="fullname" require>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <label for="email">Địa chỉ email</label>
                        </div>
                        <div class="col-2">
                            <input type="text" id="email" name="email" require>
                        </div>
                    </div>
					<div class="row">
						<div class="col-1">
							<label for="permission">Quyền</label>
						</div>
						<div class="col-2">
							<select id="permission" name="permission">
							<option value="0">Thành viên thường</option>
							<option value="1">Admin </option>	
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-1">
							<label for="block">Block người dùng</label>
						</div>
						<div class="col-2">
							<input type="checkbox" id="is_block" name="is_block" value="1" >
						</div>
					</div>
                    <div class="row">
                        <input type="submit" value="submit" name="btn_them">
                </div>
                </form>
        </div>
        </div>
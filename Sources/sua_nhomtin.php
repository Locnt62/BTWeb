
<!DOCTYPE html>
<html lang="vi-VN">
<?php require_once("connection.php");?>
<?php include("TEMPLATE.php");?>
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
        padding: 20px 22px;
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
<?php session_start();?>
<?php
	if (isset($_POST["btn_sua"])) {
		//lấy thông tin từ các form bằng phương thức POST
        $name = $_POST["name"];
        $idnhom=$_POST["id"];
		
		// Viết câu lệnh cập nhật thông tin người dùng
		$sql = "UPDATE nhombai SET idnhom='$idnhom' , tennhom='$name' ";
		// thực thi câu $sql với biến conn lấy từ file connection.php
		mysqli_query($conn,$sql);
		header('Location:nhom')
    }
?>
<?php
    $id=-1;
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
	}
	$sql = "SELECT * FROM nhombai WHERE idnhom = '$id'";
    $query=mysqli_query($conn,$sql);
    while ( $data= mysqli_fetch_array($query) ) {
        $i=0;
        $id=$data['idnhom'];
       
?>
<body>
<div id="page-wrapper">
        <div class="container-fluid">

      

            <div class="row">
                <div class="col-lg-12">
            <h2>Sửa nội dung của nhóm tin:<?php echo $data['tennhom'];?></h2>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                <div class="containt">
                <div class="row">
                        <div class="col-1">
                            <label for="id">ID nhóm</label>
                        </div>
                        <div class="col-2">
                            <input type="text" name="id"  value="<?php echo $id; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <label for="name">Tên nhóm</label>
                        </div>
                        <div class="col-2">
                            <input type="text" name="name"  value="<?php echo $data['tennhom']; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <input type="submit" value="submit" name="btn_sua">
                        </div>
                    </div>
                </div>
            </form>
            <?php } ?>
        </div>
    </div>
    </div>
    </div>
    </body>
 
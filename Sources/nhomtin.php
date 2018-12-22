
<?php require_once("connection.php");?>
<?php include("TEMPLATE.php");?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
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
        padding: 20px 32px;
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
	if (isset($_POST["btn_them"])) {
		//lấy thông tin từ các form bằng phương thức POST
		$idn = $_POST["id"];
		$name = $_POST["name"];
 
		if ($idn == "" || $name == "" ) {
			echo "Bạn cần điền đầy đủ thông tin !";
		}else{
			// Viết câu lệnh thêm thông tin người dùng
			$sql = "INSERT INTO nhombai(idnhom,tennhom) VALUES ('$idn','$name')";
			// thực thi câu $sql với biến conn lấy từ file connection.php
			$result = mysqli_query($conn,$sql);
			if (!$result) {
				echo "Nhóm đã tồn tại !";
			}else{
				header('Location: nhomtin.php');
			}
			
		}
		
	}
?>
<?php
	if (isset($_GET["id_delete"])) {
        
		$sql = "DELETE FROM nhombai WHERE idnhom = ".$_GET["id_delete"];
		mysqli_query($conn,$sql);
	}
	
?>
<body>
<?php
	$sql = "SELECT * FROM nhombai";
	$query = mysqli_query($conn,$sql);
?>
<div id="page-wrapper">
        <div class="container-fluid">
        <div class="row">
                <div class="col-lg-12">
                    <br><br>
<h2>Danh sách các nhóm tin</h2>
<table border="1px;" align="center">
	<thead>
		<tr>
			<th bgcolor="#E6E6FA">STT</th>
			<th bgcolor="#E6E6FA">ID nhóm</th>
            <th bgcolor="#E6E6FA"> Tên nhóm</th>
            <th bgcolor="#E6E6FA"> Xử lý</th>
			
		<tr>
	</thead>
	<tbody>
    <?php
        $i = 0; 
		while ( $data = mysqli_fetch_array($query) ) {	
			$id = $data['idnhom'];
			
        
	?>
		<tr>
			<td><?php echo $i; ?></td>
			<td><?php echo $id; ?></td>
			<td><?php echo $data['tennhom']; ?></td>
			
			<td>
				
				<a href="nhomtin.php?id_delete=<?php echo $id;?>" style="text-decoration:none;">Xóa</a>
			</td>
		</tr>
	<?php 
			$i++;
        }
    ?>
   

	</tbody>
</table>
<h4>Thêm nhóm mới </h4>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
        <div class="containt">
            <div class="row">
                <div class="col-1">
                    <label for="idnhom">ID nhóm</label>
                </div>
                <div class="col-2">
                    <input type="text"  name="id" require>
                </div>
            </div>
            <div class="row">
                <div class="col-1">
                    <label for="tennhom">Tên nhóm</label>
                </div>
                <div class="col-2">
                    <input type="text" name="name" require>
            </div>
            <div class="row">
                <input type="submit" value="submit" name="btn_them">
            </div>

</div>
    </div>
    </div>
    </div>
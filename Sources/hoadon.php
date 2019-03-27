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
        padding:20px 22px;
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
    @media screen and (max-width:500px){
        .col-1,.col-2,input[type=submit]{
            width:100%;
            margin-top:0;
        }
	}
    tr{
        text-align:center;
        margin:4px 6px;
    }
    td a{
        margin:4px 8px;
    }
    th{
        text-align:center;
    }
   
</style>
<script src="ckeditor/ckeditor.js"></script>        
</head>
<?php session_start();?>
<?php require_once("connection.php");?>
<?php include("TEMPLATE.php");?>

<?php
	if (isset($_GET["id_delete"])) {
        
		$sql = "DELETE FROM hoadon WHERE MaHD = ".$_GET["id_delete"];
		mysqli_query($conn,$sql);
	}
	
?>

<?php 
    $sql="SELECT * FROM hoadon";
    $query=mysqli_query($conn,$sql);
?>

<div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <br><br>
                    <h2> Bảng kê khai hóa đơn<h2>
                    <table border="1px;" align="center">
                        <thead>
                            <tr>
                                <th bgcolor="#E6E6FA" style="text-align:center;">STT</th>
                                <th bgcolor="#E6E6FA" style="text-align:center;">Mã hóa đơn</th>
                                <th bgcolor="#E6E6FA" style="text-align:center;">Mã nhân viên</th>
                                <th bgcolor="#E6E6FA" style="text-align:center;">Tên nhân viên lập hóa đơn</th>
                                <th bgcolor="#E6E6FA" style="text-align:center;">Tên khách hàng mua hàng</th>  
                                <th bgcolor="#E6E6FA" style="text-align:center;">Mã sản phẩm</th>
                                <th bgcolor="#E6E6FA" style="text-align:center;">Tên sản phẩm</th>
                                <th bgcolor="#E6E6FA" style="text-align:center;">Số lượng</th>
                                <th bgcolor="#E6E6FA" style="text-align:center;">Ngày hóa đơn</th>
                                <th bgcolor="#E6E6FA" style="text-align:center;">Tổng tiền</th>
                                <th bgcolor="#E6E6FA" style="text-align:center;">Xử lý</th>
                            <tr>
                        </thead>
                        <tbody>
                        <?php
                            $i=0;
                            while($data=mysqli_fetch_array($query)){
                                $idhd=$data['MaHD'];
                        ?>

                        <tr>
                            <td><?php echo $i;?></td>
                            <td><?php echo $idhd;?></td>
                            <td><?php echo $_SESSION['user_id'];?></td>
                            <td><?php echo $data['Tennv'];?></td>
                            <td><?php echo $data['Tenkh'];?></td>
                            <td><?php echo $data['Masp'];?></td>
                            <td><?php echo $data['Tensp'];?></td>
                            <td><?php echo $data['Soluong'];?></td>
                            <td><?php echo $data['NgayHD'];?></td>
                            <td><?php echo $data['TongTien'];?></td>
                            <td>
                                <a href="sua_hoadon.php?id=<?php echo $idhd;?>" style="text-decoration:none;">Sửa</a>
                                <a href="hoadon.php?id_delete=<?php echo $idhd;?>" style="text-decoration:none;">Xóa</a>
                        <?php
                            $i++;        
                            }
                        ?>
                        </tbody>
                        <hr>
                        <h4><a href="themhoadon.php" style="text-decoration:none;">Thêm hóa đơn mới</a></h4>
                        

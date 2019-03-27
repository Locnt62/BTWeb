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
<?php session_start();?>
<?php
    if(isset($_POST[" btn_themkhachhang"])){
        $tenkhachhang=$_POST['ten_kh'];
        $diachi=$_POST['dc_kh'];
        $sodienthoai=$_POST['sdt_kh'];
        $sql1=" INSERT INTO khachhang ( TenKH, DiaChiKH, SoDienThoai) values ( '$tenkhachhang', '$diachi', '$sodienthoai')";
        $query=mysqli_query($conn,$sql1);
        header('Location: khachhang.php');
    }
?>
<?php
    if (isset($_GET["id_delete"])) {
        
		$sql2 = "DELETE FROM khachhang WHERE MaKH = ".$_GET["id_delete"];
		mysqli_query($conn,$sql2);
	}
?>


<body>
<?php 
    $sql=" SELECT * FROM  khachhang ";
    $query=mysqli_query($conn, $sql);
?>

<div id="page-wrapper">
        <div class="container-fluid">
        <div class="row">
                <div class="col-lg-12">
                    <br><br>
                    <h2>Danh sách các khách hàng</h2>
                    <table border="1px;" align="center">
                        <thead>
                            <tr>
                                <th bgcolor="#E6E6FA" style="text-align:center;">STT</th>
                                <th bgcolor="#E6E6FA" style="text-align:center;">Mã khách hàng</th>
                                <th bgcolor="#E6E6FA" style="text-align:center;"> Tên khách hàng</th>
                                <th bgcolor="#E6E6FA" style="text-align:center;"> Địa chỉ</th>
                                <th bgcolor="#E6E6FA" style="text-align:center;"> Số điện thoại</th>
                                <th bgcolor="#E6E6FA" style="text-align:center;"> Chức năng</th>
                            <tr>
                        </thead>
                        <tbody>
                            <?php
                                $i=0;
                                while($data=mysqli_fetch_array($query)){
                                    $id_khach=$data['MaKH'];
                            ?>
                            <tr>
                                <td><?php echo $i;?></td>
                                <td><?php echo $id_khach;?></td>
                                <td><?php echo $data['TenKH'];?></td>
                                <td><?php echo $data['DiaChiKH'];?></td>
                                <td><?php echo $data['SoDienThoai'];?></td>
                                <td>
                                    <a href="sua_khachhang.php?id=<?php echo $id_khach;?>" style="text-decoration:none;">Sửa</a>
                                    <a href="khachhang.php?id_delete=<?php echo $id_khach;?>" style="text-decoration:none;">Xóa</a>
                                </td>
                            </tr>
                            <?php
                                $i++;        
                                }
                            ?>  
                            </tbody>
                    </table>

                    <h3><a href= "themkhachhang.php" style="text-decoration:none;" >Thêm khách hàng mới</a></h3>
                       


                             
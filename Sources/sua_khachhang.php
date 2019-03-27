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
    @media screen and (max-width:600px){
        .col-1,.col-2,input[type=submit]{
            width:100%;
            margin-top:0;
        }
	}
</style>
<script src="ckeditor/ckeditor.js"></script>             
</head>
<?php session_start();?>
<?php require_once("connection.php");?>
<?php include("TEMPLATE.php");?>

<?php
    if (isset($_POST["btn_suakhachhang"])) {
        $MaKH=$_POST['id_khachhang'];
        $TenKH=$_POST['ten_khachhang'];
        $DiaChi=$_POST['diachi_khachhang'];
        $SoDienThoai=$_POST['sodienthoai_khachhang'];
        $sql1="UPDATE khachhang SET  TenKH='$TenKH', DiaChiKH='$DiaChi', SoDienThoai='$SoDienThoai' where MaKH='$MaKH'";
        $query1=mysqli_query($conn,$sql1);
    }


?>

<?php
     if(isset($_GET['id'])){
         $id_kh=$_GET['id'];
         $sql="SELECT * FROM khachhang WHERE MaKH='$id_kh'";
         $query=mysqli_query($conn,$sql);
         while($dt=mysqli_fetch_array($query)){
             $i=0;
             $idkhach=$dt['MaKH'];
?>

<body>
<div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                <br>
                <h2> Sửa thông tin khách hàng</h2>
                <div class="containt">
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                    <div class="row">
                    <input type="hidden" name="id_khachhang" value="<?php  echo $idkhach;?>">
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <label for="idnhom">Tên khách hàng</label>
                        </div>
                        <div class="col-2">
                            <input type="text" name="ten_khachhang" value=<?php echo $dt['TenKH'];?>>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <label for="diachci"> Địa chỉ</label>
                        </div>
                        <div class="col-2">
                            <input type="text" name="diachi_khachhang" value=<?php echo $dt['DiaChiKH'];?>>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <label for="sodienthoai">Số điện thoại</label>
                        </div>
                        <div class="col-2">
                            <input type="text" name="sodienthoai_khachhang" value=<?php echo $dt['SoDienThoai'];?>>
                        </div>
                    </div>
                    <div class="row">
                                <input type="submit" value="submit" name="btn_suakhachhang">
                            </div>
                    </form>
                </div>                                  

<?php             
         }
        }     
?>         
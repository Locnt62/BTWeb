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
    if(isset($_POST[" btn_themkhachhang"])){
        $tenkhachhang=$_POST['ten_kh'];
        $diachi=$_POST['dc_kh'];
        $sodienthoai=$_POST['sdt_kh'];
        $sql=" INSERT INTO khachhang ( TenKH, DiaChiKH, SoDienThoai) values ('$tenkhachhang','$diachi','$sodienthoai')";
        $query=mysqli_query($conn,$sql);
        header('Location: khachhang.php');
    }
?>


<div id="page-wrapper">
        <div class="container-fluid">
        <div class="row">
                <div class="col-lg-12">
                <br>
                <h3>Thêm mới khách hàng</h3>
                <div class="containt">
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                    <div class="row">
                                <div class="col-1">
                                    <label for="idnhom">Tên hách hàng</label>
                                </div>
                                <div class="col-2">
                                    <input type="text"  name="ten_kh" >
                                </div>
                    </div>
                    <div class="row">
                                <div class="col-1">
                                    <label for="title">Địa chỉ </label>
                                </div>
                                <div class="col-2">
                                    <input type="text" id="title" name="dc_kh">
                                </div>
                            </div>
            
                            <div class="row">
                                <div class="col-1">
                                    <label for="anhtrichdan">Số điện thoại</label>
                                </div>
                                <div class="col-2">
                                    <input type="text"  name="sdt_kh" >
                                </div>
                            </div>
                            <div class="row">
                                <input type="submit" value="submit" name="btn_themkhachhang">
                            </div>
                    </form>
                </div>     
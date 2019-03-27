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
    if (isset($_POST["btn_suancc"])) {
        $id_ncc=$_POST['id_ncc'];
        $ten_ncc=$_POST['ten_ncc'];
        $diachi=$_POST['diachi'];
        $dienthoai=$_POST['dienthoai'];

        $sql1="UPDATE nhacungcap set ten_ncc='$ten_ncc',diachi='$diachi',dienthoai='$dienthoai' where id_ncc='$id_ncc'";
        $query1=mysqli_query($conn,$sql1);
    }
?>
<?php
     if(isset($_GET['id'])){
        $idncc=$_GET['id'];
        $sql="SELECT * FROM nhacungcap where id_ncc='$idncc'";
        $query=mysqli_query($conn,$sql);
        while($dt=mysqli_fetch_array($query)){
            $i=0;
            $id_ncc=$dt['id_ncc'];
        ?>
        <body>
        <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                        <br>
                        <h2> Sửa thông tin nhà cung cấp</h2>
                        <div class="containt">
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                    <div class="row">
                        <input type="hidden" name="id_ncc" value="<?php  echo $id_ncc;?>">
                    </div>
                    <div class="row">
                                <div class="col-1">
                                    <label for="idnhom">Tên nhà cung cấp</label>
                                </div>
                                <div class="col-2">
                                    <input type="text"  name="ten_ncc" value="<?php echo $dt['ten_ncc'];?>">
                                </div>
                    </div>
                    <div class="row">
                                <div class="col-1">
                                    <label for="title">Địa chỉ</label>
                                </div>
                                <div class="col-2">
                                    <input type="text" id="title" name="diachi" value="<?php echo $dt['diachi'];?>">
                                </div>
                            </div>
            
                            <div class="row">
                                <div class="col-1">
                                    <label for="anhtrichdan">Điện thoại</label>
                                </div>
                                <div class="col-2">
                                    <input type="text"  name="dienthoai" value="<?php echo $dt['dienthoai'];?>">
                                </div>
                            </div>
                            <div class="row">
                                <input type="submit" value="submit" name="btn_suancc">
                            </div>
                    </form>
                </div>
        <?php
        }
    }
        ?>
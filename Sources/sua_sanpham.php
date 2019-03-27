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
     if (isset($_POST["btn_suasanpham"])) {
         $id_sanpham=$_POST['id_sanpham'];
         $ten_sanpham=$_POST['ten_sp'];
         $soluong=$_POST['soluong'];
         $ten_nsx=$_POST['ten_nsx'];
         $id_ncc=$_POST['id_ncc'];
         $id_nhom=$_POST['id_nhom'];
         $ten_ncc=$_POST['ten_ncc'];

    $sql1="UPDATE  sanpham SET ten_sanpham='$ten_sanpham',soluong='$soluong',ten_nsx='$ten_nsx',id_ncc='$id_ncc',idnhom='$id_nhom',ten_ncc='$ten_ncc' where id_sanpham='$id_sanpham'";
    $query1=mysqli_query($conn,$sql1);
    
     }


?>

<?php
     if(isset($_GET['id'])){
        $idsp=$_GET['id'];
        $sql="SELECT * FROM sanpham where id_sanpham='$idsp'";
        $query=mysqli_query($conn,$sql);
        while($dt=mysqli_fetch_array($query)){
            $i=0;
            $id_sp=$dt['id_sanpham'];
?>
<body>
<div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                <br>
                <h2> Sửa thông tin sản phẩm</h2>
                <div class="containt">
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                    <div class="row">
                    <input type="hidden" name="id_sanpham" value="<?php  echo $id_sp;?>">
                    </div>
                    <div class="row">
                                <div class="col-1">
                                    <label for="idnhom">Tên sản phẩm</label>
                                </div>
                                <div class="col-2">
                                    <input type="text"  name="ten_sp"  value="<?php echo $dt['ten_sanpham'];?>">
                                </div>
                    </div>
                    <div class="row">
                                <div class="col-1">
                                    <label for="title">Số lượng</label>
                                </div>
                                <div class="col-2">
                                    <input type="text" id="title" name="soluong" value ="<?php echo $dt['soluong'];?>">
                                </div>
                            </div>
            
                            <div class="row">
                                <div class="col-1">
                                    <label for="anhtrichdan">Tên nhà sản xuất</label>
                                </div>
                                <div class="col-2">
                                    <input type="text"  name="ten_nsx" value="<?php echo $dt['ten_nsx'];?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-1">
                                    <label for="videotrichdan">ID nhà cung cấp</label>
                                </div>
                                <div class="col-2">
                                    <input type="text" name="id_ncc" value="<?php echo $dt['id_ncc'];?>"> 
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-1">
                                    <label for="videotrichdan">ID nhóm</label>
                                </div>
                                <div class="col-2">
                                    <input type="text" name="id_nhom" value="<?php echo $dt['idnhom'];?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-1">
                                    <label for="videotrichdan">Tên nhà cung cấp</label>
                                </div>
                                <div class="col-2">
                                    <input type="text" name="ten_ncc" value="<?php echo $dt['ten_ncc'];?>">
                                </div>
                            </div>
                            <div class="row">
                                <input type="submit" value="submit" name="btn_suasanpham">
                            </div>
                        </form>
                    </div>
                    <br>
<?php
        }
    }
?>
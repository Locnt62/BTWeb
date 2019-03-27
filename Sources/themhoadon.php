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
    if(isset($_POST['btn_themhoadon'])){
        $tenkh=$_POST['ten_kh'];
        $tennv=$_POST['ten_nv'];
        $tensp=$_POST['ten_sp'];
        $masp=$_POST['ma_sp'];
        $soluong=$_POST['soluong_sp'];
        $tongtien=$_POST['tongtien_hd'];
        $sql="INSERT INTO hoadon (Tenkh, Tennv, Tensp, Masp, Soluong, NgayHD,TongTien) VALUES ('$tenkh', '$tennv','$tensp','$masp','$soluong',now(),'$tongtien')";
        $query=mysqli_query($conn,$sql);
    }
?>




<div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                <h2> Thêm mới hóa đơn</h2>
                <div id="page-wrapper">
                <div class="containt">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
            <div class="row">
                        <div class="col-1">
                            <label for="idnhom">Tên khách hàng mua hàng</label>
                        </div>
                        <div class="col-2">
                            <input type="text"  name="ten_kh" >
                        </div>
            </div>
            <div class="row">
                        <div class="col-1">
                            <label for="title">Tenn nhân viên lập hóa đơn</label>
                        </div>
                        <div class="col-2">
                            <input type="text" id="title" name="ten_nv" value="<?php echo $_SESSION["fullname"];?>">
                        </div>
                    </div>
    
                    <div class="row">
                        <div class="col-1">
                            <label for="anhtrichdan">Tên sản phẩm </label>
                        </div>
                        <div class="col-2">
                            <input type="text"  name="ten_sp" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <label for="videotrichdan">Mã sản phẩm</label>
                        </div>
                        <div class="col-2">
                            <input type="text" name="ma_sp">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <label for="noidngtrichdan">Số lượng</label>
                        </div>
                        <div class="col-2">
                        <input type="text" name="soluong_sp">
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-1">
                            <label for="content"> Tổng tiền</label>
                        </div>
                        <div class="col-2">
                        <input type="text" name="tongtien_hd">
                        </div>
                    </div>
                    
                    <div class="row">
                        <input type="submit" value="submit" name="btn_themhoadon">
                    </div>
                </div>
            
            </form>

        </div>
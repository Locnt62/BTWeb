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
    if (isset($_POST['btn_suahoadon'])) {
        $Mahd=$_POST['ma_hd'];
        $Tenkh=$_POST['ten_kh'];
        $Tennv=$_POST['ten_nv'];
        $Tensp=$_POST['ten_sp'];
        $Masp=$_POST['ma_sp'];
        $Soluong=$_POST['soluong_sp'];
        $Tongtien=$_POST['tongtien_hd'];
        $sql1="UPDATE hoadon set Tenkh='$Tenkh', Tennv='$Tennv', Tensp='$Tensp', Masp='$Masp', Soluong='$Soluong', TongTien='$Tongtien' WHERE MaHD='$Mahd' ";
        $query1=mysqli_query($conn,$sql1);
        
    }

?>

<?php
    if(isset($_GET['id'])){
        $idhd=$_GET['id'];
        $sql="SELECT * FROM hoadon WHERE MaHD= '$idhd'";
        $query=mysqli_query($conn,$sql);
        while($dt=mysqli_fetch_array($query)){
            $i=0;
            $ma_hd=$dt['MaHD'];
?>
<body>
<div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                <br>
                <h2> Sửa hóa đơn</h2>
                <div class="containt">
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                    <div class="row">
                    <input type="hidden" name="ma_hd" value="<?php  echo $ma_hd;?>">
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <label for="idnhom">Tên khách hàng mua hàng</label>
                        </div>
                        <div class="col-2">
                            <input type="text"  name="ten_kh" value=<?php echo $dt['Tenkh'];?> >
                        </div>
            </div>
            <div class="row">
                        <div class="col-1">
                            <label for="title">Tenn nhân viên lập hóa đơn</label>
                        </div>
                        <div class="col-2">
                            <input type="text" id="title" name="ten_nv" value=<?php echo $dt['Tennv'];?>>
                        </div>
                    </div>
    
                    <div class="row">
                        <div class="col-1">
                            <label for="anhtrichdan">Tên sản phẩm </label>
                        </div>
                        <div class="col-2">
                            <input type="text"  name="ten_sp" value=<?php echo $dt['Tensp'];?>>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <label for="videotrichdan">Mã sản phẩm</label>
                        </div>
                        <div class="col-2">
                            <input type="text" name="ma_sp" value=<?php echo $dt['Masp'];?>>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <label for="noidngtrichdan">Số lượng</label>
                        </div>
                        <div class="col-2">
                        <input type="text" name="soluong_sp" value=<?php echo $dt['Soluong'];?>>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-1">
                            <label for="content"> Tổng tiền</label>
                        </div>
                        <div class="col-2">
                        <input type="text" name="tongtien_hd" value=<?php echo $dt['TongTien'];?>>
                        </div>
                    </div>
                    
                    <div class="row">
                        <input type="submit" value="submit" name="btn_suahoadon">
                    </div>
                </div>
            
            </form>

        </div>


<?php            
        }
    }
?>        
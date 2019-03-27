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
    if(isset($_POST['btn_themsanpham'])){
        $ten_sanpham=$_POST['ten_sp'];
        $soluong=$_POST['soluong'];
        $ten_nsx=$_POST['ten_nsx'];
        $id_ncc=$_POST['id_ncc'];
        $idnhom=$_POST['id_nhom'];
        $ten_ncc=$_POST['ten_ncc'];
        $sql1="INSERT INTO sanpham (ten_sanpham,soluong,ten_nsx,id_ncc,idnhom,ten_ncc) values ('$ten_sanpham','$soluong','$ten_nsx','$id_ncc','$idnhom','$ten_ncc')";
        $query1=mysqli_query($conn,$sql1);
    }

?>
<?php
    if (isset($_GET["id_delete"])) {
        
		$sql2 = "DELETE FROM sanpham WHERE id_sanpham = ".$_GET["id_delete"];
		mysqli_query($conn,$sql2);
	}
?>
<?php
    $sql="SELECT * FROM sanpham";
    $query=mysqli_query($conn,$sql);
?>
<div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <br><br>
                    <h2> Danh sách các sản phẩm</h2>
                    <table border="1px;" align="center">
                        <thead>
                            <tr>
                                <th bgcolor="#E6E6FA" style="text-align:center;"> STT</th>
                                <th bgcolor="#E6E6FA" style="text-align:center;">ID sản phẩm</th>
                                <th bgcolor="#E6E6FA" style="text-align:center;">Tên sản phẩm</th>
                                <th bgcolor="#E6E6FA" style="text-align:center;"> Số lượng</th>  
                                <th bgcolor="#E6E6FA" style="text-align:center;">Tên nhà sản xuất</th>
                                <th bgcolor="#E6E6FA" style="text-align:center;">ID nhà cung cấp</th>
                                <th bgcolor="#E6E6FA" style="text-align:center;">ID nhóm</th>
                                <th bgcolor="#E6E6FA" style="text-align:center;">Tên nhà cung cấp</th>
                                <<th bgcolor="#E6E6FA" style="text-align:center;">Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $i=0;
                            while($dt=mysqli_fetch_array($query)){
                                $id_sp=$dt['id_sanpham'];
                        ?>
                            <tr>
                                <td><?php echo $i;?></td>
                                <td><?php echo $id_sp;?></td>
                                <td><?php echo $dt['ten_sanpham'];?></td>
                                <td><?php echo $dt['soluong'];?></td>
                                <td><?php echo $dt['ten_nsx'];?></td>
                                <td><?php echo $dt['id_ncc'];?></td>
                                <td><?php echo $dt['idnhom'];?></td>
                                <td><?php echo $dt['ten_ncc'];?></td>
                                <td>
                                <a href="sua_sanpham.php?id=<?php echo $id_sp;?>" style="text-decoration:none;">Sửa</a>
                                <a href="trangdanhsachsanpham.php?id_delete=<?php echo $id_sp;?>" style="text-decoration:none;">Xóa</a>
                            </tr>
                        <?php
                            $i++;
                            }
                        ?>
                        </tbody>
                    </table>
                    <br>
                    <h3>Thêm sản phẩm mới</h3>
                    <div class="containt">
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                    <div class="row">
                                <div class="col-1">
                                    <label for="idnhom">Tên sản phẩm</label>
                                </div>
                                <div class="col-2">
                                    <input type="text"  name="ten_sp" >
                                </div>
                    </div>
                    <div class="row">
                                <div class="col-1">
                                    <label for="title">Số lượng</label>
                                </div>
                                <div class="col-2">
                                    <input type="text" id="title" name="soluong">
                                </div>
                            </div>
            
                            <div class="row">
                                <div class="col-1">
                                    <label for="anhtrichdan">Tên nhà sản xuất</label>
                                </div>
                                <div class="col-2">
                                    <input type="text"  name="ten_nsx" >
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-1">
                                    <label for="videotrichdan">ID nhà cung cấp</label>
                                </div>
                                <div class="col-2">
                                    <input type="text" name="id_ncc">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-1">
                                    <label for="videotrichdan">ID nhóm</label>
                                </div>
                                <div class="col-2">
                                    <input type="text" name="id_nhom">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-1">
                                    <label for="videotrichdan">Tên nhà cung cấp</label>
                                </div>
                                <div class="col-2">
                                    <input type="text" name="ten_ncc">
                                </div>
                            </div>
                            <div class="row">
                                <input type="submit" value="submit" name="btn_themsanpham">
                            </div>
                        </form>
                    </div>
                            
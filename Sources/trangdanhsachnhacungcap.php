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
    if(isset($_POST['btn_themncc'])){
        $ten_ncc=$_POST['ten_ncc'];
        $diachi=$_POST['diachi'];
        $dienthoai=$_POST['dienthoai'];
        $sql1="INSERT INTO nhacungcap (ten_ncc,diachi,dienthoai) values ('$ten_ncc','$diachi','$dienthoai')";
        $query1=mysqli_query($conn,$sql1);
    }
?>

<?php
    
    if (isset($_GET["id_delete"])) {
        
		$sql2 = "DELETE FROM nhacungcap WHERE id_ncc = ".$_GET["id_delete"];
		mysqli_query($conn,$sql2);
	}
?>
<?php 
    $sql="SELECT * FROM nhacungcap";
    $query=mysqli_query($conn,$sql);
?>
<div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <br><br>
                    <h2>Danh sách nhà cung cấp</h2>
                    <table border="1px;" align="center">
                        <thead>
                            <tr>
                                <th bgcolor="#E6E6FA" style="text-align:center;">STT</th>
                                <th bgcolor="#E6E6FA" style="text-align:center;">ID nhà cung cấp</th>
                                <th bgcolor="#E6E6FA" style="text-align:center;">Tên nhà cung cấp</th>
                                <th bgcolor="#E6E6FA" style="text-align:center;">Địa chỉ</th>
                                <th bgcolor="#E6E6FA" style="text-align:center;">Số điện thoại</th>
                                <th bgcolor="#E6E6FA" style="text-align:center;">Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $i=0;
                            while($dt=mysqli_fetch_array($query)){
                                $id_ncc=$dt['id_ncc'];
                        ?>
                         <tr>
                                <td><?php echo $i;?></td>
                                <td><?php echo $id_ncc;?></td>
                                <td><?php echo $dt['ten_ncc'];?></td>
                                <td><?php echo $dt['diachi'];?></td>
                                <td><?php echo $dt['dienthoai'];?></td>
                                <td>
                                <a href="sua_nhacungcap.php?id=<?php echo $id_ncc;?>" style="text-decoration:none;">Sửa</a>
                                <a href="trangdanhsachnhacungcap.php?id_delete=<?php echo $id_ncc;?>" style="text-decoration:none;">Xóa</a>
                                </td>
                        </tr>
                        <?php
                            $i++;
                            }
                        ?>
                        </tbody>
                    </table>
                    <br>
                    <h3>Thêm nhà cung cấp</h3>
                    <div class="containt">
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                    <div class="row">
                                <div class="col-1">
                                    <label for="idnhom">Tên nhà cung cấp</label>
                                </div>
                                <div class="col-2">
                                    <input type="text"  name="ten_ncc" >
                                </div>
                    </div>
                    <div class="row">
                                <div class="col-1">
                                    <label for="title">Địa chỉ</label>
                                </div>
                                <div class="col-2">
                                    <input type="text" id="title" name="diachi">
                                </div>
                            </div>
            
                            <div class="row">
                                <div class="col-1">
                                    <label for="anhtrichdan">Điện thoại</label>
                                </div>
                                <div class="col-2">
                                    <input type="text"  name="dienthoai" >
                                </div>
                            </div>
                            <div class="row">
                                <input type="submit" value="submit" name="btn_themncc">
                            </div>
                    </form>
                </div>
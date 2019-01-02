<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
        padding:18px 20px;
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
<?php require_once("connection.php");?>
<?php include("TEMPLATE.php");?>
<?php

	if (isset($_POST["btn_sua"])) {
		//lấy thông tin từ các form bằng phương thức POST
        $noidung=$_POST['noidung'];
        $check=$_POST['cm_check'];
        $cm_id=$_POST['idcm'];
		// Viết câu lệnh cập nhật thông tin người dùng
		$sql = "UPDATE comment SET noidung='$noidung' , cm_check='$check' where cm_id='$cm_id'";
		// thực thi câu $sql với biến conn lấy từ file connection.php
		mysqli_query($conn,$sql);
		
    }
?>
<?php
    $idcmt = -1;
    if(isset($_GET['id'])){
        $idcmt=$_GET['id'];
  
    }
    $sql="SELECT * FROM comment where cm_id =".$idcmt;
    $query=mysqli_query($conn,$sql);
    function make_permission_dropdown($idcmt){
        $select_1 = "";
        $select_2 = "";
        if ($idcmt == 'N') {
            $select_1 = 'selected = "selected"';
        }
        if ($idcmt == 'Y') {
            $select_2 = 'selected = "selected"';
        }
        
        $select = '<select id="check" name="cm_check">
                        <option value="-1"></option>
                        <option value="N" '.$select_1.'>Chưa duyệt</option>
                        <option value="Y" '.$select_2.'>Đã duyệt</option>
                        
                    </select>';
 
        return $select;
    }
    while($data=mysqli_fetch_array($query)){
        $i=1;
        $check=$data['cm_check'];
        
        
    ?>
    <body>
    <div id="page-wrapper">
        <div class="container-fluid">
			    <div class="row">
                <div class="col-lg-12">
					<br><br>
                    <h2> Chỉnh sửa bình luận</h2>
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                    <div class="containt">
                        <div class="row">
                        <input type="hidden" name="idcm" value="<?php  echo $data['cm_id'];?>">
                        </div>
                        <div class="row">
                            <div class="col-1">
                                <label for="hoten"> Nội dung</label>
                            </div>
                            <div class="col-2">
                                <input  type ="text" name="noidung" id="noidung" value="<?php echo $data['noidung']; ?>" >
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-1">
                                <label for="email">Duyệt bình luận</label>
                            </div>
                            <div class="col-2">
                                
                            <?php echo make_permission_dropdown($data['cm_check']); ?> 
                            </div>
                        </div>
                        <div class="row">
                            <input type="submit" name="btn_sua" value="Cập nhật thông tin">
                        </div>
                    </form>
    <?php
    }
    ?>

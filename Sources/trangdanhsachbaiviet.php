
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
    if(isset($_POST['btn_thembaiviet'])){
        $idn=$_POST['idnhom'];
        $tieude=$_POST['title'];
        $anh=$_POST['anhtrichdan'];
        $video=$_POST['videotrichdan'];
        $ndtrichdan=$_POST['noidung'];
        $noidung=$_POST['post_content'];
        $user_id = $_SESSION["user_id"];
        $sql="INSERT INTO posts ( idtin,title,content,user_id,createdate,updatedate,idnhom,anhtrichdan,videotrichdan,noidungtrichdan) VALUES('$idt','$tieude','$noidung','$user_id',now(),now(),'$idn','$anh','$video','$ndtrichdan')";
        $query=mysqli_query($conn,$sql);
        
    }
?>
<?php
	if (isset($_GET["id_delete"])) {
        
		$sql = "DELETE FROM posts WHERE idtin = ".$_GET["id_delete"];
		mysqli_query($conn,$sql);
	}
	
?>
    
<?php 
    $sql="SELECT * FROM posts";
    $query=mysqli_query($conn,$sql);
?>
<div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <br><br>
    <h2>Danh sách các bài viết</h2>
    <table border="1px;" align="center">
	<thead>
		<tr>
			<th bgcolor="#E6E6FA" style="text-align:center;">STT</th>
			<th bgcolor="#E6E6FA" style="text-align:center;">ID tin</th>
            <th bgcolor="#E6E6FA" style="text-align:center;">ID nhóm</th>
            <th bgcolor="#E6E6FA" style="text-align:center;"> Tiêu đề</th>  
            <th bgcolor="#E6E6FA" style="text-align:center;">User id</th>
            <th bgcolor="#E6E6FA" style="text-align:center;">Xử lý</th>
            

			
		<tr>
	</thead>
	<tbody>
    <?php
        $i = 0; 
		while ( $data = mysqli_fetch_array($query) ) {
            $idt=$data['idtin'];
            $idn=$data['idnhom'];
    ?>
        <tr>
            <td><?php echo $i;?></td>
            <td><?php echo $idt;?></td>
            <td><?php echo $idn;?></td>
            <td><?php echo $data['title'];?></td>
            
            <td><?php echo $data['user_id'];?></td>
            <td>
                <a href="suabaiviet.php?idt=<?php echo $idt;?>" style="text-decoration:none;">Sửa</a>
                <a href="trangdanhsachbaiviet.php?id_delete=<?php echo $idt;?>" style="text-decoration:none;">Xóa</a>
            </td>
        </tr>
    <?php
        $i++;
        }
    ?>
    </tbody>
    </table>
    <br>
    <h3>Thêm mới bài viết</h3>
    <div class="containt">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
            <div class="row">
                        <div class="col-1">
                            <label for="idnhom">ID nhóm</label>
                        </div>
                        <div class="col-2">
                            <input type="text"  name="idnhom" >
                        </div>
            </div>
            <div class="row">
                        <div class="col-1">
                            <label for="title">Tiêu đề bài viết</label>
                        </div>
                        <div class="col-2">
                            <input type="text" id="title" name="title">
                        </div>
                    </div>
    
                    <div class="row">
                        <div class="col-1">
                            <label for="anhtrichdan">Trích dẫn ảnh</label>
                        </div>
                        <div class="col-2">
                            <input type="text"  name="anhtrichdan" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <label for="videotrichdan">Trích dẫn video</label>
                        </div>
                        <div class="col-2">
                            <input type="text" name="videotrichdan">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <label for="noidngtrichdan">Nội dung trích dẫn</label>
                        </div>
                        <div class="col-2">
                            <textarea name="noidung" id="noidung"  height='60px';></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <label for="content"> Nội dung bài viết</label>
                        </div>
                        <div class="col-2">
                            <textarea name="post_content" id="post_content"  ></textarea>
                        </div>
                    </div>
                    
                    <div class="row">
                        <input type="submit" value="submit" name="btn_thembaiviet">
                    </div>
                </div>
            
            </form>

        </div>
        <br>
           
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'post_content' );
            </script>
            
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'noidung' );
            </script>
    </div>
</div>
    </div>
    </div>
    <br>
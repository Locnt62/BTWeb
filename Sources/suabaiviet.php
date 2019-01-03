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
     
     if (isset($_POST["btn_suabaiviet"])) {
    //lấy thông tin từ các form bằng phương thức POST
    $idn=$_POST['idnhom'];
    $tieude=$_POST['title'];
    $anh=$_POST['anhtrichdan'];
    $noidung=$_POST['post_content'];
    $idt=$_POST['idtin'];
    $ndtrichdan=$_POST['noidung'];
    $video=$_POST['videotrichdan'];
    


// Viết câu lệnh cập nhật thông tin người dùng
$sql = "UPDATE posts SET idnhom='$idn',title='$tieude',anhtrichdan='$anh',content='$noidung', noidungtrichdan='$ndtrichdan',videotrichdan='$video' where idtin='$idt'";
// thực thi câu $sql với biến conn lấy từ file connection.php
mysqli_query($conn,$sql);

}
?>
<?php

    if(isset($_GET['idt'])){
        $id=$_GET['idt'];
    $sql="SELECT * FROM posts WHERE idtin='$id'";
    $query=mysqli_query($conn,$sql);
    while ( $data= mysqli_fetch_array($query) ){
        $i=0;
        $idn=$data['idnhom'];
        $idtin=$data['idtin'];
        
?>
<body>
<div id="page-wrapper">
        <div class="container-fluid">

      

            <div class="row">
                <div class="col-lg-12">
            <h2>Sửa nội dung của bài viết:&nbsp<?php echo $data['title'];?></h2>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                <div class="containt">
                <div class="row">
                    <input type="hidden" name="idtin" value="<?php  echo $idtin;?>">
                        <div class="col-1">
                            <label for="idnhom">ID nhom</label>
                        </div>
                        <div class="col-2">
                            <input type="text"  name="idnhom" value="<?php echo $idn;?>" >
                        </div>
                    
                        <div class="col-1">
                            <label for="title">Tiêu đề bài viết</label>
                        </div>
                        <div class="col-2">
                            <input type="text" id="title" name="title" value="<?php echo $data['title'];?>">
                        </div>
                    </div>
    
                    <div class="row">
                        <div class="col-1">
                            <label for="anhtrichdan">Trích dẫn ảnh</label>
                        </div>
                        <div class="col-2">
                            <input type="text"  name="anhtrichdan" value="<?php echo $data['anhtrichdan'];?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <label for="videotrichdan">Trích dẫn video</label>
                        </div>
                        <div class="col-2">
                            <input type="text" name="videotrichdan" value="<?php echo $data['videotrichdan'];?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <label for="noidngtrichdan">Nội dung trích dẫn</label>
                        </div>
                        <div class="col-2">
                            <textarea name="noidung" id="noidung"  height='60px'; value="<?php echo $data['noidungtrichdan'];?>"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <label for="content"> Nội dung bài viết</label>
                        </div>
                        <div class="col-2">
                            <textarea name="post_content" id="post_content" value="<?php echo $data['content'];?>" ></textarea>
                        </div>
                    </div>
                    
                    <div class="row">
                        <input type="submit" value="submit" name="btn_suabaiviet">
                    </div>
                </div>
                </div>
            </form>
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
            <?php }
    }
            ?>
          
    
    
        </div>
    </div>
    </body>
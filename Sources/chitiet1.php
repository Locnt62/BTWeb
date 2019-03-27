<?php require_once("connection.php");?>
 <?php   include("Template_index.php");?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php session_start();?>
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
        padding:22px 34px;
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
    .rep-name{
        height:50px;
        width:290px;
    }
    .rep-mess{
        height:185px;
        width:290px;
    }

    /*css ul */
    ul {list-style-type:none;}
    img{ float:left;}
    .anh {float:left; margin-left: 6px; }
    ul li {clear:left;}
    
    
    button{margin-bottom:5px;}
    td{
        padding:2px 4px;
    }
</style>
</head>
 <body>
 <div id="page-wrapper">
<div class="container-fluid">
        <div class="row">
                <div class="col-lg-12">
					
        <?php
            if(isset($_GET['id']) && isset($_GET['idn'])){
                $id=$_GET['id'];
                $idn=$_GET['idn'];
                
            //insert cmt vao bang comment
            if(isset($_POST['btn_binhluan'])){
                $name=$_POST['ten'];
                $message=$_POST['post_content'];
                $sql="INSERT INTO comment ( ten, noidung, cm_check,idtin,creatdate) VALUES('$name','$message','N','$id',now()) ";
                $query=mysqli_query($conn,$sql);
                echo "<script>";
                echo " alert('Binh luận của bạn đang đợi kiểm duyệt trước khi hiển thị lên web')";
                echo "</script>";
            }
                $sql="SELECT * FROM nhombai WHERE idnhom='$idn'";
                $query=mysqli_query($conn,$sql);
                while ( $rn = mysqli_fetch_array($query)){
            
        ?>
        <h1 style="color:red;"><?php echo $rn['tennhom'];?></h1>
        
        <?php
            $sql="SELECT * FROM posts WHERE idtin='$id' ";
            $query=mysqli_query($conn,$sql);
            while($r=mysqli_fetch_array($query)){
               $anh=$r['anhtrichdan'];
               $video=$r['videotrichdan'];
               
                
                
            ?>
            <p style="font-style:italic;font-size:40px;text-align:center;"><?php echo $r['title'];?></p>
            <small> Ngày tạo &nbsp<?php echo $r['createdate'];?></small><br>
            <table width="100%">
                <tr>
                    <td><img src="<?php echo $anh;?>" width="400dp" height="500dp"></td> 
           
         
            <td><p style="text-align:jusify;"><?php echo $r['content'];?></p></td>
            </tr>
            </table>
            
            <?php
                echo"<h3>Xem thêm:</h3>";
                $sql="SELECT * FROM posts where idtin!='$id' and idnhom='$idn' order by idtin desc limit 3";
                $query=mysqli_query($conn,$sql);
                while($row=mysqli_fetch_array($query)){
                    $idtin=$row['idtin'];
                    $tieude=$row['title'];
                    echo"<a href='chitiet.php?idn=$idn& id=$idtin' style='text-decoration:none;'>$tieude</a><br><br>";
                }
            ?>
            <?php
            }
        }
        }
        ?>
        <br>
        
          
    </div>
</body>
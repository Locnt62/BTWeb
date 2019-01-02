<?php require_once("connection.php");?>
 <?php   include("TEMPLATE(CLIENT).php");?>
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
            <p style="text-decoration:underline;font-style:italic;font-size:30px;text-align:center;"><?php echo $r['title'];?></p>
            <small> Ngày tạo &nbsp<?php echo $r['createdate'];?></small><br>
            <p><?php if($r['noidungtrichdan'] !=null)
                echo $r['noidungtrichdan'];?></p><br>
            <p> <?php  if($r['anhtrichdan'] !=null)
                    echo"<audio width='500px' controls><source src='$anh' ></audio>";?></p>
            <p> <?php  if($r['videotrichdan'] !=null)
                    echo"<video width='700px' height='400px'controls><source src='$video' ></video>";?></p>
            <p style="text-align:jusify;"><?php echo $r['content'];?></p>
            
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
        ?>
        <br>
        <h2> Comment</h2>
        <div class="containt">
        <form action="chitiet.php?idn=<?php echo $idn ?>&%20id=<?php echo $id?>" method="POST">
        
                    
                <div class="row">
                    <div class="col-1">
                        <label for="anhtrichdan">Name</label>
                    </div>
                    <div class="col-2">
                        <input type="text"  name="ten" value="<?php echo $_SESSION['fullname'];?>" >
                    </div>
                </div>
                <div class="row">
                    <div class="col-1">
                        <label for="content"> Nội dung </label>
                    </div>
                    <div class="col-2">
                        <textarea name="post_content" id="post_content"  style="min-height:100px;"></textarea>
                    </div>
                </div>
                
                <div class="row">
                    <input type="submit" value="submit" name="btn_binhluan">
                </div>
            </div>
        
        </form>
        </div>
        <br>
        
          
        
        
        <fieldset style="width:550px; margin-left:5px;padding:0 0 8px 2px">
        <legend> Old comment</legend>
        <ul>
        <?php
            $sql="SELECT * from comment where cm_check='Y' and idtin ='$id'";
            $result=mysqli_query($conn,$sql);
            while($data1=mysqli_fetch_array($result)){
            $cm_id=$data1['cm_id'];
        ?>
        <li>
                        <img src="avar.png" width="52px">
                        <div class="anh">
                            <h4><?php echo $data1['ten'];?></h4>
                            <small><p><?php echo $data1['creatdate'];?></p></small>
                            <h5><?php echo $data1['noidung'];?></h5>
                        </div>   
        <?php
                }  
            
        ?>
        
        <?php
        }
        ?>
        </ul>
        </fieldset>
          
    </div>
</body>
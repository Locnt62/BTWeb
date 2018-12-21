<?php require_once("connection.php");?>
 <?php   include("TEMPLATE(CLIENT).php");?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
 <body>
 <div id="page-wrapper">
<div class="container-fluid">
        <div class="row">
                <div class="col-lg-12">
					<br><br>
        <?php
            if(isset($_GET['id']) && isset($_GET['idn'])){
                $id=$_GET['id'];
                $idn=$_GET['idn'];
                $sql="SELECT * FROM nhombai WHERE idnhom='$idn'";
                $query=mysqli_query($conn,$sql);
                while ( $rn = mysqli_fetch_array($query)){
                
            
        ?>
        <h1 color='red'><?php echo $rn['tennhom'];?></h1>
        <br>
        <?php
            $sql="SELECT * FROM posts WHERE idtin='$id' ";
            $query=mysqli_query($conn,$sql);
            while($r=mysqli_fetch_array($query)){
               
                
                
            ?>
            <h2><?php echo $r['title'];?></h2>
            <h4> Ngày tạo &nbsp<?php echo $r['createdate'];?></h4><br>
            <p><?php  if($r['anhtrichdan'] !=null)
                    echo"<img src='$anh' width='700'>";?></p>
            <p style="text-align:jusify;"><?php echo $r['content'];?></p>
            
            <?php
                echo"<h3>Xem thêm:</h3>";
                $sql="SELECT * FROM posts where idtin!='$id' and idnhom='$idn' order by idtin desc limit 2";
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
                
            
        
        <h3><?php echo $r['title'];?></h3>
    </div>
</body>
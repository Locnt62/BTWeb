<?php require_once("connection.php");?>
 <?php   include("TEMPLATE(CLIENT).php");?>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 
 
</head>
<div id="page-wrapper">
<div class="container-fluid">
        <div class="row">
                <div class="col-lg-12">
					<br><br>

<?php 
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $sql="SELECT tennhom from nhombai where idnhom='$id'";
        $query = mysqli_query($conn,$sql);
        while ( $r= mysqli_fetch_array($query)){
         $tennhom= $r['tennhom'] ;
        
    
?>

<?php
    // BƯỚC 2: TÌM TỔNG SỐ RECORDS
    $result = mysqli_query($conn, 'select count(idtin) as total from posts');
    $row = mysqli_fetch_assoc($result);
    $total_records = $row['total'];

    // BƯỚC 3: TÌM LIMIT VÀ CURRENT_PAGE
    $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
    $limit = 5;

    // BƯỚC 4: TÍNH TOÁN TOTAL_PAGE VÀ START
    // tổng số trang
    $total_page = ceil($total_records / $limit);

    // Giới hạn current_page trong khoảng 1 đến total_page
    if ($current_page > $total_page){
        $current_page = $total_page;
    }
    else if ($current_page < 1){
        $current_page = 1;
    }

    // Tìm Start
    $start = ($current_page - 1) * $limit;
    //TRuy vấn và hiển thị nội dung của trang
    $sql="SELECT * FROM posts WHERE idnhom='$id' order by idtin  limit $start ,$limit";
    $query=mysqli_query($conn,$sql);
    while($data=mysqli_fetch_array($query)){
        $idtin=$data['idtin'];
        $tieude=$data['title'];
        $noidung=$data['content'];
        $idnhom=$data['idnhom'];
        echo"<a href='chitiet.php?idn=$idnhom& id=$idtin' style='text-decoration:none; font-weight:bolder;'>$tieude</a><br>";
        echo "<br><br>";
        }
    

?>
<div >
           <?php 
            // PHẦN HIỂN THỊ PHÂN TRANG
            // BƯỚC 7: HIỂN THỊ PHÂN TRANG
 
            // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
            if ($current_page > 1 && $total_page > 1){
                echo '<a href="news2.php?page='.($current_page-1).' & id='.$id.'">Prev</a> | ';
            }
 
            // Lặp khoảng giữa
            for ($i = 1; $i <= $total_page; $i++){
                // Nếu là trang hiện tại thì hiển thị thẻ span
                // ngược lại hiển thị thẻ a
                if ($i == $current_page){
                    echo '<span>'.$i.'</span> | ';
                }
                else{
                    echo '<a href="news2.php?page='.$i.'& id='.$id.'">'.$i.'</a> | ';
                }
            }
 
            // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
            if ($current_page < $total_page && $total_page > 1){
                echo '<a href="news2.php?page='.($current_page+1).'& id='.$id.'">Next</a> | ';
            }
           ?>
        </div>
    <?php
        }
    }
    ?>
</div>


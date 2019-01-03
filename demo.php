<?php require_once("connection.php"); ?>
<?php include "home2chuan.php" ?>
<div id="noidung">
<?php 
    $sql="SELECT * FROM nhomtin order by idnhom ASC";
    $query=mysqli_query($conn,$sql);
    while($data=mysqli_fetch_array($query)){
        $id=$data['idnhom'];
        $name=$data['tennhom'];
        echo"<li><a href='new.php?id=$id'>$name</a></li>";
    }
?>
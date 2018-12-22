<?php require_once("connection.php");?>
<?php include("Home2chuan.php");?>
<head>
<link rel="stylesheet" type="text/css" href="filenhung.css" medial="all" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
        
         .div1{
            list-style: none;
            
         }
         #left{
    width: 145px;
    min-height: 1000px;
    
    background-color: #84e184;
    float: left;
    margin-bottom: 5px;
    text-align: center;
} 
        
    </style>
</head>

<div id="left">

<div class="div1">
<?php
    $sql = "SELECT * FROM nhombai   ";
	$query = mysqli_query($conn,$sql);
    while ( $data = mysqli_fetch_array($query) ) {
        $id=$data['idnhom'];
        $name=$data['tennhom'];
        echo"<li><a href='news2.php?id=$id'</a>$name</li>";        
    }
   
?>
</div>


</div>



			

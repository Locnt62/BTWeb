<!DOCTYPE html>
<?php require_once("connection.php");?>
 <?php   include("TEMPLATE(CLIENT).php");?>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
        padding:12px 16px 10px 12px;
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
<?php
if (isset($_POST["btn_suatt"])) {
    $id=$_POST['id'];
    $username=$_POST['username'];
    $fullname=$_POST['fullname'];

    $sql1="UPDATE users set id='id', username='$username', fullname='$fullname' where id='$id' ";
    mysqli_quey($conn,$sql1);
    
?>
<?php
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $sql="SELECT * from users where id='$id'";
        $query=mysqli_query($conn,$query);
        while($dt=mysqli_fetch_array($query)){
            $id_user=$dt['id'];
?>
<body>
<div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                <div class="containt">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                    <div class="row">
                        <input type="hidden" name="id" value="<?php  echo $id_user;?>">
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <label for="anhtrichdan">Usser name</label>
                        </div>
                        <div class="col-2">
                            <input type="text"  name="username" value="<?php echo $dt['username'];?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <label for="videotrichdan">Fullname</label>
                        </div>
                        <div class="col-2">
                            <input type="text" name="fullname" value="<?php echo $dt['fullname'];?>">
                        </div>
                    </div>
                    <div class="row">
                        <input type="submit" value="submit" name="btn_suatt">
                    </div>
                </form>
            </div>
<?php
        }
    }
?>
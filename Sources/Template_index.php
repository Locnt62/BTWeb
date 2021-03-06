<!DOCTYPE html>
<html lang="en">
<?php session_start();?>
<?php require_once("connection.php");?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/startmin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
       

        <!-- Top Navigation: Left Menu -->
        <ul class="nav navbar-nav navbar-left navbar-top-links">
            <li><a href="Home5.php"><i class="fa fa-home fa-fw"></i> Home</a></li>
        </ul>

        <!-- Top Navigation: Right Menu -->
        <ul class="nav navbar-right navbar-top-links">
           
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i>
							<b class="caret"></b>
                </a>
               
                <ul class="dropdown-menu dropdown-user">
                   
                    <li><a href="Dangnhap.php"><i class="fa fa-gear fa-fw"></i> Log in</a>
                    </li>
                   
                </ul>
               
                
            </li>
        </ul>

        <!-- Sidebar -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">

                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                        </div>
                    </li>
                    <li>
                        <a href="dangky2.php" class="active"><i class="fa fa-dashboard fa-fw"></i>Đăng ký thành viên</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i> Các sản phẩm <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                            <?php
                                    $sql = "SELECT * FROM nhombai where idnhom !='9'   ";
                                    $query = mysqli_query($conn,$sql);
                                    while ( $data = mysqli_fetch_array($query) ) {
                                        $id=$data['idnhom'];
                                        $name=$data['tennhom'];
                                        echo"<a href='news3.php?id=$id'>$name</a>";        
                                    }
                                
                                ?>
                            </li>
                            <li>
                                <a href="#"> Các sản phẩm khác<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <?php
                                    $sql = "SELECT * FROM nhombai where idnhom ='9'   ";
                                    $query = mysqli_query($conn,$sql);
                                    while ( $data = mysqli_fetch_array($query) ) {
                                        $id=$data['idnhom'];
                                        $name=$data['tennhom'];
                                        echo"<a href='news3.php?id=$id'>$name</a>";        
                                    }
                                
                                ?>
                                    
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <!-- Page Content -->
   
    

<!-- jQuery -->
<script src="js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/startmin.js"></script>

</body>
</html>

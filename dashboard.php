<?php
    session_start();
    $str = "You are not logged in";
    if(isset($_SESSION['id'])) {
       // echo $_SESSION['id'];
}   else {
    echo addslashes($str);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-Ua-Compatible" content="IE=edge">
    <meta name="viewport" content="width = device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="dashboard.css">
    <title>BackPacker</title>
</head>
<body>
    <header>
          <div class="navbar navbar-inverse navbar-static-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-bar-target">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                        <a href="index.html" class="navbar-brand" id="logo">BackPacker</a>
                </div>
                <div class="navbar-collapse collapse" id="nav-bar-target">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="about"><a href="#">About</a></li>
                        <li class="about"><a href="#">Toggle Dashboard</a></li>
                    </ul>
                </div>
            </div>
        </div>    
				<!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Dashboard
                    </a>
                </li>
				<li class ="sidebar-border">
				</li>
                <li>
                    <a href="#">Gear-Lists</a>
                </li>
                <li>
                    <a href="#">Trips</a>
                </li>
                <li>
                    <a href="#">Help</a>
                </li>
        </div>
        <!-- /#sidebar-wrapper -->
   
    </header>
    
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/main.js"></script>
<script src="js/bootstrap.js"></script>

</body>
</html>

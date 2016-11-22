<?php
    session_start();
    $str = "You are not logged in";
    if(isset($_SESSION['id'])) {
        //echo $_SESSION['id'];
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
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="about.css">
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
                    <a href="index.php" class="navbar-brand" id="logo">BackPacker</a>
                </div>
                <div class="navbar-collapse collapse" id="nav-bar-target">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="login"><a href="login.php">Log In</a></li>
                        <li class="about"><a href="logout.php">Log-out</a></li>
                    </ul>
                </div>
            </div>
        </div>    
    </header>
    
 <div class="container">
    <p class="info">We are a group of three young soon to IT professionals with a passion for hiking, camping, and the great outdoors. We built a web application for your hiking trip and gear planning needs. If you would like to contribute to the project, our github page is <a href="https://github.com/russell190/backpacker">here.</a>  </p>
    
 </div>     

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/main.js"></script>
<script src="js/bootstrap.js"></script>
</body>
<div class="navbar-fixed-bottom" id="footer">
    <footer>
        <span class="copyright">&copy Copyright 2016</span>
    </footer>
</div>
</html>

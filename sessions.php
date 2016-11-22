<?php
    session_start();
    $str = "You are not logged in";
    if(isset($_SESSION['id'])) {
       //echo $_SESSION['id'];
}   else {
    echo "<div style ='font:11px/21px Arial,tahoma,sans-serif;color:white'>$str</div>";
}

?>

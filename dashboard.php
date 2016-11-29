<?php
    session_start();
    $str = "You are not logged in";
    if(isset($_SESSION['id'])) {
       echo $_SESSION['id'];
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
    <link rel="stylesheet" href="dashboard.css">
    <title>BackPacker</title>
	<link href="js/jquery.bootgrid.css" rel="stylesheet">
	
</head>
<body>
    <header>
        <div class="navbar navbar-inverse navbar-static-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="index.php" class="navbar-brand" id="logo">BackPacker</a>
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
                    <a href="dashboard.php">Gearlist</a>
                </li>
                <li>
                    <a href="trip.php">Trips</a>
                </li>
        </div>
        <!-- /#sidebar-wrapper -->
                <div class="navbar-collapse collapse" id="nav-bar-target">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="login"><a href="login.html">Log In</a></li>
                    </ul>
				</div>
            </div>
			
        </div>    
    </header>
	<!--- This section needs to only display rows applicable to the AccountID signed in. We should probably update the ERD-->
<table id ="gear" class="table table-condensed table-hover table-striped" data-toggle="bootgrid" data-ajax="true" data-url="geardatagrid.php" style="margin-left:212px;">
	<thead>
	<tr>
		<th data-column-id="GearID" data type="numeric" data-identifier="true">GearID</th>
		<th data-column-id="GearType">GearType</th>
	</tr>
	</thead>
	<tbody>
	</tbody>
	</table>

<!-- textboxes that allow a user to post data to their gear lits
Feel free to prettify this if you want
gearID, gearName, gearType, gearCost, gearRating
-->
<form action="insert.php" method="post" style="margin-left:212px; margin-top:100px; color:black;  position: absolute>

Gear Name: <input type="text" name="gearNameformbox">

Gear Type: <input type="text" name="gearTypeformbox">

Gear Weight: <input type="number" name="gearWeightformbox">

Gear Rating: <input type="number" name="gearRatingformbox" <br>

<center><input type="submit" /></center>

</form>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<!-- Include bootgrid plugin (below), -->
    <script src="js/jquery.bootgrid.min.js"></script>

<!--- bootgrid js. Will add to this.
For documentation see: http://www.jquery-bootgrid.com/documentation
-->

<script langauge="javascript">
var grid = $("#gear").bootgrid({
    post: function ()
    {
      /* To accumulate custom parameter with the request object */
      return {
        id: "b0df282a-0d67-40e5-8558-c9e93b7befed"
      };
    },
    
    url: "/geardatagrid.php",
    formatters: {
            "commands": function(column, row)
            {
                return "<button type=\"button\" class=\"btn btn-xs btn-default command-edit\" data-row-id=\"" + row.id + "\"><span class=\"glyphicon glyphicon-edit\"></span></button> " + 
                    "<button type=\"button\" class=\"btn btn-xs btn-default command-delete\" data-row-id=\"" + row.id + "\"><span class=\"glyphicon glyphicon-trash\"></span></button>";
            }
        }
   })
</script>

</body>
</html>

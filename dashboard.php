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
                        Sidebar
                    </a>
                </li>
				<li class ="sidebar-border">
				</li>
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="#">About</a>
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
	<table id ="geargrid" class="table table-condensed table-hover table-striped" data-toggle="bootgrid" style="margin-left:212px;">
	<thead>
	<tr>
		<th data-column-id="gearID" data type="numeric" style="color: white;">ID</th>
		<th data-column-id="gearName" style="color: white;">Gear Name</th>
		<th data-column-id="gearType" style="color: white;">Gear Type</th>
		<th data-column-id="gearCost" data type="numeric" style="color: white;">Gear Cost</th>
		<th data-column-id="gearRating" data type="numeric" style="color: white;">Gear Rating</th>
	</tr>
	</thead>
	<tbody>
	...
	</tbody>
	</table>

<!-- textboxes that allow a user to post data to their gear lits
Feel free to prettify this if you want
gearID, gearName, gearType, gearCost, gearRating
-->
<form action="insert.php" method="post">

Gear Name: <input type="text" name="gearNameformbox" />

Gear Type: <input type="text" name="gearTypeformbox" />

Gear Weight: <input type="number" name="gearWeightformbox" />

Gear Rating: <input type="number" name="gearRatingformbox" />

<input type="submit" />

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
$("geargrid").bootgrid({
	ajax: true,
    post: function ()
    {
        return {
            id: "1"
        };
    },
    url: "localhost",
    formatters: {
        "commands": function(column, row)
		{
			return "<button type=\"button\" class=\"btn btn-xs btn-default command-edit\" data-row-id=\"" + row.id + "\"><span class=\"fa fa-pencil\"></span></button> " + 
                "<button type=\"button\" class=\"btn btn-xs btn-default command-delete\" data-row-id=\"" + row.id + "\"><span class=\"fa fa-trash-o\"></span></button>";
		}
	}
}).on("loaded.rs.jquery.bootgrid", function()
{
    grid.find(".command-edit").on("click", function(e)
    {
		/*Tentative actions. Users should be able to edit/delete using these commands*/
        alert("You pressed edit on row: " + $(this).data("row-id"));
    }).end().find(".command-delete").on("click", function(e)
    {
        alert("You pressed delete on row: " + $(this).data("row-id"));
    });
});
	
</script>

</body>
</html>

<?php
// http://php.net/manual/en/book.pdo.php
$hostname = 'localhost';
$database = 'bakpak_DEQAzC';
$username = 'bakpak_DEQAzC_A';
$password = '3{qt&I86Y0nn/-Gc~%_&i8-D3DZj~pJB';
$pdo = new PDO("mysql:host=$hostname;
	charset=UTF8;
	dbname=$database",
	$username,
	$password
);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
return $pdo;
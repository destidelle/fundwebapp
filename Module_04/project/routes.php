<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>JDD Trucking</title>
		<link media="screen" rel="stylesheet" type="text/css" href="jdd.css" />
		<link href="https://fonts.googleapis.com/css?family=Handlee|Shadows+Into+Light" rel="stylesheet">
	</head>
	<body>
		<div class="header">
			<h1><a href="home.html"><img src="logo1.png" alt="Diggs" width="180" height="100"/></a>
JDD Trucking</h1>
			<h3> trucking done right</h3>
		</div>
		<div id="content">
			<div class="nav">
				<ul class="nav">
					<li><a href="home.html">Home</a></li>
					<li><a href="routes.php">Routes</a></li>
					<li><a href="aboutus.html">About Us</a></li>
					<li><a href="employment.html">Employment</a></li>
					<li><a href="contactus.html">Contact Us</a></li>
				</ul>
			</div>
		</div>
		<div class="box">
			<p><img src="map3.jpg" alt="map" width="600" height="450" class="center"/></p>
			<div class="para">
			<p>The following routes are our major routes, with many others in between:</p>
		</div>
			<p>
				<h2>
					<?php
//Allow Headers
header('Access-Control-Allow-Origin: *');
//$servername = "localhost:3306";
$servername = "localhost:3306";
$username = "desti";
$password = "9e7b26E864!!";
$dbname = "routes";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
 if ($conn->connect_error)
     echo "Error: Unexpected connection error. Please retry the operation.";
 else
  {
     $result = $conn->query("SELECT * FROM locations");
	 echo "<table>";
	 echo "<tr>";
     if (($result != 0) && ($result->num_rows > 0))
       {
          $row = $result->fetch_assoc();
          $A = $row['RouteNumber'];
          $B = $row['Starting'];
          $C = $row['to'];
          $D = $row['Ending'];
		  $E = $row['Hours'];
		  $F = $row['Miles'];
		  echo "<th>";
          echo $A;
		  echo "|";
          echo $B;
		  echo "|";
          echo $C;
		  echo "|";
          echo $D;
		  echo "|";
		  echo $E;
		  echo "|";
		  echo $F;
		  echo "</th>";
       }
	 	 	echo "</tr>";
	   	echo "<table>";
	 	 	echo "<tr>";
	        if (($result != 0) && ($result->num_rows > 0))
       {
          $row = $result->fetch_assoc();
          $A = $row['RouteNumber'];
          $B = $row['Starting'];
          $C = $row['to'];
          $D = $row['Ending'];
		  $E = $row['Hours'];
		  $F = $row['Miles'];
          echo "<th>";
          echo $A;
		  echo "|";
          echo $B;
		  echo "|";
          echo $C;
		  echo "|";
          echo $D;
		  echo "|";
		  echo $E;
		  echo "|";
		  echo $F;
		  echo "</th>";
       }
	 	 	echo "</tr>";
	   	echo "<table>";
	 	 	echo "<tr>";
	        if (($result != 0) && ($result->num_rows > 0))
       {
          $row = $result->fetch_assoc();
          $A = $row['RouteNumber'];
          $B = $row['Starting'];
          $C = $row['to'];
          $D = $row['Ending'];
		  $E = $row['Hours'];
		  $F = $row['Miles'];
          echo "<th>";
          echo $A;
		  echo "|";
          echo $B;
		  echo "|";
          echo $C;
		  echo "|";
          echo $D;
		  echo "|";
		  echo $E;
		  echo "|";
		  echo $F;
		  echo "</th>";
       }
	 	 	echo "</tr>";
	   	echo "<table>";
	 	 	echo "<tr>";
	        if (($result != 0) && ($result->num_rows > 0))
       {
          $row = $result->fetch_assoc();
          $A = $row['RouteNumber'];
          $B = $row['Starting'];
          $C = $row['to'];
          $D = $row['Ending'];
		  $E = $row['Hours'];
		  $F = $row['Miles'];
          echo "<th>";
          echo $A;
		  echo "|";
          echo $B;
		  echo "|";
          echo $C;
		  echo "|";
          echo $D;
		  echo "|";
		  echo $E;
		  echo "|";
		  echo $F;
		  echo "</th>";
       }
	 	 	echo "</tr>";
	    echo "<table>";
	 	 	echo "<tr>";
	        if (($result != 0) && ($result->num_rows > 0))
       {
          $row = $result->fetch_assoc();
          $A = $row['RouteNumber'];
          $B = $row['Starting'];
          $C = $row['to'];
          $D = $row['Ending'];
		  $E = $row['Hours'];
		  $F = $row['Miles'];
          echo "<th>";
          echo $A;
		  echo "|";
          echo $B;
		  echo "|";
          echo $C;
		  echo "|";
          echo $D;
		  echo "|";
		  echo $E;
		  echo "|";
		  echo $F;
		  echo "</th>";
       }
	 	 	echo "</tr>";
	   	echo "<table>";
	 	 	echo "<tr>";
	        if (($result != 0) && ($result->num_rows > 0))
       {
          $row = $result->fetch_assoc();
          $A = $row['RouteNumber'];
          $B = $row['Starting'];
          $C = $row['to'];
          $D = $row['Ending'];
		  $E = $row['Hours'];
		  $F = $row['Miles'];
          echo "<th>";
          echo $A;
		  echo "|";
          echo $B;
		  echo "|";
          echo $C;
		  echo "|";
          echo $D;
		  echo "|";
		  echo $E;
		  echo "|";
		  echo $F;
		  echo "</th>";
       }
	 	 	echo "</tr>";
		 	echo "<table>";
	 		echo "<tr>";
	        if (($result != 0) && ($result->num_rows > 0))
       {
          $row = $result->fetch_assoc();
          $A = $row['RouteNumber'];
          $B = $row['Starting'];
          $C = $row['to'];
          $D = $row['Ending'];
		  $E = $row['Hours'];
		  $F = $row['Miles'];
          echo "<th>";
          echo $A;
		  echo "|";
          echo $B;
		  echo "|";
          echo $C;
		  echo "|";
          echo $D;
		  echo "|";
		  echo $E;
		  echo "|";
		  echo $F;
		  echo "</th>";
       }
			 	   echo "</table>";
	   echo "</tr>";


     $conn->close();
}

?>
			</h2>

			</p>
		</div>
		<div class = "footer">
			<h4><a href="home.html">Home Page</a> | <a href="#">About Us</a> | <a href="#">Employment</a> | <a href="#">Contact Us</a></h4>
			<h4>509 Massachusetts Ave</h4>
			<h4>Elkhart, IN 46514</h4>
		</div>
	</body>
</html>

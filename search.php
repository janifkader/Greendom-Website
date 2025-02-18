	<html>
	<head>
		<title>Greendom</title>
		<link rel="icon" type="image/x-icon" href="favi.ico">
	<style>
		body{
			background-color: #355E3B;
			color: white;
			font-family: monospace;
		}
		img{
			width: 100px;
			object-position: center;
		}
		button{
	  width: 75%;
	  font-family: monospace;
	  background-color: #4F7942;
	  color: white;
	  padding: 20px 20px;
	  margin: 8px 0;
	  border: none;
	  border-radius: 4px;
	  cursor: pointer;
}
button:hover {
  background-color: #5F8575;
}
	</style>
</head>
<body align = "center">
	<?php
	include "connect.php";
	$key = $_GET["keyword"];
	echo "<h2>Items containing: $key<br><h2>";
	$sql = "SELECT itemNAME, itemSTATUS FROM recycle WHERE itemNAME LIKE '%" . $key . "%'";
	$result = $mysqli->query($sql);
	if ($result->num_rows > 0) {
  	// output data of each row
  		while($row = $result->fetch_assoc()) {
    		echo "Name: " . $row["itemNAME"] . ", Status: " . $row["itemSTATUS"] . "<br><br>";
  		}
  		echo "<div align = \"center\">
		<a href = \"index.php\">
			<button>Return to Greendom</button>
		</a>
	</div>";
	} 
	else {
  		echo "Zero Results<br><div>
	<a href = \"add.php\">
		<button>Add item to list?</button>
	</a>
</div>";
	}

	$mysqli->close();
?>
</body>
</html>
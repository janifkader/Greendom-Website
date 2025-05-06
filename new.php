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
<body align="center">
	Succesfully added to list!
	<?php
	include "connect.php";

	$new_item = $_GET["newitem"];
	$new_status = $_GET["newstatus"];

	$sql = "INSERT INTO recycle (itemname, itemstatus) VALUES ('$new_item', '$new_status')";
	$result = $pdo->query($sql);
	?>

	<div align = "center">
		<a href = "index.php">
			<button>Return to Greendom</button>
		</a>
	</div>
</body>
</html>
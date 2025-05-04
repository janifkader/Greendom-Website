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
input[type=text]{
	 width: 30%;
	 padding: 12px 20px;
	 margin: 8px 0;
	 display: inline-block;
	 border: 1px solid #ccc;
	 border-radius: 4px;
	 box-sizing: border-box;
}
input[type=submit]{
	  width: 30%;
	  font-family: monospace;
	  background-color: #228B22;
	  color: white;
	  padding: 14px 20px;
	  margin: 8px 0;
	  border: none;
	  border-radius: 4px;
	  cursor: pointer;
}
input[type=submit]:hover {
  background-color: #008000;
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

<body>

	<h1 align= "center">Greendom</h1>
	<form align= "center" action="search.php">
	Search for an item to check its recyclability: <br>
  <input type="text" name="keyword"><br>
  <input type="submit" value="Submit">
</form> 
<div align = "center">
	<a href = "add.php">
		<button>Add item to list</button>
	</a>
</div>

</body>

</html>
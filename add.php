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
	<h1 align= "center">Add Item</h1>
	<form align= "center" action="new.php">
	Item Name: <br>
  <input type="text" name="newitem"><br>

  Recyclability Status (Garbage, Recycling, Compost): <br>
  <input type= "text" name = "newstatus"><br>
  <input type="submit" value="Submit">
</form> 
<div align = "center">
		<a href = "index.php">
			<button>Return to Greendom</button>
		</a>
	</div>

</body>

</html>
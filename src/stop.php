<?php
session_start();
	include "connect.php";
?>

	

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mysystem</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/web3@latest/dist/web3.min.js"></script>

  <script src='functions.js'></script>
  
  </head>
<body>

<?php
include ("menu.php");

?>




<div class=container >

<center>	
<h2>Account:</h2> <input type=text class="form-control" id=account style='text-align:center'><br>
<h2>Contract Code:</h2> <input type=text class="form-control" id=contract style='text-align:center'><br>
<button onclick='stop()' class='btn btn-primary'>STOP</button>


</center>


	</div>
	


</body>
</html>

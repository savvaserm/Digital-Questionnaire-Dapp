<?php
session_start();
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
</head>
<body>


<nav class="navbar navbar-default">
  <div class="container-fluid">
   
    <ul class="nav navbar-nav">
      <li><a href="login.php">HOME</a></li>
      <li><a href="info.php">User INFO</a></li>
      <li><a href="anal.php">ANALYSIS</a></li>
      <li><a href="upl.php">ULOAD DATA</a></li>
	  <li><a href="logout.php">LOGOUT</a></li>
    </ul>
  </div>
</nav>


<div class=container>

<h2>USER PAGE </h2>


 
	
<?php




		
		$conn=mysqli_connect("localhost","root","","databasepg");
		


		$sql="select distinct activityType from data where id_user='$_SESSION[id_user]'";
		
		$query=mysqli_query($conn,$sql);
		
		while($rec1=mysqli_fetch_array($query))
		{
			if($rec1['activityType']!="")
			{
		$sql2="select DAYOFWEEK(timestampMs) as daym , count(*) as cnt from data where 
			activityType='$rec1[activityType]'  and id_user='$_SESSION[id_user]' and DAYOFWEEK(timestampMs) is not NULL
			
			group by DAYOFWEEK(timestampMs)
			order by cnt desc";
			
	
		$query2=mysqli_query($conn,$sql2);
		
		$rec2=mysqli_fetch_array($query2);
		
		echo "
		<p>Max day for activity  $rec1[activityType] is $rec2[daym]</p>
		";
			}

		}
	
	?>
	
	
	
</div>

</body>
</html>

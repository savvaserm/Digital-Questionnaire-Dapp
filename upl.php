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


  
<div class="container ">
	
<?php


if(isset($_POST['upl']))
{
	$fn="../files/$_SESSION[id_user]";
	
	if(move_uploaded_file($_FILES['fn']['tmp_name'],$fn))
	{
		$js=json_decode(file_get_contents($fn, true));
		$conn=mysqli_connect("localhost","root","","databasepg");
		foreach ($js->locations as $json_rec)
		{
		
			$sql="INSERT INTO data (id,heading,activityType,activityConfidence, 
			activityTimestampMs,verticalAccuracy,velocity, accuracy, longitudeE7, 
			latitudeE7, altitude, timestampMs,id_user,filename,upload_date) VALUES 
			(NULL, '".@$json_rec->heading."','".@$json_rec->activity[0]->activity[0]->type."', 
				'".@$json_rec->activity[0]->activity[0]->confidence."','".@$json_rec->activity[0]->timestampMs."',  
			'".@$json_rec->verticalAccuracy."','".@$json_rec->velocity."','".@$json_rec->accuracy."','".@$json_rec->longitudeE7."', 
			'".@$json_rec->latitudeE7."','".@$json_rec->altitude."','".@$json_rec->timestampMs."','$_SESSION[id_user]', 
			'$_SESSION[id_user]',now())	";		
				
			mysqli_query($conn,$sql);
	
			
		}
			echo "<p>Your File uploaded !</p>";
		
		
		
	}
}

?>


	<form action='' method='post' enctype='multipart/form-data'>

   <label for='fn'>File:</label>
    <input type='file' class='form-control' id='fn' name='fn' >

	<input type='submit' class='btn btn-default' value='Upload' name='upl'> 
	
		</form>
	
</div>

</body>
</html>

<?php
session_start();
	

if(isset($_POST['usr']))
{
	
include("connect.php");
	$ecp=md5($_POST['pwd']);
	$q=mysqli_query($conn,"select  * from users 
				where username='$_POST[usr]'
				and password='$ecp'"); 

	if(mysqli_num_rows($q)>0)
	{
		$r=mysqli_fetch_array($q);
		$_SESSION['id_user']=$r['id'];
	}
	else
	{
		
			$_SESSION['id_user']="";
			
		
	}
}

	if(@$_SESSION['id_user']!="")
	{


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


<?php
include ("menu.php");

?>


<div class=container>

<h2>USER PAGE </h2>

</div>
<?php
	}
	else{
		
		echo "<h2> Error Login </h2>
		<p> <a href=index.php>Try to login again or sign up</a></p>";
	}


?>
	
	
	


</body>
</html>

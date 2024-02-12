<!DOCTYPE html>
<html lang="en">
<head>
  <title>UserPage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container ">
<?php
if(isset($_POST['signup']))
{
	
 include("connect.php");
	
	$encr_pss=md5($_POST['pwd']); 

		$sql="INSERT INTO users ( username, email, password, fullname) 
		VALUES ( '$_POST[usr]','$_POST[email]', '$encr_pss','$_POST[fullname]')";
		

				
			if(mysqli_query($conn,$sql))
			{
				echo "<h2>Your account created.</h2>";
				
				
			}
			else
			{
				
				echo "<h2 style='color:red'>!!This email or username exists</h2>";
				
		}

}
?>

<div class=row>
<div class=col-md-6>


  <h2>Login</h2>
<p> Give your username and password to login</p>
  <form action='login.php' method=post>
    <div class="form-group">
      <label for="usr">UserName:</label>
      <input type="text" class="form-control" id="usr" name=usr>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" name=pwd >
    </div>
	
	<input type='submit' value='Login' class='btn btn-default'>
  </form>
 </div>
 <div class=col-md-6>
  <h2>Sign Up</h2>
  <p>If you have not account please fill the following form</p>
  <form action='index.php' method=post>
    <div class="form-group">
      <label for="usr">UserName:</label>
      <input type="text" class="form-control" id="usr" name=usr>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" name=pwd>
    </div>
	   <div class="form-group">
      <label for="pwd">email:</label>
      <input type="email" class="form-control" id="email" name=email>
    </div>
    	   <div class="form-group">
      <label for="nm">Fullname:</label>
      <input type="text" class="form-control" id="fullname" name=fullname>
    </div>
	<input type='submit' value='Sign Up' class='btn btn-default' name='signup'>
  </form>
 </div>
 
</div>
<br><br><a href='savvas.zip' target=_blank>O Κώδικας της εφαρμογής</a><br><br>
	
</div>


</body>
</html>

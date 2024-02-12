<?php
session_start();
	


	if(@$_SESSION['id_user']!="")
	{

        include "connect.php";
        if(isset($_POST['t']))
        {
            
          
            $q="insert into tests(onoma,perigrafi,id_user) values('$_POST[t]','$_POST[d]','$_SESSION[id_user]')";
      
            mysqli_query($conn,$q);
            
        }
        
        
         if(isset($_GET['idd']))
        {
            
          
            $q="delete from tests where id=$_GET[idd]";
      
            mysqli_query($conn,$q);
            
        }


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

<h2>Tests </h2>


<form action='info.php' method=post>
       <h2>New Test</h2>
        <div class="form-group">
      <label for="p">Title:</label>
      <input type="text" class="form-control" id="t" name=t>
    </div>
  
    <div class="form-group">
      <label for="d">Description:</label>
      <input type="text" class="form-control" id="d" name=d>
    </div>
	
	<input type='submit' value='Insert' class='btn btn-default'>
  </form>
  
  <br>
  
  <form action='info.php' method=post>
    <input type='text' name=srch> <input type=submit value=search>    
  </form>
  <h1>List of your Tests</h1>
  <table class=table>

</div>
<?php

    $ss=@$_POST['srch'];
    $sql="select * from tests where id_user='$_SESSION[id_user]' and (onoma like '%$ss%' or perigrafi like '%$ss%')";
   
    $q=mysqli_query($conn,$sql);
    
    while($r=mysqli_fetch_array($q))
    {
            echo "<tr><td>$r[onoma]</td><td>$r[perigrafi]</td><td> <a targer=_blank href='show.php?id=$r[id]'>Show Test</a> | <a targer=_blank href='solid.php?id=$r[id]'>Get Solitity</a> | <a href='details.php?id=$r[id]'>Details</a> |<a href='start.php'> Start </a> | <a href='stop.php'> Stop </a> | <a href='showres.php?id=$r[id]'> Results </a> | <a href='info.php?idd=$r[id]'>Delete</a> </td></tr>";
        
    }

    echo "</table>";

	}
	else{
		
		echo "<h2> Error Login </h2>
		<p> <a href=index.php>Try to login again or sign up</a></p>";
	}


?>
	
	
	


</body>
</html>

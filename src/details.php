<?php
session_start();
	


	if(@$_SESSION['id_user']!="")
	{

        include "connect.php";
        if(isset($_POST['t']))
        {
            
          
            $q="insert into erotiseis(ekfonisi,answers,typos, id_test) values('$_POST[t]','$_POST[v]','$_POST[tp]','$_GET[id]')";
      
            mysqli_query($conn,$q);
            
        }


        if(isset($_GET['idd']))
        {
            
          
            $q="delete from erotiseis where id=$_GET[idd]";
          
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

<h2>Questions </h2>


<form action='details.php?id=<?php echo $_GET['id']; ?>' method=post>
       <h2>Add Question</h2>
    <div class="form-group">
      <label for="p">Question:</label>
      <input type="text" class="form-control" id="t" name=t>
    </div>
  
  
    
    
    <div class="form-group">
      <label for="tp">Type:</label>
      <select name=tp>
          <option>Multiple Choice</option>
          <option>Value</option>
      </select>
    </div>

    <div class="form-group">
      <label for="v">Value (if type=Multiple Choice, seperate each value using comma(,) .. ex. Man,Woman :</label>
      <input type="text" class="form-control" id="v" name=v>
    </div>
    

	
	<input type='submit' value='Insert' class='btn btn-default'>
  </form>
  
  <br>
  
  <form action='details.php?id=<?php echo $_GET['id']; ?>' method=post>
    <input type='text' name=srch> <input type=submit value=search>    
  </form>
  
  <table class=table>

</div>
<?php

    $ss=@$_POST['srch'];
    $sql="select * from erotiseis where id_test='$_GET[id]' and (ekfonisi like '%$ss%' or answers like '%$ss%')";
   
   
    $q=mysqli_query($conn,$sql);
    
    while($r=mysqli_fetch_array($q))
    {
            echo "<tr><td>$r[ekfonisi]</td><td>$r[answers]</td><td><a href='details.php?id=$r[id_test]&idd=$r[id]'>Del</a></td></tr>";
        
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

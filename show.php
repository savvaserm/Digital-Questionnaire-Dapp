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



<div class=container style='background-color:#cfc'>
<center>	
<h2>Account:</h2> <input type=text class="form-control" id=account style='text-align:center'><br>
<h2>Contract Code:</h2> <input type=text class="form-control" id=contract style='text-align:center'><br>

</div>

</center>


<div class=container style='background-color:#cfc'>



<?php
 $sql="select * from tests where id='$_GET[id]'";
   
  
    $q=mysqli_query($conn,$sql);
    $r=mysqli_fetch_array($q);
    echo "<center><h2>Test : $r[onoma] </h2>
    <p style='font-size:14pt'>$r[perigrafi]</p></center>";
    

?>



  



<?php

   
    $sql="select * from erotiseis where id_test='$_GET[id]' ";
   
  
    
    $q=mysqli_query($conn,$sql);
	 $n=mysqli_num_rows($q);
	 echo "<input type=hidden id=nq value=$n>";
    $e=0;
    while($r=mysqli_fetch_array($q))
    {
            echo "<h2 style='background-color:#ccc;'>$r[ekfonisi]</h2>";
             
            
            if ($r['typos']=='Multiple Choice')
            {
            echo "<input type=hidden id=tp$e value=1>";
			 
                $s=explode(",",$r['answers']);
				$vv=0;
                foreach ($s as $v)
                {
				
                    echo "<input type=radio name=q$e value=$vv> $v &nbsp;&nbsp;&nbsp;&nbsp;";
                    $vv++;
                    
                }
                
            }
            else
            {
                echo "<input type=hidden id=tp$e value=2>";
                echo "<input type=number id=q$e>";
                
            }
            
            echo "<br><br>";
            $e++;
    }

  

	
	
	


?>
<center>	<button class="btn btn-primary" onclick="sendans()">Send</button></center>

<script>
function sendans()
{

<?php

   
    $sql="select * from erotiseis where id_test='$_GET[id]' ";
   
  
    
    $q=mysqli_query($conn,$sql);
	 $n=mysqli_num_rows($q);
	
    $e=0;
    while($r=mysqli_fetch_array($q))
    {
           
             
            
           echo " sendansw($e); ";
            $e++;
    }

  

	
	
	


?>

}

</script>

	</div>
	


</body>
</html>

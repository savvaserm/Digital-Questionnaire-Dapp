
<?php
session_start();
	include "connect.php";
echo "<pre>";


    $sql="select count(*) as cn from erotiseis where id_test='$_GET[id]' ";
    $q=mysqli_query($conn,$sql);
	$r=mysqli_fetch_array($q);

	$n=$r['cn'];
	
	
	$sql="select * from erotiseis where id_test='$_GET[id]' ";
	
    $q=mysqli_query($conn,$sql);
	$ss="[";
	while ($r2=mysqli_fetch_array($q))
	{ 
		$x=0;
		
		if($r2['typos']=='Value')
		{
		$x=1;
		}
		if($r2['typos']=='Multiple Choice')
		{
		$A=explode(",",$r2['answers']);
		$x=count($A);
		}
		if($ss=="[")
		{
		$ss=$ss.$x;
		
		}
		else
		{
		$ss=$ss.",".$x;
		}
		
		
	}

	$ss=$ss."]";
	
	
echo "
pragma solidity ^0.4.0;

contract mytest {
	uint[][$n] public apantiseis;
	uint public energo=0;
	uint public n;
    uint[$n] public na=$ss;
    
constructor() public{
    uint i;
    uint j;
    n=0;
    for(i=0;i<$n;i++)
    {
        
        for (j=0;j < na[i];j++)
        apantiseis[i].push(0);
        
    }
    
    
}

function getap(uint i,uint j) public view returns(uint){
    if (energo==2)
            return apantiseis[i][j];
    else
        return 0;
        
        }
        
function getn() public view returns(uint){
            return n;

        
        }

function  start() public returns(uint)
{
if(energo==0)  energo=1;
    return energo;
}

function  stop() public returns(uint)
{
    energo=2;
    return energo;
}

function setapantisi(uint i,uint tp,uint v) public returns(uint){
            if(energo==1)
            {
                if(tp==1)
                apantiseis[i][v]++;
                
                if(tp==2)
                apantiseis[i][0]+=v;
                n++;
                
            }
            
            
            return 1;
        
        }



        
    }
    


";




	
	
	


?>
</pre>
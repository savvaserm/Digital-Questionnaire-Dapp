
web3 = new Web3(window.web3.currentProvider);



window.onload = function () {
if (typeof window.ethereum !== 'undefined') {

  
  try {
    // Request account access if needed
    window.ethereum.enable()
    
  } catch (error) {
    // User denied account access...
	console.log(error);
  }
}
else
{
alert('Error on Metamask');

}
// call the getvalue function here

}


var abi =[
	{
		"constant": true,
		"inputs": [
			{
				"name": "",
				"type": "uint256"
			}
		],
		"name": "na",
		"outputs": [
			{
				"name": "",
				"type": "uint256"
			}
		],
		"payable": false,
		"stateMutability": "view",
		"type": "function"
	},
	{
		"constant": false,
		"inputs": [],
		"name": "stop",
		"outputs": [
			{
				"name": "",
				"type": "uint256"
			}
		],
		"payable": false,
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"constant": true,
		"inputs": [],
		"name": "n",
		"outputs": [
			{
				"name": "",
				"type": "uint256"
			}
		],
		"payable": false,
		"stateMutability": "view",
		"type": "function"
	},
	{
		"constant": true,
		"inputs": [
			{
				"name": "i",
				"type": "uint256"
			},
			{
				"name": "j",
				"type": "uint256"
			}
		],
		"name": "getap",
		"outputs": [
			{
				"name": "",
				"type": "uint256"
			}
		],
		"payable": false,
		"stateMutability": "view",
		"type": "function"
	},
	{
		"constant": true,
		"inputs": [],
		"name": "getn",
		"outputs": [
			{
				"name": "",
				"type": "uint256"
			}
		],
		"payable": false,
		"stateMutability": "view",
		"type": "function"
	},
	{
		"constant": false,
		"inputs": [
			{
				"name": "i",
				"type": "uint256"
			},
			{
				"name": "tp",
				"type": "uint256"
			},
			{
				"name": "v",
				"type": "uint256"
			}
		],
		"name": "setapantisi",
		"outputs": [
			{
				"name": "",
				"type": "uint256"
			}
		],
		"payable": false,
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"constant": true,
		"inputs": [
			{
				"name": "",
				"type": "uint256"
			},
			{
				"name": "",
				"type": "uint256"
			}
		],
		"name": "apantiseis",
		"outputs": [
			{
				"name": "",
				"type": "uint256"
			}
		],
		"payable": false,
		"stateMutability": "view",
		"type": "function"
	},
	{
		"constant": false,
		"inputs": [],
		"name": "start",
		"outputs": [
			{
				"name": "",
				"type": "uint256"
			}
		],
		"payable": false,
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"constant": true,
		"inputs": [],
		"name": "energo",
		"outputs": [
			{
				"name": "",
				"type": "uint256"
			}
		],
		"payable": false,
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [],
		"payable": false,
		"stateMutability": "nonpayable",
		"type": "constructor"
	}
];






function start() {
	try {
		var account=document.getElementById("account").value;
		contractaddress=document.getElementById("contract").value;

		var myfunction = new web3.eth.Contract(abi,contractaddress );

		myfunction.methods.start().send({from:account}, function (error, result) {
			if (!error) {
				alert("Η αξιολόγηση ενεργοποιήθηκε");


			} else {
				alert("error "+error);

			}
		}
		);
	} catch (err) {
		console.log( err );
	}
}










function stop() {
	try {
		var account=document.getElementById("account").value;
		contractaddress=document.getElementById("contract").value;

		var myfunction = new web3.eth.Contract(abi,contractaddress );

		myfunction.methods.stop().send({from:account}, function (error, result) {
			if (!error) {
				alert("Η αξιολόγηση απενεργοποιήθηκε");


			} else {
				alert("error "+error);

			}
		}
		);
	} catch (err) {
		console.log( err );
	}
}



function sendansw(i) {
	
	try {
	
		var account=document.getElementById("account").value;
		contractaddress=document.getElementById("contract").value;
		


		var myfunction = new web3.eth.Contract(abi,contractaddress );

		
	
			var tp=document.getElementById("tp"+i).value;
			if(tp==1)
			{
				a=document.getElementsByName("q"+i);
				
				for (j=0;j<a.length;j++)
					if(a[j].checked) v=a[j].value;
				
			}
			else
			{
				v=document.getElementById("q"+i).value
			}
			
			myfunction.methods.setapantisi(i,tp,v).send({from:account}, function (error, result) {
				if (!error) {
					alert("Answer "+i+" Saved");


				} else {
					alert("error q"+i+" "+error);
					

				}
				}
			
			);
		
		
		
		
	} catch (err) {
		console.log( err );
	}
}



function getResults(i,j,tp) {
	try {
		
		contractaddress=document.getElementById("contract").value;
		
		var n=document.getElementById("nq").value;

		var myfunction = new web3.eth.Contract(abi,contractaddress );

		
		
		myfunction.methods.getap(i,j).call( function (error, result) {
					if (!error) {
						
						if(tp==1)
						document.getElementById("q"+i+"_"+j).value=result;
						else
						document.getElementById("q"+i+"_"+j).value=result/n;

					} else {
						alert("error q"+i+" "+error);
						

					}
				}
				);
			
			
		
		
		
		
	} catch (err) {
		console.log( err );
	}
}


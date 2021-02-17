<!DOCTYPE html>
<html lang="en">
<head>
  <title>Transfer</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    
	.navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
	.bg-1{
	background-color: #ffffff;
	}
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
	  padding: 2px;
	  background: none;
	 color: #000000;
  }
	body {
background-image: url("https://i.pinimg.com/originals/d8/b6/ed/d8b6ede572b790b4208a294057d095e1.jpg");
background-repeat: no repeat;
background-size: 100%;
}


</style>
</head>
<body>
<div class="jumbotron">
  <div class="container text-center">
    <h1 style="font-family: Lucida Bright">Banking System</h1>      
    
  </div>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand"  href="index.html ">Home</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
       
        <li><a href="db_connection.php" >All Customers</a></li>
        <li><a href="transfer1.php" class="active">Transfer</a></li>
        <li><a href="one.php" >View one customer</a></li>
       
      </ul>
	 </div>
	 </div>
	</nav>
	 
<div class="container bg-1">
  <h2>Transfer</h2>
  <form class="form-horizontal" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" >Sender's Account Number: </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="snumber" placeholder="Enter sender's account number" name="snumber" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Receiver's Account Number: </label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="rnumber" placeholder="Enter receiver's account number" name="rnumber" required>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2">Amount to be transfered: </label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="balance" placeholder="Enter Amount" name="balance" required>
      </div>
    </div>

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
       <input class="btn" type="submit" name="submit" value="Transfer">
      </div>
    </div>
  </form>
</div>
	<?php
	$user=@$_POST["ID"];
	$conn=mysqli_connect("localhost","root","","transfer");
	if(isset($_POST['submit']))
	{
		$snumber=@$_POST["snumber"];
		$rnumber=@$_POST["rnumber"];
		$money=@$_POST["balance"];
			if(!$conn)
			{
				die("connection failed".mysqli_connect_error());
			}
			else{
			$sql1="SELECT Balance FROM customers1 WHERE Account_number='$snumber'";
			$r1=mysqli_query($conn,$sql1);
			$result=mysqli_fetch_assoc($r1);
			$sql2="Select Balance from customers1 where Account_number='$rnumber'";
			$re1=mysqli_query($conn,$sql2);
			$result1=mysqli_fetch_assoc($re1);
			if(!$result1){
				
					echo'<div class="alert alert-danger">
  <strong>Receiver\'s Account Number does not matches to any account number in our bank!!!!! Please Enter a valid account number!!!!</strong> 
</div>';
			}
			else if(!$result){
				
					echo'<div class="alert alert-danger">
  <strong>Sender\'s Account Number does not matches to any account number in our bank!!!!! Please Enter a valid account number!!!!</strong> 
</div>';
			}
			
			else if($result['Balance']<$money)
			{
				
				echo'<div class="alert alert-danger">
				<strong>Low Account Balance Can not Trsansfer!!!!!</strong> 
				</div>';
		
			}
			else if($money<=0)
			{
				
				echo'<div class="alert alert-danger">
				<strong>Please enter valid amount to transfer!!!!!!!</strong> 
				</div>';
			}
			else{
				$newbalance1=$result['Balance']-$money;
				$query1= "update customers1 set balance='$newbalance1' where Account_Number='$snumber'";
				mysqli_query($conn,$query1);
				$newbalance2=$result1['Balance']+$money;
				$query2= "update customers1 set balance='$newbalance2' where Account_Number='$rnumber'";
				$query3=mysqli_query($conn,$query2);
				if($query3)
				{
					echo'<div class="alert alert-success">
  <strong>Successfull Transcation</strong> 
</div>';
				
						

				}
				else 
				echo"Transcation not Successful";
			}
			
			
			
		}
	}
	
?>

</body>
</html>
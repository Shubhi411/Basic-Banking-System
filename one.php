<!DOCTYPE html>
<html lang="en">
<head>
  <title>Details of single customer</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .bg-1{
	background-color: #ffffff;
	}
	.list-group{
		background-color: pink;
	}
	.navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
	  padding: 2px;

	 background: none;

 
  color: #ffffff;
  }
	body {
background-image: url("https://image.freepik.com/free-vector/colorful-gradient-background-with-bokeh-effect_23-2148358216.jpg");
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
       
        <li><a href="db_connection.php">All Customers</a></li>
        <li><a href="transfer1.php">Transfer</a></li>
        <li><a class="active" href="one.php">View one customer</a></li>
       
      </ul>
	 </div>
	 </div>
	</nav>
	 <form class="form-horizontal" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" >Account Number: </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="snumber" placeholder="Enter sender's account number" name="snumber">
      </div>
    </div>
	<div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
       <input class="btn" type="submit" name="submit" value="Search">
      </div>
    </div>
  </form>
  
	
</body>
</html>
<?php
	$user=@$_POST["ID"];
	$conn=mysqli_connect("localhost","root","","transfer");
	if(isset($_POST['submit']))
	{
		$snumber=@$_POST["snumber"];
		
	
			if(!$conn)
			{
				die("connection failed".mysqli_connect_error());
			}
			else{
			$sql1="SELECT * FROM customers1 WHERE Account_number='$snumber'";
			$r1=mysqli_query($conn,$sql1);
			
			
			$result=mysqli_fetch_array($r1);
			if($result){
			echo'<div class="container">
			<ul class="list-group">
  <li class="list-group-item">
  <h2>
  Account_number:  &nbsp; &nbsp;';


  echo $result['Account_Number'];
  echo'</h2></li>';
  echo'<li class="list-group-item " >
  <h2>
  Name:  &nbsp; &nbsp;';
	echo $result['Name'];
	echo'</h2></li>';
	 
  echo'<li class="list-group-item">
  <h2>
  Phone Number:  &nbsp; &nbsp;';
	echo $result['Phone'];
	echo'</h2></li>';
	 echo'<li class="list-group-item">
  <h2>
  EmailId:  &nbsp; &nbsp;';
	echo $result['EmailId'];
	echo'</h2></li>';
	 echo'<li class="list-group-item">
  <h2>
  Account Balance:  &nbsp; &nbsp;';
	echo $result['Balance'];
	echo'</h2></li>';
  echo'
			</ul></div>';}
			else{
					echo'<div class="alert alert-danger">
  <strong>No customer have this account number in our bank!!!!! Please Enter a valid account number!!!!</strong> 
</div>';
			}
			}
	}
   ?>
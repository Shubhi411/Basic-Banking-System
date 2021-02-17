<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>
		.navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
	  padding: 2px;

	 background: none;

 
  color: #000000;
  }
	body {
background-image: url("https://b.rgbimg.com/users/x/xy/xymonau/600/o14tpzA.jpg");
background-repeat: no-repeat; 
background-size: 100%;
 
}
table,tr,td
		{
			
			border-collapse:collapse;
			
		}
		th
		{
			background:#4CAF50;
			color:white;
		}
	</style>
	


<title>
Details of all customers</title>
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
       
        <li><a class="active" href="db_connection.php">All Customers</a></li>
        <li><a href="transfer1.php">Transfer</a></li>
        <li><a href="one.php">View one customer</a></li>
       
      </ul>
	 </div>
	 </div>
	</nav>
</html>
<?php
//function OpenCon()
 //{
 $conn=mysqli_connect("localhost","root","","transfer");
 if($conn) 
 {
  echo '<h1>Details of all Customers</h1>';
 // $db=mysql_select_db("transfer",$conn);
  $sql="SELECT * FROM customers1";
 $result=mysqli_query($conn,$sql);
 
	echo"  
	<table class='table'>
		<tr>
			<th>Account_Number</th>
			<th>Name</th>
			<th>Phone</th>
			<th>EmailId</th>
			<th>Balance</th>
			
		</tr>" ;
		//$abc=mysqli_result($result);
	$row_count=mysqli_num_rows($result);
		if($row_count>0)
               {
                 while($row1 = mysqli_fetch_array($result))
                 { 
						echo"<tr class='danger'>
						<td>".$row1['Account_Number']."</td>
						<td>". $row1['Name']."</td> 
						<td>".$row1['Phone']."</td>  
						<td>".$row1['EmailId']."</td>
						<td>".$row1['Balance']."</td>
						
						</tr>";
						
				 }
				 echo "</table><br><br>";
			   }
			   else{
			   echo "ERROR";}
 }
 else
 echo '<h1>Connnection not established</h1>';
			   
					
 ?>
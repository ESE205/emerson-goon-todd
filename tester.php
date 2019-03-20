

<html>
<head>
<title>Process Record</title>
</head>
<body>
 <h1>Pet Record added.</h1>


<?php
  $con = mysqli_connect("busybear.c2qo2vmqahc3.us-east-2.rds.amazonaws.com","root","I<3madison","BusyBear");
 // Check connection
  if (mysqli_connect_errno())
  {
     echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


$sql="INSERT INTO wifiMAC (macAdd,timeStampe,vendor) 
	   VALUES ('hell','yee','yuhhh')";
	   


	$result = mysqli_query($con, $sql);
	if ( false===$result ) {
	  printf("error: %s\n", mysqli_error($con));
	}
	else {
  echo "success";
  }
  mysqli_close($con);
  ?>
  
  
</body>
</html>

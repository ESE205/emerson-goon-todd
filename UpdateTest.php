<?php
 //For each entry coming through the form,
 //  create a simple global variable to hold...
 // - either an error if the entry is not filled or filled incorrectly
 // - or the value entered.

// uncomment to print the $_POST array
 //echo "<pre>"; print_r($_POST) ;  echo "</pre>";

 $macAdd=$_POST['macAdd'];
 $timeStampe=$_POST['timeStampe'];
 $vendor=$_POST['vendor'];
 $pictureE=$_POST['pictureE'];
 
 ?>

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


$sql="INSERT INTO wifiMAC (macAdd,vendor,picture) 
     VALUES ('$macAdd','$vendor','$pictureE')";
	   

	$result = mysqli_query($con, $sql);
	if ( false===$result ) {
	  printf("error: %s\n", mysqli_error($con));
	}

  /*$sql = "SELECT picture FROM wifiMAC WHERE id = 4";
  $result = mysqli_query($con, $sql);

$resultArray=mysqli_fetch_array($result);
echo '<img src="data:image/jpeg;base64,'.base64_encode( $resultArray['image'] ).'"/>';
if ( false===$result ) {
    printf("error: %s\n", mysqli_error($con));
  }*/
	else {
  echo "success";
  }
  mysqli_close($con);
  ?>
  
  
</body>
</html>

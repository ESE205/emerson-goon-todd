<html>
<title>Oracle Project</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=submit] {
    width: 100%;
    background-color: #F2453E;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
input[type=submit]:hover {
    background-color: #45a049;
}
div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
#test {
  width: 20%;
    padding: 16px 20px;
    border: none;
    border-radius: 4px;
    background-color: #f1f1f1;
}
textarea {
    width: 100%;
    height: 150px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    font-size: 16px;
    resize: none;
}
.container {
    position: relative;
    padding-left: 20px;
    padding-right: 20px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 16px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
/* Hide the browser's default radio button */
.container input {
    position: absolute;
    opacity: 0;
}
/* Create a custom radio button */
.checkmark {
    position: absolute;
    top: 2;
    left: 0;
    height: 16px;
    width: 16px;
    background-color: #ccc;
    border-radius: 50%;
}
/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
    background-color: black;
}
/* When the radio button is checked, add a blue background */
.container input:checked ~ .checkmark {
    background-color: #2196F3;
}
/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}
/* Show the indicator (dot/circle) when checked */
.container input:checked ~ .checkmark:after {
    display: block;
}
/* Style the indicator (dot/circle) */
.container .checkmark:after {
  top: 5.6px;
  left: 5.6px;
  width: 5.12px;
  height: 5.12px;
  border-radius: 50%;
  background: white;
}
</style>
<body>


<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="http://www.mybusybear.com" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Home</a>
    <a href="http://www.mybusybear.com/BusyBear_BD.php" class="w3-bar-item w3-button w3-padding-large w3-white">Bear Den</a>
    <a href="http://www.mybusybear.com/AddTest.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Test Add</a>
  
    
    
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="http://www.mybusybear.com" class="w3-bar-item w3-button w3-padding-large">Home</a>
    <a href="http://www.mybusybear.com/BD.php" class="w3-bar-item w3-button w3-padding-large">Bear Den</a>
    <a href="http://www.mybusybear.com/AddTest.php" class="w3-bar-item w3-button w3-padding-large">Test Add</a>
  </div>
</div>
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1 style="text-align:center" ><br>How Busy is Bear's Den?</h1>
      <h5 class="w3-padding-small"></h5>
      <div>
    <div id="piechart"></div>
    
    <?php
  $con = mysqli_connect("busybear.c2qo2vmqahc3.us-east-2.rds.amazonaws.com","root","I<3madison","BusyBear");
 // Check connection
  if (mysqli_connect_errno())
  {
     echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$sql="SELECT count(*) FROM wifiMAC_BD 
where (timestampe > now() - interval '5' minute) AND 
( vendor = 'Apple, Inc.' OR  vendor = 'Google, Inc.' Or  vendor ='Microsoft' Or  vendor ='Samsung Electronics Co.,Ltd' OR  vendor ='HUAWEI TECHNOLOGIES CO.,LTD');";
     
  $result = mysqli_query($con, $sql);
  $num_rows = mysqli_num_rows($result);
$sql="select * from historicalData where timestampe > now() - interval '5' minute;";
$result2 = mysqli_query($con, $sql);
  $num_rows2 = mysqli_num_rows($result2);
  if($num_rows2 == 0){
      if($num_rows > 0){
    $sql="INSERT INTO historicalData (numAddresses) VALUES ('$num_rows')";
      }
  }
  $result3 = mysqli_query($con, $sql);
  /*$sql = "SELECT picture FROM wifiMAC WHERE id = 4";
  $result = mysqli_query($con, $sql);
$resultArray=mysqli_fetch_array($result);
echo '<img src="data:image/jpeg;base64,'.base64_encode( $resultArray['image'] ).'"/>';
if ( false===$result ) {
    printf("error: %s\n", mysqli_error($con));
  }*/ 
  $sql2 = "SELECT Max(numAddresses) AS max FROM historicalData_BD_Limited";
 $sql3 = "SELECT Min(numAddresses) AS min FROM historicalData_BD_Limited";
 $max = mysqli_query($con, $sql2);
 $row=$max->fetch_assoc();
 $maxInt= (int)$row['max'];
 $min = mysqli_query($con, $sql3);
 $row=$max->fetch_assoc();
 $minInt= (int)$row['min'];
  mysqli_close($con);
  ?>

  <p id="demo"></p>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script>
  var numRows = 0;
  var maxNumRows = 0;
  var minNumRows = 0;
 numRows = "<?php echo $num_rows ?>";
 numRows = Number(numRows);
  maxNumRows = "<?php echo $maxInt ?>";
 maxNumRows = Number(maxNumRows);
  minNumRows = "<?php echo $minInt ?>";
 minNumRows = Number(minNumRows);

 newMax = maxNumRows - minNumRows;
 newCurrent = numRows - minNumRows;
 

</script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);
// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  ['Used', newCurrent],
  ['Free', newMax - newCurrent],
 
]);
  // Optional; add a title and set the width and height of the chart
  var options = {'title':'How Full is Olin?', 'width':500, 'height':400};
  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>



</div>
</div>
</div>
</div>
<br>
<br>
<br>
 
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "Popular Times"
	},
  
	axisY: {
		title: "How Busy"
	},
	data: [{        
		type: "column",  
		showInLegend: false, 
		legendMarkerColor: "grey",
		legendText: "MMbbl = one million barrels",
		dataPoints: [      
			{ y: 100878, label: "9am" },
          	{ y: 150878, label: " " },
         	 { y: 300878, label: "11am" },
           { y: 100878, label: " " },
           { y: 150878, label: "1p" },
           { y: 160878, label: " " }, 
          { y: 130878, label: "3p" },
           { y: 120878, label: " " },
           { y: 140878, label: "4p" },
           { y: 200878, label: "" },
           { y: 220878, label: "6p" },
           { y: 300878, label: " " },
           { y: 400878, label: "8p" },
		]
	}]
});
chart.render();

}
</script>
</head>
<body>
<div id="chartContainer" style="height: 300px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>
    
    <!-- Second Grid -->

<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge">Quote of the day: Wonder which Canada Goose jacket I'll wear today
    </h1>
    <p class="w3-text-grey">
       <?php
    echo "Today is " . date("m-d-Y");
    echo " and the day is " . date("l");?>
    </p>
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity">  
  <div class="w3-xlarge w3-padding-32">
    <i class="fa fa-facebook-official w3-hover-opacity" <a href="https://www.linkedin.com/in/ThomasGEmerson"</a></i>
    <i class="fa fa-instagram w3-hover-opacity" <a href="https://www.linkedin.com/in/ThomasGEmerson"</a></i>
    <i class="fa fa-snapchat w3-hover-opacity" <a href="https://www.linkedin.com/in/ThomasGEmerson"</a></i>
    <i class="fa fa-pinterest-p w3-hover-opacity" <a href="https://www.linkedin.com/in/ThomasGEmerson"</a></i>
    <i class="fa fa-twitter w3-hover-opacity" <a href="https://www.linkedin.com/in/ThomasGEmerson"</a></i>
    <i class="fa fa-linkedin w3-hover-opacity" <a href="https://www.linkedin.com/in/ThomasGEmerson"</a></i>
 </div>
 <p>Powered by <a href="https://www.linkedin.com/in/ThomasGEmerson" target="_blank">Emerson Industrial</a></p>
</footer>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html>
<br>
<br>
<br>
<br>
</body>

<html>
<title>Oracle Project</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

#myProgress {
  width: 100%;
  background-color: #ddd;
}

#myBar {
  width: 7%;
  height: 30px;
  background-color: #ff3300;
  text-align: center;
  line-height: 30px;
  color: white;





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
  
 left: 5.76px;
  top: 2.5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
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
      <h1 style="text-align:center" ><br>How Busy is Olin?</h1>
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


$sql="select * from wifiMAC where timestampe > now() - interval '5' minute;";
     

  $result = mysqli_query($con, $sql);

  $num_rows = mysqli_num_rows($result);

$sql="select * from historicalData where timestampe > now() - interval '5' minute;";
$result2 = mysqli_query($con, $sql);

  $num_rows2 = mysqli_num_rows($result2);
  if($num_rows2 == 0){
    $sql="INSERT INTO historicalData (numAddresses) VALUES ('$num_rows')";
  }
  $result3 = mysqli_query($con, $sql);


  /*$sql = "SELECT picture FROM wifiMAC WHERE id = 4";
  $result = mysqli_query($con, $sql);

$resultArray=mysqli_fetch_array($result);
echo '<img src="data:image/jpeg;base64,'.base64_encode( $resultArray['image'] ).'"/>';
if ( false===$result ) {
    printf("error: %s\n", mysqli_error($con));
  }*/ 

  mysqli_close($con);
  ?>

  <p id="demo"></p>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script>
  var numRows = 0;
 numRows = "<?php echo $num_rows ?>";
 numRows = Number(numRows);


</script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);


// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  ['Used', numRows],
  ['Free', 10-numRows],
 
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
<script>
  var search = function() {
    var name = document.getElementById("FnameP").value;
    var type = [];
    type.push(document.getElementById("dog").checked);
    type.push(document.getElementById("cat").checked);
    type.push(document.getElementById("frog").checked);
    type.push(document.getElementById("snake").checked);
    type.push(document.getElementById("fish").checked);
    if(!name && allFalse(type)){
      document.getElementById("res").innerHTML = ""; 
      return;
    }
    var mes = new XMLHttpRequest();
    mes.onreadystatechange = function(){
      document.getElementById("res").innerHTML = mes.responseText; 
    }
    mes.open("POST", "/Update_Pet.php")
    mes.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    console.log("name="+name+(type ? "&type="+JSON.stringify(type): ""));
    mes.send("name="+name+(type ? "&type="+JSON.stringify(type): ""));
  }

  var allFalse = function(arr){
    var a = true;
    for(var i = 0; i < arr.length; i++)
      a &= !arr[i];
    return a;
  }
</script>
<h1>How full is Olin?</h1>

<div id="myProgress">
  <div id="myBar">80%</div>
</div>

<br>
<script>

     
      width = 2; 
      elem.style.width = width + '%'; 
      elem.innerHTML = 8  + '%';
    

</script>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</body>


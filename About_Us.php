<html>
<title>BusyBear</title>
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
    border-radius: 6px;
    background-color: #f2f2f2;
    padding: 4px;
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
    <a href="http://www.mybusybear.com/BusyBear_BD.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Bear's Den</a>
    <a href="http://www.mybusybear.com/About_Us.php" class="w3-bar-item w3-button w3-padding-large w3-white">About Us</a>
    
  
    
    
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="http://www.mybusybear.com" class="w3-bar-item w3-button w3-padding-large">Home</a>
    <a href="http://www.mybusybear.com/BusyBear_BD.php" class="w3-bar-item w3-button w3-padding-large">Bear's Den</a>
    <a href="http://www.mybusybear.com/About_Us.php" class="w3-bar-item w3-button w3-padding-large">About Us</a>
    
  </div>
</div>
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1 style="text-align:center" ><br>About Us</h1>
      <h5 class="w3-padding-small"></h5>
      <div>
    <p>
    <img src="Thomas.JPG" alt="Me Myself and I" style="max-width:45%;height: auto;"; align= "left";>
    </p>
    <h1 style="text-align:right" ><br>Thomas Emerson</h1>
    <h4 style="text-align:center" ><br>Hi, I'm a first-year student at Washington University in St. Louis. I'm a systems engineering and Business double major. At BusyBear I'm tasked with managing and updating all server-side applications including our website and database. </h4> <br><br>

    <img src="Tom.JPG" alt="Me Myself and I" style="max-width:45%;height: auto;"; align= "left";>
    </p>
    <h1 style="text-align:right" ><br>Tom Goon</h1>
    <h4 style="text-align:center" ><br>Hi, I'm a first-year student at Washington University in St. Louis. I'm a systems engineering and Business double major. At BusyBear I'm tasked with managing and updating all server-side applications including our website and database. </h4><br><br>

    <img src="Allison.jpeg" alt="Me Myself and I" style="max-width:45%;height: auto;"; align= "left";>
    </p>
    <h1 style="text-align:right" ><br>Allison Todd</h1>
    <h4 style="text-align:center" ><br>Hi, I'm a first-year student at Washington University in St. Louis. I'm a systems engineering and Business double major. At BusyBear I'm tasked with managing and updating all server-side applications including our website and database. </h4><br><br><br><br>

    <li> <a href="https://classes.engineering.wustl.edu/ese205/core/index.php?title=BusyBear" class="w3-bar-item w3-button w3-hide-small w3-padding-large"> Visit Our Wiki!  </a>  </li>

<form method="post" action="http://www.mybusybear.com/About_Us.php">
  <label for="Notes"><br><br>Any concerns or comments? . . . Leave them below:</label><br>
  <textarea name="Notes" placeholder="I Love Busy Bear ... "></textarea>
  
  
  <input type="submit" value="Submit"/>
  
  </form>
</div>
</div>
  </div>
</div> 
    

    
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

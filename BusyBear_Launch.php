
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
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="http://localhost/BusyBear_Launch.php" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
    <a href="http://localhost/BusyBear_Olin.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Olin</a>
    <a href="http://localhost/Add_Animal.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Mallinckrodt</a>

  
    
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="http://localhost/Add_Pet.php" class="w3-bar-item w3-button w3-padding-large">Add a Pet</a>
    <a href="http://localhost/Add_Animal.php" class="w3-bar-item w3-button w3-padding-large">Add an Animal</a>
    <a href="http://localhost/ViewDatabase.php" class="w3-bar-item w3-button w3-padding-large">View Pets</a>
    <a href="http://localhost/View_Table_Animals.php" class="w3-bar-item w3-button w3-padding-large">View Animals</a>
    <a href="http://localhost/Project_Launch.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white">Delete</a>
    <a href="http://localhost/Delete.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white">Update Pet</a>
    <a href="http://localhost/Update_Pet.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white">Update Animal</a>
  </div>
</div>

<!-- Header -->
<header class="w3-container w3-red w3-center" style="padding:128px 16px">
  <h1 class="w3-margin w3-jumbo">BusyBear</h1>
  <p class="w3-xlarge">ESE 205 Project</p>
  <a href="http://localhost/Add_Pet.php" class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Get Started</a>
</header>

<!-- First Grid -->


<!-- Second Grid -->

<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge">Quote of the day: AWS doesn't like us
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
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
 </div>
 <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">Emerson Industrial</a></p>
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


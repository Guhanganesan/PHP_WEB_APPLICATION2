<!DOCTYPE html>
<html>
<head> 
<title>Payilagam</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>
$(document).ready(function(){
    $("input").focus(function(){
        $(this).css("background-color", "#EBEDEF");
    });
    $("input").blur(function(){
        $(this).css("background-color", "#A2F8CB");
    });
});
</script>
</head>
<style>
    body {font-family: Arial, Helvetica, sans-serif;}
    * {
    box-sizing: border-box;
}
.row::after {
    content: "";
    clear: both;
    display: table;
}
[class*="col-"] {
    float: left;
    padding: 15px;
}
.col-1 {width: 8.33%;}
.col-2 {width: 16.66%;}
.col-3 {width: 25%;}
.col-4 {width: 33.33%;}
.col-5 {width: 41.66%;}
.col-6 {width: 50%;}
.col-7 {width: 58.33%;}
.col-8 {width: 66.66%;}
.col-9 {width: 75%;}
.col-10 {width: 83.33%;}
.col-11 {width: 91.66%;}
.col-12 {width: 100%;}
html {
    font-family: "Lucida Sans", sans-serif;
}
.header {
    background-color: #9933cc;
    color: #ffffff;
    padding: 15px;
}
.menu ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}
.menu li {
    padding: 8px;
    margin-bottom: 7px;
    background-color: #33b5e5;
    color: #ffffff;
    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}
.menu li:hover {
    background-color: #0099cc;
}
input{color:blue;}
body{
    background-color: #abacad;
    color:blue;font-weight:bold;
}



input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}

a{text-decoration:none;}



</style>
<body>
    <div class="w3-container w3-blue" style="background-color:#1e2608">
    <h3><marquee>Welcome to Payilagam</marquee></h3>
  </div>

<div class="w3-card-4" >
  <div class="w3-container w3-green  ">
    <center><h1>Submit your details here!!</h1></center>
    <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
    <a href="http://www.phpguhan.online/">Home</a>
  </div>
  <form class="w3-container" method="post" action="Index.php">
  <p>
  <label>Name</label>
  <input class="w3-input" type="text" name="x1"></p>
  <p>
  <label>DOB</label>
  <input class="w3-input" type="text" name="x2"></p>
  <p>
  <label>Qualification</label>
  <input class="w3-input" type="text" name="x3"></p>
  <p>
  <label>Year of passing</label>
  <input class="w3-input" type="text" name="x4"></p>
  <p>
  <label>College</label>
  <input class="w3-input" type="text" name="x5"></p>
  <p>
  <label>Blood Group</label>
  <input class="w3-input" type="text" name="x6"></p>
  <p>
  <label>How did you find us</label>
  <input class="w3-input" type="text" name="x7"></p>
  <p>
  <label>Present Address</label>
  <input class="w3-input" type="text" name="x8"></p>
  <p>
  <label>Permanent Address</label>
  <input class="w3-input" type="text" name="x9"></p>
  <label>Course Interested in</label>
  <input class="w3-input" type="text" name="x10"></p>
  <label></label>
  <input class="w3-input" type="submit" name="submit" values="submit" 
  style="background-color:blue;color:white;"></p>
</form>
</div>


<div id="id01" class="modal">
  
  <form class="modal-content animate" method="post" action="login1.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" 
      title="Close Modal">&times;</span>
      <img src="avatar.PNG" alt="Avatar" class="avatar" style="width:80px;height:60px;">
    </div>

    <div class="container">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="x1" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="x2" required>
        
      <input type="submit" name="submit" value="submit">
      <label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

   
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>


</body>
</html> 



   <?php 
   // id4764868_phpguhan","guha0804","id4764868_devadasg"
		$dbhost ="localhost";
	    $dbuser="id4764868_phpguhan";
	    $dbpass="guha0804";
	    $conn = mysqli_connect( $dbhost, $dbuser, $dbpass, "id4764868_devadasg");
	    if(isset($_POST['submit'])){
		$x1=$_POST['x1'];
		$x2=$_POST['x2'];
		$x3=$_POST['x3'];
		$x4=$_POST['x4'];
		$x5=$_POST['x5'];
		$x6=$_POST['x6'];
		$x7=$_POST['x7'];
		$x8=$_POST['x8'];
		$x9=$_POST['x9'];
		$x10=$_POST['x10'];
		
		if(empty($_POST['x1'])      ||
           empty($_POST['x2']) 		||
           empty($_POST['x3'])	    ||
           empty($_POST['x4'])      ||
           empty($_POST['x5']) 		||
           empty($_POST['x6'])	    ||
           empty($_POST['x7'])      ||
           empty($_POST['x8']) 		||
           empty($_POST['x9'])	    ||
           empty($_POST['x10'])
          )
     {
	echo "<center>Kindly Fill the details above!</center>";
	return false;
     }
		
		
		
		
		
		
		
		
		$query="insert into reg
		values ('$x1','$x2', '$x3', '$x4', '$x5','$x6', '$x7','$x8', 
		'$x9', '$x10')";
		$sql=mysqli_query($conn, $query);
		if($sql)
		{
			echo "<center><p>*..Thank You!!!*</p></center>";
		}
		else
		{
		  header("Location:Index.php");  
		}
	}
	
	?>


<!DOCTYPE html>
<html>
<head>
<title>Move For Hunger</title>
 <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>

<div>
<?php
$servername = "localhost";
$username = "root";
$password = ""
$dbname = "move for hunger";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{ 
echo "Connected successfully";
}
$sql = "INSERT INTO Contactus (Name, Email, PhoneNumber,Description)
VALUES (?,?,?,?)" ;

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</div>
<header>
 <div class="row">
        <div class="logo">
        <img src="logo.png"
        </div>
		   <ul class="main-nav">    
        <li><a href="home.html"> HOME </a></li>
        <li><a href="Login.html"> LOGIN </a></li>
        <li class="active"><a href="Contactus.p"> CONTACT US </a></li>
        <li><a href="About.html"> ABOUT </a></li>
		<li><a href="Donate.html"> DONATE </a></li>

 
    </ul>  
	</div>
	<div>
	<form action="Contactus.php" method="Post">  
	<div class="Contactus">
	
	<h1>Contact US</h1>
	  
<p>Name</p>
<input type="text" name="name" required placeholder="Enter Username">	
<p>Email</p>
<input type="email" name="email" required placeholder="Enter Email">
<p>Phone Number</p>
<input type="Number" name="phone" required placeholder="Enter Phone Number">
<p>Description</p>
<input type="text" name="description"required placeholder="Enter Description">

<input type="submit" name=""value="Submit">

</div>
	</form>
	</div>
	

</header>

</body>
</html>


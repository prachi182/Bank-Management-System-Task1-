<html>
<style>
.topnav {
  background-color: #333;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #4CAF50;
  color: white;
}</style>
<head>
	  <title>
	  View Users
	  </title>
	  <!-- Required meta tags -->
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <!-- CSS file -->
	  <link rel="stylesheet" href="style.css?v=<?php echo time();?>">

</head>
<body background="image20.jpg">
<div class="topnav">
  <a class="active" href="home.php">Home</a>
  <a href="view_user.php">View Users</a>
  <a href="transfer_money.php">Transfer Money</a>
 
  <a href="about_us.php">About us</a>
</div>

</body>
</html>
<?php

$sname = "localhost";
$uname = "root";
$pwd = "neha";
$dbname = "Bank_task";

$conn = new mysqli($sname , $uname , $pwd, $dbname);

if($conn->connect_error)
{
	die("Connection failed". $conn->connect_error);
}
//echo "Connected successfully";

$sql = "select * from user";
$result = $conn-> query($sql);
if($result->num_rows>0)
{
	
	echo "<table>";
	
		echo "<tr><th>User ID</th><th>User Name</th><th>Email ID</th><th>Branch</th><th>Balance</th></tr>";
while($row = $result-> fetch_assoc())
	{
		echo "<tr><td>".$row["User_ID"]. "</td><td>".$row["User_Name"]."</td><td>".$row["Email_Id"]."</td><td>".$row["Branch"]."</td><td>".$row["Balance"]."</td></tr>";
	}
	echo "</table>";
}
else{
	echo "0  result";
}
	$conn->close();

?>
<?php
echo '
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
<html>
<body background="image20.jpg">
<div class="topnav">
  <a  href="home.php">Home</a>
  <a href="view_user.php">View Users</a>
  <a href="transfer_money.php">Transfer Money</a>
  <a class="active" href="about_us.php">About us</a>
</div>
<div class = "block">
	<br><center><h2><bold>
	This is a task given by The Sparks Foundation under the internship program of Web Development December 2020 .<br><br>
	Basic banking system is a task where intern created a dynamic website which has the following specs. 
	Start with creating a dummy data in database for upto 10 customers. Customers table will have basic fields like name, email, current balance,etc. Transfer table will record all transfer happened . There is no Loginpage , no User Creation. Only transfer of money between multiple users.
   </bold></h2></center<br>
   <br>
   <br>
</div>
</body>
</html>'

?>

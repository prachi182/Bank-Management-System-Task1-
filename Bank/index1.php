<?php
echo "HelloWorld"; 
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
  <a class="active" href="#home">Home</a>
  <a href="view_user.php">View Users</a>
  <a href="transfer_money.php">Transfer Money</a>
  <a href="#about">Contact us</a>
  <a href="#about">About us</a>
</div>

<h1>Hello</h1>
</body>
</html>';

?>

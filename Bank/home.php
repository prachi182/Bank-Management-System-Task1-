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
<head>
	<title>
	  Banking Website
	</title>
	 <!-- Required meta tags -->
	 <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- CSS file -->
 <link rel="stylesheet" href="iindex.css?v=<?php echo time();?>">
 <!-- Google font -->
 <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
 </head>

<body background="image20.jpg">
<div class="topnav">
  <a class="active" href="home.php">Home</a>
  <a href="view_user.php">View Users</a>
  <a href="transfer_money.php">Transfer Money</a>
 
 
  <a href="about_us.php">About us</a>
</div>


</body>
 <div class = "container">
	   <span class = "text1">Basic Banking System</span>
       <span class = "text2">Task By - The Sparks Foundation</span> 
</div>

</body>

<footer>
    Task Completed By - Prachi Dhanotiya <br>
       Contact - prachidhanotiya8@gmail.com
</footer>
</html>';

?>

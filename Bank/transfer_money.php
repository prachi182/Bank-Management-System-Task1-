<!DOCTYPE html>
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
	  Transfer Credits
	  </title>
      <!-- Required meta tags -->
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- CSS file -->
      <link rel="stylesheet" href="transfer_money.css?v=<?php echo time();?>">
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

<?php
    $conn = mysqli_connect("localhost", "root", "neha", "Bank_task");
    if($conn-> connect_error){
        die("connection failed:". $conn-> connect_error);
    }
    $result = mysqli_query($conn,"SELECT User_Name  FROM user");
    $resul1 = mysqli_query($conn,"SELECT User_Name  FROM user");
    ?>

<h1> Transfer Money </h1>
<div class ="form"> 
<form action="" method="GET" class = "form">
		<select  class= TransfererName type="text"  name="u1" required value="">
		<option value ="">From User</option>
		<?php
                        while($tname = mysqli_fetch_array($result)) {
                            echo "<option value='" . $tname['User_Name'] . "'>" . $tname['User_Name'] . "</option>";
                        }
                ?>

        </select><br><br>
		<select  class = ReceiverName  type="text" name="u2" value=""><br><br>
	     <option value ="">To User</option>
		<?php
                        while($tname = mysqli_fetch_array($resul1)) {
                            echo "<option value='" . $tname['User_Name'] . "'>" . $tname['User_Name'] . "</option>";
                        }
                ?>
        </select><br><br>
    	<input type="text" id="amount" name="amt" placeholder="Enter amount"><br><br>
		
		<input type="submit" id="submit" name="submit" value="Transfer"><br><br>
		
	</form>
</div>
<?php
	
    if(isset($_GET['submit'])){
    $u1=$_GET['u1'];
    $u2=$_GET['u2'];
    $amt=$_GET['amt'];


    if($u1!="" && $u2!="" && $amt!="")
    {
        //update transaction changes in database
        $query1= "UPDATE user SET Balance = Balance + '$amt' WHERE User_Name = '$u2' ";
        $data1= mysqli_query($conn, $query1);
        $query2= "UPDATE user SET Balance = Balance  - '$amt' WHERE User_Name = '$u1' ";
        $data2= mysqli_query($conn, $query2);
        
        /*insert into transaction_history
            $query1 = "INSERT INTO transaction_history (TransfererName,ReceiverName,CashTransfer) VALUES('$u1','$u2','$amt')";
                            $res2 = mysqli_query($conn,$query1);
        
                                  if($res2){
                                $user1 = "SELECT * FROM user WHERE  User_Name='$u1' ";
                                         $res=mysqli_query($conn,$user1);
                                         $row_count=mysqli_num_rows($res);
                          }
        */
    

             if ($data1 && $data2)
             {
            $message="Successfully money transfer";
                                echo "<script type='text/javascript'>alert('$message');
                                </script>";
        }
        else
        {
            $message="Error While Commiting Transaction ";
            echo "<script type='text/javascript'>alert('$message');
                                </script>";
        }

    }

    else
    {
        $message="All Fields are Mandatory";
        echo "<script type='text/javascript'>alert('$message');
            </script>";
    }
}
?>
</html>
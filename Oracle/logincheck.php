<html>
<head>
<title>Log In Check</title>
</head>

<body>
Log In Check<br><br>

<?php
$name = $_POST['un'];
$pswd = $_POST['pw'];
// Query statement. Note the single-quote is a MUST!!
$query = " SELECT * FROM login WHERE user = '$name' AND pswd = '$pswd' ; " ; 

// Display to verify the correctness of text
echo "User Name: " . $name ;
echo "<br>" ;
echo "Password : " . $pswd ;
echo "<br>" ;
echo "Query Statement: " . $query ;
echo "<br><br>" ;

// Set up the connection to MySQL: 
//     MySQL Server IP, Server username, Server password, Default (starting) database name
$con=mysqli_connect("128.198.209.178","root","123","oracle");

// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
  
// Execute the query statement and catch the returned result
$result = mysqli_query($con, $query);

// Fetch the first row in the returned result
$row = mysqli_fetch_array($result);

// Check to see if there is no row returned
if ($row == null) 
{
	echo "Log in fails<br><br>" ;
}
else 
{
	echo "Log in is good!<br><br>" ;	
}

// Close the connection to MySQL
mysqli_close($con);
?>

</body>
</html>
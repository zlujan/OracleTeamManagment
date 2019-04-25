<?php include("nav.php"); ?>
 aaa ddd 

<?php
//how to connect to database?



// Query statement. Note the single-quote is a MUST!!
$query = " SELECT * FROM Project1; " ; 

// Display to verify the correctness of text
//echo "(Partial) User Name: " . $name ;
//echo "<br>" ;
echo "Query Statement: " . $query ;
//echo "<br><br>" ;

// Set up the connection to MySQL: 
//     MySQL Server IP, Server username, Server password, Default (starting) database name
$con=mysqli_connect("100.64.14.0","root","123","oracle");

// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
  
// Execute the query statement and catch the returned result
$result = mysqli_query($con, $query);

// Display all rows of the returned result
// NOTE!!! The cursor can ONLY move from the current record to the next record. It 
//   can NOT move back to a previous record. At least I am not going to teach you
//   how in this class. :)
while($row = mysqli_fetch_array($result))
  {
  echo $row['user'] . " : " . $row['pswd'] ;
  echo "<br>";
  }

// Close the connection to MySQL
mysqli_close($con);
?>



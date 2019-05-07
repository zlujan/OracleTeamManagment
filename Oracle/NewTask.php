<html>
<head></head>
<link href="css/mysql.css" rel = "stylesheet" type = "text/css"> 
<title>Update</title>
<body>
<?php
    include_once 'dbhandler.php';

?>

<?php


$StartDate = $_POST['StartDate'];
$EndDate = $_POST['EndDate'];
$TaskDesc = $_POST['TaskDesc'];


$sql = "INSERT INTO oracle.TaskCenter
(StartDate, EndDate, TaskDesc) 
VALUES 
('$StartDate','$EndDate','$TaskDesc')";

if(mysqli_query($con, $sql)){
    echo "Records added successfully.";
}
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
?>
<br>
<br>
<a href="taskcenter.php"><button class= "GoHome"type="button">Return to Task Center!</button></a>
</body>
</html>
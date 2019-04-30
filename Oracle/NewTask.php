<html>
<head></head>

<body>
<?php
    include_once 'dbhandler.php';

?>

<?php
echo "hello world";


$StartDate = $_POST['StartDate'];
$EndDate = $_POST['EndDate'];
$TaskDesc = $_POST['TaskDesc'];


$sql = "INSERT INTO oracle.TaskCenter
(StartDate, EndDate, TaskDesc) 
VALUES 
('$StartDate','$EndDate','$TaskDesc')";

echo $sql;

if(mysqli_query($con, $sql)){
    echo "Records added successfully.";
}
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
?>
<br>
<br>
<a href="taskcenter.php"><button class= "Return"type="button">Return to Task Center!</button></a>
</body>
</html>
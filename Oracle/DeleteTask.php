<html>
<head></head>
<link href="css/mysql.css" rel = "stylesheet" type = "text/css"> 
<body>
<?php
    include_once 'dbhandler.php';

?>

<?php


    $Task_ID = $_POST['Task_ID'];
    
    

     $sql = "DELETE FROM oracle.TaskCenter WHERE Task_ID =$Task_ID";
   


    if(mysqli_query($con, $sql)){
        echo "Record $Task_ID removed successfully.";
    }
    else{
        echo "ERROR: Could not execute $sql. " . mysqli_error($con);
    }
?>
<br>
<br>
<a href="taskcenter.php"><button class= "GoHome"type="button">Return to Task Center!</button></a>

</body>
</html>
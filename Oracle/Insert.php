<html>
<title>Insert</title>
<body>
<?php
    include_once 'dbhandler.php';
?>
    <link href="css/mysql.css" rel = "stylesheet" type = "text/css">   
<?php

    $contributions = $_POST['Contributions'];
    $KmArticles = $_POST['KmArticles'];
    $ODMCEngagements = $_POST['ODMCEngagements'];
    $DQCRRCA = $_POST['DQCRRCA'];
    $BestPCustEngagements = $_POST['BestPCustEngagements'];
    $LongRunning = $_POST['LongRunning'];
    $SRQuality = $_POST['SRQuality'];
    $AccountSRNRD = $_POST['AccountSRNRD'];
    $CriticalWorkSRSNRD = $_POST['CriticalWorkSRSNRD'];

    $sql = "INSERT INTO oracle.project1
    (Contributions, KmArticles, ODMCEngagements, DQCRRCA, BestPCustEngagements, LongRunning, SRQuality, AccountSRNRD, CriticalWorkSRSNRD) 
    VALUES 
    ('$contributions','$KmArticles','$ODMCEngagements','$DQCRRCA', '$BestPCustEngagements','$LongRunning', '$SRQuality', '$AccountSRNRD', '$CriticalWorkSRSNRD')";

echo "$contributions, $KmArticles, $ODMCEngagements, $DQCRRCA, $BestPCustEngagements, $LongRunning, $SRQuality, $AccountSRNRD, $CriticalWorkSRSNRD";


if(mysqli_query($con, $sql)){
    echo "  added successfully to the database.";
}
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
?>
<br>
<br>
<a href="ManageProjectRead.php"><button class= "GoHome"type="button">Return to project!</button></a>
</body>
</html>
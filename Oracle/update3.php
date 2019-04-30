<html>
<head></head>
<link href="css/mysql.css" rel = "stylesheet" type = "text/css"> 
<title>Update</title>
<body>

<?php
    include_once 'dbhandler.php';

    $Table_ID = $_POST ['Table_ID'];
    $Contributions = $_POST['Contributions'];
    $KmArticles = $_POST['KmArticles'];
    $ODMCEngagements = $_POST['ODMCEngagements'];
    $DQCRRCA = $_POST['DQCRRCA'];
    $BestPCustEngagements = $_POST['BestPCustEngagements'];
    $LongRunning = $_POST['LongRunning'];
    $SRQuality = $_POST['SRQuality'];
    $AccountSRNRD = $_POST['AccountSRNRD'];
    $CriticalWorkSRSNRD = $_POST['CriticalWorkSRSNRD'];

    // echo $Table_ID[$counter];


    for ($counter = 0; $counter < sizeof($Contributions); $counter = $counter + 1) {
    $sql = "UPDATE oracle.project3
    SET Contributions = $Contributions[$counter],
    KmArticles = $KmArticles[$counter],
    ODMCEngagements = $ODMCEngagements[$counter],
    DQCRRCA = $DQCRRCA[$counter],
    BestPCustEngagements = $BestPCustEngagements[$counter],
    LongRunning = $LongRunning[$counter],
    SRQuality = $SRQuality[$counter],
    AccountSRNRD = $AccountSRNRD[$counter],
    CriticalWorkSRSNRD = $CriticalWorkSRSNRD[$counter]
    WHERE Table_ID = $Table_ID[$counter]";

    

    // echo $sql;

    
    
    if(mysqli_query($con, $sql)){
        echo "Record $Table_ID[$counter] updated successfully." . "<br>";
    }
    else{
        echo "ERROR: Could not execute $sql. " . mysqli_error($con);
    }
} 


?>

<br>
<br>
<a href="ManageProjectRead.php"><button class= "GoHome"type="button">Return to project!</button></a>

</body>
</html>
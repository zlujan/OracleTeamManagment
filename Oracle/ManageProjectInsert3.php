<?php
    include_once 'dbhandler.php';

?>

<!DOCTYPE html>
<html>
<body>
    <link href="css/mysql.css" rel = "stylesheet" type = "text/css">   
    <title>Project Three Insert</title>
    <h1>Project Three Insert</h1>

    <br>

    <div class= "box1">
            <li><a href="ManageProjectInsert3.php" target="_blank"><button type="button">Insert</button></a></li>
            <li><a href="ManageProjectUpdate3.php" target="_blank"><button type="button">Update</button></a></li>
            <li><a href="ManageProjectDelete3.php" target="_blank"><button type="button">Delete</button></a></li>
    </div>

    <br><br>

    <table>
        <tr>
            <!-- <th>Table ID</th> -->
            <th>Contributions</th> 
            <th>KmArticles</th> 
            <th>ODMCEngagements</th>
            <th>DQCRRCA</th>
            <th>BestPCustEngagements</th>
            <th>LongRunning</th>
            <th>SRQuality</th>
            <th>AccountSRNRD</th>
            <th>CriticalWorkSRSNRD</th> 
        </tr>
    <?php

?>
<form action="Insert3.php" method="post">
<td> <input type="text" name="Contributions" value= "" size="10px" </td>
<td> <input type="text" name="KmArticles" value= "" size="10px" </td>
<td> <input type="text" name="ODMCEngagements" value= "" size="10px" </td>
<td> <input type="text" name="DQCRRCA" value= "" size="10px" </td>
<td> <input type="text" name="BestPCustEngagements" value= "" size="10px" </td>
<td> <input type="text" name="LongRunning" value= "" size="10px" </td>
<td> <input type="text" name="SRQuality" value= "" size="10px" </td>
<td> <input type="text" name="AccountSRNRD" value= "" size="10px" </td>
<td> <input type="text" name="CriticalWorkSRSNRD" value= "" size="10px" </td>
<br>
</table>
<input type="submit" value="Insert!">
</form>


   
</body>
</html>
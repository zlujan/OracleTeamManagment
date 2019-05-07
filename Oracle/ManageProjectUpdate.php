<?php
    include_once 'dbhandler.php';

?>

<!DOCTYPE html>
<html>
<body>
    <link href="css/mysql.css" rel = "stylesheet" type = "text/css">   
    <title>Project One Update</title>
    <h1>Project One Update</h1>

    <br>

    <!-- Insert, Update and Delete buttons -->
    <div class= "box1">
            <li><a href="ManageProjectInsert.php" target="_blank"><button type="button">Insert</button></a></li>
            <li><a href="ManageProjectUpdate.php" target="_blank"><button type="button">Update</button></a></li>
            <li><a href="ManageProjectDelete.php" target="_blank"><button type="button">Delete</button></a></li>
    </div>
  
    <br><br>

    <form action='update.php' method='post'>
    <!-- Creates Table Headers -->
    <table>
        <tr>
            <th>Table ID</th>
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

    <!-- Connect to SQL Server and inputs data in table as forms     -->
    <?php    
        $sql = "SELECT * FROM project1";
        $result = mysqli_query($con, $sql);

        while ($row = mysqli_fetch_assoc($result)) { 
            echo "<tr>";
            echo "<td>" . "<input type='hidden' name='Table_ID[]' value=" . $row['Table_ID'] . " size='10px' style='text-align: center'>" . "</td>"; 
            echo "<td>" . "<input type='text' name='Contributions[]' value=" . $row['Contributions'] . " size='10px' style='text-align: center'>" . "</td>"; 
            echo "<td>" . "<input type='text' name='KmArticles[]' value=" . $row['KmArticles'] . " size='10px' style='text-align: center'>" . "</td>"; 
            echo "<td>" . "<input type='text' name='ODMCEngagements[]' value=" . $row['ODMCEngagements'] . " size='10px' style='text-align: center'>" . "</td>"; 
            echo "<td>" . "<input type='text' name='DQCRRCA[]' value=" . $row['DQCRRCA'] . " size='10px' style='text-align: center'>" . "</td>"; 
            echo "<td>" . "<input type='text' name='BestPCustEngagements[]' value=" . $row['BestPCustEngagements'] . " size='10px' style='text-align: center'>" . "</td>";
            echo "<td>" . "<input type='text' name='LongRunning[]' value=" . $row['LongRunning'] . " size='10px' style='text-align: center'>" . "</td>"; 
            echo "<td>" . "<input type='text' name='SRQuality[]' value=" . $row['SRQuality'] . " size='10px' style='text-align: center'>" . "</td>"; 
            echo "<td>" . "<input type='text' name='AccountSRNRD[]' value=" . $row['AccountSRNRD'] . " size='10px' style='text-align: center'>" . "</td>"; 
            echo "<td>" . "<input type='text' name='CriticalWorkSRSNRD[]' value=" . $row['CriticalWorkSRSNRD'] . " size='10px' style='text-align: center'>" . "</td>";  
            echo "</tr>";
        }
        echo "</table>";
  
        echo '<br><br>
        <input type="submit" value="Update!">
             '               
    ?>
    </form>
</body>
</html>
<?php
    include_once 'dbhandler.php';
?>

<!DOCTYPE html>
<html>
<body>
    <link href="css/mysql.css" rel = "stylesheet" type = "text/css">   
    <title>Project Two Delete</title>
    <h1>Project Two Delete</h1>

    <br>

    <div class= "box1">
            <li><a href="ManageProjectInsert.php" target="_blank"><button type="button">Insert</button></a></li>
            <li><a href="ManageProjectUpdate.php" target="_blank"><button type="button">Update</button></a></li>
            <li><a href="ManageProjectDelete.php" target="_blank"><button type="button">Delete</button></a></li>
    </div>
  
    <br><br>

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

    <?php
    
        $sql = "SELECT * FROM project2";
        $result = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_assoc($result)) { 
            echo "<tr>";
            foreach ($row as $field => $value) { 
                //echo "<td>" . '<input type="checkbox" name="deleteRow" value="delete">' . $value . "</td>"; 
                echo "<td>" . $value . "</td>"; 
            }
            echo "</tr>";
            }
        echo "</table>";
       
        echo '<br><br>'

    ?>

<form action="Delete2.php" method="post">
    <?php
    echo "Table_ID to be deleted."
    ?>
    <br>
<td> <input type="text" name="Table_ID" value= "" size="10px" </td>
<input type="submit" value="Delete!">
        </form>

<?php

               
    ?>
</body>
</html>
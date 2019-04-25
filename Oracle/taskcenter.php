<?php include("nav.php"); ?>
         <!-- task list card-->
     <div class="box4">
          <div class="card" >
               <div class="card-header"><b>&nbsp;&nbsp;&nbsp;&nbsp;Tasks</b><hr width="100%", color="black"></div>        
               
               
               
               <?php
    
    include_once 'dbhandler.php';
    
    ?>
    <table>
    <tr>
        <th>Start Date</th>
        <th>End Date</th> 
        <th>Task Description</th>
        
    </tr>

<?php

    $sql = "SELECT * FROM taskcenter";
    $result = mysqli_query($con, $sql);
//echo "<table>";
    while ($row = mysqli_fetch_assoc($result)) { 
     
        foreach ($row as $field => $value) { 
            echo "<td>" . "<b>"." ". " $value" . " "."</b>" . "</td>"; 
          
        }
        echo "<tr>";
    }
    echo "</table>";
  
           
?>
          </div>
                 <!-- New task card/ entry-->
          <div class="card" >
               <div class="card-header"><b>&nbsp;&nbsp;&nbsp;&nbsp;New Task</b><hr width="100%", color="black"></div>            
              
               
               

     <div class="formbox">  
 <!-- New task uses NewTask.php to insert new tasks to the other card.-->
<form action="NewTask.php" method="post">
    <div>
        <label>Start Date</label>
        <input type="text" name="StartDate" placeholder="Date of Task">
    </div>

    <div>
        <label>End Date</label>
        <input type="text"name="EndDate" placeholder="Starting Time">
    </div>
  
    <div>
        <label>Task Description</label>
        <input type="text"name="TaskDesc" placeholder="Task">
    </div>

    <br>
     <!-- Submit button-->
     <input type="submit" value="Submit!">
</form>

</div>

</div>

</div><!--end of wrapper-->


               </div>
          </div>
     </div>

   </div>
</body>
</html>

<?php include("nav.php"); ?>

      <head>
        <title> Edgar Arroyo's Team Management System </title>  
        <link href="css/style.css" rel = "stylesheet" type = "text/css">  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>       
     </head>
       <!-- Dashboard Cards -->
      <div class="box4">
           <!-- Notification Bell Card and &nbsp; is a spacer-->
          <div class="card" >
            <div class="card-header"><b>&nbsp;&nbsp;&nbsp;&nbsp;Email</b><hr width="100%", color="black"></div>        
            <div class="img">
              <a href="https://outlook.live.com/owa/" target="_blank"><img src="images/notifBell.png" alt="Notifications"></a>
            </div>
          </div>
          <!-- Contributions Card -->
          <div class="card" >
            <div class="card-header"><b>&nbsp;&nbsp;&nbsp;&nbsp;Task Center</b><hr width="100%", color="black"></div>            
            <div class="img">
            <a href="taskcenter.php"><img src="images/puzzle.png" alt="Contributions"></a>
            </div>
          </div>
           <!-- Customer Management Card -->
          <div class="card" >
            <div class="card-header"><b>&nbsp;&nbsp;&nbsp;&nbsp;Project Management</b><hr width="100%", color="black"></div>            
            <div class="img">
            <a href="pmgmt.php"><img src="images/customerRelationship.png" alt="Customer Management"></a>
            </div>
          </div>
             <!-- Training & Development -->
            <div class="card" >
              <div class="card-header"><b>&nbsp;&nbsp;&nbsp;&nbsp;Training & Development</b><hr width="100%", color="black"></div>                    
              <div class="img">
              <a href="index.php"><img src="images/training.png" alt="Training & Development"></a>
            </div>
            </div>
      </div>

   </div>

   </div>
</body>
</html>

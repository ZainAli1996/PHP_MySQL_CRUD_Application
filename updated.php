
   <?php

   include("conf.php");

          // Data Update
    $id = $_POST['id'];
    $First_name = $_POST['Firstname'];
    $Last_name = $_POST['Lastname'];
    $City = $_POST['City'];
    
    $updatequery = "UPDATE `insertdata` 
                    SET `First_Name`='$First_name',
                    `Last_Name`='$Last_name',
                    `City`='$City'
                    WHERE id=$id";
    $query = mysqli_query($con, $updatequery);
    
        if($query){
    
          ?>
          <script>
          alert("Your Information Has Updated Successfully.");
          </script>
          <?php 
    
          ?>
          <script>
            location.replace("display.php");
          </script>
          <?php
    
        } 
        else{
            echo "Data Failed to Update, Try Again.";
    
        }
?>
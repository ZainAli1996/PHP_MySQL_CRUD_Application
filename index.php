<?php

include('conf.php');

if(isset($_POST['insert'])){

    $First_name = mysqli_real_escape_string($con, $_POST['Firstname']);
    $Last_name = mysqli_real_escape_string($con, $_POST['Lastname']);
    $City = mysqli_real_escape_string($con, $_POST['City']);
    
    $insertquery = "INSERT into `insertdata` (First_Name, Last_Name, City) values('$First_name', '$Last_name', '$City')";
    $query = mysqli_query($con, $insertquery);
    
        if($query){
    
          ?>
          <script>
          alert("Your Information Has Recorded Successfully.");
          </script>
          <?php 
    
          ?>
          <script>
            location.replace("display.php");
          </script>
          <?php
    
        } 
        else{
            echo "Data Failed to Insert, Try Again.";
    
        }
    
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>DATA INSERT</title>   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/insert.css">
    <link rel="icon" href="icon/php.png" sizes="50x50">
</head>
<body>
    <h2 class="bg-warning mx-5 text-center mt-1">DATA INSERT PANEL (CRUD OPERATION)</h2>
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
    <div class="Box col-lg-3 m-auto rounded">
        <div class="row">
        <div class="col-12">
        <input type="text" class="form-control" name="Firstname" required placeholder="First Name">
        </div>
        </div>
        <div class="row">
        <div class="col-12 my-2">
        <input type="text" class="form-control" name="Lastname" required placeholder="Last Name">
        </div>
        </div>
        <div class="row">
        <div class="col-12 mb-2">
        <input type="text" class="form-control" name="City" required placeholder="City">
        </div>
        </div>
        <button type="submit" name="insert" class="btn btn-info">Insert</button>
    </div>
</form>
</body>
</html>
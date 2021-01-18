<?php

include("conf.php");

        // Data Get

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $selectquery = "SELECT * FROM insertdata WHERE id='$id'";
    $query = mysqli_query($con, $selectquery);
    while($row = mysqli_fetch_array($query)){

        $id = $row['id'];
        $First_Name = $row['First_Name'];
        $Last_Name = $row['Last_Name'];
        $City = $row['City'];

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>DATA UPDATE</title>   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/update.css">
    <link rel="icon" href="icon/php.png" sizes="50x50">
</head>
<body>
    <h2 class="bg-warning mx-5 text-center mt-1">DATA UPDATE PANEL (CRUD OPERATION)</h2>
<form action="updated.php" method="POST" enctype="multipart/form-data">

        <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">

    <div class="Box col-lg-3 m-auto rounded">
        <div class="row">
        <div class="col-12">
        <input type="text" class="form-control" name="Firstname" required placeholder="First Name" value="<?php echo $First_Name;?>">
        </div>
        </div>
        <div class="row">
        <div class="col-12 my-2">
        <input type="text" class="form-control" name="Lastname" required placeholder="Last Name" value="<?php echo $Last_Name;?>">
        </div>
        </div>
        <div class="row">
        <div class="col-12 mb-2">
        <input type="text" class="form-control" name="City" required placeholder="City" value="<?php echo $City;?>">
        </div>
        </div>
        <button type="submit" name="insert" class="btn btn-info">Update</button>
    </div>
</form>
            <?php } ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>DATA DISPLAY</title>   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/display.css">
    <link rel="icon" href="icon/php.png" sizes="50x50">
</head>
<body>
    <h2 class="bg-warning mx-5 text-center mt-1">DATA DISPLAY PANEL (CRUD OPERATION)</h2>

    <ul>
		<li>
			<a href="index.php"><button type="button" class="btn btn-primary">Insert New Data</button></a>
		</li>
	</ul>

<div class="Box col-lg-6 m-auto rounded">
    <table class="table table-hover">
        <thead>
            <tr class="text-center">
            <th scope="col">ID</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">City</th>
            <th scope="col">Update</th>
            <th scope="col">Delete</th>
            </tr>
        </thead>

            <?php
            include('conf.php');

            $selectquery = "SELECT * FROM insertdata";
            $query = mysqli_query($con, $selectquery);
            while($row = mysqli_fetch_array($query)){

            ?>

        <tbody>
            <tr class="text-center">
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['First_Name']; ?></td>
            <td><?php echo $row['Last_Name']; ?></td>
            <td> <?php echo $row['City']; ?> </td>
            <td><a href="update.php?id=<?php echo $row['id']; ?>"  class="text-white"><i class="fa fa-pencil" aria-hidden="true"></a></td>
            <td><a href="delete.php?id=<?php echo $row['id']; ?>" class="text-white" ><i class="fa fa-trash" aria-hidden="true"></i></a></td>
            </tr>

            <?php } ?>

        </tbody>
    </table>
</div>
</body>
</html>
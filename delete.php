<?php
include("conf.php");

if(isset($_GET['id'])){
	$id = $_GET['id'];

	$deletequery = " DELETE FROM `insertdata` WHERE id = $id ";
	$result=mysqli_query($con,$deletequery) or die (mysqli_error());
	
	if($result){
		echo "<script>
		alert('Data DELETED Successfully.');
		document.location='display.php';
		</script>";
	}else{
			echo "<script>
		alert('Data Failed To DELETE');
		</script>";
	}
}
?>

<script>
document.location='display.php';
</script>
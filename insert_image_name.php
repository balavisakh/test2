<?php
	include("server_conn.php");

	$image_name = $_FILES['fileToUpload'];
	$image_names = $_FILES['fileToUpload']['name'];
	
	//$insert = "INSERT INTO `upload`('image_name') VALUES('$image_name')";
	$insert = "INSERT INTO `upload`(image_name)VALUES('$image_names')";
	
	$insert_query = mysqli_query($conn,$insert);

	if($insert_query){
		echo "insert success";
	}
	else{
		echo "insert failed ";
	}

?>
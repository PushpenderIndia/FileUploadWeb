<html>
<body>

<h3>Image File Upload Stats: </h3>

<?php

	if($_FILES["file"]["error"])
	{
		header("Location: index.html");
		die();	
	}

	$valid_content_type = array("image/gif", "image/jpeg", "image/jpg", "image/png");

	if(in_array($_FILES["file"]["type"], $valid_content_type))
	{
		echo "Name: ".$_FILES["file"]["name"];
		echo "<br>Size: ".$_FILES["file"]["size"];
		echo "<br>Temp File: ".$_FILES["file"]["tmp_name"];
		echo "<br>Type: ".$_FILES["file"]["type"];

		move_uploaded_file($_FILES["file"]["tmp_name"], "uploads/".$_FILES["file"]["name"]);
	}
	else {
		echo "Please upload only image file. Valid Extension: png, jpg, jpeg, gif";
		echo "<br>Type: ".$_FILES["file"]["type"];	
	}
	


?>

</body>
</html>



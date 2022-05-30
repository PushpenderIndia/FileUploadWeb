<html>
<body>

<h3>Image File Upload Stats: </h3>

<?php

	if($_FILES["file"]["error"]) {
		header("Location: index.html");
		die();	
	}

	$notAllowed = array('php');
	$splitFileName = explode(".", $_FILES["file"]["name"]);
	$fileExtension = end($splitFileName);


	if(in_array($fileExtension, $notAllowed)) {
		echo "Please upload a Image file";
	}

	else {
		echo "Name: ".$_FILES["file"]["name"];
		echo "<br>Size: ".$_FILES["file"]["size"];
		echo "<br>Temp File: ".$_FILES["file"]["tmp_name"];
		echo "<br>Type: ".$_FILES["file"]["type"];

		move_uploaded_file($_FILES["file"]["tmp_name"], "uploads/".$_FILES["file"]["name"]);
	}


?>

</body>
</html>



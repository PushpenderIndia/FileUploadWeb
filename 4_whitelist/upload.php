<html>
<body>

<h3>Image File Upload Stats: </h3>

<?php

	if($_FILES["file"]["error"]) {
		header("Location: index.html");
		die();	
	}

	$allowedExtension = array('png', 'jpg', 'jpeg', 'gif');
	$splitFileName = explode(".", $_FILES["file"]["name"]);
	$fileExtension = end($splitFileName);

	if (in_array($fileExtension, $allowedExtension)) {
		echo "Name: ".$_FILES["file"]["name"];
		echo "<br>Size: ".$_FILES["file"]["size"];
		echo "<br>Temp File: ".$_FILES["file"]["tmp_name"];
		echo "<br>Type: ".$_FILES["file"]["type"];

		move_uploaded_file($_FILES["file"]["tmp_name"], "uploads/".$_FILES["file"]["name"]);
	}
	else {
		echo "Please upload a Image file!";
	}

?>

</body>
</html>



<html>
<body>

<h3>Image File Upload Stats: </h3>

<?php

	if($_FILES["file"]["error"])
	{
		header("Location: index.html");
		die();	
	}
	else{

		echo "Name: ".$_FILES["file"]["name"];
		echo "<br>Size: ".$_FILES["file"]["size"];
		echo "<br>Temp File: ".$_FILES["file"]["tmp_name"];

		move_uploaded_file($_FILES["file"]["tmp_name"], "uploads/".$_FILES["file"]["name"]);
	}


?>

</body>
</html>



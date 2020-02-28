<!DOCTYPE html>
<html>
<head>
	<title>form</title>
</head>
<body>
	<h1>hi</h1>
	<?php
	if(isset($_POST['submit']))
	{
		var_dump($_FILES);
		$tmp=$_FILES['image']['tmp_name'];
		$img_name=uniqid().".jpg";
		move_uploaded_file($tmp, $img_name);
	}
	?>
	<form method="POST" action="" enctype="multipart/form-data">
		<input type="file" name="image">
		<input type="submit" name="submit" value="upload">
		
	</form>

</body>
</html>
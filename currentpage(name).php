<!-- Php Code -->
<?php
	$_name = "";

	if(empty($_POST['name'])){
		$_name = "";
	}
	else{
		$_name = $_POST['name'];
	}

	


?>
<!-- Html Code -->
<html>
	<head>
			<title></title>
	</head>
	<body>

			<form action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?> method="POST">  
	
			<fieldset>
				<legend>NAME</legend>
			
				<input type="text" name="name"><br> <br>
		
				<hr> </hr>
				<input type="submit" name="submit" value="Submit">
		
			</fieldset>
			</form>
			<label><?php echo $_name; ?></label><br>
	</body>
</html>

		
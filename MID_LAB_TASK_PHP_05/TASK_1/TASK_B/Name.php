<?php

	if(isset($_POST['submit']))
	{

		$name 		= $_POST['myname'];

		if($name == "")
        {
			echo "null submission";
		}
        else
        {
			echo "success...";
		}
	}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
		<fieldset>
			<legend>NAME</legend>
			Name: <input type="text" name="myname" value="">  <br>
				<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>
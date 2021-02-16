<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form class="" action="" method="post">
        <fieldset>
            <legend>Grnder</legend>
            <input type="radio" name="myname" value="M"<?php if (isset($_POST['gender']) && $_POST['gender'] == "M") echo "checked"; ?>> Male
            <input type="radio" name="myname" value="F"<?php if (isset($_POST['gender']) && $_POST['gender'] == "F") echo "checked"; ?>> Female
            <input type="radio" name="myname" value="O"<?php if (isset($_POST['gender']) && $_POST['gender'] == "O") echo "checked";?>>  Other
        </fieldset><br>
        <input type="submit" name="submit" value="Submit"><br>
     </form>
</body>
</html>
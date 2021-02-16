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
          <legend>Degree</legend>
          <input type="checkbox" name="myname" value="SSC"<?php if (isset($_POST['myname']) && $_POST['myname'] == "SSC") echo "checked"; ?>> SSC
          <input type="checkbox" name="myname" value="HSC"<?php if (isset($_POST['myname']) && $_POST['myname'] == "HSC") echo "checked"; ?>> HSC
          <input type="checkbox" name="myname" value="Bsc"<?php if (isset($_POST['myname']) && $_POST['myname'] == "Bsc") echo "checked"; ?>> Bsc
          <input type="checkbox" name="myname" value="Msc"<?php if (isset($_POST['myname']) && $_POST['myname'] == "Msc") echo "checked"; ?>> Msc
        </fieldset><br>
        <input type="submit" name="submit" value="Submit">
      </form>
</body>
</html>
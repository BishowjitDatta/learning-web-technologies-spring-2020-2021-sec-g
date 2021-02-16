<?php  

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form class="" action="" method="post">
      <fieldset>

      <legend>Name</legend>

        <input type="text" name="name" value="<?php if(isset($_POST['name'])){ echo $_POST['name']; }?> "><br>
        <input type="submit" name="submit" value="Submit"><br>
      </fieldset>
    </form>
  </body>
</html>
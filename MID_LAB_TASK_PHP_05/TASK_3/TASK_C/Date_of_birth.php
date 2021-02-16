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
          <legend>Date of birth</legend>
        <table>
      <tr>
        <td>dd<br><input type="text" name="myname" value="<?php if(isset($_POST['myname'])){ echo $_POST['myname']; }?>"> / </td>
        <td>mm<br><input type="text" name="myname" value="<?php if(isset($_POST['myname'])){ echo $_POST['myname']; }?>"> / </td>
        <td>yyyy<br><input type="text" name="myname" value="<?php if(isset($_POST['myname'])){ echo $_POST['myname']; }?>"></td>
     </tr>
        </table>
        <input type="submit" name="submit" value="Submit"><br>
    </fieldset>
  
      </form>
</body>
</html>
<?php



	if(isset($_POST['submit']))
	{

		$Current_Password = $_POST['Current_Password'];
    $New_Password =$_POST['New_Password'];
    $Retype_New_Password = $_POST['Retype_New_Password'];

		if($Current_Password == "" and $New_Password == "" and $Retype_New_Passwords == ""){
			echo "null submission";
    }elseif($Current_Password != $New_Password and $New_Password == $Retype_New_Password){
		 	echo "Password is successfully changed";
		}else {
      echo "Invalid Password";
    }
	}
?>


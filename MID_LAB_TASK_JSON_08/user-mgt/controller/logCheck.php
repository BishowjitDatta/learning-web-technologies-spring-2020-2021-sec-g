<?php
	$myfile = fopen('../model/user.json', 'r');
	$data = fread($myfile, filesize('../model/user.json'));

	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username == "" || $password == ""){
			echo "null submission...";
		}else{
			$user = json_decode($data, true);
			if($username == $users['username'] && $password == $users['password']){
				header('location: ../view/home.php');
			}else{
				echo "invalid user";
			}
		}

	}
?>
<?php
	$myfile = fopen('../model/userinfo.json', 'r');
	$data = fread($myfile, filesize('../model/userinfo.json'));

	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username == "" || $password == ""){
			echo "null submission...";
		}else{
			$user = json_decode($data, true);
			if($username == $user['username'] && $password == $user['password']){
				header('location: ../view/home.php');
			}else{
				echo "invalid user";
			}
		}

	}
?>
<?php
	$myfile = fopen('student.json', 'r');
	$data = fread($myfile, filesize('student.json'));

	if(isset($_POST['submit'])){

		$id = $_POST['id'];
		$password = $_POST['password'];

		if($id == "" || $password == ""){
			echo "null submission...";
		}else{
			$users = json_decode($data, true);
			if($id == $users['id'] && $password == $users['password']){
				header('location:admin_home.html');
			}else{
				echo "invalid user";
			}
		}

	}
?>

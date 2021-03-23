<?php

      session_start();
      require_once('../model/userModel.php');

	if(isset($_POST['signup'])){

		$id = $_POST['id'];
		$password = $_POST['password'];
		$Confirm_password = $_POST['Confirm_password'];
		$name = $_POST['name'];
		$userType =  $_POST['userType'];

		if($id == "" || $name == "" || $password == "" || $Confirm_password == "" || $user_Type == ""){
			echo "null submission...";
		}else{

			if($password == $Confirm_password){

				$users = [
							'id'=>$id,
							'password'=>$password,
							'name'=> $name,
							'user_Type'=>$users_Type
						];

				$status = insertUser($user);

				/*$data = json_encode($student);
				$userData = fopen("student.json", "w");
				fwrite($userData, $data);
				fclose($userData);*/

				header('location:login.html');
			}else{
				echo "password & confirm password mismatch..";
			}
		}

	}
?>
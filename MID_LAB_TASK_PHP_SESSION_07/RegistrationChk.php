<?php
	session_start();

	if(isset($_POST['submit'])){

    $name =$_POST['name'];
    $email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$repass = $_POST['confirm_password'];
    $gender = $_POST['gender'];
    $dd = $_POST['dd'];
    $mm = $_POST['mm'];
    $yyyy = $_POST['yyyy'];


		if($name == "" || $email == ""  ||  $username == "" || $password == "" || $repass == "" || $gender == "" || $dd == "" || $mm == "" || $yyyy == ""  ){
			echo "null submission...";
		}else{

			if($password == $repass){

				$user = [
              'name'=>$name,
              'email'=>$email,
							'username'=>$username,
							'password'=>$password,
							'gender'=> $gender,
              'dd'=>$dd,
              'mm'=>$mm,
              'yyyy'=>$yyyy
						];

		
				$_SESSION['current_user'] = $user;

				header('location: Login.html');
			}else{
				echo "password & confirm password mismatch..";
			}
		}

	}
?>
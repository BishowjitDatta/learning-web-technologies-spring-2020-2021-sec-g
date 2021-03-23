<?php

	require_once('db.php');

	function validateUser($username, $password){

		$conn = getConnection();

		$sql = "select * from users where username='{$username}' and password='{$password}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		if(count($row) > 0){
			return true;
		}else{
			return false;
		}
	}

	function getUserById($id){

		$conn = getConnection();

		$sql = "select * from users  where id='{$id}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}

	
	function insertUser($user){

		$conn = getConnection();
		$sql = "insert into users  values('{$user['id']}', '{$user['password']}', '{$user['name']}', '{$user['email']}', '{$user['user_Type']}')";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

?>
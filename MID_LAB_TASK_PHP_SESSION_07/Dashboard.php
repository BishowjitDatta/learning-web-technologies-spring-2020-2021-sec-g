<?php
	session_start();
	if(isset($_SESSION['flag']))
	{
		header('location: Dashboard.html');
    }
    else
    {
		header('location: Login.html');
	}
?>
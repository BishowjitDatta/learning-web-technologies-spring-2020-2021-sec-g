<?php
	$title= "Home Page";

	//include('header.php');
	//include_once('header.php');

	//require('header.php');
	require_once('header.php');

?>

	<div id="page_title">
		<h1>Welcome home, <?php echo $_SESSION['username'];?></h1>
	</div>

	<div id='nav_bar'>
		<a href="addproduct.html"> Add Product</a> |
		<a href="user_list.html"> View Product List</a> |
	</div>

	<div id="main_content">
		
	</div>


<?php include('footer.php'); ?>
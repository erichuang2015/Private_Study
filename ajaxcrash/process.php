<?php echo 'Processing...' ; 

// Connect to the Database
$conn = mysqli_connect('localhost','root','bishop5150', 'test');


if(isset($_POST['name'])){
	echo 'POST: Your name is ' . $_POST['name'];
	$name = mysqli_real_escape_string($conn, $_POST['name']);

	$query = "INSERT INTO ajaxtest (name) VALUES ('$name')";
	
	if(mysqli_query($conn,$query)){
		echo 'User Added';
	}else{
	echo 'Record not inserted. ERROR: ' .mysqli_error($conn);
	}
}

if(isset($_GET['name'])){
	echo 'GET: Your name is ' . $_GET['name'];
}
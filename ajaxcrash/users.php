<?php 

// Connect to the Database
$conn = mysqli_connect('localhost','root','bishop5150', 'test');
$query = 'SELECT * FROM ajaxtest';

$result = mysqli_query($conn,$query);
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($users);

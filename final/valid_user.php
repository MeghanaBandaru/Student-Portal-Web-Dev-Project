<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="users";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);


$user_id = $_POST['userid'];
if(isset($user_id))
{
		$mysql_get_users = mysqli_query($conn,"SELECT * FROM streg_personal_data where user_name='$user_id'");
		$get_rows=  mysqli_fetch_array($mysql_get_users);

		if($get_rows >=1)
		{
		echo "user already exists!<br>";
		die();
		}

		else
		{}
}


  ?>
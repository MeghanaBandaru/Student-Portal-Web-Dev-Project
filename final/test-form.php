<!DOCTYPE html>
<html>
<head>
	<title>Sign-Up</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
    <link rel="shortcut icon" href="images/tree.png" />

</head>
<body>
	<header>
        <div id="start">
            <img src="images/nitlogo.png">
            <h2>NIT Durgapur</h2>
		        <h1>Student Information Center</h1>
        </div>
	</header>

	<nav>
     	<ul>
            <li><a href="index.html"> <br>Home</a></li>
            <li><a href="login.php"><br>Login</a></li>
            <li><a href="streg4.html"><br>Student Register</a></li>
            <li><a href="about.html"><br>About Us</a></li>
            <li><a href="contact.html"><br>Contact Us</a></li>

         </ul>
    </nav>




<div class="main" style="width:25%;font-size:18px;">
<?php
// echo "entered php";
$servername = "localhost";
$username = "root";
$password = "";
$db="group_13";
$hobbies = implode(",",$_POST['hobbie']);
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
		{

$sql = "INSERT INTO streg_personal_data (firstname, middlename,lastname,fathers_fname,fathers_mname,fathers_lname,nationality, 
	email,mob_num,gender,dob,hobbies,boardX,schoolX,placeX,percentX,yearX,boardXII,schoolXII,placeXII,percentXII,yearXII,degree,
	dept,sem,reg_no,roll,cgpa,flatno,street,city,state,pincode,country,flatno_perm,street_perm,city_perm,state_perm,pincode_perm,
	country_perm,user_name,pass_word,sec_q,sec_a,role)VALUES ('".$_POST["fname"]."', '".$_POST["mname"]."', '".$_POST["lname"]."',
	 '".$_POST["ffname"]."', '".$_POST["fmname"]."', '".$_POST["flname"]."', '".$_POST["nationality"]."','". $_POST["email"]."',
	 '".$_POST["mobnum"]."', '".$_POST["gender"]."', '".$_POST["dob"]."', '$hobbies', '".$_POST["b1name"]."', 
	 '".$_POST["s1name"]."', '".$_POST["place1"]."', '".$_POST["percent1"]."', '".$_POST["year1"]."', '".$_POST["b2name"]."',
	  '".$_POST["s2name"]."', '".$_POST["place2"]."', '".$_POST["percent2"]."', '".$_POST["year2"]."', '".$_POST["degree"]."',
	   '".$_POST["deptv"]."', '".$_POST["semb"]."', '".$_POST["regnum"]."', '".$_POST["roll"]."', '".$_POST["cgpa"]."', 
	   '".$_POST["flatno1"]."', '".$_POST["street1"]."', '".$_POST["city1"]."', '".$_POST["state1"]."', '".$_POST["pincode1"]."',
	    '".$_POST["country1"]."', '".$_POST["flatno2"]."', '".$_POST["street2"]."', '".$_POST["city2"]."', '".$_POST["state2"]."',
	     '".$_POST["pincode2"]."', '".$_POST["country2"]."', '".$_POST["userid"]."', '".$_POST["pass_word"]."', 
	     '".$_POST["question"]."', '".$_POST["ans"]."','pending')";


if ($conn->query($sql) === TRUE) 
{
    echo "Your response has been recorded.<br><br>";
    echo "Kindly wait for the admin's response!";
} 
else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
}
$conn->close();
?>

</div>
</body>
</html>
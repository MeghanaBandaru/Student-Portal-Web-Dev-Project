<?php
   include('session.php');
?>
<html>   
   <head>
	<title>Student Information Center</title>
	<link rel="shortcut icon" href="images/tree.png" />

	<link rel="stylesheet" href="style2.css" type="text/css">
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
            	<li><a href="welcome_admin.php"> <br>Home</a></li>
                <li><a href="notif.php"><br>Notices</a></li>
                <li><a href="user_list.php"><br>Users</a></li>
                <li><a href="showdata_admin.php"><br>Profile</a></li>
                <li><a href="logout.php"><br>Logout</a></li>
         	</ul>
    	</nav>
        <div class="main">
                <h1>Welcome <?php echo $login_session; ?></h1>
                <p>  Welcome to Student Information Center <br><br> You are successfully logged in...</p>
        </div>		
</body>
</html>
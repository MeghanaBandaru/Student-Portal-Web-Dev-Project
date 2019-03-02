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
            	<li style="width:25%;"><a href="welcome_student.php"> <br>Home</a></li>
                <li style="width:25%;"><a href="notices.php"><br>Notices</a></li>
                <li style="width:25%;"><a href="showdata_student.php"><br>Profile</a></li>
                <li style="width:25%;"><a href="logout.php"><br>Logout</a></li>
         	</ul>
    	</nav>
        <div class="main">
                <h1>Welcome <?php echo $login_session; ?></h1>
                <p>  Welcome to Student Information Center <br><br> You are successfully logged in...</p>

        </div>
                
<!--         <footer>Copyright &copy; Group13.com</footer>
 -->
        

				



</body>
   
</html>
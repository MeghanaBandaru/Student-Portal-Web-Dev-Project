<?php
   include('session.php');
   $un=$_SESSION['login_user'];
    $sql=  mysqli_query($db, "select * from streg_personal_data where role='pending'");

?>
<html>
   
   <head>
	<title>Student Information Center</title>
	<link rel="shortcut icon" href="images/tree.png" />

	<link rel="stylesheet" href="style5.css" type="text/css">
	 <script >

	function display()
			{
					document.getElementById("requests").style.display="none";
			}	
    </script>
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

    	<div class="main" style="margin-top:200px;font-size:18px;">
    	<fieldset>
        <legend>NOTIFICATIONS:</legend>
        <table style="border: 1px solid black; border-collapse: collapse; text-align:center;line-height: 50px;border-spacing: 50px 20px; padding: 200px; width: 100%;">

        <tr>
        <td style="border: 2px solid black; font-size:18px;">USER NAME</td>
        <td style="border: 2px solid black;font-size:18px;">NAME</td>
        <td style="border: 2px solid black;font-size:18px;">ACCEPT AS ADMIN/STUDENT/REJECT</td>
        </tr>
    	<?php 
             while($row=  mysqli_fetch_array($sql)){
             $un=$row['user_name'];	
            // $_SESSION['curr_user']=$row['user_name'];

         ?>
    	
        
         <span id="requests">
        <tr>
            <td style="border: 2px solid black;"><?php echo $row['user_name'];?></td>
            <td style="border: 2px solid black;"><?php echo $row['firstname']; ?>&nbsp&nbsp<?php echo $row['middlename']; ?>&nbsp&nbsp<?php echo $row['lastname']; ?></td>
            <td style="border: 2px solid black;">

                <button class="button_new" type="submit" id="admin" 
                onclick="location.href='update_admin.php?varname=<?php echo $row['user_name'] ?>';display();">Admin</button>            
                <button class="button_new" type="submit" 
                onclick="location.href='update_student.php?varname=<?php echo $row['user_name'] ?>';display();">Student</button>
                <button class="button_new" type="submit" style=" background-color:#ff3333;
                "onclick="location.href='delete.php?varname=<?php echo $row['user_name'] ?>';display();">Reject</button>
            </td>
                
        </tr>
        </span>

            
        
        <?php
             }
         ?>
                 </table>

         </fieldset>
        </div>
                

        </body>
   
</html>
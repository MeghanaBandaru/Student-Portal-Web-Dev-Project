<?php
   include('session.php');
   // $un=$_SESSION['login_user'];
   $current_user=$_GET['varname'];
   $sqlc=  mysqli_query($db, "select * from streg_personal_data where user_name='$current_user'");
    

?>
<html>
   
   <head>
	<title>Student Information Center</title>
	<link rel="shortcut icon" href="images/tree.png" />

	<link rel="stylesheet" href="style5.css" type="text/css">
    <script type="text/javascript">
        function display()
        {
            //alert("eneterd");
            document.getElementByID('mobno').style.display='block';
        }
        function validate()
        {
            var data=document.getElementByID('mobnum').value;
            regex=/^[1-9][0-9]{9}$/; 
            if(data=="")
            {
                document.getElementById('mobnum_error').innerHTML = 'Please provide a phone number';
                // alert("Error")
                return 0;
            }
            else if(!regex.test(data))
            {
                document.getElementById('mobnum_error').innerHTML = 'Please provide a valid phone number';
                return 0;
            }
            else
            {
                 document.getElementById('mobnum_error').innerHTML = '';
               
                return 1;
            }
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
        
        <?php 
             while($row=  mysqli_fetch_array($sqlc)){
                if($row['role']=='admin'){
                
         ?>

         <div class="main" style="margin-top:200px;font-size:18px;">
        <fieldset>
        <legend>PERSONAL INFORMATION of <?php echo $row['user_name']; ?></legend>
        <table border="0">

           
           <tr>
                <td>Role:</td>
                <td><?php echo $row['role'];?></td>
            </tr> <tr>   
                <td>Name:</td>
                <td><?php echo $row['firstname']; ?>&nbsp&nbsp<?php echo $row['middlename']; ?>&nbsp&nbsp<?php echo $row['lastname']; ?></td>
            </tr>
            <tr>
                <td>Father's Name:</td>
                <td><?php echo $row['fathers_fname']; ?>&nbsp&nbsp<?php echo $row['fathers_mname']; ?>&nbsp&nbsp<?php echo $row['fathers_lname']; ?></td>
            </tr>
            <tr>
                <td>Nationality:</td>
                <td><?php echo $row['nationality'];?></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><?php echo $row['email'];?></td>
            </tr>
            <tr>
                <td>Mobile number:</td>
                <td><?php echo $row['mob_num'];?></td><!-- <td><button class="button_new" onclick="display();">Edit</button> </td>
                <td><span id="mobno" style='display:none;color:red;'><input type="text" id="mobnum" name="mobnum" maxlength="10" 
                onblur="validate();"></span></td> -->
            </tr>
            <tr>
                <td>Gender:</td>
                <td><?php echo $row['gender'];?></td>
            </tr>
            <tr>
                <td>Date of Birth:</td>
                <td><?php echo $row['dob'];?></td>
            </tr>
            <tr>
                <td>Hobbies:</td>
                <td><?php echo $row['hobbies'];?></td>
            </tr>
        </table>
        </fieldset>
        </div>
        <div class="main" style="font-size:18px;">
        <fieldset>
        <legend>EDUCATIONAL DETAILS:</legend>
        <table style="border: 1px solid black; border-collapse: collapse; text-align:center;line-height: 50px;border-spacing: 50px 20px; padding: 200px; width: 100%;">
            <tr>
            <td style="border: 1px solid black;"></td>
            <td style="border: 1px solid black;">BOARD</td>
            <td style="border: 1px solid black;">SCHOOL</td>
            <td style="border: 1px solid black;">PLACE</td>
            <td style="border: 1px solid black;">PERCENTAGE</td>
            <td style="border: 1px solid black;">YEAR</td>
            </tr>
            <tr>
            <td style="border: 1px solid black;">CLASS X:</td>
            <td style="border: 1px solid black;"><?php echo $row['boardX'];?></td>
            <td style="border: 1px solid black;"><?php echo $row['schoolX'];?></td>
            <td style="border: 1px solid black;"><?php echo $row['placeX'];?></td>
            <td style="border: 1px solid black;"><?php echo $row['percentX'];?></td>
            <td style="border: 1px solid black;"><?php echo $row['yearX'];?></td>
            </tr>
            <tr>
            <td style="border: 1px solid black;">CLASS XII:</td>
            <td style="border: 1px solid black;"><?php echo $row['boardXII'];?></td>
            <td style="border: 1px solid black;"><?php echo $row['schoolXII'];?></td>
            <td style="border: 1px solid black;"><?php echo $row['placeXII'];?></td>
            <td style="border: 1px solid black;"><?php echo $row['percentXII'];?></td>
            <td style="border: 1px solid black;"><?php echo $row['yearXII'];?></td>
            </tr>
        </table>
        <br><br>
        <table fo>
            <tr>
            <td>Degree:</td>
            <td><?php echo $row['degree'];?></td>
            </tr> 
            <tr>
            <tr>
            <td>Department:</td>
            <td><?php echo $row['dept'];?></td>
            </tr>
            <td>Semester:</td>
            <td><?php echo $row['sem'];?></td>
            </tr>  
            <tr>
            <td>Registration number:</td>
            <td><?php echo $row['reg_no'];?></td>
            </tr>
            <tr>
            <td>Roll number:</td>
            <td><?php echo $row['roll'];?></td>
            </tr>   
            <tr>
            <td>Current CGPA:</td>
            <td><?php echo $row['cgpa'];?></td>
            </tr>  
        </table>
        </fieldset>
        </div>

        <div class="main" style="font-size:18px;">
        <fieldset>
        <legend>PRESENT ADDRESS DETAILS:</legend>
        <table>
        <tr>
        <td>Flat no.:</td>
        <td><?php echo $row['flatno'];?></td>
        </tr>
        <tr>
        <td>Street:</td>
        <td><?php echo $row['street'];?></td>
        </tr><tr>
        <td>City:</td>
        <td><?php echo $row['city'];?></td>
        </tr><tr>
        <td>State:</td>
        <td><?php echo $row['state'];?></td>
        </tr><tr>
        <td>Pincode:</td>
        <td><?php echo $row['pincode'];?></td>
        </tr><tr>
        <td>Country:</td>
        <td><?php echo $row['country'];?></td>
        </tr>
        </table>
        </fieldset>
        <br><br>
        <fieldset>
        <legend>PERMANENT ADDRESS DETAILS:</legend>
        <table>
        <tr>
        <td>Flat no.:</td>
        <td><?php echo $row['flatno_perm'];?></td>
        </tr>
        <tr>
        <td>Street:</td>
        <td><?php echo $row['street_perm'];?></td>
        </tr><tr>
        <td>City:</td>
        <td><?php echo $row['city_perm'];?></td>
        </tr><tr>
        <td>State:</td>
        <td><?php echo $row['state_perm'];?></td>
        </tr><tr>
        <td>Pincode:</td>
        <td><?php echo $row['pincode_perm'];?></td>
        </tr><tr>
        <td>Country:</td>
        <td><?php echo $row['country_perm'];?></td>
        </tr>
        </table>
        </fieldset>
        </div>

            
        <?php
            }
            else{
                $value=$row['user_name'];
                header("Location: show_student_user_data.php?varname=$value");
             }
            }
         ?>
         

</body>
   
</html>
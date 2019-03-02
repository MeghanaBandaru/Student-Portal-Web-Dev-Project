<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {

      $myusername = $_POST['username'];
      $mypassword = $_POST['password']; 

      
      $result=mysqli_query($db, "select * from streg_personal_data where user_name='$myusername'")or die("failed" .mysql_error());

      $row = mysqli_fetch_array($result);
      
		
      if($row['user_name']==$myusername && $row['pass_word']==$mypassword)
          {
              if( $row['role']=="admin")
              {
                   $_SESSION['login_user'] = $myusername;        
                    header("location: welcome_admin.php");
              }
              else if( $row['role']=="student")
              {
                   $_SESSION['login_user'] = $myusername;        
                    header("location: welcome_student.php");
              }
              else if( $row['role']=="pending")
              {
                    header("location: error_request.php");
              }
          }
      else
      {
            header("location: error_values.php");
      }
   }
?>
<html>
   
   <head>
        <link rel="stylesheet" type="text/css" href="style2.css">
        <link rel="shortcut icon" href="images/tree.png" />
        <link rel="shortcut icon" href="images/tree.png?v=<?php echo filemtime('images/tree.png') ?>" />


<title>Login</title>
<script type="text/javascript">
    function validate_form()
    {   
        var un=document.forms["myForm"]["username"].value;
        var pw=document.forms["myForm"]["password"].value;

        if(un=="")
        {
            
            document.getElementById("un_error").innerHTML='Required'
            document.getElementById("pw_error").innerHTML="";

            return false;
           
        }
        else if(pw=="")
        {
            document.getElementById("pw_error").innerHTML="Required";
            document.getElementById("un_error").innerHTML=''
            return false;
           
        }
        else
        {
             document.getElementById("pw_error").innerHTML="";
             document.getElementById("un_error").innerHTML=''          
             return true;
            
        }
        return true;
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
               <li><a href="index.html"> <br>Home</a></li>
                <li><a href="login.php"><br>Login</a></li>
                <li><a href="streg4.html"><br>Student Register</a></li>
                <li><a href="about.html"><br>About Us</a></li>
                <li><a href="contact.html"><br>Contact Us</a></li>

            </ul>
      </nav>
   
      
      <div class="main">
   
         <form name="myForm"  method="POST" action="" onsubmit="return validate_form()">
                <h2>Login:</h2>
                <table class="table"  method="POST" action="test-login.php">
                <tr>
                <td style="text-align:right"><label for="username">USER NAME</label></td>
                <td style="text-align:left"> <input type="text" id="username" name="username">
                <span id="un_error" style="color:red;"></span>
                </td>
                </tr>
                <tr>
                <td style="text-align:right"><label for="password">PASSWORD</label></td>
                <td style="text-align:left"><input id="password" type="password" name="password">
                <span id="pw_error" style="color:red;"></span>
                </td>
                </tr>
                <tr></tr>
                </table>
                <button class="button" type="submit">Login</button>
                <button class="button" type="reset" value="reset">Reset</button><br>

            </form>
      </div>

   
</body>
</html>

<?php
   include('session.php');
   $un=$_SESSION['login_user'];
   $curuser=$_GET['varname'];
   $sql=  mysqli_query($db, "select * from streg_personal_data where user_name='$un'");
   $row=  mysqli_fetch_array($sql)
?>
<html>
<head>
    <title>Edit</title>
    <link rel="stylesheet" type="text/css" href="style5.css">
    <link rel="shortcut icon" href="images/tree.png" />

    <script type="text/javascript" >
    
    var regex;
    // var un="<?php print $un; ?>";
    //     var old_mobile_number="<?php print $row['mob_num']; ?>";
    //     var old_flatno="<?php print $row['flatno']; ?>";
    //     var old_street="<?php print $row['street']; ?>";
    //     var old_city="<?php print $row['city']; ?>";
    //     var old_state="<?php print $row['state']; ?>";
    //     var old_pincode="<?php print $row['pincode']; ?>";
    //     var old_country="<?php print $row['country']; ?>";
    function validate(curr_id,eid)
    {
        


        if(curr_id=="mobnum")
        {             
            //alert("Error");
            regex=/^[1-9][0-9]{9}$/;
            return validate_data(curr_id,eid,regex);

        }
        else if(eid=='')
        {
            return 1;
        }
        else
        { // alert("rrr");
            regex=/^[a-zA-Z]+$/;
            return validate_data(curr_id,eid,regex);
        }
    }
    function validate_data(currid,eid,regex)
    { //alert("rrr");
             var data=document.forms["myEditForm"][currid].value;

            if(data=="")
           
        {
                            //  alert("rrr");
                document.getElementById(eid).style.display = 'none';
                // newv=old;
                return 1;
            } 
            else if(!regex.test(data))
            {
                // alert("rrr");
                document.getElementById(eid).style.display = 'block';

                return 0;
            }
            else
            {
                 document.getElementById(eid).style.display = 'none';
                // newv=data;
                //alert(newv);
                return 1;
            }
    }
    function validate_form()
    {
     var idList=["mobnum","flatno","street","city","state","pin","country"];
     var eidList=["mobno_error","","","city_error","state_error","","country_error"];
    var flag=0;
    var ret=0;
    var idListn=idList.length;
    // alert(idList.length);
   for(var a=0; a<idList.length; a++)
    {
      var newId=idList[a];
      var enewId=eidList[a];

      ret= validate(newId,enewId);
      flag=flag+ret;
    }
    
    if(flag<(idList.length))
    {
      return false;
    }
    else
    {
       // alert("true");
             return true;
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



    <form name="myEditForm" onsubmit="return validate_form();" method="POST" action="test-edit.php" >
        <div class="main" style="margin-top:200px;">
        <fieldset>
        <legend>You can edit the following details:</legend>
        <table class="table1">          
                
          <tr>
                <td style="text-align:left"><label for="mobnum">MOBILE NUMBER</label></td>
                <td style="text-align:left"><input type="text" id="mobnum" name="mobnum" maxlength="10" 
                onblur="validate(this.id,'mobno_error');">
                <span id="mobno_error" style="color: red;display:none">Not Valid</span></td>
         </tr>
         <tr>
                <td>PRESENT ADDRESS:</td>
        </tr>
        <tr>       
                <td style="text-align:right;"><label for="flatno">FLAT NO.:</label></td>
                <td><input type="text" id="flatno" name="flatno" onblur="validate(this.id,'');">

                <td style="text-align:right;"><label for="street">STREET:</label></td>
                <td><input type="text" id="street" name="street" onblur="validate(this.id,'');">

        </tr>
        <tr>
                
                <td style="text-align:right;"><label for="city">CITY:</label></td>
                <td><input type="text" id="city" name="city"  onblur="validate(this.id,'city_error');">
                <span id="city_error"style="text-align:left;color:red;display:none;">Not Valid</span></td>
        
                <td style="text-align:right;"><label for="state">STATE:</label></td>
                <td><input type="text" id="state"name="state" onblur="validate(this.id,'state_error');">     
                <span id="state_error"style="text-align:left;color:red;display:none;">Not Valid</span></td>

        </tr>

        <tr>
                <td style="text-align:right;"><label for="pincode">PINCODE:</label></td>
                <td><input type="number" id="pincode"name="pincode">
                <span id="pin_error"style="text-align:left;color:red;display:none;">Not Valid</span></td>
        
                <td style="text-align:right;"><label for="country">COUNTRY:</label></td>
                <td><input type="text" id="country" name="country" onblur="validate(this.id,'country_error');">
                <span id="country_error"style="text-align:left;color:red;display:none;">Not Valid</span></td>
                
        </tr>
            

        </table>
        </fieldset>
        </div>

        

         

       

        <br><br>
        <button class="button" type="submit" style="margin-left: 450px;">Update</button>
        <br><br><br><br><br><br>

    </form> 





</body>
</html>
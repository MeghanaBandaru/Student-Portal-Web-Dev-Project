<?php 
include('session.php');
    $curruser=$_GET['varname'];
    $updatesql=  mysqli_query($db, "DELETE FROM streg_personal_data where user_name='$curruser'");

 
   header("Location: user_list.php");
                 
?>
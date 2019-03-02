<?php 
include('session.php');
    $curuser=$_GET['varname'];
    $updatesql=  mysqli_query($db, "DELETE FROM streg_personal_data where user_name='$curuser'");

 
    header("Location: notif.php");
                 
?>
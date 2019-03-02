<?php 
include('session.php');
    $curuser=$_GET['varname'];
    $updatesql=  mysqli_query($db, "update streg_personal_data set role='admin' where user_name='$curuser'");

 
    header("Location: notif.php");
                 
?>
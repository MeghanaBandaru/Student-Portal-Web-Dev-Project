<?php
   include('session.php');
   $un=$_SESSION['login_user'];
   // $curuser=$_GET['varname'];
   $sql=  mysqli_query($db, "select * from streg_personal_data where user_name='$un'");
   $row=  mysqli_fetch_array($sql);
   $mobile_num=$_POST['mobnum'];
   $flatno=$_POST['flatno'];
   $street=$_POST['street'];
   $city=$_POST['city'];
   $state=$_POST['state'];
   $pin=$_POST['pincode']; 
   $country=$_POST['country'];
   if($mobile_num!=$row['mob_num'] && $mobile_num!='')
   {
   		$updatesql=  mysqli_query($db, "update streg_personal_data set mob_num='$mobile_num' where user_name='$un'");
   }
   if($flatno!=$row['flatno'] && $flatno!='')
   {
   		$updatesql=  mysqli_query($db, "update streg_personal_data set flatno='$flatno' where user_name='$un'");
   }
   if($street!=$row['street']&& $street!='')
   {
   		$updatesql=  mysqli_query($db, "update streg_personal_data set street='$street' where user_name='$un'");
   }
   if($city!=$row['city']&& $city!='')
   {
   		$updatesql=  mysqli_query($db, "update streg_personal_data set city='$city' where user_name='$un'");
   }
   if($state!=$row['state']&& $state!='')
   {
   		$updatesql=  mysqli_query($db, "update streg_personal_data set state='$state' where user_name='$un'");
   }
   if($pin!=$row['pincode']&& $pin!='')
   {
   		$updatesql=  mysqli_query($db, "update streg_personal_data set pincode='$pin' where user_name='$un'");
   }
   if($country!=$row['country']&& $country!='')
   {
   		$updatesql=  mysqli_query($db, "update streg_personal_data set country='$country' where user_name='$un'");
   }
   if($row['role']=='admin')
   {
   		header("Location: showdata_admin.php");
   }
   else if($row['role']=='student')
   	{
   		header("Location: showdata_student.php");
   }
?>


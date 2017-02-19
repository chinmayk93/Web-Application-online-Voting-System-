<?php
session_start();
$email=$_SESSION['email'];
$r=$_POST['S'];
$con=mysql_connect('localhost','root','') or die(mysql_error()); 
mysql_select_db('user',$con);
$sql="update party SET count=count+1 where Party_name='$r'";
mysql_query($sql,$con);
$sql="UPDATE user_info SET status=1 where email='$email'";
mysql_query($sql,$con);
echo "You have successfully voted to party:"." ".$r;
?>




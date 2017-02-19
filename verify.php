<?php
session_start();
$e=$_REQUEST["e1"];
$a=$_REQUEST["a1"];

$con=mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('user',$con) or die(mysql_error());
$sql123="select * from user_info where Email='$e' and Aadhar=$a";
$res=mysql_query($sql123,$con) or die(mysql_error());

if($row=mysql_fetch_array($res))
{$stat=$row['Status'];
if($stat==1)
{
echo "You hav already Voted";
}
else if($stat==0)
{$_SESSION['email']= $_POST['e1'];
header("location:vote_party.php");
}
}

else
{
mysql_query("insert into user_info(Email,Aadhar) values('$e','$a')",$con);
$_SESSION['email']=$_REQUEST['e1'];
header("location:vote_party.php");
}
?>
<?php
$e="nsl@gmail.com";
$a=123456789;
$con=mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('user',$con) or die(mysql_error());
$sql123="select * from user_info where Email='$e' and Aadhar=$a";
$res=mysql_query($sql123,$con) or die(mysql_error());
while($row=mysql_fetch_array($res))
{$stat=$row['Status'];
echo $stat;
}
?>
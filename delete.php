<?php
$pname=$_REQUEST['rn'];
$con=mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('user',$con) or die(mysql_error());
$sql123="DELETE from party where Party_name='$pname'";
mysql_query($sql123,$con);

header("location:admin_page.php");
?>


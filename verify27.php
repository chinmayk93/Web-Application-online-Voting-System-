<?php
session_start();
$u=$_REQUEST["name"];
$p=$_REQUEST["p"];
if($u=='Nihar' and $p=='9769650175')
{
header("location:admin_page.php");
}
else
{
echo "You are not allowed to access";
}
?>
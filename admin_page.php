<script>
function deletes(temp)
{alert(temp);
window.location="delete.php?rn="+temp;
}
</script>
<?php

$con=mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('user',$con) or die(mysql_error());
$sql123="select Party_name from party";
$res=mysql_query($sql123,$con) or die(mysql_error());
echo "<table border='1'>";
while($fetch=mysql_fetch_assoc($res))
{
$pname=$fetch['Party_name'];
echo "<tr>";
echo '<td>'.$fetch['Party_name'].'</td>';
echo '<td><input type="button" value="Delete" onclick="deletes(\''.$pname.'\')"></td>';
echo "</tr>";
}
echo"</table>";

?>




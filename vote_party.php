<?php
session_start();
echo $_SESSION['email'];
?>
<html>
<head>
<style type="text/css">
        .style1
        {
            text-align: Left;
            font-family: verdana;
            font-size: large;
            font: 100% verdana;
        }
        .style2
        {
            text-align: center;
        }
    </style>
<body bgcolor="cornsilk">
<form action="addvote.php" method="POST" class="style1">
<font color="red"><center>Choose Your Party</center></font><hr>
<input type="radio" name="S" value="Shivsena">Shivsena
<br><br>
<input type="radio" name="S" value="MNS">MNS
<br><br>
<input type="radio" name="S" value="BJP">BJP
<br><br>
<input type="submit" name="submit" value="Vote">
</form>
</body>
</html>

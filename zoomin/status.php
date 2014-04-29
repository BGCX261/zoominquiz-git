<?php
include("usr_check.php");
include("config.php");
if($flag==0)
{
echo "Must Login";
}
else
{
?>
<?php
include("1.php");?>
<title>Zoomin::Scores</title>
<script type="text/javascript" src="top15_index.js"></script>
<?php
include("2.php");
?>
<center>
<table border="1">
<tr><td>Rank</td><td>Name</td><td>Points</td></tr>
<?php
$query=mysql_query("SELECT uid,name,level FROM users ORDER BY level DESC,time");
$x=1;
while($temp=mysql_fetch_array($query))
{
?>
<tr><td><?php echo $x; ?></td><td><?php echo $temp['name']; ?></td><td><?php echo $temp['level']; ?></td></tr>
<?php
$x++;
}
include("close.php");
?>
</table>
<?php
include("3.php");
?>
<?php
}
?>
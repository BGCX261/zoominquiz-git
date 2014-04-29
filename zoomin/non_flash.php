<?php
include("1.php");?>
<title>Zoom In:: Non Flash Version</title>
<script type="text/javascript" src="top15_index.js"></script>
<?php
include("2.php");
?>
<table border="0">
<?php
include("usr_check.php");
include("config.php");
if($flag==1)
{
$x=1;
$query=mysql_query("SELECT conqured FROM users WHERE uid='$uid'"); 
while($temp=mysql_fetch_array($query))
{
$conqured=$temp["conqured"];
}
$query=mysql_query("SELECT id,country FROM name ORDER BY country");
while($temp=mysql_fetch_array($query))
{
$ch=NULL;
$rt=0;
$status="<font color=red>NOT CONQUERED</font>";
for($i=0;$i<strlen($conqured);$i++)
{
if($conqured[$i]=='n')
$rt=1;
if($rt==0)
$ch=$ch.$conqured[$i];
if($rt==1)
{
if($ch==$temp["id"])
{
$status="<font color=green>CONQUERED</font>";
break;
}
$ch=NULL;
$rt=0;
}
}
?>
<tr><td><?php echo $x; ?></td><td><a href="ques.php/?id=<?php echo $temp["id"]; ?>"><?php echo $temp["country"]; ?></a></td><td>(<?php echo $status; ?>)</td></tr>
<?php
$x++;
}
}
else
echo "Must Login";
include("close.php");
?>
</table>
<?php
include("3.php");
?>
<?php
include("usr_check.php");
include("config.php");
if($flag==1)
{
if(!isset($_GET["id"]))
{
$_GET["id"]=0;
$_GET["ques"]=0;
}
else
{
$id=(integer)$_GET["id"];
$chk=0;
if(isset($_GET["ques"]))
{
if($_GET["ques"]!=0)
{
$ques=(integer)$_GET["ques"];
$chk=1;
}
else
$_GET["ques"]=1;
}
}
if($zoomin==1)
{
if(is_int($id))
{
if($chk==0)
{
$query7=mysql_query("SELECT answered FROM users WHERE uid='$uid'"); 
while($temp1=mysql_fetch_array($query7))
{
$answered=$temp1["answered"];
}
$t=mysql_query("SELECT COUNT(*) FROM ques WHERE country='$id'");
$total=mysql_fetch_array($t);
$query=mysql_query("SELECT type,qno FROM ques WHERE country='$id'");
?>
<?php
include("1.php");?>
<title>Zoom In :: Question List</title>
<script type="text/javascript" src="../top15.js"></script>
<style language="text/css">
#done{
position:fixed;
right:0px;
top:0px;
background-attachment: fixed
}
</style>
<?php
include("2.php");
?>
<center><img src="../images/<?php echo $id; ?>.png" height="144" width="144"></img></center><br/>
<?php
$cnu=mysql_query("SELECT country FROM name WHERE id='$id'");
while($cnu1=mysql_fetch_array($cnu))
{
?>
Country: <b><?php echo $cnu1["country"]; ?></b><br/>
<?php
}
?>
Total questions available about this country: <b><?php echo $total[0]; ?></b><br/><br/>
<?php
$sriq=1;
$grchk=0;
$qucn=0;
while($temp=mysql_fetch_array($query))
{
$qucn++;
$ch=NULL;
$rt=0;
$sri=0;
for($i=0;$i<strlen($answered);$i++)
{
if($answered[$i]=='n')
$rt=1;
if($rt==0)
$ch=$ch.$answered[$i];
if($rt==1)
{
if($temp["qno"]==$ch)
{
$sri=1;
break;
}
$ch=NULL;
$rt=0;
}
else
continue;
}
if($sri==1)
{
$don="<font color=green>ANSWERED</font>";
$grchk++;
}
else
$don="<font color=red>NOT ANSWERED</font>";
?>
<a href="../ques.php?id=<?php echo $id; ?>&ques=<?php echo $temp["qno"]; ?>">Question <?php echo $sriq; ?></a>&nbsp;&nbsp;(<?php echo $don; ?>)<br/><br/>
<?php
$sriq++;
}
if($grchk!=0)
{
if($grchk==$qucn)
{
$query7=mysql_query("SELECT conqured FROM users WHERE uid='$uid'"); 
while($temp1=mysql_fetch_array($query7))
{
$conqured=$temp1["conqured"];
}
$ch=NULL;
$rt=0;
$sri=0;
for($i=0;$i<strlen($conqured);$i++)
{
if($conqured[$i]=='n')
$rt=1;
if($rt==0)
$ch=$ch.$conqured[$i];
if($rt==1)
{
if($id==$ch)
{
$sri=1;
break;
}
$ch=NULL;
$rt=0;
}
else
continue;
}
if($sri==0)
{
$conqured=$conqured.$id."n";
mysql_query("UPDATE users SET conqured='$conqured' WHERE uid='$uid'");
}
?>
<img src="../images/green.gif" id="done"></img>
<?php
}
}
?>
<?php
include("3.php");
?>
<?php
}
else
{
include("restrict.php");
}
}
else
{
echo "Invalid Request";
}

}
else
{
echo "You have not registered for this event. Register First";
}
}
else
{
echo "Must Login";
}
?>
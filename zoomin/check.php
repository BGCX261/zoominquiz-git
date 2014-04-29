<?php
include("usr_check.php");
include("config.php");
if($flag==1)
{
if(!isset($_GET["qid"]) || !isset($_GET["str"]))
{
$_GET["qid"]=1;
$_GET["str"]=1;
}
else
{
$qid=(integer)$_GET["qid"];
if($qid==0)
$qid=1;
$str=$_GET["str"];
if($str==NULL)
$str="1";
}
if($zoomin==1)
{
if(is_int($qid))
{
$sri=0;
$o=0;
$i=0;
$query=mysql_query("SELECT country FROM ques WHERE qno='$qid'");
$temp=mysql_fetch_array($query);
$id=$temp[0];
$redi="../zoomin/ques.php/?id=".$id;
$query=mysql_query("SELECT qno FROM ques WHERE country='$id'");
while($temp=mysql_fetch_array($query))
{
$cques[$o]=$temp["qno"];
$o++;
}
$sige=sizeof($cques);
for(
$i=0;$i<$sige;$i++)
{
if($qid==$cques[0])
{
$sri=1;
break;
}
else if($cques[$i]==$qid)
{
$sri=1;
break;
}
}
if($sri==1)
{
if($i==0)
{
$ant=1;
}
else
{
$query7=mysql_query("SELECT answered FROM users WHERE uid='$uid'"); 
while($temp1=mysql_fetch_array($query7))
{
$conqured=$temp1["answered"];
}
$ch=NULL;
$rt=0;
$sri=0;
for($k=0;$k<strlen($conqured);$k++)
{
if($conqured[$k]=='n')
$rt=1;
if($rt==0)
$ch=$ch.$conqured[$k];
if($rt==1)
{
if($cques[$i-1]==$ch)
{
$ant=1;
break;
}
$ch=NULL;
$rt=0;
}
else
continue;
}
}
if($ant==1)
{
$query=mysql_query("SELECT ans FROM ques WHERE qno='$qid'");
while($temp=mysql_fetch_array($query))
{
$ans=$temp["ans"];
}
if(strcasecmp($str,$ans)==0)
{
$query7=mysql_query("SELECT answered,level FROM users WHERE uid='$uid'"); 
while($temp1=mysql_fetch_array($query7))
{
$level=$temp1["level"];
$answered=$temp1["answered"];
}
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
if($qid==$ch)
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
?>
<img src="images/tick.png" onLoad="window.location='<?php echo $redi; ?>'"></img>
<?php
}
else
{
$answered=$answered.$qid."n";
$level=$level+1;
$query=mysql_query("UPDATE users SET level='$level',answered='$answered' WHERE uid='$uid'");
if($query)
{
?>
<img src="images/tick.png" onLoad="window.location='<?php echo $redi; ?>'"></img>
<?php
}
}
}
else
{
?>
<img src="images/cross.png"></img>
<?php
}
}
else
header('Location:blocked.html');
}
}
else
{
echo "<font color=red>Invalid Request</font>";
}
}
else
{
echo "You have not registered for this event";
}
}
else
{
echo "Must Login";
}
include("close.php");
?>
<?php
$sri=0;
$o=0;
$i=0;
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
if($ques==$cques[0])
{
$sri=1;
break;
}
else if($cques[$i]==$ques)
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
$query=mysql_query("SELECT type,country,que,link1,link2 FROM ques WHERE qno='$cques[$i]'");
while($temp=mysql_fetch_array($query))
{
if($temp["type"]==1)
{
?>
<?php
include("1.php");?>
<title>Zoom In:: Questions</title>
<script src="sriram.js"></script>
<?php
include("2.php");
?>
<b>Question:</b>&nbsp;&nbsp;<?php echo $temp["que"]; ?><br/><br/>
Your Answer:<br/><input type="text" name="ans" id="ans"></input><div id="nitrr"></div><br/>
<input type="button" value="Check" onclick="showans(<?php echo $ques; ?>)"></input>
<?php
}
else if($temp["type"]==2)
{
?>
<?php
include("1.php");?>
<title>Zoom In:: Questions</title>
<script src="sriram.js"></script>
<?php include("2.php");
?>
<b>Question:</b>&nbsp;&nbsp;<?php echo $temp["que"]; ?><br/><br/>
<a href="images/<?php echo $temp["link1"]; ?>.jpg"><img src="images/<?php echo $temp["link1"]; ?>.jpg" width="363px" height="415px"></img><br/><font size="1">CLICK TO ENLARGE</font></a><br/><br/>
Your Answer:<br/><input type="text" name="ans" id="ans"></input><div id="nitrr"></div><br/>
<input type="button" value="Check" onclick="showans(<?php echo $ques; ?>)"></input>
<?php
}
else if($temp["type"]==3)
{
?>
<?php
include("1.php");?>
<title>Zoom In:: Questions</title>
<script src="sriram.js"></script>
<?php
include("2.php");
?>
<b>Question:</b>&nbsp;&nbsp;<?php echo $temp["que"]; ?><br/><br/>
<a href="images/<?php echo $temp["link1"]; ?>.jpg"><img src="images/<?php echo $temp["link1"]; ?>.jpg" width="363px" height="415px"></img></a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="images/<?php echo $temp["link2"]; ?>.jpg"><img src="images/<?php echo $temp["link2"]; ?>.jpg" width="363px" height="415px"></img></a>
<br/><br/>
Your Answer:<br/><input type="text" name="ans" id="ans"></input><div id="nitrr"></div><br/>
<input type="button" value="Check" onclick="showans(<?php echo $ques; ?>)"></input>
<?php
}
else if($temp["type"]==4)
{
?>
<?php
include("1.php");?>
<title>Zoom In:: Questions</title>
<script type="text/javascript" src="mp3/swfobject.js"></script>
<script src="sriram.js"></script>
<?php
include("2.php");
?>
<b>Question:</b>&nbsp;&nbsp;<?php echo $temp["que"]; ?><br/>
<p id="player3"><a href="http://www.macromedia.com/go/getflashplayer">Get the Flash Player</a> to see this player.</p>
<script type="text/javascript">
	var s3 = new SWFObject("mp3/mp3player.swf", "line", "240", "20", "7");
	s3.addVariable("file","mp3/<?php echo $temp["link1"]; ?>.mp3");
	s3.addVariable("repeat","false");
	s3.addVariable("showdigits","false");
	s3.write("player3");
</script>If you have any problems with this player, <a href="mp3/<?php echo $temp["link1"]; ?>.mp3">GET THE ORIGINAL MP3 FILE HERE</a><br/><br/>
Your Answer:<br/><input type="text" name="ans" id="ans"></input><div id="nitrr"></div><br/>
<input type="button" value="Check" onclick="showans(<?php echo $ques; ?>)"></input>
<?php
}
else if($temp["type"]==5)
{
?>
<?php
include("1.php");?>
<title>Zoom In:: Questions</title>
<script type="text/javascript" src="flv/swfobject.js"></script>
<script src="sriram.js"></script>
<?php
include("2.php");
?>
<b>Question:</b>&nbsp;&nbsp;<?php echo $temp["que"]; ?><br/>
<p id="player1"><a href="http://www.macromedia.com/go/getflashplayer">Get the Flash Player</a> to see this player.</p>
<script type="text/javascript">
	var s1 = new SWFObject("flv/flvplayer.swf","single","300","170","7");
	s1.addParam("allowfullscreen","true");
	s1.addVariable("file","<?php echo $temp["link1"]; ?>.flv");
	s1.write("player1");
</script>If you have any problems with this player, <a href="flv/<?php echo $temp["link1"]; ?>.flv">GET THE ORIGINAL FLV FILE HERE</a><br/><br/>
Your Answer:<br/><input type="text" name="ans" id="ans"></input><div id="nitrr"></div><br/>
<input type="button" value="Check" onclick="showans(<?php echo $ques; ?>)"></input>
<?php
}
?>
</td>
<table border="0" width="100%" bgcolor="red" cellspacing="0" cellpadding="0">
  <tr>
    <td width="100%"><center><font size="2">Script by <a href="mailto:sriramdasty7@gmail.com">Sriram AS</a> of 4th sem IT, NITRR<br/><a href="team.php">Full Team List</a></font></center></td>
  </tr>
</table>
</body>
</html>
<?php
}
}
else
header('Location:blocked.html');
}

?>
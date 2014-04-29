<?php
//Hard coding the values, and commented the joomla integration code
$flag=1;
$uid=1;
$name="Sriram";
$zoomin=1;

/*
$con=mysql_connect("localhost","root","");
$joomla_db="zoomin";
if($con)
{
mysql_select_db($joomla_db);
if(!isset($_COOKIE["4462041586e863163c0aa69dc41c2081"]))
{
$c=NULL;
}
else
{
$c=$_COOKIE["4462041586e863163c0aa69dc41c2081"];
}
$query=mysql_query("SELECT username,userid,guest FROM jos_session WHERE session_id='$c'");
while($temp=mysql_fetch_array($query))
{
if($temp["guest"]==1)
{
$flag=0;
}
else
{
$flag=1;
$uid=$temp["userid"];
$name=$temp["username"];
$query=mysql_query("SELECT user_zoomin FROM jos_users WHERE id='$uid'");
$temp=mysql_fetch_array($query);
$zoomin=$temp[0];
}
}
}
else
echo "Failed to connect";
*/
?>
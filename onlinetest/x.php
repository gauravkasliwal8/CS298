<?php
echo "\n";
//echo $_SERVER['REMOTE_ADDR'] . "\n";

$ipAddress=$_SERVER['REMOTE_ADDR'];
$macAddr=false;
//$cols = array();
$arp=`arp -a $ipAddress`;
$lines=explode("\n", $arp);
foreach($lines as $line)
{
   $col=preg_split('/\s+/', trim($line));
   if ($col[0]==$ipAddress)
   {
       $macAddr=$col[1];
   }
}
//echo "\n ####" . $macAddr;

if(((isset($_SESSION['ip'])) && ($_SERVER['REMOTE_ADDR'] !== $_SESSION['ip'])) || ((isset($_SESSION['mac'])) && ($macAddr !== $_SESSION['mac'])))
{
	echo "\n Ohh";
	$prev_ip = $_SESSION['ip'];
	$prev_mac = $_SESSION['mac'];
	$new_ip = $_SERVER['REMOTE_ADDR'];
	$new_mac = $macAddr;
	$name = $_SESSION["name"];
	$user_id = $_SESSION['student_id'];
	$link=mysql_connect('localhost','test','');
	//$link=mysql_connect('localhost','root','qazwsx');
	if(!$link)
	{
		die(mysql_error());
	}
	$db_connected=mysql_select_db('test',$link);

	if (!$db_connected)
	{
		die ('Can\'t use link : ' . mysql_error());
	}
	mysql_query("SET character_set_results=utf8", $link);
	# Set character_set_client and character_set_connection
	mysql_query("SET character_set_client=utf8", $link);
	mysql_query("SET character_set_connection=utf8", $link);

	$sql = "INSERT INTO changed_ip values ('$name', '$user_id', '$prev_ip', '$prev_mac', '$mac_address', '$ipAddress')";
			$query3=mysql_query($sql_update2) or die(mysql_error());

	$_SESSION['changed'] = "changed";

}
?>
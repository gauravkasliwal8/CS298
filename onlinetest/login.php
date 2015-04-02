<?php
	session_start();
			$user_id = trim($_POST['studentid']);
			$User_Pwd = trim($_POST['password']);

$mac_address = false;
$ipAddress=$_SERVER['REMOTE_ADDR'];
//$cols = array();
$arp=`arp -a $ipAddress`;
$lines=explode("\n", $arp);
foreach($lines as $line)
{
   $col=preg_split('/\s+/', trim($line));
   if ($col[0]==$ipAddress)
   {
       $mac_address=$col[1];
   }
}
$mac_address = preg_replace('/-/', ':', $mac_address);

	if(($user_id == "") || ($User_Pwd == ""))
		header("location: index.php?msg=ee");

	$link=mysql_connect('localhost','','');
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

	$sql="SELECT * FROM student_info where studentid='$user_id' AND password='$User_Pwd'";
	
	$result=mysql_query($sql,$link) or die(mysql_error());

	if(mysql_num_rows($result)!=0)
	{
		//echo"$User_Id";
		$newArray=mysql_fetch_array($result);
		$_SESSION['student_id'] = $newArray['studentid'];
		$_SESSION['name'] = $newArray['name'];
		$sql_update1 = "UPDATE student_info SET mac_address='$mac_address', ip_address='$ipAddress' WHERE studentid='$user_id'";
			$query2=mysql_query($sql_update1) or die(mysql_error());
		
		$sql_update2 = "INSERT INTO student_ip_mac values ('$user_id', '$mac_address', '$ipAddress')";
			$query3=mysql_query($sql_update2) or die(mysql_error());
		
		$_SESSION['mac'] = $mac_address;
		$_SESSION['ip'] = $ipAddress;
		header("location: index.php?msg=s");
	}
	else
	{
		//echo "$User_Id";
		header("location: index.php?msg=e");
	}
		
?>
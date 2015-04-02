<?php
session_start();
if (isset($_SESSION["student_id"]))
	header("Location: index.php");
	
$name = trim($_POST['name']);
$student_id = trim($_POST['studentid']);
$email = trim($_POST['email']);
$passwd = trim($_POST['password']);

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

		$link=mysql_connect('localhost','','');
		//$link=mysql_connect('localhost','root','qazwsx');
		//$link=mysql_connect('localhost','sumitk_root','Ark510@123');
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

		$sqla="SELECT * FROM student_info WHERE studentid='$student_id'";

		$resulta=mysql_query($sqla,$link) or die(mysql_error());
		if(mysql_num_rows($resulta)!=0)
		{
			$newArray=mysql_fetch_array($resulta);
			$user_temp = $newArray['studentid'];
			//$email_temp = $newArray['email'];
			
			if(	$student_id == $user_temp )
				header("location:register.php?msg=e1&id='$user_temp'");
			/*else if( $email == $email_temp )	
				header("location:register.php?msg=e2&email='$email_temp'");*/
		}
		else
		{
			$query1=mysql_query("insert into student_info values ('','$name','$student_id','$email','$passwd','$mac_address','$ipAddress')") or die(mysql_error());
			
			$query2=mysql_query("insert into student_ip_mac values ('$student_id','$mac_address','$ipAddress')") or die(mysql_error());
			
			session_destroy();
			session_start();
			if(!$query1 || !$query2)
			{
				echo '<br><b>Uh ..ohh ..Not resgistered.</b><br>';
				die (mysql_error());
			}
			$_SESSION['name'] = $name;
			$_SESSION['student_id'] = $student_id;
			$_SESSION['mac'] = $mac_address;
			$_SESSION['ip'] = $ipAddress;
			header("location:register.php?msg=s");
		}
?>
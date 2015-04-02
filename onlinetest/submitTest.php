<?php
session_start();
if (isset($_SESSION['student_id'])) {
	$msg="Welcome ".$_SESSION["name"]."! Please proceed to begin your test" ;
	$username = $_SESSION["name"];
	$user_id = $_SESSION['student_id'];
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

}
else {
	$msg="Go to Register page and register your name and student ID";
	$username = "Guest";
}
if( (isset($_POST['answer1']) && isset($_POST['answer2']) && isset($_POST['answer3'])&& isset($_POST['answer4'])&& isset($_POST['answer5'])&& isset($_POST['answer6'])&& isset($_POST['answer7'])&& isset($_POST['answer8'])&& isset($_POST['answer9'])&& isset($_POST['answer10'])&& isset($_POST['answer11']) && isset($_POST['answer12'])) )
{
	$answer1 = trim($_POST['answer1']);
	$answer2 = trim($_POST['answer2']);
	$answer3 = trim($_POST['answer3']);
	$answer4 = trim($_POST['answer4']);
	$answer5 = trim($_POST['answer5']);
	$answer6 = trim($_POST['answer6']);
	$answer7 = trim($_POST['answer7']);
	$answer8 = trim($_POST['answer8']);
	$answer9 = trim($_POST['answer9']);
	$answer10 = trim($_POST['answer10']);
	$answer11= trim($_POST['answer11']);
	$answer12 = trim($_POST['answer12']);
	
	$link=mysql_connect('localhost','','');
	
	//$link=mysql_connect('localhost','kumar','csstamp2012');
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
	
	$time_now = time();
	
	//$sql_update = "INSERT INTO student_answers values ('$user_id', '$ipAddress', '$mac_address', '$answer1', 'gaurav', '$time_now')";
	$sql_update = "INSERT INTO student_answers values ('$user_id', '$ipAddress', '$mac_address', '$answer1', '$answer2', '$answer3', '$answer4', '$answer5', '$answer6', '$answer7', '$answer8', '$answer9', '$answer10', '$answer11', '$answer12')";
			$query3=mysql_query($sql_update) or die(mysql_error());
			$_SESSION['done'] = 'done';
			$msg2 = "Congrats you have completed your test!";
			header("location: result.php?msg=c");
}
else {
			header("location: test2.php?msg=e3");
}

?>

?>
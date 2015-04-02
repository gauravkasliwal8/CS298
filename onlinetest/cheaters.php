<?php
session_start();

/*if($_SERVER['REMOTE_ADDR'] !== "192.168.1.2")
	{
		header("Location: index.php");
	}
*/	
	$link=mysql_connect('localhost','kumar','csstamp2012');
	//$link=mysql_connect('localhost','root','qazwsx');
		if(!$link)
		{
			die(mysql_error());
		}
		$db_connected=mysql_select_db('kumardb',$link);
		if (!$db_connected) 
		{
			die ('Can\'t use link : ' . mysql_error());
		}
	mysql_query("SET character_set_results=utf8", $link);
	# Set character_set_client and character_set_connection
    mysql_query("SET character_set_client=utf8", $link);
	mysql_query("SET character_set_connection=utf8", $link);
	
//WHERE remote_ip in (SELECT DISTINCT ip from blocked_sites)
	

		
?>
<html>
<head>
<title>CS 46 A Labs</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="Content-Language" CONTENT="english">
<meta http-equiv="refresh" content="10">
<script type="text/javascript" src="jquery.js"></script>
<script language="JavaScript" type="text/javascript">
  function login(showhide){
    if(showhide == "show"){
        document.getElementById('popupbox').style.visibility="visible";
    }else if(showhide == "hide"){
        document.getElementById('popupbox').style.visibility="hidden"; 
    }
  }
</script>
		<link type="text/css" href="jquery/css/ui-lightness/jquery-ui-1.8.16.custom.css" rel="stylesheet" />	
		<script type="text/javascript" src="jquery/js/jquery-1.6.2.min.js"></script>
		<script type="text/javascript" src="jquery/js/jquery-ui-1.8.16.custom.min.js"></script>
		<script type="text/javascript">
			$(function(){

				// Tabs
				$('#tabs').tabs();
			});
		</script>
<link href="style.css" rel="stylesheet" type="text/css">
<style type="text/css">
.cs266 {
	font-size: 24px;
	color: #FFF;
	text-align: left;
}
.Login_status {
	text-align: right;
}
</style>
</head>

<body style="margin:0;">
<table width="100%" height="100%"  border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="140" background="images/topbg.gif">
    <table width=100% height="96" border=0 align="center" cellpadding=0 cellspacing=0>
      <tr>
        <td width="18" height="82">&nbsp;</td>
        <td width="126" class="cs266" align="left"><img src="images/cslogo.gif" width="126" height="114"></td>
        <td width="490" class="cs266"><strong>&nbsp; &nbsp;&nbsp;&nbsp;CS 266 Midterm</strong></td>
        <td colspan=2 align="right" valign="bottom"><table width="218" height="75" cellpadding="0" cellspacing="0">
          <tr>
            <td width="162">Search&nbsp;</td>
            <td width="147" align="middle">
              <input type="text" name="textfield22"></td>
            <td width="28"><input name="go" type="submit" id="go4" value="go"></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td align="middle"><a href="#" class="searchlink">It doesn't work.</a></td>
            <td valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td align="middle">&nbsp;</td>
            <td valign="top">&nbsp;</td>
          </tr>
        </table></td>
        <td width="62">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="36" background="images/subnavbg.gif"><table width=100% border=0 align="center" cellpadding=0 cellspacing=0>
      <tr>
        <td width="179"> <img src="images/subnavleft.gif" width=12 height=36></td>
        <td width="324" align="left" class="Page_Name">You Cheaters!</td>
        
<div id="popupbox"> 
<form name="login" action="login.php" method="post">
<center>Student ID:</center>
<center><input name="studentid" size="14" /></center>
<center>Password:</center>
<center><input name="password" type="password" size="14" /></center>
<center><input type="submit" name="submit" value="login" /></center>
</form>
<br />
<center><a href="javascript:login('hide');">close</a></center> 
</div>         
        
        <td width="415" class="Login_status"><?php include("status.php"); ?>&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td width="15"><img src="images/subnavright.gif" width=14 height=36></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td valign="top"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="176" valign="top"><table border=0 align="left" cellpadding=0 cellspacing=0>
          <tr>
            <td background="images/navbg.gif"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="25" background="images/hdrbg.gif" class="sidenewshdr" style="padding:0 10 0 23; ">&nbsp;</td>
          </tr>
               <tr>
                <td height="25" class="menuLink" style="padding:0 10 0 23;" onMouseOver="this.className='navbar'" onMouseOut="this.className='menuLink'"><p><a href="index.php" class="menuLink">:: Home</a></p>                  </td>
              </tr>
              <tr>
                <td><img src="images/navspacer.gif" width="178" height="1"></td>
              </tr>
              <tr>
                <td height="25" class="menuLink" style="padding:0 10 0 23;" onMouseOver="this.className='navbar'" onMouseOut="this.className='menuLink'"><a href="register.php" class="menuLink">:: Register</a></td>
              </tr>
              <tr>
                <td><img src="images/navspacer.gif" width="178" height="1"></td>
              </tr>
              <tr>
                <td height="25" class="menuLink" style="padding:0 10 0 23;" onMouseOver="this.className='navbar'" onMouseOut="this.className='menuLink'"><a href="test2.php" class="menuLink">:: Begin Test</a></td>
              </tr>
              <tr>
                <td><img src="images/navspacer.gif" width="178" height="1"></td>
              </tr>
              <tr>
                <td height="25" class="menuLink" style="padding:0 10 0 23;" onMouseOver="this.className='navbar'" onMouseOut="this.className='menuLink'"><a href="result.php" class="menuLink">:: See Results</a></td>
              </tr>
              <tr>
                <td><img src="images/navspacer.gif" width="178" height="1"></td>
              </tr>
              <tr>
                <td height="25" class="menuLink" style="padding:0 10 0 23;">&nbsp;</td>
              </tr>
            </table></td>
          </tr>
          <tr> </tr>
          <tr>
            <td height="25" background="images/hdrbg.gif" class="sidenewshdr" style="padding:0 10 0 23; ">&nbsp;</td>
          </tr>
          <tr>
            <td height="25"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td valign="top"><img src="images/sidebg2.gif" width="12" height="146"></td>
                <td width="100%" style="background-image:url(images/sidebg1.gif); background-repeat:repeat-x; padding:10;"><p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                  <p><strong><img src="images/sjsulogo_new_sjsu4.gif" width="142" height="86"></strong></p>
                   <p id="aaa">&nbsp;</p></td>
              </tr>
            </table>              </td>
          </tr>
      </table></td>
        <td width="1043" valign="top" style="padding:15px 25px 15px 25px; ">
<?php
		$sqla="SELECT * FROM ip_accessed";
		//echo $sqla;
		
		$resulta=mysql_query($sqla,$link) or die(mysql_error());
		//echo "You Cheaters ! <br>";
			while($newArray=mysql_fetch_array($resulta))
			{
				$user = $newArray['student_ip'];
				//$rip = $newArray['remote_ip'];
				//echo "<br>";
				//echo $user;
				//$user_name = '';
				$sql1 = "SELECT name from student_info where ip_address='$user'";
				$result1=mysql_query($sql1,$link) or die(mysql_error());
				while($newArray1=mysql_fetch_array($result1))
				{
					$user_name = $newArray1['name'];
					echo $user_name . " - " . $newArray['remote_ip'];
					echo("<br/>");
				}
			}
			//$email_temp = $newArray['email'];
			
			
			/*if(	$student_id == $user_temp )
				header("location:register.php?msg=e1&id='$user_temp'");
			else if( $email == $email_temp )	
				header("location:register.php?msg=e2&email='$email_temp'");*/
		$sqla1="SELECT * FROM mac_accessed";
		//echo $sqla;
		
		$resulta1=mysql_query($sqla1,$link) or die(mysql_error());
		//echo "You Cheaters ! <br>";
			while($newArray1=mysql_fetch_array($resulta1))
			{
				$user = $newArray1['student_mac'];
				//$rip = $newArray1['remote_ip'];
				//echo "<br>";
				//echo $user;
				//$user_name = '';
				$sql11 = "SELECT name from student_info where mac_address='$user'";
				$result11=mysql_query($sql11,$link) or die(mysql_error());
				while($newArray11=mysql_fetch_array($result11))
				{
					$user_name = $newArray11['name'];
					echo $user_name . " - " . $newArray1['remote_mac'];
					echo("<br/>");
				}
			}

				
		if ((isset($_SESSION['changed']) && ($_SESSION['changed'] == "changed")) )
		{
			echo "<br/><br/>The SMART students who tried to change their IP/MAC are: <br/><br/>" ;
			$sqlb="SELECT * FROM changed_ip";
			//echo $sqla;
			$resultb=mysql_query($sqlb,$link) or die(mysql_error());
			//echo "You Cheaters ! <br>";
				while($newArrayb=mysql_fetch_array($resultb))
				{
						$user_name = $newArrayb['name'];
						$prev_ip = $newArrayb['previous_ip'];
						$prev_mac = $newArrayb['previous_mac'];
						$new_ip = $newArrayb['new_ip'];
						$new_mac = $newArrayb['new_mac'];
						
						echo " Name       --     Previous IP   --   Previous Mac   --   New IP     --    New MAC <br/><br/>" ;
						echo $user_name . "  -  " . $prev_ip . "  -  " . $prev_mac . "  -  " . $new_ip . "  -  " . $new_mac . " <br/>";
				}
		}
		?></td>
        <td width="50" valign="top"><p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>          </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="19" align="right" background="images/subbasebg.gif">&nbsp;</td>
  </tr>
  <tr>
    <td height="38" align="center" background="images/basebg.gif">&copy; Copyright 2010-2011 CS266.</td>
  </tr>
</table>
</body>
</html>

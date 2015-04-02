<?php
session_start();
if (isset($_SESSION['student_id'])) {
	$msg="Welcome ".$_SESSION["name"]."! Please proceed to begin your test" ;
	$username = $_SESSION["name"];
}
else {
	$msg="Click on Register and register your name and student ID";
	$username = "Guest";
}
$msg1='';
$msg2='';	
if(isset($_GET['msg'])) 
{ 
	if($_GET['msg'] == "ee")
		$msg1 = "Please enter a valid Student ID and password. Looks like you didn't enter any!";
	else if	($_GET['msg'] == "e")
		$msg1 = "Looks like you entered wrong student id or wrong password. Try again! OR";
	else if	($_GET['msg'] == "s")
		$msg2 = "You have successfully logged in.";
}

?>
<html>
<head>
<title>Cyptography and Information Security Quiz</title>
 
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
	

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="Content-Language" CONTENT="english">
<!--<meta http-equiv="refresh" content="5">-->
<link href="style.css" rel="stylesheet" type="text/css">
<style type="text/css">
.cs266 {
	font-size: 24px;
	color: #FFF;
	text-align: center;
}
.Login_status {
	text-align: right;
}
.Page_Name {
	font-size: 14px;
} 
</style>
</head>

<body style="margin:0;">
<table width="100%" height="100%"  border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="140" background="images/topbg.gif"><table width=100% height="96" border=0 align="center" cellpadding=0 cellspacing=0>
      <tr>
        <td width="18" height="82">&nbsp;</td>
         <td width="126" class="cs266" align="left"><img src="images/cslogo.gif" width="126" height="114"></td>
        <td width="299" class="cs266"><strong>CS 166/265 Quiz</strong></td>
        <td colspan=2 align="right" valign="bottom"><table width="218" height="75" cellpadding="0" cellspacing="0">
          <tr>
            <td width="162">Search&nbsp;</td>
            <td width="147" align="middle">
              <input type="text" name="textfield22"></td>
            <td width="28" ><input name="go" type="submit" id="go4" value="go"></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td align="middle">&nbsp;</td>
            <td valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td align="middle">&nbsp;</td>
            <td valign="top">&nbsp;</td>
          </tr>
        </table></td>
        <td width="69">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="36" background="images/subnavbg.gif">
    <table width=100% border=0 align="center" cellpadding=0 cellspacing=0>
      <tr>
        <td width="179"> <img src="images/subnavleft.gif" width=12 height=36></td>
        <td width="324" align="left" class="Page_Name">Home </td>
        
<div id="popupbox"> 
<form name="login" action="login.php" method="post">
<center>Student ID:</center>
<center><input name="studentid" size="14" /></center>
<center>Password:</center>
<center><input name="password" type="password" size="14" /></center>
<center><input type="submit" name="submit" value="login" /></center>
</form>
<br />
<center><a href="javascript:login('hide');">Close</a></center> 
</div> 

        <td width="415" class="Login_status"><?php include("status.php"); ?>&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td width="15"><img src="images/subnavright.gif" width=14 height=36></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td valign="top"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="178" valign="top"><table border=0 align="center" cellpadding=0 cellspacing=0>
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
                <td style="background-image:url(images/sidebg1.gif); background-repeat:repeat-x; padding:10;" width="100%">

                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p><strong><img src="images/sjsulogo_new_sjsu4.gif" width="142" height="86"></strong></p>
                <p id="aaa"></p>
                </td>
              </tr>
            </table>              </td>
          </tr>
        </table></td>
        <td valign="top" style="padding:15px 25px 15px 25px; "><h1>&nbsp;</h1>
<font color="#FF0000">&nbsp;&nbsp;<strong> <?=$msg1?> </strong></font>
<font color="#0099FF">&nbsp;&nbsp;<strong> <?=$msg2?> </strong></font>
<br/><br/>&nbsp;&nbsp;&nbsp;<?=$msg?>
          <p>&nbsp;</p></td>
        <td width="206" valign="top"><p>&nbsp;</p>
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
    <td height="38" align="center" background="images/basebg.gif">&copy; Copyright 2014-2015 SJSU (CS Dept.)</td>
  </tr>
</table>
</body>
</html>

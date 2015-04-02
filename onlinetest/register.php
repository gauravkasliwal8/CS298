<?php
session_start();
if (isset($_SESSION['student_id']))
	$username = $_SESSION["name"];
else
	$username = "Guest";
$msg1='';
$msg2='';	
if(isset($_GET['msg'])) 
{ 
	if($_GET['msg'] == "e1")
		$msg1 = "Duplicate Student ID. Either you are registering twice or someone has already registered with this studentID - ".$_GET['id'];
	else if	($_GET['msg'] == "e2")
		$msg1 = "Duplicate E-mail. Either you are registering twice or someone has already registered with this Email - ".$_GET['email'];
	else if	($_GET['msg'] == "s")
		$msg2 = "Congrats!! You have successfully registered yourself as ".$_SESSION["name"].". Please click on Begin Test, to start with test.";
}

?>
<html>
<head>
<title>CS 166/265 Quiz</title>

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
<script type="text/javascript">
function validate_register(thisform)
{
	
with (thisform)
  	{
  		if (validate_required(name,"Enter full name")==false)
  		{
			name.focus();
			return false;
		}
		if (validate_required(studentid,"Enter Student ID")==false)
  		{
			studentid.focus();
			return false;
		}
		if (validate_email(email,"Enter correct email")==false)
		{
			email.focus();return false;}
  		}
		if (validate_required(email,"Enter password")==false)
  		{
			email.focus();
			return false;
		}
		if (validate_required(password,"Enter password")==false)
  		{
			password.focus();
			return false;
		}
		
}
function validate_required(field, alerttxt)
{
	with (field)
	{
		if (value==null||value=="")
		{
			alert(alerttxt);return false;
		}
		else
		{
			return true;
		}
	}
}
function validate_email(field,alerttxt)
{
	with (field)
  	{
  		apos=value.indexOf("@");
  		dotpos=value.lastIndexOf(".");
  		if (apos<1||dotpos-apos<2)
    	{
			alert(alerttxt);
			return false;
		}
  		else 
		{
			return true;
		}
  	}
}

</script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="Content-Language" CONTENT="english">

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
        <td width="299" class="cs266"><strong>CS 166/CS 265 : Cryptography and Information Security</strong></td>
        <td colspan=2 align="right" valign="bottom"><table width="218" height="75" cellpadding="0" cellspacing="0">
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
        <td width="63">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="36" background="images/subnavbg.gif"><table width=100% border=0 align="center" cellpadding=0 cellspacing=0>
      <tr>
        <td width="179"> <img src="images/subnavleft.gif" width=12 height=36></td>
        <td width="324" align="left" class="Page_Name">Register </td>
        
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
        <td width="175" valign="top" align="left">
        <table border=0 align="left" cellpadding=0 cellspacing=0>
          <tr>
            <td background="images/navbg.gif"><table border="0" cellspacing="0" cellpadding="0">
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
                <td width="6%" valign="top"><img src="images/sidebg2.gif" width="11" height="146"></td>
                <td width="94%" style="background-image:url(images/sidebg1.gif); background-repeat:repeat-x; padding:10;">

                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                  <p><strong><img src="images/sjsulogo_new_sjsu4.gif" width="142" height="86"></strong></p>
                  <p id="aaa">&nbsp;</p></td>
              </tr>
            </table>              </td>
          </tr>
        </table></td>
        <td width="620" valign="top" style="padding:15px 25px 15px 25px; ">
<font color="#FF0000">&nbsp;&nbsp;<strong> <?=$msg1?> </strong></font>
<font color="#0099FF">&nbsp;&nbsp;<strong> <?=$msg2?> </strong></font>
<?php
	if (!isset($_SESSION["student_id"]))
	{           
          if(!isset($_GET['msg']))
          	echo " ";//echo 'Now be a nice kid and enter your correct info. No Batmans & Supermans allowed here.';
?>          
          <form name="form1" id="form1" method="post" action="addStudent.php" onSubmit="return validate_register(this);">

<table width="510" id="rounded-corner" summary="2007 Major IT Companies' Profit">
    <thead>
    	<tr>
        	<th height="35" class="rounded-company" scope="col">&nbsp; Fill in your&nbsp;</th>

            <th scope="col" class="rounded-q4"> CORRECT information here:</th>
        </tr>
    </thead>
        <tfoot>
    </tfoot>
    <tbody>
      <tr>
        <td width="18%">Name</td>
        <td width="82%"><input name="name" id="name" type="text" ></td>
      </tr>
    	<tr>
        	<td>Student ID</td>
            <td>
              <input name="studentid" id="studentid" type="text" >
            </td>
        </tr>
        <tr>
            <td>E-mail</td>
            <td><input name="email" id="email" type="text" ></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input name="password" id="password" type="password"> <br>
              (Type your new password here)</td>
        </tr>
        <tr>
		    <td>&nbsp;</td>
    		<td><input type="submit" name="Submit" id="Submit" value="Submit"></td>
       </tr>
    </tbody>
</table>

</form>
</p>
<?php 
	}
else if(!isset($_GET['msg']))
	echo "You have already registerd, Please begin the test.";
?>
<p>&nbsp;</p></td>
        <td width="154" valign="top"><p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>          </td>
      </tr>
    </table> </td>
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

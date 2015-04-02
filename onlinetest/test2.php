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
	else if	($_GET['msg'] == "e3")
		$msg1 = "Your answers were not saved! Please try again and contact sys admin.";
	else if	($_GET['msg'] == "s")
		$msg2 = "Congrats!! You have successfully registered yourself as ".$_SESSION["name"].". You can now begin the test.";
}

?>
<html>
<head>
<title>CS 166/266 Online Quiz</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="Content-Language" CONTENT="english">
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
        <script type="text/javascript">
function validate_register(thisform)
{
	
with (thisform)
  	{
  		if (validate_required(answer1,"Your answer to Question 1 is blank. If you don't want to answer, type -NA- in the field")==false)
  		{
			answer1.focus();
			return false;
		}
		if (validate_required(answer2,"Your answer to Question 2 is blank. If you don't want to answer, type -NA- in the field")==false)
  		{
			answer2.focus();
			return false;
		}
		if (validate_required(answer3,"Your answer to Question 3 is blank. If you don't want to answer, type -NA- in the field")==false)
  		{
			answer1.focus();
			return false;
		}
		if (validate_required(answer4,"Your answer to Question 4 is blank. If you don't want to answer, type -NA- in the field")==false)
  		{
			answer2.focus();
			return false;
		}
		if (validate_required(answer5,"Your answer to Question 5 is blank. If you don't want to answer, type -NA- in the field")==false)
  		{
			answer1.focus();
			return false;
		}
		if (validate_required(answer6,"Your answer to Question 6 is blank. If you don't want to answer, type -NA- in the field")==false)
  		{
			answer2.focus();
			return false;
		}
		if (validate_required(answer7,"Your answer to Question 7 is blank. If you don't want to answer, type -NA- in the field")==false)
  		{
			answer1.focus();
			return false;
		}
		if (validate_required(answer8,"Your answer to Question 8 is blank. If you don't want to answer, type -NA- in the field")==false)
  		{
			answer2.focus();
			return false;
		}
		if (validate_required(answer9,"Your answer to Question 9 is blank. If you don't want to answer, type -NA- in the field")==false)
  		{
			answer1.focus();
			return false;
		}
		if (validate_required(answer10,"Your answer to Question 10 is blank. If you don't want to answer, type -NA- in the field")==false)
  		{
			answer2.focus();
			return false;
		}
		if (validate_required(answer11,"Your answer to Question 11 is blank. If you don't want to answer, type -NA- in the field")==false)
  		{
			answer1.focus();
			return false;
		}
		if (validate_required(answer12,"Your answer to Question 12 is blank. If you don't want to answer, type -NA- in the field")==false)
  		{
			answer2.focus();
			return false;
		}

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
        <td width="490" class="cs266"><strong>&nbsp; &nbsp;&nbsp;&nbsp;CS 166/265 Online Quiz</strong></td>
        <td colspan=2 align="right" valign="bottom"><table width="218" height="75" cellpadding="0" cellspacing="0">
          <tr>
            <td width="162">Search&nbsp;</td>
            <td width="147" align="middle">
              <input type="text" name="textfield22"></td>
            <td width="28"><input name="go" type="submit" id="go4" value="go"></td>
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
        <td width="62">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="36" background="images/subnavbg.gif"><table width=100% border=0 align="center" cellpadding=0 cellspacing=0>
      <tr>
        <td width="179"> <img src="images/subnavleft.gif" width=12 height=36></td>
        <td width="324" align="left" class="Page_Name">Quiz Content : Chapter 1 to 5</td>
        
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
if (!isset($_SESSION['student_id'])) {
	echo "You need to register before you begin the test";
}
else if(isset($_SESSION['done']))
{
	echo "Since you have already submitted you test, you need to logout and retake the test if you want.";
}
else
{
?>        
<p> Please submit the Quiz here : </p>

<form name="form1" id="form1" method="post" action="submitTest.php" onSubmit="return validate_register(this);">
<div >
  
	<div >Directions: Read each problem carefully and provide complete but concise answers. Wish you all the best !!! :)<br/><br/><br/>
1. (10 points) In the context of cryptography, define the following terms.<br/>
(a) Confidentiality<br/>
(b) Integrity <br/><br/>
Answer:<br/>
    <textarea name="answer1" cols="90" rows="10"></textarea>     
	<!--<br/> Click submit on below tab. -->
    <hr>
	</div>
   
2. (10 points) Recall that a block cipher can be viewed as a generalization of a classic
codebook cipher.<br/>
(a) In a codebook cipher, what is an additive and purpose does it serve?<br/>
(b) In a modern block cipher, what is the analog of an additive? Explain.<br/><br/>
Answer:<br/>
    <textarea name="answer2" cols="90" rows="10"></textarea>     
	<!--<br/> Click submit on below tab. -->
    <hr>
	</div>
	
3. (10 points)
(a) Give the formula (or formulas) that define Feistel cipher encryption.<br/>
(b) Give the formula (or formulas) that define Feistel cipher decryption.<br/><br/>
Answer:<br/>
    <textarea name="answer3" cols="90" rows="10"></textarea>     
	<!--<br/> Click submit on below tab. -->
    <hr>
	</div>
	
4. (10 points) This problem deals with block cipher modes.<br/>
(a) Give the formula(s) for CBC mode encryption and decryption.<br/>
(b) Give the formula(s) used to compute a MAC.<br/><br/>
Answer:<br/>
    <textarea name="answer4" cols="90" rows="10"></textarea>     
	<!--<br/> Click submit on below tab. -->
    <hr>
	</div>

5. (10 points) Fill in the entries in the following table with \yes" or \no".
<p>Required (yes or no)  integrity non-repudiation</p>
MAC<br/>
HMAC<br/>
CRC<br/>
digital signature<br/><br/>
you can wirte ans in the form (MAC yes/no yes/no)<br/>
Answer:<br/>
    <textarea name="answer5" cols="90" rows="10"></textarea>     
	<!--<br/> Click submit on below tab. -->
    <hr>
	</div>
	
6. (10 points) Suppose that Alice's RSA public key is (N; e) = (95; e) and Alice's
private key is d = 5.<br/>
(a) Give the result when Alice digitally signs the message M = 3.<br/>
(b) Determine Alice's public encryption exponent e.<br/><br/>
Answer:<br/>
    <textarea name="answer6" cols="90" rows="10"></textarea>     
	<!--<br/> Click submit on below tab. -->
    <hr>
	</div>
	
7. (10 points) Suppose Bob finds a digital certificate on the Internet that contains
(M; S), where M = (\Alice"; Alice's public key), and S = [h(M)]CA, and \CA" is
a certificate authority.<br/><br/>
(a) Precisely, what does Bob compute to verify the signature on the certificate?<br/>
(b) Assuming that Bob trusts the CA, list the 2 crucial pieces of information that
Bob gains by verifying the signature on the certificate.<br/>
Answer:<br/>
    <textarea name="answer7" cols="90" rows="10"></textarea>     
	<!--<br/> Click submit on below tab. -->
    <hr>
	</div>
	
8. (10 points) This problem deals with cryptographic hash functions.<br/>
(a) List the 5 properties that a cryptographic hash function must satisfy.<br/>
(b) Suppose that a secure cryptographic hash function h generates an n-bit out-
put. According to the birthday problem, about how many hashes must you
compute before you expect to find one collision?<br/><br/>
Answer:<br/>
    <textarea name="answer8" cols="90" rows="10"></textarea>     
	<!--<br/> Click submit on below tab. -->
    <hr>
	</div>
	
9. (10 points) Suppose that Sally (a server) needs to share a symmetric key KA with
Alice, a symmetric key KB with Bob, a symmetric key KC with Charlie, and so
on. Then Sally could generate the keys KA, KB, KC , : : : and store them in a
database. An alternative is key diversification, where Sally generates and stores a
single key KS, with KA = h(Alice;KS) and the keys KB, KC, : : : being generated
in a similar manner.<br/>
(a) Give one significant advantage of key diversification as compared to storing
keys in a database.<br/>
(b) Give one significant advantage storing keys in a database as compared to key
diversification.<br/><br/>
Answer:<br/>
    <textarea name="answer9" cols="90" rows="10"></textarea>     
	<!--<br/> Click submit on below tab. -->
    <hr>
	</div>
	
10. (10 points) In class, we discussed a steganographic method for hiding information
in uncompressed image files.<br/>
(a) Explain in detail how this method works.<br/>
(b) Clearly explain why this method is not robust.<br/><br/>
Answer:<br/>
    <textarea name="answer10" cols="90" rows="10"></textarea>     
	<!--<br/> Click submit on below tab. -->
    <hr>
	</div>
	
Extra credit: (5 points) Given X, a key K, and a message consisting of three plaintext
blocks, P0, P1, and P2, determine an IV (in terms of X, K, P0, P1, and P2) so that the
MAC for this message is equal to X.<br/><br/>
Answer:<br/>
    <textarea name="answer11" cols="90" rows="10"></textarea>     
	<!--<br/> Click submit on below tab. -->
    <hr>
	</div>
	

Extra Credit : (5 points) Explain the methods you used to cheat and how you tried it.
Answer:<br/>
    <textarea name="answer12" cols="90" rows="10"></textarea>     
	<!--<br/> Click submit on below tab. -->
    <hr>
	</div>
	
	
 <div id="tabs-6">
    <input type="submit" name="Submit" id="Submit" value="Submit"><br/>
    </div>  


</form>

<?php 
} 
?>

<p>&nbsp;</p></td>
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
    <td height="38" align="center" background="images/basebg.gif">&copy; Copyright 2014-2015 SJSU (CS Dept.)</td>
  </tr>
</table>
</body>
</html>


<?php

if(!(isset($_SESSION["student_id"])))
{
	$welcome = 'Welcome <strong>Guest</strong> | <a href="javascript:login(\'show\');">Login</a> | <a href="register.php">Register</a>';
}
else if((isset($_SESSION["student_id"])))
{
	$welcome = 'Welcome <strong>'.$_SESSION['name'].'</strong> | <a href="logout.php">Logout</a>';
}

echo $welcome;
?>
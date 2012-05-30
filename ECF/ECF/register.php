<?php 
session_start();
$_SESSION['newreg'] = $_POST['newreg'];

// mail check function
function check_email($a2_email) {
$validation = TRUE;
if(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $a2_email)) {
$validation = FALSE;
}
return $validation;
}
function generatePassword ($length = 8)
{

  // start with a blank password
  $password = "";

  // define possible characters
  $possible = "0123456789bcdfghjkmnpqrstvwxyz"; 
    
  // set up a counter
  $i = 0; 
    
  // add random characters to $password until $length is reached
  while ($i < $length) { 

    // pick a random character from the possible ones
    $char = substr($possible, mt_rand(0, strlen($possible)-1), 1);
        
    // we don't want this character if it's already in the password
    if (!strstr($password, $char)) { 
      $password .= $char;
      $i++;
    }

  }

  // done!
  return $password;

}

$a2_email = $_POST["a2_email"];


if ($a2_email != ''){



if (check_email($a2_email)){

	
include 'dbconnect.php';

$con = mysql_connect($db_host, $db_user, $db_password);

if (!mysql_connect($db_host, $db_user, $db_password))
    die("Can't connect to database");

if (!mysql_select_db($db_db))
    die("Can't select database");
	
$query1 = "SELECT * FROM users WHERE a2_email = '{$a2_email}'";

$result = mysql_query($query1);



if (mysql_num_rows($result) == 0) {

$pass = generatePassword();
		
		
		$con = mysql_connect($db_host, $db_user, $db_password);

		if (!mysql_connect($db_host, $db_user, $db_password))
			die("Can't connect to database");
		
		if (!mysql_select_db($db_db))
			die("Can't select database");
		
		$pass1 = md5($pass);
		
		
			
	
		$query = "INSERT INTO users (a2_email,	password, status, ip, creation_timestamp) 
		VALUES ('{$a2_email}', '{$pass1}', '1','".$_SERVER['REMOTE_ADDR']."', CURRENT_TIMESTAMP)"; 
		
 		
		//echo $query;
		mysql_query($query) or die('Error, insert query failed');
		$_SESSION['a2_email']=$a2_email;
		$_SESSION['logged_in']=TRUE;
		
		mysql_close($con);
		
//Sending registration emails		
	require_once 'lib/swift_required.php';
	
	$transport = Swift_MailTransport::newInstance();
	
	$mailer = Swift_Mailer::newInstance($transport);		
		//Send mail to user
	$message = Swift_Message::newInstance('ECF - Account created!')
  ->setFrom(array('contactus@evancornishfoundation.org.uk' => 'Evan Cornish Foundation'))
  ->setTo(array($a2_email));
  
   $message->setBody("<p style='font-size: 11px; font-family: Trebuchet MS;'>" .
	  "Hello,<br /><br /> Thank you for registering with <b>Evan Cornish Foundation</b>, here are your login details:<br /><br />" .
	  "Your Login is: <b>$a2_email</b><br />" .
	  "Your Password is: <b>$pass</b><br /><br/>" .
	  "Kind regards,<br/>" .
	  "<b>ECF</b>" .
	  "</p>", "text/html");
	$result = $mailer->send($message);

// Admin email after registration

		$message = Swift_Message::newInstance('New registered member')
	  ->setFrom(array('contactus@evancornishfoundation.org.uk' => 'Evan Cornish Foundation'))
	  ->setTo(array('tom@pixelgroup.co.uk','rachel@technicagroup.co.uk','contactus@evancornishfoundation.com'));
	  
	   $message->setBody("<p style='font-size: 11px; font-family: Trebuchet MS;'>" .
	  "Hello,<br /><br />A new member has registered at <b>ECF</b><br />" .
	  "Their email is: <b>$a2_email</b><br /><br/>" .
	  "Kind regards,<br/>" .
	  "<b>ECF</b>" .
	  "</p>", "text/html");
	$result = $mailer->send($message);
		
		Header("Location:  sessions.php"); 





} else {

Header("Location: login.php?message=1");

}

mysql_close($con);

} else {

Header("Location: login.php?message=3");

}



} else {

Header("Location: login.php?message=3");

}






?>
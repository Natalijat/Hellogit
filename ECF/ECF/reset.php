<?php header('P3P: CP="CAO PSA OUR"'); 
$a2_email = addslashes($_POST["a2_email"]);

//Generate a new password
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

include 'dbConnect.php';

$con = mysql_connect($db_host, $db_user, $db_password);

if (!mysql_connect($db_host, $db_user, $db_password))
    die("Can't connect to database");

if (!mysql_select_db($db_db))
    die("Can't select database");
	
//Check if the email exists on the database
	
$result = mysql_query("SELECT * 
FROM users  
WHERE a2_email = '{$a2_email}' AND status = '1'");

$row = mysql_fetch_array( $result );

//Email not found
if(mysql_num_rows($result)==0){ 
Header("Location: reset-password.php?message=0");

break;};

$pass = generatePassword();
		
		
		$con = mysql_connect($db_host, $db_user, $db_password);

		if (!mysql_connect($db_host, $db_user, $db_password))
			die("Can't connect to database");
		
		if (!mysql_select_db($db_db))
			die("Can't select database");
		
		$pass1 = md5($pass);

$query = "
UPDATE users 
SET password = '{$pass1}'
WHERE a2_email = '{$a2_email}'"; 
mysql_query($query) or die('Error, insert query failed');

mysql_close($con);

//Send mail to user
require_once 'lib/swift_required.php';
	
	$transport = Swift_MailTransport::newInstance();
	
	$mailer = Swift_Mailer::newInstance($transport);		
	$message = Swift_Message::newInstance('ECF - Password reset')
  ->setFrom(array('contactus@evancornishfoundation.org.uk' => 'Evan Cornish Foundation'))
  ->setTo(array($a2_email));
  
   $message->setBody("<p style='font-size: 11px; font-family: Trebuchet MS;'>" .
	  "Hello,<br /><br /> You have requested to have your password reset. Here are your new login details:<br /><br />" .
	  "Your Login is: <b>$a2_email</b><br />" .
	  "Your new Password is: <b>$pass</b><br /><br/>" .
	  "Kind regards,<br/>" .
	  "<b>ECF</b>" .
	  "</p>", "text/html");
	$result = $mailer->send($message);


Header("Location: reset-password.php?message=1"); break;
	
	
	

?>
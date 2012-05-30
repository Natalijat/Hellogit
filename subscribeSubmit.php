<?php
// mail check function
function check_email($email) {
$validation = TRUE;
if(!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$", $email)) {
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



// function check birth date 


function checkData($mydate) {
    
	  
    list($yy,$mm,$dd)=explode("-",$mydate);
    if (is_numeric($yy) && is_numeric($mm) && is_numeric($dd))
    {
        return checkdate($mm,$dd,$yy);
    }
	
	
	
    return false;           
} 


$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$sexe = $_POST["sexe"];
$bday = $_POST["year"].'-'.$_POST["month"].'-'.$_POST["day"];
$email = $_POST["email"];
$community_id = '1';






if ($first_name != '' && $last_name != '' && $email != '' && checkData($bday)){



if (check_email($email)){

	
include 'dbConnect.php';

$con = mysql_connect($db_host, $db_user, $db_pwd);

if (!mysql_connect($db_host, $db_user, $db_pwd))
    die("Can't connect to database");

if (!mysql_select_db($database))
    die("Can't select database");
	
$query1 = "SELECT * FROM user WHERE email = '{$email}'";

$result = mysql_query($query1);






if (mysql_num_rows($result) == 0) {

$pass = generatePassword();
		
		
		$con = mysql_connect($db_host, $db_user, $db_pwd);

		if (!mysql_connect($db_host, $db_user, $db_pwd))
			die("Can't connect to database");
		
		if (!mysql_select_db($database))
			die("Can't select database");
		
		$pass1 = md5($pass);
		
		
		//Full Texts  	status 	access 	first_name 	last_name 	email 	password 	sex 	bday 	user_id 	timestamp 	last_login
		$query = "INSERT INTO user (status,	access,	first_name,	last_name,	email,	password, 	sex, 	bday, timestamp, ip, community_id) 
		VALUES ('1', '2', '{$first_name}', '{$last_name}',	'{$email}',	'{$pass1}', '{$sexe}', '{$bday}', CURRENT_TIMESTAMP, '".$_SERVER['REMOTE_ADDR']."', '{$community_id}' )"; 
		
 		mysql_query($query) or die('Error, insert query failed');
		
		mysql_close($con);
		
		//Send mail to user

		$TO = $email;
		$h = "From: " . $TO;
		$message = 
		
		"Your Login is :".$email."\n".
		"Your new password is : ".$pass."\n\n".
		"Best regards, \n".
		"Thierry (1)\n".
		"www.twied.com";
		$subject = "Message from TWIED.COM : Account created!";
		
		mail($TO, $subject, $message, $h); 


				// Admin email
				$TO = "thierry.sequeira@gmail.com";
				$h = "From: " . $TO;
				$message = "";
				$subject = "Message from TWIED.COM : New member";
				while (list($key, $val) = each($HTTP_POST_VARS))
				 {
				 $message .= "$key : $val\n";
				 }
				mail($TO, $subject, $message, $h);


		
		Header("Location: subscribe.php?message=1"); 





} else {

Header("Location: subscribe.php?message=0");

}

mysql_close($con);

} else {

Header("Location: subscribe.php?message=0");

}



} else {

Header("Location: subscribe.php?message=2");

}






?>
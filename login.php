<?php header('P3P: CP="CAO PSA OUR"'); 
$email = addslashes($_POST["email"]);
$password = md5($_POST["password"]);

// Validate Login information
include 'dbConnect.php';
$table = 'user';



if (!mysql_connect($db_host, $db_user, $db_pwd))
    die("Can't connect to database");

if (!mysql_select_db($database))
    die("Can't select database");

$result = mysql_query("SELECT u.first_name, u.last_name, u.sex, u.email, u.bday, date_FORMAT(u.bday, '%M %e, %Y') as bday2, u.user_id, u.access, u.last_login, u.emailn, u.country, u.city, u.community_id, p.pic2 
FROM user u 
	LEFT JOIN profile p ON p.user_id = u.user_id
WHERE u.email = '{$email}' AND u.password = '{$password}' AND u.status = '1'");

$row = mysql_fetch_array( $result );

if(mysql_num_rows($result)==0){ 
Header("Location: index.php");

break;};

// Start Session and populate variables
session_start();
$_SESSION['first_name'] = $row['first_name'];
$_SESSION['id'] = $row['user_id'];
$_SESSION['last_name'] = $row['last_name'];
$_SESSION['bday'] = $row['bday'];
$_SESSION['bday2'] = $row['bday2'];
$_SESSION['sex'] = $row['sex'];
$_SESSION['email'] = $row['email'];
$_SESSION['access'] = $row['access'];
$_SESSION['emailn'] = $row['emailn'];
$_SESSION['country'] = $row['country'];
$_SESSION['city'] = $row['city'];
$_SESSION['community'] = $row['community_id'];
$pic2 =  $row['pic2'];

$ll = $row['last_login'];

$UID = $_SESSION['id'];
//update last login timestamp

$con = mysql_connect($db_host, $db_user, $db_pwd);

if (!mysql_connect($db_host, $db_user, $db_pwd))
    die("Can't connect to database");

if (!mysql_select_db($database))
    die("Can't select database");

$query = "
UPDATE user 
SET last_login = CURRENT_TIMESTAMP, ip = '".$_SERVER['REMOTE_ADDR']."'
WHERE user_id = '{$UID}'"; 

if ($ll == '0000-00-00 00:00:00'){

			$query2 = "INSERT INTO profile (
			user_id ,
			description ,
			biographie ,
			need
			)
			VALUES (
			'{$UID}', '', '', ''
			)";
			mysql_query($query2) or die('Error, insert query failed');



			

}

mysql_query($query) or die('Error, insert query failed');

mysql_close($con);


if(strlen($pic2)>0){
	
	// check profile pic
	Header("Location: home.php"); break;
	
	}else{
		
		// Load Home Page
		Header("Location: welcome.php");
}
?>
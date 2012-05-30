<?php header('P3P: CP="CAO PSA OUR"'); 
$a2_email = addslashes($_POST["a2_email"]);
$password = md5($_POST["password"]);

include 'dbConnect.php';

if (!mysql_connect($db_host, $db_user, $db_password))
    die("Can't connect to database");

if (!mysql_select_db($db_db))
    die("Can't select database");
	
$result = mysql_query("SELECT id, a2_email 
FROM users  
WHERE a2_email = '{$a2_email}' AND password = '{$password}' AND status = '1'");

$row = mysql_fetch_array( $result );

if(mysql_num_rows($result)==0){ 
Header("Location: login.php?message=0");

break;};

// Start Session and populate variables
session_start();
$_SESSION['logged_in']=TRUE;
$_SESSION['id'] = $row['id'];
$_SESSION['a2_email'] = $row['a2_email'];
$ll = $row['last_login'];

//update last login timestamp

$con = mysql_connect($db_host, $db_user, $db_password);

if (!mysql_connect($db_host, $db_user, $db_password))
    die("Can't connect to database");

if (!mysql_select_db($db_db))
    die("Can't select database");
$timestamp=date("Y-m-d H:i:s",time());
$query = "
UPDATE users 
SET last_login ='{$timestamp}', ip = '".$_SERVER['REMOTE_ADDR']."'
WHERE a2_email = '{$a2_email}'"; 
mysql_query($query) or die('Error, insert query failed');


mysql_close($con);

Header("Location: sessions.php"); break;
	
	
	

?>
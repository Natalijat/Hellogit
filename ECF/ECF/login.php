<?php 
session_start(); 
$pageid = 4;

$pagetitle = "Login";

require("header.php"); 
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']=TRUE)
{
Header("Location: application-form.php"); break;}

?>
<ul id="breadcrumbs">
	<li class="front_page bc-arrow"><a href="index.php">Home</a></li>
	<li class="current"><a href="login.php">Application form</a></li>
</ul>
<div id="main-area">
	<div id="subnav-area">
		<h2>HOW TO APPLY</h2>
		<ul id="sub-nav">
			<li><a href="how-to-apply.php">Overview</a></li>
			<li class="current_page_item"><a href="login.php">Application form</a></li>
		</ul>
	</div>
	<div id="content-area">
		<div id="content-area-main-full">
			<h1>Login</h1>
            <div id="login">
            	<?php if(isset($_GET['message'])){
			$message = $_GET['message'];
			switch ($message) {
				case 0:
					echo "Your email or password are incorrect"."<br/><br/>";
					break;
				default:
 				    echo "";
				} 
			}?>
            	<form id='login1' action='check-login.php' method='post' accept-charset='UTF-8'>
				<fieldset >
                <p><label for='a2_email' >Email*:</label><br/>
                <input type='text' name='a2_email' id='a2_email'  maxlength="50" /></p>
                <p><label for='password' >Password*:</label><br/>
                <input type='password' name='password' id='password' maxlength="50" /></p>
                <input type='submit' name='Submit' value='Login' class="red-btn"/>
                <a href="../ECF/reset-password.php">Forgot password?</a>
                </fieldset>
                </form><br/>
            </div>
            
            
            <div id="registration">
            	<h1>Register</h1>
               	<p>If you do not have an account, please enter your email address and we will send you the password by email.</p>
                <?PHP 
			if(isset($_GET['message'])){
			$message = $_GET['message'];
			switch ($message) {
				case 1:
					echo "Account already exists - use password reset "."<br/><br/>";
					break;
				case 2:
					echo "Your account is created and your password sent to your mailbox! <br><br> If you have Hotmail, look in the Spam folder"."<br/><br/>";
					break;
				case 3:
					echo "Invalid email address!"."<br/><br/>";
					break;	
				default:
 				    echo "";
				} 
			}?>
                <form id='registration1' action='register.php' method='post' accept-charset='UTF-8'>
				<fieldset >
                <p><label for='a2_email' >Email*:</label><br/>
                <input type='text' name='a2_email' id='a2_email'  maxlength="50" /></p>
                <input type="hidden" name="newreg" id="newreg" value="1">
                <input type='submit' name='Submit1' value='Register' class="red-btn"/>
                </fieldset>
                </form>
            </div>
		</div>
	</div>
</div>
<?php require("footer.php"); ?>
			
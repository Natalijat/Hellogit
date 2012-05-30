<?php require('app.php');

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
			<h1>Password reset</h1>
            <div id="resetpass">
           	<p>Enter your email address below and click Reset for a new password to be sent to your email address.</p>
            
            <?php if(isset($_GET['message'])){
			$message = $_GET['message'];
			switch ($message) {
				case 0:
					echo "<p><strong>The email you provided was not found in the database.</strong><p>";
					break;
				case 1:
					echo "<p><strong>A new password was sent to your mailbox.</strong><p>";
					break;
				default:
 				    echo "";}}?> 
            	<form id='resetpassword' action='reset.php' method='post' accept-charset='UTF-8'>
				<fieldset >
                <p><label for='a2_email' >Email*:</label><br/>
                <input type='text' name='a2_email' id='a2_email'  maxlength="50" /></p>
                <input type='submit' name='Submit' value='Reset' class="red-btn"/>
                </fieldset>
                </form><br/>
            </div>
		</div>
	</div>
</div>
<?php require("footer.php"); ?>
			
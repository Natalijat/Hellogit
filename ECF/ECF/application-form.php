<?php require('app.php');

$pageid = 4;

$pagetitle = "Application form";
require("header.php"); 
require("access.php");

?>
<ul id="breadcrumbs">
	<li class="front_page bc-arrow"><a href="index.php">Home</a></li>
	<li class="current"><a href="application-form.php">Application form</a></li>
</ul>
<div id="main-area">
	<div id="subnav-area">
		<h2>HOW TO APPLY</h2>
		<ul id="sub-nav">
			<li><a href="how-to-apply.php">Overview</a></li>
			<li class="current_page_item"><a href="application-form.php">Application form</a></li>
		</ul>
	</div>
	<div id="content-area">
		<div id="content-area-main-full">
			<h1>Application form</h1>
            <?PHP 
			if(isset($_SESSION['newreg']) && $_SESSION['newreg']==1 ){
			echo "<p>Thank you. Your account is created and your password sent to your mailbox! If you have Hotmail, look in the Spam folder.</p>";
			$_SESSION['newreg'] = 0;}?>
			<p>Please complete all fields below.</p>
			<form action="application-form2.php" method="post" id="applicationform1" name="applicationform1">
			<div id="application">
				<div id="details">
					<p class="flow"><img src="css/images/application/details.png" height="47" width="616" /></p>
					<p class="erroroo" style="display:none;"></p>
				<div class="application-box">
				
				<div class="code">
					<p>A1.</p>
				</div>
				
				<div class="fields">
					
                    <label for="a1_name_organisation">Name of organisation</label>
					<input id="a1_name_organisation" name="a1_name_organisation" value="<?php if (isset($_SESSION['a1_name_organisation'])){echo cleanInput($_SESSION['a1_name_organisation']);} ?>" type="text" class="required large" />
                    
					<label for="a1_name_applicant">Name of applicant</label>
					<input id="a1_name_applicant" name="a1_name_applicant" value="<?php if (isset($_SESSION['a1_name_applicant'])){echo cleanInput($_SESSION['a1_name_applicant']);} ?>" type="text" class="required large" />
					
					<label for="a1_type_organisation">Type of organisation</label>
					<select id="a1_type_organisation" class="large" name="a1_type_organisation">
						<option <?php if (isset($_SESSION['a1_type_organisation']) && $_SESSION['a1_type_organisation'] == 'Charity') { echo "selected"; } ?>>Charity</option>
						<option <?php if (isset($_SESSION['a1_type_organisation']) && $_SESSION['a1_type_organisation'] == 'Not For Profit') { echo "selected"; } ?>>Not For Profit</option>
						<option <?php if (isset($_SESSION['a1_type_organisation']) && $_SESSION['a1_type_organisation'] == 'Individual') { echo "selected"; } ?>>Individual</option>
						<option <?php if (isset($_SESSION['a1_type_organisation']) && $_SESSION['a1_type_organisation'] == 'Other') { echo "selected"; } ?>>Other</option>
					</select>
					
					<label for="a1_registered_number">If charity, what is registered number</label>
					<input id="a1_registered_number" value="<?php if (isset($_SESSION['a1_registered_number'])) {echo cleanInput($_SESSION['a1_registered_number']);} ?>" name="a1_registered_number" type="text" class="required large" />
					
					<label for="a1_organisation_established">Year organisation was established</label>
					<input id="a1_organisation_established" value="<?php if (isset($_SESSION['a1_organisation_established'])) { echo cleanInput($_SESSION['a1_organisation_established']);} ?>" name="a1_organisation_established" type="text" class="required large" />

					
					<label for="a1_website_address">Website address</label>
					<input id="a1_website_address" value="<?php if(isset($_SESSION['a1_website_address'])) { echo cleanInput($_SESSION['a1_website_address']);} ?>" name="a1_website_address" type="text" class="required large" />
					
				</div>
				
				</div>
				
				<div class="application-box">
				
				<div class="code">
					<p>A2.</p>
				</div>
				
				<div class="fields">
					
					<label for="a2_key_person">Key person dealing with application</label>
					<div class="smalltext"><input id="a2_key_person" value="<?php if (isset($_SESSION['a2_key_person'])) {echo cleanInput($_SESSION['a2_key_person']);} ?>" name="a2_key_person" type="text" class="required large" /><span class="tiny">Name</span></div>
					
					<label for="a2_address">Address</label>
					<textarea id="a2_address" name="a2_address" cols="10" rows="5" class="required large" rows=""><?php if (isset($_SESSION['a2_address'])) {echo cleanInput($_SESSION['a2_address']);} ?></textarea>
					
					<label for="a2_telephone">Telephone</label>
					<input id="a2_telephone" value="<?php if (isset($_SESSION['a2_telephone'])) {echo cleanInput($_SESSION['a2_telephone']);} ?>" name="a2_telephone" type="text" class="required large" />
					
					<label for="a2_email">Email</label>
					<input id="a2_email" name="a2_email" value="<?php if (isset($_SESSION['a2_email'])) {echo cleanInput($_SESSION['a2_email']);} ?>" type="text" class="required email large" />
					
									
				</div>
				
				</div>
				
				<div class="application-box">
				
				<div class="code">
					<p>A3.</p>
				</div>
				
				<div class="fields">
                

					
					<label for="a3_organisation_activities">Describe you organisation and the main activities</label>
					<div class="smalltext"><textarea id="a3_organisation_activities" name="a3_organisation_activities" cols="10" rows="4" class="required large" rows=""><?php if (isset($_SESSION['a3_organisation_activities'])) { echo  cleanInput($_SESSION['a3_organisation_activities']);} ?></textarea><span class="tiny">Between 50 an 100 words</span></div>
					
									
				</div>
				
				</div>

			
					<p class="buttons"><input type="submit" class="red-btn noWarn" name="submit" value="Next">  </p>
					
				</div>
			
			
			</div>
			</form>
		</div>
	</div>
</div>
<?php require("footer.php"); ?>
			
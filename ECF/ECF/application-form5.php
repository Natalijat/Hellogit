<?php 

require('app.php');

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
			<p>Please complete all fields below.</p>
			<form action="app-form-process.php" method="post" id="applicationform5" name="applicationform5">
			<div id="application">
				<div id="approach">
					<p class="flow"><img src="css/images/application/approach.png" height="47" width="616" /></p>
					<p class="erroroo" style="display:none;"></p>
					<div class="application-box">
				<div class="code">
					<p>E1.</p>
				</div>
				<div class="fields">
					<h3>Previous applications</h3>
					 <label class="radiobtn" for="e1_previous_application"><input type="radio" name="e1_previous_application" id="e1_previous_application1" value="Yes" <?php if (isset($_SESSION['e1_previous_application']) && $_SESSION['e1_previous_application'] == 'Yes') { echo "checked"; } ?> /> Yes</label>
					 <label class="radiobtn" for="e1_previous_application"><input type="radio" name="e1_previous_application" id="e1_previous_application2" value="No" <?php if (isset($_SESSION['e1_previous_application']) && $_SESSION['e1_previous_application'] == 'No') { echo "checked"; } ?> /> No</label>
					 
					 <label for="e1_previous_application" class="error" style="display:none;">Please select one.</label> 
					 
					 <h3>Were you successful in obtaining financial support</h3>
					 <label class="radiobtn" for="e1_successful"><input type="radio" name="e1_successful" id="e1_successful1" value="Yes" <?php if (isset($_SESSION['e1_successful']) && $_SESSION['e1_successful'] == 'Yes') { echo "checked"; } ?> /> Yes</label>
					 <label class="radiobtn" for="e1_successful"><input type="radio" name="e1_successful" id="e1_successful2" value="No" <?php if (isset($_SESSION['e1_successful']) && $_SESSION['e1_successful'] == 'No') { echo "checked"; } ?> /> No</label> 
					 
					 <label for="e1_successful" class="error" style="display:none;">Please select one.</label> 
					 
					 <label for="e1_list_amounts">Please list amounts, dates and awards</label>
					<input id="e1_list_amounts" name="e1_list_amounts" value="<?php if (isset($_SESSION['e1_list_amounts'])) {echo cleanInput($_SESSION['e1_list_amounts']);} ?>" type="text" class="large" />
				
					
				</div>
				</div>
				
				<div class="application-box">
				<div class="code">
					<p>E2.</p>
				</div>
				<div class="fields">
					<label for="e2_reference_name">Contact details of professional person or organisation we can contact for a reference</label>
					
					<div class="smalltext"><input id="e2_reference_name" value="<?php if (isset($_SESSION['e2_reference_name'])) {echo cleanInput($_SESSION['e2_reference_name']);} ?>" name="e2_reference_name" type="text"  class="required large" /><span class="tiny">Name</span></div>
					
					<div class="smalltext"><textarea id="e2_reference_address" name="e2_reference_address" cols="" class="required large" rows=""><?php if (isset($_SESSION['e2_reference_address'])) {echo cleanInput($_SESSION['e2_reference_address']);} ?></textarea>
<span class="tiny">Address</span></div>
					
					
					<div class="smalltext"><input id="e2_reference_phone" value="<?php if (isset($_SESSION['e2_reference_phone'])) {echo cleanInput($_SESSION['e2_reference_phone']);} ?>" name="e2_reference_phone" type="text" class="required large" /><span class="tiny">Telephone</span></div>
					
					
					<div class="smalltext"><input id="e2_reference_email" value="<?php if (isset($_SESSION['e2_reference_email'])) {echo cleanInput($_SESSION['e2_reference_email']); }?>" name="e2_reference_email" type="text" class="required email large" /><span class="tiny">Email</span></div>
					
					
					<div class="smalltext"><input id="e2_reference_relationship" name="e2_reference_relationship" value="<?php if (isset($_SESSION['e2_reference_relationship'])) {echo cleanInput($_SESSION['e2_reference_relationship']);} ?>" type="text" class="required large" /><span class="tiny">Relationship to your organisation</span></div>
					
				</div>
				</div>
					
					
				<div class="application-box">
				<div class="code">
					<p>E3.</p>
				</div>
				<div class="fields">
					<label for="e3_why_ecf">Why have you chosen the Evan Cornish Foundation</label>
					<textarea id="e3_why_ecf" name="e3_why_ecf" cols="" class="required large" rows=""><?php if (isset($_SESSION['e3_why_ecf'])) {echo $_SESSION['e3_why_ecf']; }?></textarea>
				</div>
				</div>
				
				<div class="application-box">
				<div class="code">
					<p>E4.</p>
				</div>
				<div class="fields">
					<label for="e4_what_difference">What difference will a grant from ECF make to your project</label>
					<textarea id="e4_what_difference" name="e4_what_difference" cols="" class="required large" rows=""><?php if(isset($_SESSION['e4_what_difference'])) { echo $_SESSION['e4_what_difference']; }?></textarea>
				</div>
				</div>
				
				<div class="application-box">
				<div class="code">
				</div>
				<div class="fields">
					<h3>Terms of agreement</h3>
					<p>Please note that if you receive a grant, payments are made by BACS direct credit.</p>
					<p>I confirm that I am authorised to make an application and certify that to the best of my knowledge, all information provided is correct.</p>
					<label class="radiobtn" for="terms_agreement"><input type="checkbox" name="terms_agreement" id="terms_agreement" value="Yes" class="required" <?php if (isset($_SESSION['terms_agreement']) && $_SESSION['terms_agreement'] == 'Yes') { echo "checked"; } ?> /> Please tick to confirm you have read and agree to the <a target="_blank" href="terms-and-conditions.php">terms and conditions</a>.</label>
					<label for="terms_agreement" class="error" style="display:none;">Please tick the box</label> 
                    
                    <label for="signature">To complete the application, please sign your name in CAPITAL LETTERS</label>
					<input id="signature" name="signature" value="<?php if (isset($_SESSION['signature'])){echo cleanInput($_SESSION['signature']);} ?>" type="text" class="required large" />
				</div>
				</div>
				
				
					<p class="buttons"><input type="submit" name="submit" class="grey-btn noWarn" value="Previous" onClick="document.applicationform5.action='application-form4.php';"> <input type="submit" name="submit" class="red-btn noWarn" value="Review my application" onClick="document.applicationform5.action='application-form6.php';"></p>
					
				</div>
			
			
			</div>
			</form>
		</div>
	</div>
</div>
<?php require("footer.php"); ?>
			
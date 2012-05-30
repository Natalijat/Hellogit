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
			<form action="application-form5.php" method="post" id="applicationform4" name="applicationform4">
			<div id="application">
				<div id="financial">
					<p class="flow"><img src="css/images/application/financial.png" height="47" width="616" /></p>
					<p class="erroroo" style="display:none;"></p>
					<div class="application-box">
				<div class="code">
					<p>D1.</p>
				</div>
				<div class="fields">
					<label for="d1_total_income">Organisations total income this year</label>
					<div class="smalltext"><input id="d1_total_income" value="<?php if (isset($_SESSION['d1_total_income'])) {echo cleanInput($_SESSION['d1_total_income']);} ?>" name="d1_total_income" type="text" class="required large" /><span class="tiny">Please specify currency e.g. &pound;50,000</span></div>
				</div>
				</div>
				
				<div class="application-box">
				<div class="code">
					<p>D2.</p>
				</div>
				<div class="fields">
					<label for="d2_unrestricted_reserves">Amount in unrestricted reserves at end of last financial year  and approximately how many months of operating costs does this represent</label>
					<div class="smalltext"><input id="d2_unrestricted_reserves" value="<?php if(isset($_SESSION['d2_unrestricted_reserves'])) { echo cleanInput($_SESSION['d2_unrestricted_reserves']);} ?>" name="d2_unrestricted_reserves" type="text" class="required large" /><span class="tiny">E.g. &pound;100,000 over 3 months</span></div>
				</div>
				</div>
				
				<div class="application-box">
				<div class="code">
					<p>D3.</p>
				</div>
				<div class="fields">
					<label for="d3_financial_position">What is your current financial position and any planned changes in the future</label>
					<textarea id="d3_financial_position" name="d3_financial_position" cols="" class="required large" rows=""><?php if (isset($_SESSION['d3_financial_position'])) {echo cleanInput($_SESSION['d3_financial_position']);} ?></textarea>
				</div>
				</div>
				
				<div class="application-box">
				<div class="code">
					<p>D4.</p>
				</div>
				<div class="fields">
					<label for="d4_fund_raising">How much is spent on fundraising per year</label>
					<div class="smalltext"><input id="d4_fund_raising" value="<?php if (isset($_SESSION['d4_fund_raising'])) {echo cleanInput($_SESSION['d4_fund_raising']);} ?>" name="d4_fund_raising" type="text" class="required large" /><span class="tiny">Please specify currency e.g. &pound;50,000</span></div>
				</div>
				</div>
				
				<div class="application-box">
				<div class="code">
					<p>D5.</p>
				</div>
				<div class="fields">
					<label for="d5_income_raised">How much income is raised from above activities</label>
					<div class="smalltext"><input id="d5_income_raised" name="d5_income_raised" value="<?php if (isset($_SESSION['d5_income_raised'])) {echo cleanInput($_SESSION['d5_income_raised']);} ?>" type="text" class="required large" /><span class="tiny">Please specify currency e.g. &pound;50,000</span></div>
				</div>
				</div>
				
				<div class="application-box">
				<div class="code">
					<p>D6.</p>
				</div>
				<div class="fields">
					<label for="d6_significant_donors">Please provide names of significant donors (above &pound;5,000)</label>
					<input id="d6_significant_donors" name="d6_significant_donors" value="<?php if (isset($_SESSION['d6_significant_donors'])) {echo cleanInput($_SESSION['d6_significant_donors']);} ?>" type="text" class="required large" />
				</div>
				</div>
					
								
					<p class="buttons"><input type="submit" name="submit" class="grey-btn noWarn" value="Previous" onClick="document.applicationform4.action='application-form3.php';"> <input type="submit" name="submit" class="red-btn noWarn" value="Next" onClick="document.applicationform4.action='application-form5.php';"></p>
					
				</div>
			
			
			</div>
			</form>
		</div>
	</div>
</div>
<?php require("footer.php"); ?>
			
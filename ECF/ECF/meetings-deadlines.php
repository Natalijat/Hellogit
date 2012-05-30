<?php 

$pageid = 5;

$pagetitle = "Meetings &amp; Deadlines";

require("header.php");

$result = mysql_query("SELECT * FROM dates")
or die(mysql_error());  

$row = mysql_fetch_array( $result );


 ?>

<ul id="breadcrumbs">
	<li class="front_page bc-arrow"><a href="index.php">Home</a></li>
	<li class="bc-arrow"><a href="about-us.php">About us</a></li>
	<li class="current"><a href="meetings-deadlines.php">Meeting dates &amp; application deadlines</a></li>
</ul>
<div id="main-area">
	<div id="subnav-area">
		<h2>ABOUT US</h2>
		<ul id="sub-nav">
			<li><a href="about-us.php">Overview</a></li>
			<li class="current_page_item"><a href="meetings-deadlines.php">Meeting dates &amp; application deadlines</a></li>
		</ul>
	</div>
	<div id="content-area">
		<div id="content-area-main">
			<h1>Meeting dates &amp; application deadlines</h1>
		<?php echo $row['maincontent']; ?>
		<div id="dates">
				<div id="dates-meeting">
					<h3>Next meeting date</h3>
					<div class="calendar">
						<p class="month"><?php echo $row['meeting_month']; ?></p>
						<p class="number"><?php echo $row['meeting_day']; ?></p>
					</div>
				</div>
				<div id="dates-application">
					<h3>Next application deadline</h3>
					<div class="calendar">
						<p class="month"><?php echo $row['application_month']; ?></p>
						<p class="number"><?php echo $row['application_day']; ?></p>
					</div>
				</div>
			</div>
			<div id="future-dates">
				<div id="future-dates-meeting">
					<?php echo $row['future_meetings']; ?>
				</div>
				<div id="future-dates-application">
					<?php echo $row['future_applications']; ?>
				</div>
			</div>
		</div>
		<div id="content-area-sidebar">
			<?php echo $row88['sidecontent']; ?>
		</div>
	</div>
</div>
<?php require("footer.php"); ?>
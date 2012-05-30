<?php 

$pageid = 4;

$pagetitle = "How to apply";

require("header.php"); 

$result = mysql_query("SELECT * FROM howtoapply WHERE id=1")
or die(mysql_error());  

$row = mysql_fetch_array( $result );

?>

<ul id="breadcrumbs">
	<li class="front_page bc-arrow"><a href="index.php">Home</a></li>
	<li class="current"><a href="how-to-apply.php">How to apply</a></li>
</ul>
<div id="main-area">
	<div id="subnav-area">
		<h2>HOW TO APPLY</h2>
		<ul id="sub-nav">
			<li class="current_page_item"><a href="how-to-apply.php">Overview</a></li>
			<li><a href="login.php">Application form</a></li>
		</ul>
	</div>
	<div id="content-area">
		<div id="content-area-main">
			<h1>How to apply</h1>
			<?php echo $row['topcontent']; ?>
			<div class="how-to-apply-steps">
				<div class="step1">
					<?php echo $row['step1']; ?>
				</div>
				<div class="step2">
					<?php echo $row['step2']; ?>
				</div>
				<div class="step3">
					<?php echo $row['step3']; ?>
				</div>
			</div>

<?php echo $row['smallprint']; ?>
			
		</div>
		<div id="content-area-sidebar">
			<h2><?php echo $row['maintitle']; ?></h2>
			<?php echo $row['maincontent']; ?>
			
			<ul class="pdf">

<?php

$query44 = "SELECT * FROM docs"; 
	 
$result44 = mysql_query($query44) or die(mysql_error());


while($row44 = mysql_fetch_array($result44)){

echo "<li><a class='red-arrow' href='uploads/docs/";
echo $row44['doc'];
echo "'>";
echo $row44['name'];
echo "</a></li>";

}
?>

</ul>
		</div>
	</div>
</div>
<?php require("footer.php"); ?>
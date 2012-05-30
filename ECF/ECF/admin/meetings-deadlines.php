<?php

$pageid = 8;

require("header.php"); 

if(isset($_POST['edit'])){ 
	
	$maincontent = addslashes($_POST['maincontent']);
	$meeting_day = addslashes($_POST['meeting_day']);
	$meeting_month = addslashes($_POST['meeting_month']);
	$application_day = addslashes($_POST['application_day']);
	$application_month = addslashes($_POST['application_month']);
	$future_meetings = addslashes($_POST['future_meetings']);
	$future_applications = addslashes($_POST['future_applications']);

mysql_query("UPDATE dates SET maincontent='$maincontent', meeting_day='$meeting_day', meeting_month='$meeting_month', application_day='$application_day', application_month='$application_month', future_meetings='$future_meetings', future_applications='$future_applications' WHERE id=1") 
or die(mysql_error()); 


$message = "<p class='message'>You have successfully updated the Meeting Dates &amp; Application Deadlines page.</p>";
}


$id = $_POST['id']; 
$result = mysql_query("SELECT * FROM dates WHERE id=1")
or die(mysql_error());  
$row = mysql_fetch_array( $result );

?>

<h2>Edit Meeting Dates &amp; Application Deadlines</h2>

<?php echo $message; ?>

<form enctype="multipart/form-data" action="meetings-deadlines.php" method="post">

<fieldset>
<legend>Content</legend>

<p><label for="maincontent">Content</label><br /><textarea id="maincontent" name="maincontent" class="wysiwyg xlarge"><?php echo $row['maincontent']; ?></textarea></p>

</fieldset>

<fieldset>
<legend>Next Meeting Date</legend>

<p><label for="meeting_day">Day</label><br />
<select id="meeting_day" name="meeting_day" class="normal">
  <option value="1" <?php if($row['meeting_day'] == '1') { ?>selected="selected"<?php } ?>>1</option>
  <option value="2" <?php if($row['meeting_day'] == '2') { ?>selected="selected"<?php } ?>>2</option>
  <option value="3" <?php if($row['meeting_day'] == '3') { ?>selected="selected"<?php } ?>>3</option>
  <option value="4" <?php if($row['meeting_day'] == '4') { ?>selected="selected"<?php } ?>>4</option>
  <option value="5" <?php if($row['meeting_day'] == '5') { ?>selected="selected"<?php } ?>>5</option>
  <option value="6" <?php if($row['meeting_day'] == '6') { ?>selected="selected"<?php } ?>>6</option>
  <option value="7" <?php if($row['meeting_day'] == '7') { ?>selected="selected"<?php } ?>>7</option>
  <option value="8" <?php if($row['meeting_day'] == '8') { ?>selected="selected"<?php } ?>>8</option>
  <option value="9" <?php if($row['meeting_day'] == '9') { ?>selected="selected"<?php } ?>>9</option>
  <option value="10" <?php if($row['meeting_day'] == '10') { ?>selected="selected"<?php } ?>>10</option>
  <option value="11" <?php if($row['meeting_day'] == '11') { ?>selected="selected"<?php } ?>>11</option>
  <option value="12" <?php if($row['meeting_day'] == '12') { ?>selected="selected"<?php } ?>>12</option>
  <option value="13" <?php if($row['meeting_day'] == '13') { ?>selected="selected"<?php } ?>>13</option>
  <option value="14" <?php if($row['meeting_day'] == '14') { ?>selected="selected"<?php } ?>>14</option>
  <option value="15" <?php if($row['meeting_day'] == '15') { ?>selected="selected"<?php } ?>>15</option>
  <option value="16" <?php if($row['meeting_day'] == '16') { ?>selected="selected"<?php } ?>>16</option>
  <option value="17" <?php if($row['meeting_day'] == '17') { ?>selected="selected"<?php } ?>>17</option>
  <option value="18" <?php if($row['meeting_day'] == '18') { ?>selected="selected"<?php } ?>>18</option>
  <option value="19" <?php if($row['meeting_day'] == '19') { ?>selected="selected"<?php } ?>>19</option>
  <option value="20" <?php if($row['meeting_day'] == '20') { ?>selected="selected"<?php } ?>>20</option>
  <option value="21" <?php if($row['meeting_day'] == '21') { ?>selected="selected"<?php } ?>>21</option>
  <option value="22" <?php if($row['meeting_day'] == '22') { ?>selected="selected"<?php } ?>>22</option>
  <option value="23" <?php if($row['meeting_day'] == '23') { ?>selected="selected"<?php } ?>>23</option>
  <option value="24" <?php if($row['meeting_day'] == '24') { ?>selected="selected"<?php } ?>>24</option>
  <option value="25" <?php if($row['meeting_day'] == '25') { ?>selected="selected"<?php } ?>>25</option>
  <option value="26" <?php if($row['meeting_day'] == '26') { ?>selected="selected"<?php } ?>>26</option>
  <option value="27" <?php if($row['meeting_day'] == '27') { ?>selected="selected"<?php } ?>>27</option>
  <option value="28" <?php if($row['meeting_day'] == '28') { ?>selected="selected"<?php } ?>>28</option>
  <option value="29" <?php if($row['meeting_day'] == '29') { ?>selected="selected"<?php } ?>>29</option>
  <option value="30" <?php if($row['meeting_day'] == '30') { ?>selected="selected"<?php } ?>>30</option>
  <option value="31" <?php if($row['meeting_day'] == '31') { ?>selected="selected"<?php } ?>>31</option>
</select>
</p>

<p><label for="meeting_month">Month</label><br />
<select id="meeting_month" name="meeting_month" class="normal">
  <option value="Jan" <?php if($row['meeting_month'] == 'Jan') { ?>selected="selected"<?php } ?>>Jan</option>
  <option value="Feb" <?php if($row['meeting_month'] == 'Feb') { ?>selected="selected"<?php } ?>>Feb</option>
  <option value="Mar" <?php if($row['meeting_month'] == 'Mar') { ?>selected="selected"<?php } ?>>Mar</option>
  <option value="Apr" <?php if($row['meeting_month'] == 'Apr') { ?>selected="selected"<?php } ?>>Apr</option>
  <option value="May" <?php if($row['meeting_month'] == 'May') { ?>selected="selected"<?php } ?>>May</option>
  <option value="Jun" <?php if($row['meeting_month'] == 'Jun') { ?>selected="selected"<?php } ?>>Jun</option>
  <option value="Jul" <?php if($row['meeting_month'] == 'Jul') { ?>selected="selected"<?php } ?>>Jul</option>
  <option value="Aug" <?php if($row['meeting_month'] == 'Aug') { ?>selected="selected"<?php } ?>>Aug</option>
  <option value="Sep" <?php if($row['meeting_month'] == 'Sep') { ?>selected="selected"<?php } ?>>Sep</option>
  <option value="Oct" <?php if($row['meeting_month'] == 'Oct') { ?>selected="selected"<?php } ?>>Oct</option>
  <option value="Nov" <?php if($row['meeting_month'] == 'Nov') { ?>selected="selected"<?php } ?>>Nov</option>
  <option value="Dec" <?php if($row['meeting_month'] == 'Dec') { ?>selected="selected"<?php } ?>>Dec</option>
</select>
</p>


</fieldset>

<fieldset>
<legend>Next Application Deadline</legend>

<p><label for="application_day">Day</label><br />
<select id="application_day" name="application_day" class="normal">
  <option value="1" <?php if($row['application_day'] == '1') { ?>selected="selected"<?php } ?>>1</option>
  <option value="2" <?php if($row['application_day'] == '2') { ?>selected="selected"<?php } ?>>2</option>
  <option value="3" <?php if($row['application_day'] == '3') { ?>selected="selected"<?php } ?>>3</option>
  <option value="4" <?php if($row['application_day'] == '4') { ?>selected="selected"<?php } ?>>4</option>
  <option value="5" <?php if($row['application_day'] == '5') { ?>selected="selected"<?php } ?>>5</option>
  <option value="6" <?php if($row['application_day'] == '6') { ?>selected="selected"<?php } ?>>6</option>
  <option value="7" <?php if($row['application_day'] == '7') { ?>selected="selected"<?php } ?>>7</option>
  <option value="8" <?php if($row['application_day'] == '8') { ?>selected="selected"<?php } ?>>8</option>
  <option value="9" <?php if($row['application_day'] == '9') { ?>selected="selected"<?php } ?>>9</option>
  <option value="10" <?php if($row['application_day'] == '10') { ?>selected="selected"<?php } ?>>10</option>
  <option value="11" <?php if($row['application_day'] == '11') { ?>selected="selected"<?php } ?>>11</option>
  <option value="12" <?php if($row['application_day'] == '12') { ?>selected="selected"<?php } ?>>12</option>
  <option value="13" <?php if($row['application_day'] == '13') { ?>selected="selected"<?php } ?>>13</option>
  <option value="14" <?php if($row['application_day'] == '14') { ?>selected="selected"<?php } ?>>14</option>
  <option value="15" <?php if($row['application_day'] == '15') { ?>selected="selected"<?php } ?>>15</option>
  <option value="16" <?php if($row['application_day'] == '16') { ?>selected="selected"<?php } ?>>16</option>
  <option value="17" <?php if($row['application_day'] == '17') { ?>selected="selected"<?php } ?>>17</option>
  <option value="18" <?php if($row['application_day'] == '18') { ?>selected="selected"<?php } ?>>18</option>
  <option value="19" <?php if($row['application_day'] == '19') { ?>selected="selected"<?php } ?>>19</option>
  <option value="20" <?php if($row['application_day'] == '20') { ?>selected="selected"<?php } ?>>20</option>
  <option value="21" <?php if($row['application_day'] == '21') { ?>selected="selected"<?php } ?>>21</option>
  <option value="22" <?php if($row['application_day'] == '22') { ?>selected="selected"<?php } ?>>22</option>
  <option value="23" <?php if($row['application_day'] == '23') { ?>selected="selected"<?php } ?>>23</option>
  <option value="24" <?php if($row['application_day'] == '24') { ?>selected="selected"<?php } ?>>24</option>
  <option value="25" <?php if($row['application_day'] == '25') { ?>selected="selected"<?php } ?>>25</option>
  <option value="26" <?php if($row['application_day'] == '26') { ?>selected="selected"<?php } ?>>26</option>
  <option value="27" <?php if($row['application_day'] == '27') { ?>selected="selected"<?php } ?>>27</option>
  <option value="28" <?php if($row['application_day'] == '28') { ?>selected="selected"<?php } ?>>28</option>
  <option value="29" <?php if($row['application_day'] == '29') { ?>selected="selected"<?php } ?>>29</option>
  <option value="30" <?php if($row['application_day'] == '30') { ?>selected="selected"<?php } ?>>30</option>
  <option value="31" <?php if($row['application_day'] == '31') { ?>selected="selected"<?php } ?>>31</option>
</select>
</p>

<p><label for="application_month">Month</label><br />
<select id="application_month" name="application_month" class="normal">
  <option value="Jan" <?php if($row['application_month'] == 'Jan') { ?>selected="selected"<?php } ?>>Jan</option>
  <option value="Feb" <?php if($row['application_month'] == 'Feb') { ?>selected="selected"<?php } ?>>Feb</option>
  <option value="Mar" <?php if($row['application_month'] == 'Mar') { ?>selected="selected"<?php } ?>>Mar</option>
  <option value="Apr" <?php if($row['application_month'] == 'Apr') { ?>selected="selected"<?php } ?>>Apr</option>
  <option value="May" <?php if($row['application_month'] == 'May') { ?>selected="selected"<?php } ?>>May</option>
  <option value="Jun" <?php if($row['application_month'] == 'Jun') { ?>selected="selected"<?php } ?>>Jun</option>
  <option value="Jul" <?php if($row['application_month'] == 'Jul') { ?>selected="selected"<?php } ?>>Jul</option>
  <option value="Aug" <?php if($row['application_month'] == 'Aug') { ?>selected="selected"<?php } ?>>Aug</option>
  <option value="Sep" <?php if($row['application_month'] == 'Sep') { ?>selected="selected"<?php } ?>>Sep</option>
  <option value="Oct" <?php if($row['application_month'] == 'Oct') { ?>selected="selected"<?php } ?>>Oct</option>
  <option value="Nov" <?php if($row['application_month'] == 'Nov') { ?>selected="selected"<?php } ?>>Nov</option>
  <option value="Dec" <?php if($row['application_month'] == 'Dec') { ?>selected="selected"<?php } ?>>Dec</option>
</select>
</p>


</fieldset>

<fieldset>

<legend>Future</legend>

<p><label for="future_meetings">Future meeting dates</label><br /><textarea id="future_meetings" name="future_meetings" class="wysiwyg large"><?php echo $row['future_meetings']; ?></textarea></p>

<p><label for="future_applications">Future application deadlines</label><br /><textarea id="future_applications" name="future_applications" class="wysiwyg large"><?php echo $row['future_applications']; ?></textarea></p>

</fieldset>

        
<p class="submitbox"><input name="edit" type="submit" value="Save" class="btn" /></p>
        
        </form>
        
        <?php require("footer.php"); ?>
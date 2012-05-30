<?php

$pageid = 9;

require("header.php"); 

if(isset($_POST['edit'])){ 
	
	$psa = addslashes($_POST['psa']);
	$psb = addslashes($_POST['psb']);
	$psc = addslashes($_POST['psc']);
	$psd = addslashes($_POST['psd']);
	$pse = addslashes($_POST['pse']);
	$psf = addslashes($_POST['psf']);
	$psg = addslashes($_POST['psg']);
	$psh = addslashes($_POST['psh']);
	$psi = addslashes($_POST['psi']);
	$psj = addslashes($_POST['psj']);
	$psk = addslashes($_POST['psk']);
	$psl = addslashes($_POST['psl']);
	$psm = addslashes($_POST['psm']);
	$psn = addslashes($_POST['psn']);
	$pso = addslashes($_POST['pso']);
	$psp = addslashes($_POST['psp']);
	$psq = addslashes($_POST['psq']);
	$psr = addslashes($_POST['psr']);
	$pss = addslashes($_POST['pss']);
	$pst = addslashes($_POST['pst']);
	$psu = addslashes($_POST['psu']);
	$psv = addslashes($_POST['psv']);
	$psw = addslashes($_POST['psw']);
	$psx = addslashes($_POST['psx']);
	$psy = addslashes($_POST['psy']);
	$psz = addslashes($_POST['psz']);
	$psno = addslashes($_POST['psno']);
	

mysql_query("UPDATE projects SET psa='$psa', psb='$psb', psc='$psc', psd='$psd', pse='$pse', psf='$psf', psg='$psg', psh='$psh', psi='$psi', psj='$psj', psk='$psk', psl='$psl', psm='$psm', psn='$psn', pso='$pso', psp='$psp', psq='$psq', psr='$psr', pss='$pss', pst='$pst', psu='$psu', psv='$psv', psw='$psw', psx='$psx', psy='$psy', psz='$psz', psno='$psno' WHERE id=1") 
or die(mysql_error()); 


$message = "<p class='message'>You have successfully updated the How To Apply page.</p>";
}


$id = $_POST['id']; 
$result = mysql_query("SELECT * FROM projects WHERE id=1")
or die(mysql_error());  
$row = mysql_fetch_array( $result );

?>

<h2>Edit Projects Supported</h2>

<?php echo $message; ?>

<form action="projects-supported.php" method="post">

<fieldset>
<legend>A - F</legend>

<p><label for="psa">A</label><br /><textarea id="psa" name="psa" class="wysiwyg large"><?php echo $row['psa']; ?></textarea></p>

<p><label for="psb">B</label><br /><textarea id="psb" name="psb" class="wysiwyg large"><?php echo $row['psb']; ?></textarea></p>

<p><label for="psc">C</label><br /><textarea id="psc" name="psc" class="wysiwyg large"><?php echo $row['psc']; ?></textarea></p>

<p><label for="psd">D</label><br /><textarea id="psd" name="psd" class="wysiwyg large"><?php echo $row['psd']; ?></textarea></p>

<p><label for="pse">E</label><br /><textarea id="pse" name="pse" class="wysiwyg large"><?php echo $row['pse']; ?></textarea></p>

<p><label for="psf">F</label><br /><textarea id="psf" name="psf" class="wysiwyg large"><?php echo $row['psf']; ?></textarea></p>

</fieldset>

<fieldset>
<legend>G - 0</legend>

<p><label for="psg">G</label><br /><textarea id="psg" name="psg" class="wysiwyg large"><?php echo $row['psg']; ?></textarea></p>

<p><label for="psh">H</label><br /><textarea id="psh" name="psh" class="wysiwyg large"><?php echo $row['psh']; ?></textarea></p>

<p><label for="psi">I</label><br /><textarea id="psi" name="psi" class="wysiwyg large"><?php echo $row['psi']; ?></textarea></p>

<p><label for="psj">J</label><br /><textarea id="psj" name="psj" class="wysiwyg large"><?php echo $row['psj']; ?></textarea></p>

<p><label for="psk">K</label><br /><textarea id="psk" name="psk" class="wysiwyg large"><?php echo $row['psk']; ?></textarea></p>

<p><label for="psl">L</label><br /><textarea id="psl" name="psl" class="wysiwyg large"><?php echo $row['psl']; ?></textarea></p>

<p><label for="psm">m</label><br /><textarea id="ps-m" name="psm" class="wysiwyg large"><?php echo $row['psm']; ?></textarea></p>

<p><label for="psn">N</label><br /><textarea id="psn" name="psn" class="wysiwyg large"><?php echo $row['psn']; ?></textarea></p>

<p><label for="pso">O</label><br /><textarea id="pso" name="pso" class="wysiwyg large"><?php echo $row['pso']; ?></textarea></p>

</fieldset>

<fieldset>
<legend>P - Z</legend>

<p><label for="psp">P</label><br /><textarea id="psp" name="psp" class="wysiwyg large"><?php echo $row['psp']; ?></textarea></p>

<p><label for="psq">Q</label><br /><textarea id="psq" name="psq" class="wysiwyg large"><?php echo $row['psq']; ?></textarea></p>

<p><label for="psr">R</label><br /><textarea id="psr" name="psr" class="wysiwyg large"><?php echo $row['psr']; ?></textarea></p>

<p><label for="pss">S</label><br /><textarea id="pss" name="pss" class="wysiwyg large"><?php echo $row['pss']; ?></textarea></p>

<p><label for="pst">T</label><br /><textarea id="pst" name="pst" class="wysiwyg large"><?php echo $row['pst']; ?></textarea></p>

<p><label for="psu">U</label><br /><textarea id="psu" name="psu" class="wysiwyg large"><?php echo $row['psu']; ?></textarea></p>

<p><label for="psn">V</label><br /><textarea id="psv" name="psv" class="wysiwyg large"><?php echo $row['psv']; ?></textarea></p>

<p><label for="psw">W</label><br /><textarea id="psw" name="psw" class="wysiwyg large"><?php echo $row['psw']; ?></textarea></p>

<p><label for="psx">X</label><br /><textarea id="psx" name="psx" class="wysiwyg large"><?php echo $row['psx']; ?></textarea></p>

<p><label for="psy">Y</label><br /><textarea id="psy" name="psy" class="wysiwyg large"><?php echo $row['psy']; ?></textarea></p>

<p><label for="psz">Z</label><br /><textarea id="psz" name="psz" class="wysiwyg large"><?php echo $row['psz']; ?></textarea></p>

<p><label for="psno">#</label><br /><textarea id="psno" name="psno" class="wysiwyg large"><?php echo $row['psno']; ?></textarea></p>

</fieldset>






        
<p class="submitbox"><input name="edit" type="submit" value="Save" class="btn" /></p>
        
        </form>
        
        <?php require("footer.php"); ?>
<?php
    $name = stripslashes($_POST['name']);
	$emailio = stripslashes($_POST['email']);
	$contacttype = stripslashes($_POST['contact-type']);
	$subjectio = stripslashes($_POST['subject']);
	$messageio = stripslashes($_POST['message']);

  $toemail = "contactus@evancornishfoundation.com";
  $subject = "Contact form submitted - ECF";

  $headers = "MIME-Version: 1.0\n"
            ."From: \"ECF Website\" <noreply@evancornishfoundation.com>\n"
            ."Content-type: text/html; charset=iso-8859-1\n";

  $body = "Someone has submitted the contact form on the ECF website, details are below:<br><br>\n"
  			."Name: ".$name."<br><br>\n"
            ."Email: ".$emailio."<br><br>\n"
			."Contact type: ".$contacttype."<br><br>\n"
			."Subject: ".$subjectio."<br><br>\n"
            ."Message:<br><br>\n"
            .$messageio;

    mail($toemail, $subject, $body, $headers);
    header('Location: thankyou.php');
?>
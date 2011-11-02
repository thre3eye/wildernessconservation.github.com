<div>
<?php
	require_once('wcn_captcha/recaptchalib.php');
	$privatekey = "6LdtGQoAAAAAABDBSa4E5FoelNSkPYIN8V_CoXqf";
	$resp = recaptcha_check_answer ($privatekey,
	                                $_SERVER["REMOTE_ADDR"],
	                                $_POST["recaptcha_challenge_field"],
	                                $_POST["recaptcha_response_field"]);
	
	if (!$resp->is_valid) {
	  die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
	       "(reCAPTCHA said: " . $resp->error . ")");
	} else {
		echo "Hello";
	}

	//ini_set("SMTP", "mail.wildernessconservation.net");
	//ini_set("smtp_port", "26");
	//ini_set("sendmail_from", "webform@wildernessconservation.net");
	echo "<p>Reached PHP.</p>";
//	$mail_sent = mail("mironroth@yahoo.com", "Testing", "This is a test.", "FROM: webform");
	echo "<p>Test param: ".$_GET['param']."</p>";
//	echo "GET: ".$_GET[];
	if(isset($mail_sent))
	{
		echo "<p>Mail sent</p>";
	}
	else
	{
		echo "<p>Mail not sent</p>";
	}
	if(isset($_POST['submit']))
	{
		echo "<p>";
		echo "Hi ".$_POST['name']."!<br/>";
		echo "The address ".$_POST['email']."will soon be a spam magnet!<br/>";
	//	mail("mironroth@yahoo.com", "Testing", "This is a test.");
		echo "</p>";
	}
?>
</div>
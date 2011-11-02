<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>

<?php
	//ini_set("SMTP", "mail.wildernessconservation.net");
	//ini_set("smtp_port", "26");
	//ini_set("sendmail_from", "webform@wildernessconservation.net");
	echo "Reached PHP.";
	$mail_sent = mail("mironroth@yahoo.com", "Testing", "This is a test.", "FROM: webform");
	echo "Test param: ".$_GET['param'];
	if($mail_sent)
	{
		echo "Mail sent";
	}
	else
	{
		echo "Mail not sent";
	}
	if(isset($_POST['submit']))
	{
		echo "Hi ".$_POST['name']."!<br/>";
		echo "The address ".$_POST['email']."will soon be a spam magnet!<br/>";
	//	mail("mironroth@yahoo.com", "Testing", "This is a test.");
	}
?>

</body>

</html>

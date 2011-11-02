<div class="wcn_main">
	<?php
		$page = $_GET['page'];
	/*	echo "Page: ".$page; */
		if (isset($page) && ($page !="")) {
			if($page =="debug") {
				include("wcn_debug.php");
			} elseif($page == "action") {
				include("wcn_body_action.php");
			} elseif($page == "donate") {
				include("wcn_body_donate.php");
			} elseif ($page == "contact") {
				include("wcn_body_contact_form.php"); 
			} elseif ($page == "contact-submit") {
				include("wcn_body_contact_result.php"); 
			} else {
				include("wcn_placeholder.php");
			}
		}
		else {
			echo "Invalid request."."<br/>";
		}
	?>
</div>
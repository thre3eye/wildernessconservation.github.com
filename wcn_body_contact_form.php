<div class="contact_root"> <!-- class="contact_input_submit" -->
	
	<form action="/wcn.php?page=contact-submit" method="post" class="contact_form"> <!--  class="content_contact_form" -->
		<div class="contact_form_inputs">
		<label for="message" class="contact_label_message">Message</label>
		<textarea name="message" class="contact_input_message">Hello</textarea>
		<label for="name" class="contact_label_name">Name</label>
		<input id="name" type="text" name="name" size="20" maxlength="40" value="User" class="contact_input_name" />
		<label for="email" class="contact_label_email">Email</label>
		<input id="email" type="text" name="email" size="20" maxlength="40" value="test@mail.com"  class="contact_input_email" />
		</div>
		<div class="contact_captcha"><?php
			require_once('wcn_captcha/recaptchalib.php');
			$publickey = "6LdtGQoAAAAAANQ0MbZ3_Mg1talH6sVdV2gxe728"; // you got this from the signup page
			echo recaptcha_get_html($publickey);
		?></div>
		<input type="submit" name="submit" value="Submit" class="contact_input_submit"/>
	</form>
	
</div>
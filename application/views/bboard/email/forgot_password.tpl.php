<html>
<body>
	<h1><?php echo lang('email_forgot_password_welcome');?></h1>
	<h2><?php echo sprintf(lang('email_forgot_password_heading'), $identity);?></h2>
	<p><?php echo sprintf(lang('email_forgot_password_subheading'), anchor($this->session->userdata('lang_prefix').'/reset_password/'. $forgotten_password_code, lang('email_forgot_password_link')));?></p>
</body>
</html>
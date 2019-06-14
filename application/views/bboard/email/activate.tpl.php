<html>
<body>
	<h1><?php echo lang('email_activate_welcome');?></h1>
	<h2><?php echo sprintf(lang('email_activate_heading'), $identity);?></h2>
	<p><?php echo sprintf(lang('email_activate_subheading'), anchor($this->session->userdata('lang_prefix').'/activate/'. $id .'/'. $activation, lang('email_activate_link')));?></p>
</body>
</html>
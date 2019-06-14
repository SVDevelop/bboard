<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container-fluid">
	<form id="formPasswordForgot" method="post">
		<div class="form-message  mx-auto w-50 text-center"></div>
		<div class="form-group row">
			<label for="inputForgotEmail" class="col-12 text-center col-form-label-lg text-white"><?=lang('menu_label_email');?></label>
	    	<div class="col-sm-12 col-md-6 col-lg-4 mx-auto">
	    		<input type="email" id="inputForgotEmail" class="form-control form-control-lg" aria-describedby="emailHelpBlock" placeholder="" name="identity">
	    		<small id="emailHelpBlock" class="form-text text-muted"><?=lang('forgot_password_subheading');?></small>
	    	</div>  	
		</div>
		<div class="form-group row">
            <button type="button" id="passwordForgotSubmit" class="btn btn-lg btn-primary mx-auto"><?=lang('forgot_password_submit_btn');?></button>
        </div>
	</form>
</div>
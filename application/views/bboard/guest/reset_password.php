<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container-fluid">
	<form id="formPasswordReset" method="post">
		<div class="form-message  mx-auto w-50 text-center"></div>
		<div class="form-group row">
			<label for="inputNewPassword" class="col-12 text-center col-form-label-lg text-white"><?=lang('reset_password_validation_new_password_label');?></label>
	    	<div class="col-sm-12 col-md-6 col-lg-4 mx-auto">
	    		<input type="password" id="inputNewPassword" class="form-control form-control-lg" name="new">
	    	</div>  	
		</div>
		<div class="form-group row">
			<label for="inputNewPasswordConfirm" class="col-12 text-center col-form-label-lg text-white"><?=lang('reset_password_validation_new_password_confirm_label');?></label>
	    	<div class="col-sm-12 col-md-6 col-lg-4 mx-auto">
	    		<input type="password" id="inputNewPasswordConfirm" class="form-control form-control-lg" name="new_confirm">
	    		<input type="hidden" name="user_id" id="user_id" value="<?=$user_id;?>">
	    		<input type="hidden" name="<?=key($csrf);?>" id="csrf_key" value="<?=reset($csrf);?>">
	    	</div>  	
		</div>
		<div class="form-group row">
            <button type="button" id="passwordResetSubmit" class="btn btn-lg btn-primary mx-auto"><?=lang('reset_password_submit_btn');?></button>
        </div>
	</form>
	<p></p>
</div>
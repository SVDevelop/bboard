<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container text-center">
    <div class="alert alert-<?=($status==0) ? 'danger' : 'success';?>"><?=( empty( $message ) ) ? 'empty' : $message;?></div>
</div>
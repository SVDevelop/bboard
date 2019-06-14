<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

    <div class="row">
        <div class="col-sm-6 offset-sm-3 text-center mt-sm-5 text-light">
            <div>
                <h1 class="display-4"><?=lang('guest_index_welcome');?></h1>
                <p class="lead"><?=lang('guest_index_text1');?></p>
                <hr class="my-4">
                <p>
                    <a href="#" class="login-button" data-toggle="dropdown"><?=lang('guest_index_span1');?></a>
                    <?=lang('guest_index_text2');?>
                    <a href="#" data-toggle="modal" data-target="#registrationModal">
                        <?=lang('guest_index_span2');?>
                    </a>
                </p>
            </div>
        </div>
    </div>

<script>
    // $("#login-button,#login-menu .dropdown-toggle").click(function (event) {
    //             event.preventDefault();
    //             $("#login-menu .dropdown-menu").toggle();
    //         });
</script>
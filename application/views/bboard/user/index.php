<?php
defined('BASEPATH') OR exit('No direct script access allowed');
print_r($allowed_boards_number);
?>

<div class="container">

    <div id="home">
        <div class="ui top attached tabular two item menu inverted ">
            <div class="blue item" data-tab="myboards">My boards</div>
            <div class="violet item" data-tab="favourites">Favourites</div>
        </div>
        <div class="ui attached tab blue inverted segment" data-tab="myboards">
            <?php
                if (!empty($myboards)) {
            ?>
            <div>its boards</div>
            <?php
                }else{
            ?>
                <div class="alert alert-danger w-50 text-center mx-auto"><?=lang('myboards_exist_error');?></div>
                <a role="button" onclick="callMainModal( 'board', 'add', {
                    header: '<?=lang('forms_add_board_header');?>',
                    board_name: '<?=lang('forms_board_name_field');?>',
                    board_description: '<?=lang('forms_board_description_field');?>'
                } )" class="btn btn-success text-white d-flex w-25 text-center mx-auto"><?=lang('forms_add_board_header');?></a>
            <?php
                }
                // print_r($myboards);
            ?>    
        </div>
        <div class="ui attached tab violet inverted segment" data-tab="favourites">
            <!-- <script>$(window).on("load", function() {
             console.log('fav tab loaded');
             // testTab();   
            }); </script>AJAX Tab One -->
                <div class="ui active dimmer">
                    <div class="ui text loader">To be done</div>
                  </div>
                  <br><br><br>

           
            
        </div>
    </div>
</div>



    <script>
        $(window).on("load",function(){

                          
            $('#home .menu .item').tab('change tab', '<?=$target;?>');
            let target_tab = $(".segment.active[data-tab=<?=$target;?>]");
            // $(".segment.active[data-tab=<?=$target;?>] ").addClass('loading');
            console.log('index loaded');
            console.log('test is '+$(".segment.active[data-tab=<?=$target;?>").children().length);
            if ( target_tab.children().length == 0 ) {
                target_tab.addClass('loading');
                // loadTabContent(target_tab);
            }

                // $('.tabular.menu .item').tab('change tab', 'my-boards');
                // $('.something.fav .menu .item')
                //   .tab({
                //     evaluateScripts : 'once',
                //     context         : 'parent',
                //     auto            : true,
                //     path            : 'fav'
                //   })
                  // .tab({
                  //   context : '.something',
                  //   auto    : true,
                  //   path    : '/myboards'
                  // })
                // ;
                // $('something').tab({
                //     'name':'something tab',
                //     'debug': true
                // });
                // $('.fav .menu .item')
                //   .tab({'onVisible':testTab()});

                
                
                  
                  // console.log($('.something .menu .item').tab('get path'));
                  // initAjaxTab('<?=$target;?>');
                  // initAjaxTab('get_user_data');
                  // testTab();
                  
                  
            
        });
    </script>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/components/tab.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/components/dropdown.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/components/transition.min.js"></script>
        <?php
            $scripts = array('language_handler', 'auth_handler');
            foreach ($scripts as $script) {
                echo '<script src="'.site_url("assets/js/".$script.".js").'"></script>';
            } ?>
        <script >
            const base_url = '<?=base_url();?>';
            $( document ).ready( function() {
                $("#blackBack").click(function () {
                    $("body").prop("class", "blackBack");
                });
                $("#back1").click(function () {
                    $("body").prop("class", "back1");
                });
                $("#back2").click(function () {
                    $("body").prop("class", "back2");
                });
                $(".login-button").click(function (event) {
                    event.preventDefault();
                    $("#navbarLogin .dropdown-menu").toggle();
                });            
            });


            function serializeFormJSON(data)
            {   
                let fdata=[];
                let o = {};
                let a = data.serializeArray();
                $.each(a, function () {
                    if (o[this.name]) {
                        if (!o[this.name].push) {
                            o[this.name] = [o[this.name]];
                        }
                        o[this.name].push(this.value || '');
                    } else {
                        o[this.name] = this.value || '';
                    }
                });
                return o;    
                // for (let key in o) {
                //  let value = o[key];
                    
                //   fdata += key + ":" + value+", ";
                // }
                // return fdata;
            };
        </script>
    </body>
</html>
$( document ).ready( function() {
    console.log('boards private handler loaded');

    $(".boardItems").removeClass("hidden");
    $(".boardControl").removeClass("hidden");
    $('#addTabModal').on('hidden.bs.modal', function (e) {
        $("#boardName").removeClass("is-invalid").val("");
    });
    $("body").on("click", ".editBoard", function (event) {
        event.preventDefault();
        var $this = $(this);
        var tab = $this.closest(".tab");
        if ($this.children().hasClass("cogs")) {
            tab.find(".boardName").hide();
            tab.find(".boardChangeName").removeClass("hidden");
            $this.children().removeClass("cogs").addClass("save");
        } else {
            $this.children().removeClass("save").addClass("cogs");
            tab.find(".boardName").show();
            tab.find(".boardChangeName").addClass("hidden");
        }
    });
    $("body").on("click", ".deleteBoard", function (event) {
        event.preventDefault();
        var tab = $(this).closest(".tab");
        var link = $(".tabular.menu>.item.active");
        var index = $(".tabular.menu>.item").index(link);
        if (index != 0)
            index -= 1;
        tab.remove();
        link.remove();
        $(".ui.tab").eq(index).addClass("active");
        $(".tabular.menu>.item").eq(index).addClass("active");
    });
    $("body").on("click", ".addLink", function () {
        $("#addLinkModal").modal("show");
    });
    $("#boardName").keydown(function () {
        $(this).removeClass("is-invalid");
    });
    
    // $("#column-handler").on("click", function (event) {
    //     console.log('column clicked');
    //    event.preventDefault();
    //    $(".boardItem").each(function () {
    //        let current = $(this).prop("class").includes("col-md-4")
    //            ? "col-md-4"
    //            : $(this).prop("class").includes("col-md-12")
    //                ? "col-md-12"
    //                : "col-md-4 col-lg-2";
    //        let next = "col-md-4";
    //        if (current == "col-md-4")
    //            next = "col-md-12";
    //        else if (current == "col-md-12")
    //            next = "col-md-4 col-lg-2";
    //        $(this).removeClass(current).addClass(next);
    //    });
    // });
    $("#column-handler").click(function (event) {
        console.log('column clicked');
        event.preventDefault();
        $(".boardItem").each(function () {
            var current = $(this).prop("class").includes("col-md-4")
                ? "col-md-4"
                : $(this).prop("class").includes("col-md-3")
                    ? "col-md-3"
                    : "col-md-2";
            var current2 = $(this).prop("class").includes("col-max-2")
                ? "col-max-2"
                : $(this).prop("class").includes("col-max-1-5")
                    ? "col-max-1-5"
                    : "col-max-1-2";
            var next = current == "col-md-4" ? "col-md-3" : current == "col-md-3" ? "col-md-2" : "col-md-4";
            var next2 = current2 == "col-max-2" ? "col-max-1-5" : current2 == "col-max-1-5" ? "col-max-1-2" : "col-max-2";
            $(this).removeClass(current).addClass(next).removeClass(current2).addClass(next2);
        });
    });
    $('.menu .item').tab();
    $('.ui.dropdown').dropdown({
        action: 'hide',
        onShow: function () {
            $(this).children().removeClass("down").addClass("up");
        },
        onHide: function() {
            $(this).children().removeClass("up").addClass("down");
        }
    }
    );

});

    function boardModalHandler(type, lang, id, name, link)
    {
        switch (type) {
            case 'add':
                $( '#mainModalForm' ).empty();
                $( '#mainModalLabel' ).text(lang.header);
                $( '#mainModalForm' ).append(              
                    '<div class="form-row">'+
                        '<div class="form-group col-12">'+
                          '<label for="inputName">'+lang.board_name+'</label>'+
                          '<input type="text" class="form-control" id="inputName" placeholder="'+lang.board_name+'" name="name">'+
                        '</div>'+
                        '<div class="form-group col-12">'+
                            '<label for="inputDescription">'+lang.board_description+'</label>'+
                            '<input type="text" class="form-control" id="inputDescription" placeholder="'+lang.board_description+'" name="description">'+
                        '</div>'+
                    '</div>'+
                    '<a role="button" class="btn btn-success text-white" onclick="addBoardForm(new FormData(document.forms[\'mainModalForm\']))" id="addCategoryModalFormSubmit">'+lang.header+'</a>'
                    // '<a role="button" class="btn btn-success text-white" onclick="addBoard( serializeFormJSON( $( \'#mainModalForm\' ) ) )" id="addCategoryModalFormSubmit">'+lang.header+'</a>'
                );
                $('#mainModal').modal('show');
            break;

            case 'edit':
                $( '#mainModalForm' ).empty();
                $( '#mainModalLabel' ).text('Редактировать категорию');
                $( '#mainModalForm' ).append(              
                    '<div class="form-row">'+
                        '<div class="form-group col-12">'+
                            '<label for="inputName">Имя категории(например: "Обувь", без кавычек, с большой буквы)</label>'+
                            '<input type="text" class="form-control" id="inputName" placeholder="Имя категории" name="name">'+
                        '</div>'+
                        '<div class="form-group col-12">'+
                            '<label for="inputLink">Ссылка на категорию(на английском, например: "shoes", без кавычек, с маленькой буквы)</label>'+
                            '<input type="text" class="form-control" id="inputLink" placeholder="Ссылка на категорию" name="link">'+
                            '<input type="hidden" id="inputId" name="id">'+
                        '</div>'+
                    '</div>'+
                    '<a role="button" class="btn btn-info text-white" onclick="editCategory( serializeFormJSON( $( \'#mainModalForm\' ) ) )" id="editCategoryModalFormSubmit">Редактировать</a>'
                );
                $('#mainModalForm input[name="name"]').val(name);
                $('#mainModalForm input[name="link"]').val(link);
                $('#mainModalForm input[name="id"]').val(id);
                $('#mainModal').modal('show');
            break;

            case 'delete':
                $( '#mainModalForm' ).empty();
                $( '#mainModalLabel' ).text("Удалить категорию: "+name+"?");
                $( '#mainModalForm' ).append(              
                    '<input type="hidden" id="inputId" name="id">'+
                    '<a role="button" class="btn btn-danger text-white" onclick="deleteCategory( serializeFormJSON( $( \'#mainModalForm\' ) ) )" id="deleteCategoryModalFormSubmit">Удалить Категорию</a>'
                );
                $('#mainModalForm input[name="id"]').val(id);
                $('#mainModal').modal('show');
            break;
          
            default:
                alert( 'modal call error' );
        }
    }

    function addBoardForm(data)
    {
        console.log('addBoardModalFormSubmit clicked');
        console.log(data);
            let timeout = 1000;
            $.ajax({
                url: base_url+"add_board",
                method: "POST",
                data: data,
                processData:false,
                contentType:false,
                // dataType: "html"
            })
            .done(function( result ) {
                console.log('mainModalFormSubmit posted');
                console.log(result);
                
                // if ( result.status == 1 )
                // { 
                //     $( "#sideBar" ).append(
                //         '<li class="nav__element" id="link_'+result.category_id+'">'+
                //             '<a href="'+base_path+'admin_home/?category='+data.link+'" class="nav__link">'+data.name+'</a>'+
                //             '<div>'+
                //                 '<a role="button" onclick="callMainModal( \'category\', \'edit\', '+result.category_id+', \''+data.name+'\', \''+data.link+'\' )" class="btn btn-info"><i class="fa fa-pencil text-white"></i></a>'+
                //                 ' <a role="button" onclick="callMainModal( \'category\', \'delete\', '+result.category_id+', \''+data.name+'\' )" class="btn btn-danger"><i class="fa fa-trash-alt text-white"></i></a>'+
                //             '</div>'+
                //         '</li>'                        
                //     );
                // }else{
                //     timeout = 3000;
                // }

                // let message = '<div class="alert alert-'+(result.status==1 ? "success" : "danger")+'">';
            
                // message += result.message;
                
                // message += '</div>';

                // $( "#mainModalMessage" ).append( message );

                // modalMessageHandler(timeout, result.status);
            })
            .fail(function( jqXHR, text, Status ) {
                alert(jqXHR.responseText);
            });
    }

function initTab(target) {
    console.log(target);
    
    const new_url = window.location.origin+'/personal/bboard/'+target;
    $.ajax({
        url: new_url,
        method: "POST",
        data: {data:'something'}
        // dataType: "html"
    })
    .done(function( result ) {

        console.log('init ajax  tab success');
        console.log(result);
        // 
        // $('#home .menu .item')
        // .tab({
        //     auto: true,
        //     path: new_url
        // });
        $("[data-tab="+target+"]").removeClass('loading');
        
        
    })
    .fail(function( jqXHR, text, Status ) {
        alert(jqXHR.responseText);
    }); 
    
}

function initAjaxTab(target) {
    console.log(target);
    
    const new_url = window.location.origin+'/personal/bboard/'+target;
    $.ajax({
        url: new_url,
        method: "POST",
        data: {data:'something'}
        // dataType: "html"
    })
    .done(function( result ) {

        console.log('init ajax  tab success');
        console.log(result);
        // 
        // $('#home .menu .item')
        // .tab({
        //     auto: true,
        //     path: new_url
        // });
        $("[data-tab="+target+"]").removeClass('loading');
        
        
    })
    .fail(function( jqXHR, text, Status ) {
        alert(jqXHR.responseText);
    }); 
    
}

function addBoard() {
    $(function () {
        var name = $("#boardName").val();
        var names = [];
        $(".tabular.menu>.item").each(function () {
            names.push($(this).data("tab").toString().toLowerCase());
        }); 
        if (name == "") {
            $("#boardName").addClass("is-invalid");
            $("#addTabModal .invalid-feedback").text("Введите название доски");
        } 
        else if (names.includes(name.toLowerCase())) {
            $("#boardName").addClass("is-invalid");
            $("#addTabModal .invalid-feedback").text("Доска с таким названием уже существует");
        }
        else {
            createTab(name);
            $("#addTabModal .close").click();
        }
    });
}

function createTab(name) {
    $(function () {
        $(".active").removeClass("active");
        var tab = $("<div class='ui top attached tab segment active container-fluid' data-tab='" + name + "'></div>");
        var tabHeader = $('<div class="boardHeader text-light row"></div>');
        var tabHeaderName = $('<div class="col-8"><span class="boardName">' + name + '</span><div class="boardChangeName hidden"><input class="form-control form-control-sm" type="text" placeholder="' + name + '" value="' + name + '"></div></div>');
        var tabHeaderButton = $('<div class="col-4"><div class="boardControl"><div class="ui small compact icon buttons"><button class="ui icon button addLink"><i class="plus icon"></i></button><button class="ui icon button editBoard"><i class="cogs icon"></i></button><button class="ui icon button deleteBoard"><i class="trash icon"></i></button></div></div></div>');
        tabHeader.append(tabHeaderName).append(tabHeaderButton);
        var tabContainer = $('<div class="boardItems row"></div>');
        tab.append(tabHeader).append(tabContainer);
        $(".tabular.menu").before(tab);
        var link = $('<a href="#" class="item active" data-tab="' + name + '">' + name + '</a>');
        $(".right.menu").before(link);
        $('.menu .item').tab();
    });
}

function testTab(){
    console.log('test tab success');
    $.ajax({
        url: "get_user_data",
        method: "POST",
        data: {data:['username', 'email']}
        // dataType: "html"
    })
    .done(function( result ) {

        $('#home .menu .item')
                  .tab({
                    auto: true,
                    path: 'get_user_data'
                  });
        
    })
    .fail(function( jqXHR, text, Status ) {
        alert(jqXHR.responseText);
    }); 

    $( "#logoutSubmit" ).on( "click", function() {
        console.log("logout btn clicked");
        logoutSend();
    });
    
}


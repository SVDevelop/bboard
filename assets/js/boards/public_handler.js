$( document ).ready( function() {
	console.log('boards public handler loaded');
    
    //$(".column").click(function (event) {
    //    event.preventDefault();
    //    $(".boardItem").each(function () {
    //        var current = $(this).prop("class").includes("col-md-4")
    //            ? "col-md-4"
    //            : $(this).prop("class").includes("col-md-12")
    //                ? "col-md-12"
    //                : "col-md-4 col-lg-2";
    //        var next = "col-md-4";
    //        if (current == "col-md-4")
    //            next = "col-md-12";
    //        else if (current == "col-md-12")
    //            next = "col-md-4 col-lg-2";
    //        $(this).removeClass(current).addClass(next);
    //    });
    //});
    
  

});

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


/**
 *
 * Author:  Asror Zakirov
 * Created: 1/27/2020 8:46 PM
 * https://www.linkedin.com/in/asror-zakirov-167961a9
 * https://www.facebook.com/asror.zakirov
 */


$(function () {
    $('[data-action^="click-trigger"]').click(function(e) {
        e.preventDefault();
        if ($(this).parent().hasClass("hover-trigger") && $(this).siblings().hasClass("hover-target")){
            return(0);
        }
        // check if not children of click-target then slideup
        if ( $(this).parent().parent().parent().data("action") != "click-target" && $(this).parent().parent().parent().parent().parent().data("action") != "click-target"    )  {
            $('[data-action^="click-target"]').slideUp('fast',  function(){ //calculateContentHeight();
            });
        } else{
            // check if children of click-target then slideup all the parent kids
            $(this).parent().siblings().children('[data-action^="click-trigger"]').removeClass('open');
            $(this).parent().siblings().children('[data-action^="click-target"]').slideUp('fast',  function(){//calculateContentHeight();

            });

        }
        // if this is close
        if (! $(this).hasClass('open')){


            if ($(this).parent().parent().parent().data("action") != "click-target"){
                $('[data-action^="click-trigger"]').removeClass('open');
            };
            $(this).addClass('open');
            $(this).parent().children('[data-action^="click-target"]').slideDown('fast',  function(){    if ($('.navbar-menu').outerHeight() < $('.navbar-menu .vd_menu').outerHeight() + $('.navbar-spacing ').outerHeight()){calculateContentHeight()};

            });


            // if this is open
        } else {
            $(this).removeClass('open');
            // check if children of click-target then slideup
            //if ($(this).parent().parent().parent().data("action") == "click-target"){
            $(this).parent().children('[data-action^="click-target"]').slideUp('fast',  function(){

            });
            //}
        }
        $('body').removeClass('expand-all');

    });

    // Click outside click-target
    $(document).click(function(event) {
        if (( $(event.target).closest('[data-action^="click-trigger"]').get(0) == null ) && ( $(event.target).closest('[data-action^="click-target"]').get(0) == null ) && ( $(event.target).closest('[data-action^="expand-all"]').get(0) == null)) {
            $('[data-action^="click-target"]').hide();
            $('[data-action^="click-trigger"]').removeClass('open');
            $('body').removeClass('expand-all');
            calculateContentHeight();
        }
    });
});
